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
         <h2 class="bg-primary">Live Username availability check in PHP using jQuery and Ajax</h2>
         <div class="bg-info">
          <p class="text-danger">Test unavailibility with below users</p>
          <table class="col-md-3 col-md-offset-4">
            <thead>
                <th>Username</th>
            </thead>
            <tbody>
                <tr><td>techyari</td></tr>
                <tr><td>vipin</td></tr>
            </tbody>
          </table>
         </div>

          <div class="col-md-6 col-md-offset-3 content-area">
                            <div class="block-margin-top"> 
                              <div class="row">
                                  <h4>Choose a username</h4><br/>
                                  <input type="text" name="username" class="col-md-8 " id="username" placeholder="Type here" required autofocus oninput="checkname()">
                                  <span class="col-md-4" id="checking"></span>

                              </div>    
                           </div>
            </div>

      </div>
      

    </div>
     <footer>
        &copy; <a href="http://www.techyari.in">Techyari</a> | <a href="http://www.techyari.in">Vipin Dubey</a>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>