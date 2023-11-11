<?php
include("./conn.php");
session_start();
if (isset($_SESSION['creator'])) {
    $email=$_SESSION['creator'];
   if(isset($_POST['submit']))
   {
        $d = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$email'");
        $D=mysqli_fetch_assoc($d);
        if($D['password']==$_POST['p1'])
        {
            if($_POST['p2']==$_POST['p3'])
            {
                mysqli_query($con, "UPDATE `users` SET `password`='$_POST[p2]' WHERE `email`='$email'");
              
                session_destroy();
                unset($_SESSION['admin']);
                header("refresh:1,login.php");
            }
            else
            {
                echo'<script>alert("Enter same password on both fields");</script>';
            }
        }
        else
        {
            echo'<script>alert("Old passeord is incorrect");</script>';
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
                    <input type="password" placeholder="enter old password" name="p1" class="form-control">
                    </div>
                    
                    <div class="col">
                        <input type="password" placeholder="enter new password" name="p2" class="form-control">
                     </div>
                     <div class="col">
                        <input type="password" placeholder="confirm password" name="p3" class="form-control">
                     </div>

                     <div class="r">
                        <div class="col">
                          <input type="submit" name="submit" value="Login" class="btn btn-primary">
                                    
                            </div>
                          </div>
                          </div>
            </div>
        </form>
    </div>
    
</body>
</html>
<?php
} else
    header("location:login.php");


?>