<?php
include_once '../db/index.php';

if($_GET['action']=="get"){
    echo "string";
}

if($_GET['action']=="post"){
    $postdata = json_decode(file_get_contents("php://input"), true);
    $result = mysqli_query($conn,"SELECT * FROM doctor");
    echo json_encode(mysqli_fetch_all($result));
}


?>