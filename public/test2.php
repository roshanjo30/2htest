<?php

header('Content-Type: application/json');

$conn = mysqli_connect("localhost", "root", "root", "roshan_db");

$sql = "SELECT * FROM test";

$result = mysqli_query($conn, $sql);

$users = [];

while($row = mysqli_fetch_assoc($result)) {

    $users[] = $row;
}

echo json_encode($users);

?>
