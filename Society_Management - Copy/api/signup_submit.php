<?php
require("../include/database_connection.php");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);
$flat_no = $_POST['flat_no'];


$sql = "SELECT * FROM users WHERE email='$email' ";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Something went wrong!";
    exit;
}   

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
    echo "This email id is already registered with us!";
    exit;
}

$sql = "INSERT INTO users (email, password, username, flat_no) VALUES ('$email', '$password', '$username', '$flat_no')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Something went wrong!";
    exit;
}

echo "Your account has been created successfully!";
?>

Click <a href="../index.php">here</a> to continue.
<?php
mysqli_close($conn);
?>