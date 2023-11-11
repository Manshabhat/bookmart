<?php
include("./conn.php");
session_start();
if (isset($_SESSION['creator']))
{

if(isset($_POST["submit"]))
{
 
    $q = "INSERT INTO `users`(`Name`,`email`,`password`,`Status`,`Roll`) VALUES ('creator','$_POST[email]','$_POST[password]','active','creator')";
    $d = mysqli_query($con,$q);
    if ($d) {
        echo '
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
<div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    
    <strong class="me-auto">Bookmart</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    User Creator Sucessfully
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
            <strong class="me-auto">Bookmart</strong>
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
    <h3>Add Creator</h3>
    <form action="" method="post">
  <div class="form-outline mt-4">
  <input type="email" id="formControlLg" name="email"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Email</label>
    </div>

    <div class="form-outline mt-4">
  <input type="password" id="formControlLg" name="password" class="form-control form-control-lg"  required/>
  <label class="form-label" for="formControlLg">Password</label>
    </div>
    <!--<div class="form-outline mt-4">
  <textarea class="form-control" id="textAreaExample" name="des" rows="4" required></textarea>
  <label class="form-label" for="textAreaExample">Product Description</label>
</div>
<div class="form-outline mt-4">
  <input type="file" id="formControlLg" name="file1" class="form-control form-control-lg"  required/>
  
    </div>

<div class="form-outline mt-4">
  <select  id="formControlLg" name="cat" class="form-select form-control-lg"  required>
   <option value="Mens">Books</option>
   <option value="Womens">pdfs</option>
   <option value="Kids"></option>
  </select>
</div>-->
 
    
<div class="form-outline mt-4">
  <input type="submit" name="submit" id="formControlLg" class="btn btn-primary form-control-lg" value="Submit" />
 
    </div>
    </form>
   













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
else
header("location:login.php");
?>