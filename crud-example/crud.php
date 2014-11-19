<?php 
	require 'database-config.php';

    $action = "";

	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}

	if(isset($_POST['action'])){
		$action = $_POST['action'];
	}

    if($action == "update"){
    	$id = "";
        $text = "";
    	if(isset($_POST['id'])){
			$id = $_POST['id'];
		}

		if(isset($_POST['text'])){
			$text = $_POST['text'];
		}

		if($text!="" && $id!=""){

			$q = 'UPDATE demo_quotes SET text=:text WHERE id=:id';

			$query = $dbh->prepare($q);

			$query->execute(array(':text' => $text, ':id' => $id));

			header('Location: index.php');

		}else{

			header('Location: index.php?err=1');
		}

		

    }elseif($action == "delete"){
    	$id = "";
    	if(isset($_GET['id'])){
			$id = $_GET['id'];
		}

		if($id!=""){

			$q = 'DELETE from demo_quotes WHERE id=:id';

			$query = $dbh->prepare($q);

			$query->execute(array(':id' => $id));

			header('Location: index.php');
		}else{

			header('Location: index.php?err=1');
		}
    }else{

        $text = "";

		if(isset($_POST['text'])){
			$text = $_POST['text'];
		}

		if($text!=""){

			$q = 'INSERT INTO demo_quotes(text) VALUES (:text)';

			$query = $dbh->prepare($q);

			$query->execute(array(':text' => $text));

			header('Location: index.php');
		}else{

			header('Location: index.php?err=1');
		}

    }


?>