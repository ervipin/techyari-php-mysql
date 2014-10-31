<?php 
	require 'database-config.php';


	$id = "";
	$rating = "";
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	if (isset($_GET['rating'])) {
		$rating = $_GET['rating'];

	}
	
	

	$q = 'INSERT INTO article_rating(article_id,rating) VALUES (:id,:rating)';

	$query = $dbh->prepare($q);

	$query->execute(array(':id' => $id, ':rating' => $rating));


	if($query->rowCount() != 0){
		echo "rated successfully";
	}else{
		echo "There was an error";
	}


?>