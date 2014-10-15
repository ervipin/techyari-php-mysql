<?php 
	require 'database-config.php';

    // Variables for the first page hit
	$start = 0;
	$page_counter = 0;
    $per_page = 5;
    $next = $page_counter + 1;
    $previous = $page_counter - 1;

    // Check the page location with start value sent by get request and change variable values accordingly
	if(isset($_GET['start'])){
		$start = $_GET['start'];
		$page_counter =  $_GET['start'];
		$start = $start *  $per_page;
		$next = $page_counter + 1;
		$previous = $page_counter - 1;
	}

	
	
    // query to get messages from messages table
	$q = "SELECT id,message FROM messages LIMIT $start, $per_page";

	$query = $dbh->prepare($q);

	$query->execute();
    
    //placeholder variable to store result
	$result = null;

	if($query->rowCount() == 0){
		$result[] = "No data avaialable";
	}else{

		while($row = $query->fetch(PDO::FETCH_ASSOC)){
			    // store each row in result variable 
				$result[] = $row['id']." ".$row['message'];
		}
		
	}

    // query to get total number of rows in messages table
	$count_query = "SELECT * FROM messages";

	$query = $dbh->prepare($count_query);

	$query->execute();

	$count = $num_rows = $query->rowCount();
    
    // calculate number of paginations required based on row count 
	$paginations = ceil($count / $per_page);


?>