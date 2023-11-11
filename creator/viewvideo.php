<?php
include("./conn.php");
session_start();
if (isset($_SESSION['creator']))
{


if($_SESSION['creator'])
{
if (isset($_POST['submit'])) {
    $q = "INSERT INTO `products`(`name`,`price`,`des`,`cat`,`image`) VALUES ('$_POST[name]','$_POST[price]','$_POST[des]','video','$fullpath')";
    $d = mysqli_query($con, $q);



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
    <h3>View video</h3>
    <table class="table table-lite table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    
    <th>Description</th>
    <th>Category</th>
    
    <th colspan="2">Options</th>
    
</tr>

<?php
include("./conn.php");
$q = "SELECT * FROM `products` WHERE `cat`='video'";
$d=mysqli_query($con, $q);
$co=mysqli_num_rows($d);
while($data=mysqli_fetch_assoc($d))
{
    echo '<tr>
          <td>'.$data['id'].'</td>
          <td>'.$data['name'].'</td>
          
          <td>'.$data['des'].'</td>
         <td>'.$data['cat'].'</td>
        
         <td><a class="btn btn-primary"href="update.php?id='.$data['id'].'"><i class="fa-solid fa-pen"></i></a></td>
         <td><a class="btn btn-primary" href="delete.php?id='.$data['id'].'"><i class="fa-solid fa-trash"></i></a></td>
         
     </tr>';
}

//echo"Total Number of rows are " .$co;
?>

</table>
        
    
  

   













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
{
  header("location:login.php");
}
?>