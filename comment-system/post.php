<?php 
	 
	 require 'database-config.php';

     if(isset($_POST['postContent'])){

     	$data = $_POST['postContent'];

     	$q = "INSERT INTO posts(content) VALUES ($data)"; 

     	$query = $dbh->prepare($q);

	    $query->executeUpdate();

	    echo $data;
     }

?>