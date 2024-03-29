<?php
include "connect.php";
$this_id = $_GET['this_id'];
$sql = ("DELETE FROM cart WHERE id='$this_id' ");
$conn->exec($sql);
header('location:cart.php');
?>