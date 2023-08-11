<?php
$value = $_POST['value'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost:3308", "root", "", "amazon");

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM account WHERE email = ? OR number = ? AND password = ?");
$stmt->bind_param("sss", $value, $value, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['value'] = $value;
    header("Location: Amazon.php");
    exit();
} else {
    echo "Invalid email or mobile number, or password";
}

$stmt->close();
$conn->close();
?>
