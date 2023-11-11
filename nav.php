<style>
  body{
    overflow-x: hidden;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand l2" href="#"><span class="l1">BOOK</span>MART</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active i" aria-current="page" href="index.php">Home</a>
              </li>
             
              <li class="nav-item dropdown i">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Products
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="books.php">Books</a></li>
                  <li><a class="dropdown-item" href="pdf.php">PDF's</a></li>
                  <li><a class="dropdown-item" href="video.php">Videos</a></li>
                  <li><a class="dropdown-item" href="Question.php">Question paper</a></li>
                </ul>
              </li>
              
            
             <?php
             include("adminn/conn.php");
             $data=mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$_SESSION[user]'");
             $rowx=mysqli_fetch_assoc($data);
             if($rowx['plan']=='free')
             {
             ?>
              <li>
              <a class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="15 Days Trail Upgrade Plan" style="color:goldenrod;border-radius:20px; margin-left:5px;" href="plan.php"><i class="fa-solid fa-crown"></i> Get Premium</a>
              </li>
            <?php
             }
            ?>
            
            </ul>
           <?php
           if(!isset($_SESSION['user']))
           echo ' <form class="d-flex">
              <a href="loginn.php" button class="btn btn-orange mx-2 bt" type="submit"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;&nbsp;Login</button> </a>
              <button class="btn btn-orange mx-2" type="submit"><i class="fa-solid fa-bag-shopping"></i>&nbsp;&nbsp;&nbsp;Cart</button>
            </form>';
            else
            echo'
            <li style="list-style:none;" class="nav-item dropdown i">
                <a class="nav-link dropdown-toggle" style="color:black" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <i class="fa-solid fa-gear "> Settings</i> 
                </a>
                <ul  class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="profile.php"> <i class="fa-solid fa-user "></i>Profile</a></li>
                  <li><a class="dropdown-item" href="logout.php">
                  <i class="fa-solid fa-power-off "></i> logout</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
            
         
             
            <a href="cart.php" button class="btn btn-orange mx-2" type="submit"><i class="fa-solid fa-bag-shopping"></i>&nbsp;&nbsp;&nbsp;Cart</button></a>
          ';
            ?>
            <ul>

             <a href="chat/index.php" style="color:black"> <i class="fa-regular fa-message m"></i></a>
              
            </ul>
          </div>
        </div>
      </nav>
    
    
    
    <script>
      $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>