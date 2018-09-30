<?php
$username = "root";
$password = "valleyforge";
$dbname = "ajax_test";
$hostname = "localhost";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);