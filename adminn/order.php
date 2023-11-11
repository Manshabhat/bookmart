<?php
include("./conn.php");
session_start();
if (isset($_SESSION['admin'])) {
  

if(isset($_POST['submit'])) {
  $dir = "uploads/";
  $fullpath = $dir . basename($_FILES['file1']['name']);
  move_uploaded_file($_FILES['file1']['tmp_name'],$fullpath);
    $q = "INSERT INTO `products`(`name`,`price`,`des`,`cat`,`image`) VALUES ('$_POST[name]','$_POST[price]','$_POST[des]','$_POST[cat]','$fullpath')";
    $d = mysqli_query($con,$q);
    if ($d) {
        echo '
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
<div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    
    <strong class="me-auto">Shoppykart</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Product Uploaded successfully
  </div>
</div>
</div>
    ';
    }
    else
    {
        echo '
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
            <strong class="me-auto">Shoppykart</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Error while uploading
          </div>
        </div>
        </div>
            ';
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>
    <style>
body {
  background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
    </style>
</head>
<body>
    
<?php
include('./sidenav.php');
?>
<!--Main layout-->
<main style="margin-top: 58px">
  <div class="container pt-4">
    <h3>Pending Orders</h3>
 <table class="table table-lite">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>price</th>
        <th>Address</th>
        <th>Number</th>
        <th>Status</th>
    </tr>



    <?php
     global $total;
      $Q = "SELECT `name`,`price` FROM `products` INNER JOIN `cart` ON products.id =cart.Product_id WHERE `Status`='order'";
      $req = mysqli_query($con, $Q);
      $cartinfo=mysqli_query($con,"SELECT * FROM `cart` WHERE `status`='order'");
    while($D=mysqli_fetch_assoc($cartinfo)){
     while ($res = mysqli_fetch_assoc($req)) 
     {
         $total += $res['price']*$D['Quantity'];
       echo '<tr>
              <td>' . $D["id"].'</td>
              <td>' . $D["fname"].'</td>
              <td>' . $res["name"].'</td>
              <td>' . $D["Quantity"].'</td>
              <td>' . $res["price"].'</td>
              <td>' . $D["address"].'</td>
              <td>' . $D["mobile"].'</td>
              <td>'.$D["Status"].'</td>


              <td><a class="btn btn-danger" href="updateorde.php?pid='.$D["id"].'" >Update</a></td>
              </tr>';
         break;
      }
      
     }
     
        ?>

 </table>








</div>
</main>
<main style="margin-top: 58px">
  <div class="container pt-4">
    <h3> Successful Orders</h3>
 <table class="table table-lite">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>price</th>
        <th>Address</th>
        <th>Number</th>
        <th>Status</th>
    </tr>



    <?php
     global $total;
      $Q = "SELECT `name`,`price` FROM `products` INNER JOIN `cart` ON products.id =cart.Product_id WHERE `status`='confirm'";
      $req = mysqli_query($con, $Q);
      $cartinfo=mysqli_query($con,"SELECT * FROM `cart` WHERE `status`='confirm'");
    while($D=mysqli_fetch_assoc($cartinfo)){
     while ($res = mysqli_fetch_assoc($req)) 
     {
         $total += $res['price']*$D['Quantity'];
       echo '<tr>
              <td>' . $D["id"].'</td>
              <td>' . $D["fname"].'</td>
              <td>' . $res["name"].'</td>
              <td>' . $D["Quantity"].'</td>
              <td>' . $res["price"].'</td>
              <td>' . $D["address"].'</td>
              <td>' . $D["mobile"].'</td>
              <td>'.$D["Status"].'</td>


              
              </tr>';
         break;
      }
      
     }
     
        ?>

 </table>








</div>
</main>
<!--Main layout-->
          



          </body>
          <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>


<script>
    toast.show();
</script>

</html>
<?php
}
else{
  header("location:login.php");
}
?>