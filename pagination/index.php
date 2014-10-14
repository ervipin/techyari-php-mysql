<?php 
        require 'data.php';
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
         <h2 class="bg-primary">Pagination in PHP with MySql</h2>
      </div>
      
      <!-- Display messages from database-->
      <div class="col-md-10 col-md-offset-2 content">
                <table class="table table-striped">
                  <thead>
                   <th>Message</th>
                  </thead>
                  <tbody>
                   <?php 
                      for ($i=0; $i<count($result); $i++) { 
                          echo"<tr><td>".$result[$i]."</td><tr/>";
                      }
                   ?>
                  </tbody>
                </table>
      </div>  
        <!-- Render pagination based on messages-->
      <div class="pagination-wrap">
                <ul class="pagination">
                  <?PHP

                    if($page_counter == 0){
                        echo "<li><a href=?start='0' class='active'>0</a></li>";
                       for ($j=1; $j < $paginations; $j++) { 
                          echo "<li><a href=?start=$j>".$j."</a></li>";
                       }
                    }else{
                        echo "<li><a href=?start=$previous>Previous</a></li>"; 
                        for ($j=0; $j < $paginations; $j++) {
                         if ($j == $page_counter) {
                            echo "<li><a href=?start=$j class='active'>".$j."</a></li>";
                         }else{
                            echo "<li><a href=?start=$j>".$j."</a></li>";
                         } 
                      }if($j != $page_counter+1)
                        echo "<li><a href=?start=$next>Next</a></li>"; 
                    } 
                    
                  ?>
                </ul>
      </div>
    </div>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>