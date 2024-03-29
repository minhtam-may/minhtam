<?php
  include("connect.php");
  if(isset($_POST['update_product_quantity'])){
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    
    $sql=("UPDATE cart SET quantity='$update_value' WHERE id='$update_id'");
    $conn->exec($sql);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
  include("header.php");
?> 
   <div class="container">
      <section class="shopping_cart">
        <h1 class="heading">My Cart</h1>
        <table>
            <?php
            $sql1 = ("SELECT * from cart");
            $stmt = $conn->prepare($sql1);
            $stmt->execute();
        
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            $grand_total=0;
            ?>
            <thead>
                <th></th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </thead>
            <?php foreach ($result as $row) : ?>
            <tbody>
                <td></td>
                <td><?php echo $row['name']; ?></td>
                <td>
                    <img src="images/<?php echo $row['image'] ?>" alt="">
                </td>
                <td><?php echo $row['price']; ?></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" value="<?php echo $row['id'] ?>" name="update_quantity_id">
                            <div class="quantity_box">
                                <input type="number" min="1" value="<?php echo $row['quantity']; ?>" name="update_quantity">
                                <input type="submit" class="update_quantity" value="Update" name="update_product_quantity">
                            </div> 
                    </form>
                </td>
                <td><?php echo $subtotal = number_format($row['price'] * $row['quantity']); ?></td>
                <td>
                    <a class="" href="delete_cart.php?this_id=<?php echo $row['id']; ?>" onclick="return confirm('Would you like to delete this product from cart?')">
                    <i class="fa-solid fa-trash"></i>Remove
                    </a>
                </td>
            </tbody>
            <?php
            $grand_total += $row['price'] * $row['quantity'];  
            ?>
            <?php endforeach  ?>
        </table>
       
      </section>
      <div class="table_bottom">
            <a href="shop_product.php" class="bottom_btn">Continue Shopping</a>
            
            <h3 class="bottom_btn">Total: <span><?php echo $grand_total  ?></span></h3>
            
            <a href="checkout.php" class="bottom_btn">Checkout</a>
        </div>

        <a href="delete_all.php" class="delete_all_btn" onclick="return confirm('Would you like to delete all products from cart?')">
        
            <i class="fas fa-trash"></i>Delete All
        </a>
    </div>
</body>
</html>