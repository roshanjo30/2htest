<?php

header('Content-Type: application/json');

$conn = mysqli_connect("localhost", "root", "root", "roshan_db");

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$name = $data['name'];

$sql = "INSERT INTO test VALUES($id, '$name')";

if(mysqli_query($conn, $sql)) {

    echo json_encode([
        "success" => true
    ]);

} else {

    echo json_encode([
        "success" => false,
        "error" => mysqli_error($conn)
    ]);
}

?>
