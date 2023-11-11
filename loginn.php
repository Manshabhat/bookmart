<?php
include("adminn/conn.php");


session_start();

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $d=mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password' AND `Roll`='user' AND `Status`='active'");
    if(mysqli_num_rows($d)==1)
    {
        $_SESSION['user']=$email;
        header("location:index.php");
    }
    else
    echo'<script>alert("wrong email or password");</script>';
}
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
        *{ 
            padding: 0;
            margin: 0;}
        .main{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .main-body{
            width: 400px;
            
        
            
        }
        .col{
            padding: 10px;
            margin: 18px;
        }

        </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand l2" href="#"><span class="l1">BOOK</span>MART</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active i" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link i" href="#">About</a>
              </li>
              <li class="nav-item dropdown i">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Books</a></li>
                  <li><a class="dropdown-item" href="#">pdfs</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">documents</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown i">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pages 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item i">
                <a class="nav-link " href="#"  >contact</a>
              </li>
              <li>
              <i class="fa-solid fa-magnifying-glass h"></i></li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-orange mx-2 bt" type="submit" style="background-color: red;"><i class="fa-solid fa-user" style="color:white;"></i>&nbsp;&nbsp;&nbsp;Login</button> 
              <button class="btn btn-orange mx-2" type="submit" style="background-color: red;"><i class="fa-solid fa-bag-shopping" style="color:white;"></i>&nbsp;&nbsp;&nbsp;Cart</button>
            </form>
            <ul>
              <i class="fa-regular fa-moon m"></i>
              
            </ul>
          </div>
        </div>
      </nav>
      <div class="swiper-slide s3">
      <h1 style="color: white; padding-right:80rem; padding-bottom: 4rem;">Login</h1>
  
    </div>

    <div class="main">
        <form action="" method="post" class="f">
            <div class="main-body">
            <h3 style="color:black; padding-left: 4rem;"> Login to your account</h3> 
                <div class="r">
                     <div class="col" >
                     <span style="display: flex;" ><input type="email" style="background-color: lightgrey;padding:8px; border-top-right-radius:0%; border-bottom-right-radius:0%;border:none;" placeholder="Username" name="email" class="form-control"><i class="fa-solid fa-user fa-2x" style="background-color: lightgrey; padding:3px;"></i></span>
                    </div>
                    
                    <div class="col">
               <span style="display: flex;"> <input type="password" style="background-color: lightgrey;padding:8px; border-top-right-radius:0%; border-bottom-right-radius:0%;border:none;" placeholder="Password" name="password" class="form-control"><i class="fa-solid fa-lock fa-2x" style="background-color: lightgrey; padding:3px;"></i></span>
                     </div>
                     <h5 style="padding-left:2rem; font-size:1.1rem;"> Forgot Password?<span style="color:black;">Click</span> User? <a href="signupp.php" span style="color:black;">Signup here</span></a> </h5>
                     <div class="r">
                        <div class="col">
                          <input type="submit" name="submit" value="Login" class="btn btn-danger">
                                    
                            </div>

                          </div>
                          </div>
            </div>
        </form>
    </div>
<?php
    include("./footer.php");
?>
      