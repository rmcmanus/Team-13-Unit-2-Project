<?php 
	header("Cache-Control: no-cache, must-revalidate");

	@ $db = new mysqli('localhost', 'root', 'csci445', 'team13');
	if (mysqli_connect_errno()) {
		echo 'Error: Could not connect to database.  Please try again later.';
 		exit;
	}

	if (isset($_POST['first'])) {
  		$first = $_POST['first'];
  		$last = $_POST['last'];
  		$email = $_POST['email'];
  		$email = $email;
  		$query = "INSERT INTO `user` (`first`, `last`, `email`) values (?, ?, ?);";
  		$stmt = $db->prepare($query);
  		$stmt->bind_param("sss", $first, $last, $email);
		$stmt->execute();
	}
?>