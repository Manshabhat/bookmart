<?php
include("adminn/conn.php");
session_start();
if (isset($_SESSION['user'])) {



  if (isset($_POST['submit'])) {
    $a = "INSERT INTO `cart`(`Product_id`,`User_email`,`Quantity`,`status`) VALUES('$_POST[pid]','$_POST[uemail]','$_POST[qty]','cart')";
    $d = mysqli_query($con, $a);

  } else {
    $q = "SELECT * FROM `cart` WHERE `User_email`='$_SESSION[user]'";
    $d = mysqli_query($con, $q);
    $data = mysqli_fetch_assoc($d);
    if (mysqli_num_rows($d) == 0) {
      echo "<script>alert('Cart Empty');</script>";
      header("refresh:1,index.php");
    }
  }
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <title>Document</title>

<body>
    <?php
    include("./nav.php");
    ?>
      <div class="s3">

    </div>
    <div>
        <h2 style="padding-left: 4rem; padding-top: 3rem;">Checkout</h2> 
  
        <a  style="margin-left: 60rem;margin-bottom:2rem; "class="btn btn-danger" href="delete.php?empty_cart='true'" >Clear</a>
        <table class="table table-dark" >
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Remove</th>
        </tr>
     
     <?php
     global $total;
     $Q = "SELECT `name`,`price` FROM `products` INNER JOIN `cart` ON products.id =cart.Product_id WHERE cart.User_email='$_SESSION[user]' AND `status`='cart'";
     $req = mysqli_query($con, $Q);
     $cartinfo = mysqli_query($con, "SELECT * FROM `cart` WHERE `User_email`='$_SESSION[user]' AND `status`='cart'");
    if(mysqli_num_rows($req)>0){
     while ($D = mysqli_fetch_assoc($cartinfo)) {
       while ($res = mysqli_fetch_assoc($req)) {
         $total += $res['price'] * $D['Quantity'];
         echo '<tr>
              <td>' . $D["id"] . '</td>
              <td>' . $res["name"] . '</td>
              <td>' . $D["Quantity"] . '</td>
              <td>' . $res["price"] . '</td>
              <td><a class="btn btn-danger" href="delete.php?pid=' . $D["id"] . '" >Delete</a></td>
              </tr>';
         break;
       }

     }

     ?>
        
        <tr><td></td>
        <td></td>
        <td>Total</td>
        <td><?php echo $total ?></td>
        <td><a href="checkout.php" button class="btn btn-primary">Checkout</button></a></td>
        
        

        

      
      </tr>

        
      
        </table>
    </div><?php
    }
    else{
      echo'<h1 class="text-center">Cart is Empty</h1><br>';
    }
    ?>
    <?php
    include("./footer.php");
?>
   
  </div>
  
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


    <script>
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      autoplay: true,
    
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    
      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
    </script>

</body>
</html>
<?php
}
else{
  header("location: login.php");
}
?>