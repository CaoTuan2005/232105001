<?php
include("connect.php");
$id = $_GET['id']; 
$sql = "DELETE FROM the_loai WHERE id = $id";
mysqli_query($conn, $sql);
header("Location: index.php?page_layout=theloai");
?>