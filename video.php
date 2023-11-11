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
<style>
  body{
    overflow-x: hidden;
  }
  .rr{
    
   
    padding: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 10px;
        
  }
</style>
</head>
<body>
  <?php
   include("./nav.php");
  ?>  <!-- Slider main container -->

  <!-- If we need pagination -->
  

  <!-- If we need navigation buttons -->
 
  <!-- If we need scrollbar -->
  

  <!-- If we need pagination -->




 <!-- <div class="container-fluid ">
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
  </div>-->
  <div class="container-fluid overflow-hidden" style="background-color:#f7f6f6;">
    <div class="row  gx-2 pt-3 mx-5" style="margin:20px; gap:15px; background-color:#f7f6f6;">
    <h1 class="pt-5">Play video </h1>
    <?php
    $q=mysqli_query($con,"SELECT * FROM `products` WHERE `cat`='video'");
    while($D=mysqli_fetch_assoc($q))
    {
       echo'<div class="col-md-4 p-4 rr"><video controls class="d1" src="'.$D['image'].'" alt""></video><h2>'.$D['name'].'</h2><h3>'.$D['des'].'</h3></div>';
      
    }
    ?>
   
    <!--<div class="col-md "><img class="d2" src="./assets/images/d2.jpg" alt""><h3 class="i">Min. 60% off on<br>Active wear </h3></div>
    <div class="col-md "><img class="d3" src="./assets/images/d3.jpg" alt""><h3 class="i">Min. 40% off on<br>Shoes </h3></div>
    <div class="col-md "><img class="d4" src="./assets/images/d4.jpg" alt""><h3 class="i" >Min. 50% off on<br>Shirts </h3></div>
    <div class="col-md "><img class="d5" src="./assets/images/d5.jpg" alt""><h3 class="i">Min. 50% off on<br>Clothing </h3></div>
    <div class="col-md "><img class="d6" src="./assets/images/d6.jpg" alt""><h3 class="i">Min. 60% off on<br>Sandles </h3></div>-->
  </div>

<?php
include "footer.php";
?>

    

   
  
  
  
 







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