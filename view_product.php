<?php 
    include('connect.php');
    $sql1 = ("SELECT * from hoaqua");
    $stmt = $conn->prepare($sql1);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View product</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include('header.php')?>
    <div class="container">
       <section class="display_product">
         <table>
            <thead>
                <th></th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Action</th>
            </thead>
            <?php foreach ($result as $row) : ?>
            <tbody>
                <td></td>
                <td><img width="50" height="50"src="images/<?php echo $row['image'] ?>" alt=""></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td>
                    <a class="delete" href="delete.php?this_id=<?php echo $row['id']; ?>" onclick="return confirm('Would you like to delete this product?')"><i class="fa-solid fa-trash"></i></a>
                    <a class="edit" href="update.php?this_id=<?php echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
            </tbody>
            <?php endforeach; ?>
         </table>
       </section>
    </div>
</body>
</html>