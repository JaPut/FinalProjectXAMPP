<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'finalproject');

	
	$verified = "";
	$service = "";
	$cost = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$service = $_POST['service'];
		$cost = $_POST['cost'];
		$verified = $_POST['verified'];

		mysqli_query($db, "INSERT INTO london (service, cost, verified) VALUES ('$service', '$cost', '$verified')");
		$_SESSION['message'] = "New entru saved"; 
		header('location: index.php');
	}
	
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$service = $_POST['service'];
		$cost = $_POST['cost'];
	
		mysqli_query($db, "UPDATE london SET service='$service', cost='$cost' WHERE id=$id");
		$_SESSION['message'] = "Record updated!"; 
		header('location: index.php');
	}

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM london WHERE id=$id");
		$_SESSION['message'] = "Record deleted!"; 
		header('location: index.php');
	}
    ?>