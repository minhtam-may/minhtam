<?php
include "connect.php";
// $this_id = $_GET['this_id'];
$sql = ("TRUNCATE cart");
$conn->exec($sql);
header('location:shop_product.php');
?>