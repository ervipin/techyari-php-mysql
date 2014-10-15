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
         <h2 class="bg-primary">Comment System with PHP, MySql, jQuery & Ajax</h2>
      </div>
      
      <!-- Display messages from database-->
      <div class="col-md-8 col-md-offset-2 content">
               <div class="post-box">
                  <textarea class="post-input" name="post" placeholder="What is in your mind" required autofocus></textarea><br/>
                  <button class="info post-button">Post</button>
              </div><br/>

              <div class="post post-id">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a class="comment-button">Add New Comment</a>
                <div class="comment-box-wrapper">
                    <input type="text" class="user-name" name="user-name" placeholder ="Your Name" required autofocus/>
                    <textarea class="comment-input" name="post" placeholder="Type your comments here" required autofocus></textarea><br/>
                    <button class="info comment-post-button">Post Comment</button> 
               </div>
                <div class="post-comments">
                  <p class="comment comment-id"><span class="user-name">Vipin Dubey :</span>Cool you rock man  <button type="button" class="close delete-comment" id="comment-id" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></p>
                </div>
              </div>

               <div class="post post-id">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a class="comment-button">Add New Comment</a>
                <div class="comment-box-wrapper">
                    <input type="text" class="user-name" name="user-name" placeholder ="Your Name" required autofocus/>
                    <textarea class="comment-input" name="post" placeholder="Type your comments here" required autofocus></textarea><br/>
                    <button class="info comment-post-button">Post Comment</button> 
               </div>
                <div class="post-comments">
                  <p class="comment comment-id"><span class="user-name">Vipin Dubey :</span>Cool you rock man  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></p>
                </div>
              </div>

               <div class="post post-id">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a class="comment-button">Add New Comment</a>
                <div class="comment-box-wrapper">
                    <input type="text" class="user-name" name="user-name" placeholder ="Your Name" required autofocus/>
                    <textarea class="comment-input" name="post" placeholder="Type your comments here" required autofocus></textarea><br/>
                    <button class="info comment-post-button">Post Comment</button> 
               </div>
                <div class="post-comments">
                  <p class="comment comment-id"><span class="user-name">Vipin Dubey :</span>Cool you rock man  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></p>
                </div>
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