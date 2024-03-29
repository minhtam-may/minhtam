<?php 
    include('connect.php');
    $this_id = $_GET['this_id'];
    $sql = "SELECT * from hoaqua WHERE id = ".$this_id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    if(isset($_POST['btn1'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $image = $_FILES['hinhanh']['name'];
        $image_tmp_name = $_FILES['hinhanh']['tmp_name'];
        
        $sql1 = "UPDATE hoaqua SET name = '$name', price = '$price',
        image = '$image' WHERE id=".$this_id;
        $conn->exec($sql1);
        if($conn->exec($sql1) !== false) {
            
            header('location:view_product.php');
          } else {
            $display_message = "There is some error in updating product";
          }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- validate -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.2/css/lightslider.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.2/css/lightslider.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  </head>
<body>
    <?php include('header.php')?>
    <section class="edit_container">
    <?php foreach ($result as $row) : ?>
      <form method="post" action="" class="update_product product_container_box" enctype="multipart/form-data">
        <img src="images/<?php echo $row['image'] ?>" alt="">
        <input type="hidden">
        <input type="text" name="name" class="input_fields fields" value="<?php echo $row['name']; ?>"required>
        <input type="number" name="price" class="input_fields fields" value="<?php echo $row['price']; ?>"required>
        <!-- <input type="file" class="input_fields fields" required > -->
        <!-- <span><img width="100px" height="100px" src="hoaqua.img/hoaqua/<?php echo $row['image'] ?>" alt=""></span> -->
        <input type="file" name="hinhanh" class="input_fields fields" required>
        <div class="btns">
           <input type="submit" name="btn1" class="edit_btn" value="Update Product">
           <input type="reset" id="close-edit" value="Cancel" class="cancel_btn">
        </div>
      </form>
    <?php endforeach; ?>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   $(document).ready(function() {
    $('.edit_btn').on('click', function() {
      // validate for name
      let name = $('input[name=name]').val();
      var regexname = /^[a-zA-ZÃ€ÃÃ‚ÃƒÃˆÃ‰ÃŠÃŒÃÃ’Ã“Ã”Ã•Ã™ÃšÄ‚ÄÄ¨Å¨Æ Ã Ã¡Ã¢Ã£Ã¨Ã©ÃªÃ¬Ã­Ã²Ã³Ã´ÃµÃ¹ÃºÄƒÄ‘Ä©Å©Æ¡Æ¯Ä‚áº áº¢áº¤áº¦áº¨áºªáº¬áº®áº°áº²áº´áº¶áº¸áººáº¼á»€á»€á»‚áº¾Æ°Äƒáº¡áº£áº¥áº§áº©áº«áº­áº¯áº±áº³áºµáº·áº¹áº»áº½á»á»á»ƒáº¿á»„á»†á»ˆá»Šá»Œá»Žá»á»’á»”á»–á»˜á»šá»œá»žá» á»¢á»¤á»¦á»¨á»ªá»…á»‡á»‰á»‹á»á»á»‘á»“á»•á»—á»™á»›á»á»Ÿá»¡á»£á»¥á»§á»©á»«á»¬á»®á»°á»²á»´Ãá»¶á»¸á»­á»¯á»±á»³á»µá»·á»¹\s\W|_]+$/;
      if (name == "") {
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Name cant be left empty',
                confirmButtonColor: '#84371A',
            });
            return false;
      } if(!regexname.test(name)) {
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Wrong type of name',
                confirmButtonColor: '#84371A',
            });
            return false;
      }
      // validate for price
      let phone = $('input[name=price]').val()
        var numberRegex = /^(?:-(?:[1-9](?:\d{0,2}(?:,\d{3})+|\d*))|(?:0|(?:[1-9](?:\d{0,2}(?:,\d{3})+|\d*))))(?:.\d+|)$/;;
        if(phone == ""){
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Insert a price',
                confirmButtonColor: '#84371A',
            });
            return false;
        }
        if(!numberRegex.test(phone)) {
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Price must be numbers',
                confirmButtonColor: '#84371A',
            });
            return false;
        }
    })
  })
</script>
</body>
</html>