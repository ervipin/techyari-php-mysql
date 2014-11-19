<?php 
  require 'database-config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>  
            <div class="title"> <h2>CRUD example in PHP with MySql database</h2></div>
                              <?php 
                                
                                $action= "";
                                $id="";
                                
                                if(isset($_GET['action']) && isset($_GET['id'])){
                                    
                                    $action = $_GET['action'];

                                    $id = $_GET['id'];
                                }
 
                                $errors = array(
                                    1=>"Please provide values for all the fields",
                                    2=>"Please login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                                
                                  if($action=="edit" && $id!=""){ 

                                    $q = 'SELECT * FROM demo_quotes WHERE id = :id';

                                    $query = $dbh->prepare($q);

                                    $query->execute(array(':id' => $id));

                                    $row = $query->fetch(PDO::FETCH_ASSOC);
        
                              ?>

                                  <div class="article-form">
                                      <form action="crud.php" method="POST">  
                                        <textarea name="text" maxlength="300"><?php echo $row['text'];?></textarea>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        <input type="hidden" name="action" value="update" /><br/>
                                        <input type="submit" value="Update"/>
                                      </form>
                                  </div>

                                  <?php }else{ ?>

                                  <div class="article-form">
                                  <form action="crud.php" method="POST">  
                                    <textarea name="text" maxlength="300" placeholder="Input text here" required autofocus></textarea><br/>
                                    <input type="submit" value="publish"/>
                                  </form>
                                  </div>
                                  <br/>
                                  <br/>
                                  <div class="articles">
                                        <table>
                                            <thead>
                                                <th colspan="3">All Quotes</th>
                                            </thead>
                                            <tbody>

                                            <?php 

                                                  $q1 = 'SELECT * FROM demo_quotes';

                                                  $query1 = $dbh->prepare($q1);

                                                  $query1->execute();

                                                  if($query1->rowCount() == 0){
                                                       echo "<tr><td colspan='3'>No data available</td></tr>";
                                                  }else{
                                                   while($row1 = $query1->fetch(PDO::FETCH_ASSOC)){
                                                         
                                                        echo'<tr><td>' . $row1['text'] . '</td><td><a href="index.php?action=edit&id='.$row1['id']. '" class="edit">Edit</a></td><td><a href="crud.php?action=delete&id=' .$row1['id']. '" class="delete">Delete</a></td></tr>';
                                                    }
                                                  }
                                                ?>
                                         
                                             </tbody>
                                      </table>
                                  </div>

                                  <?php } ?>
                              


  </body>
</html>