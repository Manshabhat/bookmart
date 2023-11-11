<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creator Login</title>
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
            
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 10px;
        
            
        }
        .col{
            padding: 10px;
            margin: 18px;
        }

        </style>
</head>
<?php
session_start();
include("conn.php");
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $d=mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
    if(mysqli_num_rows($d)==1)
    {
        $_SESSION['creator']=$email;
        header("location:index.php");
    }
    else
    echo'<script>alert("wrong email or password");</script>';
}
?>








<body>
    <div class="main">
        <form action="" method="post" class="f">
            <div class="main-body">
                <div class="r"><br>
                    <h2 style="text-align: center; ">CREATOR LOGIN</h2>
                    <div class="col">
                        Email:<input type="email" placeholder="enter your email" name="email" class="form-control">
                    </div>
                    
                    <div class="col">
                        Password:<input type="text" placeholder="enter your password" name="password" class="form-control">
                     </div>
                     <div class="r">
                        <div class="col">
                          <input type="submit" name="submit" value="Login" class="btn btn-primary">
                                    
                            </div><br>
                          </div>
                          </div>
            </div>
        </form>
    </div>
    
</body>
</html>