<?php
$conn = mysqli_connect("localhost", "root", "", "loginsystem");
$email = $_POST["Email"];
$username = $_POST["Username"];
$password = $_POST["Password"];
//$query = "INSERT INTO users (Username, Email, Password) VALUES ('$username', '$email', '$password')";
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "Welcome to the website " .$username;
};
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
print_r($data[2]["Email"]);
?>