<?php
    include('connect.php');
    $sql1 = ("SELECT * from hoaqua");
    $stmt = $conn->prepare($sql1);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    if(isset($_POST['add_to_cart'])){
        $products_name = $_POST['product_name'];
        $products_price = $_POST['product_price'];
        $products_image = $_POST['product_image'];
        $product_quantity = 1;
        
        $select_cart = "SELECT * FROM cart WHERE name=:products_name";
        $stmt = $conn->prepare($select_cart);
        $stmt->execute(array(':products_name' => $products_name));
        $rowCount = $stmt->rowCount();
        
        if($rowCount>0){
            $display_message = "Product already added to cart";
        }else{
            $sql = ("INSERT INTO cart (name, price, image, quantity) VALUES ('$products_name', '$products_price', '$products_image', $product_quantity)");
            $conn->exec($sql);
            $display_message = "Product added to cart";
        }
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <?php include('header.php')?>
   <div class="container">
      <?php
        if(isset($display_message)){
            echo "<div class='display_message'>
            <span>$display_message</span>
            <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
            </div>";
        }
      ?>
      <section class="products">
          <h1 class="heading">Whats your favorite?</h1>
          
            <div class="product_container">
            <?php foreach ($result as $row) : ?>
            <form method="post" action="">
                <div class="edit_form">
                    <img width="50px" height="100px" src="images/<?php echo $row['image'] ?>" alt="">
                    <h3><?php echo $row['name']; ?></h3>
                    <div class="price">
                        Price/kg: VND <?php echo $row['price']; ?>
                    </div>
                    <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $row['image'] ?>">
                    <input type="submit" class="submit_btn cart_btn" value="Add to cart" name="add_to_cart">
                </div>
            </form>
            <?php endforeach; ?>
          </div>
      </section>
   </div>
</body>
</html>