<?php
include("conn.php");
if(isset($_GET['id']))
{
    $Q="SELECT * FROM `products` WHERE `id`='$_GET[id]'";
    $D=mysqli_query($con,$Q);
    $DATA=mysqli_fetch_assoc($D);
}
if(isset($_POST['submit']))
{
  unlink($DATA['image']);
    $dir="uploads/";
    $fullpath=$dir. basename($_FILES['file1']['name']);
    move_uploaded_file($_FILES['file1']['tmp_name'],$fullpath);
   $name=$_POST['name'];
   $price=$_POST['price'];
   $des=($_POST['des']);
   $cat=$_POST['cat'];
    $image = $fullpath;
   $q="UPDATE  `products` SET `name`='$name',`price`='$price',`des`='$des',`cat`='$cat',`image`='$fullpath' WHERE `id`='$_GET[id]'";
   $d=mysqli_query($con,$q);
   if($d)
   echo"data inserted";
   else
   echo"data not insert";
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
    <h3>Uplaod Products</h3>
    <form  enctype="multipart/form-data" action="" method="post">
  <div class="form-outline mt-4">
  <input type="text"  value= "<?php echo $DATA['name'];?>" id="formControlLg" name="name"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Product Name</label>
    </div>

    <div class="form-outline mt-4">
  <input type="text" value= "<?php echo $DATA['price'];?>" id="formControlLg" name="price" class="form-control form-control-lg"  required/>
  <label class="form-label" for="formControlLg">Product Price</label>
    </div>
    <div class="form-outline mt-4">
  <textarea class="form-control"  id="textAreaExample" name="des" rows="4" required></textarea>
  <label class="form-label" for="textAreaExample">Product Description</label>
</div>
<div class="form-outline mt-4">
  <input type="file" id="formControlLg" name="file1" class="form-control form-control-lg"  required/>
  
    </div>

<div class="form-outline mt-4">
  <select  id="formControlLg" value= "<?php echo $DATA['cat'];?>"  name="cat" class="form-select form-control-lg"  required>
   <option value="Mens">Mens</option>
   <option value="Womens">Womens</option>
   <option value="Kids">Kids</option>
  </select>
 
    </div>
<div class="form-outline mt-4">
  <input type="submit" name="submit" id="formControlLg" class="btn btn-primary form-control-lg" value="Upload" />
 
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