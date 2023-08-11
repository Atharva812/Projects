<?php
	$name = $_POST['name'];
	$number = $_POST['number'];
    $email = $_POST['email'];
	$password = $_POST['password'];
	

	// Database connection
	$conn = mysqli_connect("localhost:3308" , "root" , "", "amazon");
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into account(name, number , email, password) values(?, ?, ?, ?)");
		$stmt->bind_param("siss", $name, $number , $email, $password);
		$execval = $stmt->execute();
		echo $execval;	
        header("Location: Amazon.php");
		$stmt->close();
		$conn->close();
	}
?>

