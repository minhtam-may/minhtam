<?php
include "connect.php";
$this_id = $_GET['this_id'];
$sql = ("DELETE FROM hoaqua WHERE id='$this_id' ");
$conn->exec($sql);
header('location:view_product.php');
?>