<?php

include 'database.php';

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = "UPDATE `list` SET `completed` = '1' WHERE `id` = $id ";
	if (mysqli_query($conn , $sql)) {
		header("Location: index.php?complet-success"); 
	}
	else{
		echo "Error";
	}

}

?>