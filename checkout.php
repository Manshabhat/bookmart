<?php
include("adminn/conn.php");

  session_start();
if (isset($_SESSION['user'])) {
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
    <style>
        *{ 
            padding: 0;
            margin: 0;}
        .s{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .body{
            width: 400px;
            border-radius: 10px;
        
            
        }
        .col{
            padding: 5px;
            margin: 18px;
        }

        </style>
</head>
<body>
   <?php
   include("./nav.php");
   ?>
      <div class="s3">
    <h1 style="color: white;padding-right:60rem;padding-bottom:8rem;">Checkout</h1>
    </div>
    <div>
        <h2 style="padding-left: 4rem; padding-top: 3rem;">Checkout</h2> 

       <table class="table table-dark" >
        <tr>
            <th>ID</th>
            <th colspan="2">Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Remove</th>
        </tr>
     
     <?php
     global $total;
     $Q = "SELECT `name`,`price`,`image` FROM `products` INNER JOIN `cart` ON products.id =cart.Product_id WHERE cart.User_email='$_SESSION[user]' AND `status`='cart'";
     $req = mysqli_query($con, $Q);
     $cartinfo = mysqli_query($con, "SELECT * FROM `cart` WHERE `User_email`='$_SESSION[user]'");
    if(mysqli_num_rows($req)>0){
     while ($D = mysqli_fetch_assoc($cartinfo)) {
       $_SESSION['cart_items'] = $D;
       while ($res = mysqli_fetch_assoc($req)) {
         $total += $res['price'] * $D['Quantity'];
         echo '<tr>
              <td>' . $D["id"] . '</td>
              <td>' . $res["name"] . '</td>
              <td><img width="100" src="adminn/' . $res["image"] . '"/></td>
              <td>' . $D["Quantity"] . '</td>
              <td>' . $res["price"] . '</td>
              <td><a class="btn btn-danger" href="delete.php?pid=' . $D["id"] . '" >Delete</a></td>
              </tr>';
         break;
       }
     }
     echo "<pre>";


     if (isset($_POST['deliver'])) {

       mysqli_query($con, "UPDATE `cart` SET `fname`='$_POST[name]',`mobile`='$_POST[no]',`landmark`='$_POST[lm]',`address`='$_POST[add]',`status`='order' WHERE `User_email`='$_SESSION[user]' AND `status`='cart' ");
       echo "<script>alert('Order Successfull');</script>";

     }



     ?>
        <tr><td></td>
        <td></td>
        <td colspan="2">Total</td>
        <td colspan="2"><?php echo $total ?></td>
      </tr>
     </table>
    </div>
    <div class="s" style="padding: 2rem;">
        <form action="" method="post" >
            <div class="body">
                
                  <h2 style=" margin-left:2rem;">Add Details</h2>
                    <div class="col">
                      <input type="text" style="padding: 10px; background-color: #eeeeee;border:none" placeholder="Full Name" name="name" class="form-control">
                    </div>
                    
                    <div class="col">
                        <input type="tel"  style="padding: 10px; background-color: #eeeeee;border:none" placeholder="Mobile number" name="no" class="form-control">
                     </div>
                        
                            <div class="col">
                                <input type="text"  style="padding: 10px; background-color: #eeeeee;border:none" placeholder="Landmark" name="lm" class="form-control">
                            </div>
                             <div class="col">
                            <input type="text"  style="padding: 10px; background-color: #eeeeee;border:none" placeholder="Town/City" name="add" class="form-control">
                                           </div>
                                                
                                                    <div class="col">
                                                        <input type="submit" style="padding: .8rem;" name="deliver" value="Delivery To This Address" class="btn btn-danger">
                                    
                                                    </div>
                                            </div>
                                            </div>
        </form>
    </div>
    <?php
    }
    else{?>

<script>
  window.location="index.php";
</script>
    <?php
  }?>
    ?>


    <div class="container-fluid overflow-hidden" style="background-color:black;margin:0;padding:0;height: 45rem;">
  <div class="row">
  <?php
    include("./footer.php");
?>
   
  </div>


</body>
</html>
<?php
}
else
{
  header("location:login.php");
}
?>