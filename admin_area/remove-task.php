<?php 

include 'db.php';

$id = $_POST['id'];


$conn=new mysqli("localhost","root","","myshop");


$sql = "DELETE FROM tasks WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}

?>