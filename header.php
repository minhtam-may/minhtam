<!-- header -->
<style>
</style>
<header class="header">
<div class="header_body">
    <a href="index.php" class="logo">Home</a>
    <nav class="navbar" id="myTopnav">
      <div class="drop-down">
        <a href="index.php">Add Products</a>
        <a href="view_product.php">View Products</a>
        <a href="shop_product.php">Cart</a>
      </div>
      <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a> -->
    </nav>
    
    <!-- count product in cart -->
    <?php
     
     $select_product=("SELECT * FROM cart");
     $stmt = $conn->prepare($select_product);
     $stmt->execute();
     $rowCount = $stmt->rowCount();
      
    ?>
    
    <!-- cart icon -->
    <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i><span><sup><?php echo $rowCount; ?></sup></span></a>
    <!-- <div id="menu_btn" class="fas fa-bars">
      
    </div> -->
</div>
<script>
// function myFunction() {
//   var x = document.getElementById("myTopnav");
//   if (x.className === "navbar") {
//     x.className += " responsive";
//   } else {
//     x.className = "topnav";
//   }
// }
</script>
</header>