<?php 

include 'db.php';

$task = $_POST['task'];

$conn=new mysqli("localhost","root","","myshop");


$sql = "INSERT INTO tasks (title) VALUES ('$task')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}

?>