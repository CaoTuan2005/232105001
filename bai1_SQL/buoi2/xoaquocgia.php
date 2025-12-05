<?php
include("connect.php");
$id = $_GET['id']; 
$sql = "DELETE FROM quoc_gia WHERE id = $id";
mysqli_query($conn, $sql);
header("Location: index.php?page_layout=quocgia");
?>