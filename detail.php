<?php
include("adminn/conn.php");
session_start();
if (isset($_SESSION['user'])) {
  if (isset($_GET['pid'])) {

    $p = mysqli_query($con, "SELECT * FROM `products` WHERE `id`='$_GET[pid]'");
    $D = mysqli_fetch_assoc($p);
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
.a{
    height: 28rem;
    width: 20rem;
    position: relative;
    left: 35px;
    top: 50px;

}
.p{
    font-size: large;
    font: bold;
}
.z{
    display: flex;
}

.minus, .plus {
    display: inline-block;
    width: 20px;
    height: 20px;
    background-color: #EA6A9E;
    color: #fff;
    text-align: center;
    cursor: pointer;
}
.num {
    padding: 0 10px;
}
#h{
  zoom: 2;
}

</style>
</head>
<body>
<?php
   include("./nav.php");
  ?> 

<div class="s3">
    <h1 style="color: white;padding-right:60rem;padding-bottom:8rem;">Detail</h1>
    </div>
    <div class="container-fluid">
  <div class="row " style="height: 45rem; ">
    <div class="col-md-5 pt-5 px-5">
    <img src="adminn/<?php echo $D['image']; ?>" class="a" >
  


  <form action="cart.php" method="post">
    <input type="hidden" name="pid" value="<?php echo $_GET['pid']; ?>" readonly id=""><br>
    <input type="hidden" name="uemail" value="<?php echo $_SESSION['user']; ?>" readonly id=""><br>
    <input type="hidden" name="qty" id="qty1"  readonly id=""><br>


   
   
    
    
 
    </div>
    <div class="col-md pt-5 px-5">
    <h2><?php echo $D['name']; ?></h2>
    <span class="p"><p style="color: red;"><?php echo 'Rs' . $D['price']; ?></p>&nbsp&nbsp;</span>
    <p style="font-size: 1.2rem">
    <strong>Special Price</strong> <span style="color: gray;">Get extra 5% off (price inclusive of discount)</span><br>
     <strong>Bank Offer</strong> <span style="color: gray;"> 5% Unlimited Cashback on Flipkart Axis Bank Credit Card</span><br>
     <strong>Bank Offer </strong> <span style="color: gray;"> % Cashback* on HDFC Bank Debit Cards</span><br>
     <strong>Bank Offer</strong><span style="color: gray;"> Extra 5% off* with Axis Bank Buzz Credit Card</span>

    </p>
    <h3>Description:</h3>
    <p style="color: gray; font-size:large "><?php echo $D['des']; ?></p>
    
    <div id="h">
  <span class="minus">-</span>
  <span class="num" id="qty"></span>
  <span class="plus">+</span><br>
  <input onclick="qtty()" type="submit" style="height: 2rem; width: 5rem; font-size:10px;background-color: black; border: none;color: white; border-radius: 3px; margin-left: 32px;margin-top:105px;" name="submit" value="Add to Cart">
  </form> 

</div>
      
      
    </div>
  </div>
</div>
<?php
    include("./footer.php");
?>
   
  </div>
  
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


    <script>
      function qtty(){
      document.getElementById('qty1').value=document.getElementById("qty").textContent;;
      }
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


    const plus = document.querySelector(".plus"),
    minus = document.querySelector(".minus"),
    num = document.querySelector(".num");

window.addEventListener("load", ()=> {
    if (localStorage["num"]) {
        num.innerText = localStorage.getItem("num");
    } else {
        let a = "1";
        num.innerText = a;
    }
});

plus.addEventListener("click", ()=> {
    a = num.innerText;
    a++;
    a = (a < 10) ? "0" + a : a;
    localStorage.setItem("num", a);
    num.innerText = localStorage.getItem("num");
});

minus.addEventListener("click", ()=> {
    a = num.innerText;
    if (a > 1) {
        a--;
        a = (a < 10) ? "0" + a : a;
        localStorage.setItem("num", a);
        num.innerText = localStorage.getItem("num");
    }
});
    </script>

</body>
</html>
<?php
  } else {
    header("location:shop.php");
  }


?>
<?php
}
else
{
  header("location:login.php");
}
?>