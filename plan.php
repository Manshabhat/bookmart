<?php
include("adminn/conn.php");

  session_start();
if (isset($_SESSION['user'])) {
   
    if(isset($_POST['deliver']))
    {
    
    mysqli_query($con,"UPDATE `users` SET `plan`='premium',`days`='' WHERE `email`='$_SESSION[user]'");
     header("location:index.php");   
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
 
    <div class="s" style="padding: 2rem;">
        <form action="" method="post" >
            <div class="body">
                
                  <h2 style=" margin-left:2rem;">Upgrade Plan</h2>
                    <div class="col">
                      <input type="text" style="padding: 10px; background-color: #eeeeee;border:none" placeholder="Email" readonly name="email" value="<?php echo $_SESSION['user']; ?>" class="form-control">
                    </div>
                   
                             <div class="col">
                            <input type="text"  style="padding: 10px; background-color: #eeeeee;border:none" readonly placeholder="Amount" value="1500 Rs" name="add" class="form-control">
                                           </div>
                                                
                                                    <div class="col">
                                                        <input type="submit" style="padding: .8rem; background-color:goldenrod;" name="deliver" value="Upgrade Account" class="btn" >
                                    
                                                    </div>
                                            </div>
                                            </div>
        </form>
    </div>



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