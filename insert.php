<?php

include 'database.php';

	if (isset($_POST["task"])) {
	    $task = $_POST["task"];
	    $date = date("y-m-d h:m:sa");

	    $sql = "INSERT INTO `list` (`id`, `task`, `date`, `completed`) VALUES (NULL, '$task', '$date', '0')";

	    if (mysqli_query($conn, $sql)) {
		  echo '
		  	<div style="background-color: #39B81C; width: 20%; margin:0 auto; border-radius: 8px">
		  		<p style="text-align: center; padding: 25px 30px; color: #fff; font-size: 18px">data inserted successfully.</p>
		  	</div>
		  	';
		  header('Refresh: 2; URL=index.php');
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	} else {    
	    echo "<script>alert('sorry! you can not access this page...')</script>";
	}
?>