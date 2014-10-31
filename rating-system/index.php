<?PHP 
    
      require 'database-config.php';
      // Get all the articles from the database
      $q = 'SELECT * FROM article';
      $query = $dbh->prepare($q);
      $query->execute();


    // Iterate for each article returned via query  
    $articles = array(); 
    
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
         //echo $row['id']." : ".$row['text'];
         $data = "";
         $id = $row['id'];
         $text = $row['text'];
         $average = 0;
         
         // Get total count of rating for an article
         $q1 = 'SELECT count(*) FROM article_rating where article_id=:id';
         $query1 = $dbh->prepare($q1);
         $query1->execute(array(':id' => $id));
         $row1 = $query1->fetch(PDO::FETCH_ASSOC);
         $count = $row1['count(*)'];
         
         if($count > 0){
             // Get all ratings for an article
             $q2 = 'SELECT rating FROM article_rating where article_id=:id';
             $query2 = $dbh->prepare($q2);
             $query2->execute(array(':id' => $id));
             
             // Sum up the ratings 
             $rating = 0; 
             while($row2 = $query2->fetch(PDO::FETCH_ASSOC)){
               $rating = $rating + $row2['rating'];
             } 
             
             //Calculate average rating by deviding the sum by total ratings and rounding the result. 
             $average = ceil($rating/$count);
         }else{

             $average = 0;
         }
         
         $data = array($id,$text,$average);
         //Store each article and related rating in articles array
         $articles[] = $data;
    }
    
    //echo sizeof($articles);
    //print_r($articles);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="info">
         <h2 class="bg-primary">Rating System in PHP with jQuery and Ajax</h2>
       
          <div class="col-md-12">
                     <?php for($i = 0; $i<sizeof($articles);$i++){ ?>

                      <div class="article row">
                        <div class="id col-md-2"><?php echo $articles[$i][0] ?></div>
                        <div class="text col-md-7"><?php echo $articles[$i][1] ?></div>
                        <div class="rating col-md-3 <?php echo $articles[$i][2] ?>"><?php echo $articles[$i][2] ?></div>
                      </div>

                     <?php } ?> 
            </div>

      </div>
      
     
    </div>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <script src="js/main.js"></script>
  </body>
</html>