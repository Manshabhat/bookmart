<?php
include("./conn.php");
session_start();
if (isset($_SESSION['admin'])) {
    $email=$_SESSION['admin'];
   if(isset($_POST['submit']))
   {
        $d = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$email'");
        $D=mysqli_fetch_assoc($d);
        $id=$D['id'];
        $pwd = $D['password'];
        if($email==$_POST['email'])
        {
            echo'<script>alert("Already Exists");</script>';}
            else if($pwd!=$_POST['password']){
                echo'<script>alert("Wrong Password");</script>';
            
            }
            else{
                mysqli_query($con, "UPDATE `users` SET `email`='$_POST[email]' WHERE `id`='$id'");
              
                session_destroy();
                unset($_SESSION['admin']);
                header("refresh:1,login.php");
            }
            }
        }
    
            
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
            width: 300px;
            height: 410px;
            
            background:linear-gradient(to right,#20BDFF,#A5FECB);
            border-radius: 10px;
        
            
        }
        .col{
            padding: 10px;
            margin: 18px;
        }
        .i{
            font-size: 3rem;
            padding-left: 8rem;
            color: #5433FF;
        }
        .y{
            font-size: 1.5rem;
            padding-left: 1.1rem;
            padding-top: 1rem;
        
        
        }

        </style>
</head>



<body>
    <div class="main">
        <form action="" method="post" class="f">
            <div class="main-body">
                <div>
           <a href="index.php"> <i  class="fa-solid fa-arrow-left y"></i></a>
                </div>
                <div>
            <i class="fa-solid fa-user i"></i>
                </div>
                <div class="r">
                    
                    
                    <div class="col">
                        <input type="email" placeholder="enter  email" name="email" class="form-control">
                     </div>
                     
                     <div class="col">
                    <input type="password" placeholder="enter password" name="password" class="form-control">
                    </div>
                     <div class="r">
                        <div class="col">
                          <input type="submit" name="submit" value="Change" class="btn btn-primary">
                                    
                            </div>
                          </div>
                          </div>
            </div>
        </form>
    </div>
    
</body>
</html>


