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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

</head>
<body>
  <?php
   include("./nav.php");
  ?>  <!-- Slider main container -->
      <div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide s1">
    </div>
    <div class="swiper-slide s2">
     
    </div>
    <div class="swiper-slide s3">
     
    </div>
    <div class="swiper-slide s4">
     
    </div>
   
  </div>
  <!-- If we need pagination -->
  

  <!-- If we need navigation buttons -->
  <div style="color:white;background-color:#f5f5f570;width:50px; border-radius:5px;height: 50px;" class="swiper-button-prev"></div>
  <div style="color:white;background-color:#f5f5f570;width:50px; border-radius:5px;height: 50px;" class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  
</div>
  <!-- If we need pagination -->


<div class="card">
  <div class="card-body">
  <h2 class="tr">Free Shipping For You Till Midnight <i class="fa-solid fa-truck-fast"></i></h2>
</div>
</div>


  <div class="container-fluid ">
    <div class="row gx-2 pt-5 mx-5" style="margin:20px; gap:17px;">
      <div class="col-md ban-5 pt-5 px-5">
     <h1 class="pt-3">Book Mrat</h1><br>
     <button class="btn o2">Shop now &nbsp; &nbsp;<i class="fa fa-arrow-right"></i></button>
    </div>
  <div class="col-md ban-6 pt-5 px-5">
   <h1 class="pt-3">Premium Content</h1><br>
   <button class="btn o3"> Shop now &nbsp; &nbsp;<i class="fa fa-arrow-right"></i> </button>

  </div>
  </div>
  </div>
  <div class="container-fluid overflow-hidden" style="background-color:#f7f6f6;">
    <div class="row  gx-2 pt-3 mx-5" style="margin:20px; gap:15px; background-color:#f7f6f6;">
    <h1 class="pt-5">Shop With Us</h1>
    <?php
    $q=mysqli_query($con,"SELECT * FROM `products`WHERE `cat`='books'");
    while($D=mysqli_fetch_assoc($q))
    {
       echo'<div class="col-md "><a href="detail.php?pid='.$D['id'].'"><img class="d1" src="adminn/'.$D['image'].'" alt""><h3>'.$D['name'].'<br>'.$D['des'].'<br>'.$D['price'].'</h3></a></div>';
      
    }
    ?>
   
    <!--<div class="col-md "><img class="d2" src="./assets/images/d2.jpg" alt""><h3 class="i">Min. 60% off on<br>Active wear </h3></div>
    <div class="col-md "><img class="d3" src="./assets/images/d3.jpg" alt""><h3 class="i">Min. 40% off on<br>Shoes </h3></div>
    <div class="col-md "><img class="d4" src="./assets/images/d4.jpg" alt""><h3 class="i" >Min. 50% off on<br>Shirts </h3></div>
    <div class="col-md "><img class="d5" src="./assets/images/d5.jpg" alt""><h3 class="i">Min. 50% off on<br>Clothing </h3></div>
    <div class="col-md "><img class="d6" src="./assets/images/d6.jpg" alt""><h3 class="i">Min. 60% off on<br>Sandles </h3></div>-->
  </div>


  <?php
    include("./footer.php");
?>
   
</div>

    

   
  
  
  
 







      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>


  const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay:true,

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
  header("location: loginn.php");
}
?>