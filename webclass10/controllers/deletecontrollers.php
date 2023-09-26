<?php 

$postId = $_GET['id'];
include './../contact.php';
$query ="DELETE FROM datas WHERE id = $postId ";
$result= mysqli_query($conn ,$query);
header('Location: ./../list.php'); 
?>