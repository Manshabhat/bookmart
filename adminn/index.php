<?php
session_start();
if (isset($_SESSION['admin'])) {
  

  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpannel</title>
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
    <!-- Section: Main chart 
    <section class="mb-4">
      <div class="card">
        <div class="card-header py-3">
          <h5 class="mb-0 text-center"><strong>Sales</strong></h5>
        </div>
        <div class="card-body">
          <canvas class="my-4 w-100" id="myChart" height="380"></canvas>
        </div>
      </div>
    </section>
  
    -->

    <!--Section: Sales Performance KPIs-->
    <section class="mb-4">
      <div class="card">
        <div class="card-header text-center py-3">
          <h5 class="mb-0 text-center">
            <strong>Products</strong>
          </h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover text-nowrap">
              <thead>
                <!--<tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Description</th>
                  <th scope="col">category</th>
                  <th scope="col">Image</th>
                </tr>-->
              </thead>
              <?php
include('./sidenav.php');
?>
<!--Main layout-->
  <div class="container pt-4">
  
    <table class="table table-lite table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Description</th>
    <th>Category</th>
    <th>Image</th>
    
    
</tr>

<?php
include("./conn.php");

    $rr=mysqli_query($con, "SELECT * FROM `users`");
     $pcount=mysqli_num_rows($rr);

$q = "SELECT * FROM `products` limit 3";
$d=mysqli_query($con, $q);
$co=mysqli_num_rows($d);
while($data=mysqli_fetch_assoc($d))
{
    echo '<tr>
          <td>'.$data['id'].'</td>
          <td>'.$data['name'].'</td>
          <td>'.$data['price'].'</td>
          <td>'.$data['des'].'</td>
         <td>'.$data['cat'].'</td>
         <td><img src='.$data['image'].' width="50"></td>
         
         
     </tr>';
}

//echo"Total Number of rows are " .$co;
?>

</table>
             <!-- <tbody>
                <tr>
                  <th scope="row">Value</th>
                  <td>18,492</td>
                  <td>228</td>
                  <td>350</td>
                  <td>$4,787.64</td>
                  <td>$13.68</td>
                </tr>
                <tr>
                  <th scope="row">Percentage change</th>
                  <td>
                    <span class="text-danger">
                      <i class="fas fa-caret-down me-1"></i
                        ><span>-48.8%%</span>
                    </span>
                  </td>
                  <td>
                    <span class="text-success">
                      <i class="fas fa-caret-up me-1"></i><span>14.0%</span>
                    </span>
                  </td>
                  <td>
                    <span class="text-success">
                      <i class="fas fa-caret-up me-1"></i><span>46.4%</span>
                    </span>
                  </td>
                  <td>
                    <span class="text-success">
                      <i class="fas fa-caret-up me-1"></i><span>29.6%</span>
                    </span>
                  </td>
                  <td>
                    <span class="text-danger">
                      <i class="fas fa-caret-down me-1"></i
                        ><span>-11.5%</span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Absolute change</th>
                  <td>
                    <span class="text-danger">
                      <i class="fas fa-caret-down me-1"></i
                        ><span>-17,654</span>
                    </span>
                  </td>
                  <td>
                    <span class="text-success">
                      <i class="fas fa-caret-up me-1"></i><span>28</span>
                    </span>
                  </td>
                  <td>
                    <span class="text-success">
                      <i class="fas fa-caret-up me-1"></i><span>111</span>
                    </span>
                  </td>
                  <td>
                    <span class="text-success">
                      <i class="fas fa-caret-up me-1"></i
                        ><span>$1,092.72</span>
                    </span>
                  </td>
                  <td>
                    <span class="text-danger">
                      <i class="fas fa-caret-down me-1"></i
                        ><span>$-1.78</span>
                    </span>
                  </td>
                </tr>
              </tbody>-->
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--Section: Sales Performance KPIs-->

    <!--Section: Minimal statistics cards-->
    <section>
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center">
                  <i class="fas fa-pencil-alt text-info fa-3x"></i>
                </div>
                <div class="text-end">
                  <h3>278</h3>
                  <p class="mb-0">New Posts</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center">
                  <i class="far fa-comment-alt text-warning fa-3x"></i>
                </div>
                <div class="text-end">
                  <h3>156</h3>
                  <p class="mb-0">New Comments</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center">
                  <i class="fas fa-chart-line text-success fa-3x"></i>
                </div>
                <div class="text-end">
                  <h3>64.89 %</h3>
                  <p class="mb-0">Bounce Rate</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center">
                  <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
                </div>
                <div class="text-end">
                  <h3>423</h3>
                  <p class="mb-0">Total Visits</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-danger">278</h3>
                  <p class="mb-0">New Projects</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-rocket text-danger fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-success"><?php echo "$pcount"; ?></h3>
                  <p class="mb-0">New Clients</p>
        

                </div>
                <div class="align-self-center">
                  <i class="far fa-user text-success fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-warning">64.89 %</h3>
                  <p class="mb-0">Conversion Rate</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-chart-pie text-warning fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-info">423</h3>
                  <p class="mb-0">Support Tickets</p>
                </div>
                <div class="align-self-center">
                  <i class="far fa-life-ring text-info fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-info">278</h3>
                  <p class="mb-0">New Posts</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-book-open text-info fa-3x"></i>
                </div>
              </div>
              <div class="px-md-1">
                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                  <div
                       class="progress-bar bg-info"
                       role="progressbar"
                       style="width: 80%"
                       aria-valuenow="80"
                       aria-valuemin="0"
                       aria-valuemax="100"
                       ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-warning">156</h3>
                  <p class="mb-0">New Comments</p>
                </div>
                <div class="align-self-center">
                  <i class="far fa-comments text-warning fa-3x"></i>
                </div>
              </div>
              <div class="px-md-1">
                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                  <div
                       class="progress-bar bg-warning"
                       role="progressbar"
                       style="width: 35%"
                       aria-valuenow="35"
                       aria-valuemin="0"
                       aria-valuemax="100"
                       ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-success">64.89 %</h3>
                  <p class="mb-0">Bounce Rate</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-mug-hot text-success fa-3x"></i>
                </div>
              </div>
              <div class="px-md-1">
                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                  <div
                       class="progress-bar bg-success"
                       role="progressbar"
                       style="width: 60%"
                       aria-valuenow="60"
                       aria-valuemin="0"
                       aria-valuemax="100"
                       ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-danger">423</h3>
                  <p class="mb-0">Total Visits</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-map-signs text-danger fa-3x"></i>
                </div>
              </div>
              <div class="px-md-1">
                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                  <div
                       class="progress-bar bg-danger"
                       role="progressbar"
                       style="width: 40%"
                       aria-valuenow="40"
                       aria-valuemin="0"
                       aria-valuemax="100"
                       ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section: Minimal statistics cards-->

    <!--Section: Statistics with subtitles-->
    <section>
      <div class="row">
        <div class="col-xl-6 col-md-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between p-md-1">
                <div class="d-flex flex-row">
                  <div class="align-self-center">
                    <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                  </div>
                  <div>
                    <h4>Total Posts</h4>
                    <p class="mb-0">Monthly blog posts</p>
                  </div>
                </div>
                <div class="align-self-center">
                  <h2 class="h1 mb-0">18,000</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between p-md-1">
                <div class="d-flex flex-row">
                  <div class="align-self-center">
                    <i
                       class="far fa-comment-alt text-warning fa-3x me-4"
                       ></i>
                  </div>
                  <div>
                    <h4>Total Comments</h4>
                    <p class="mb-0">Monthly blog posts</p>
                  </div>
                </div>
                <div class="align-self-center">
                  <h2 class="h1 mb-0">84,695</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-6 col-md-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between p-md-1">
                <div class="d-flex flex-row">
                  <div class="align-self-center">
                    <h2 class="h1 mb-0 me-4">$76,456.00</h2>
                  </div>
                  <div>
                    <h4>Total Sales</h4>
                    <p class="mb-0">Monthly Sales </p>
                  </div>
                </div>
                <div class="align-self-center">
                  <i class="far fa-heart text-danger fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between p-md-1">
                <div class="d-flex flex-row">
                  <div class="align-self-center">
                    <h2 class="h1 mb-0 me-4">$36,000.00</h2>
                  </div>
                  <div>
                    <h4>Total Cost</h4>
                    <p class="mb-0">Monthly Cost</p>
                  </div>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-wallet text-success fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section: Statistics with subtitles-->
  </div>
</main>
<!--Main layout-->
          



          </body>
          <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>



<script>
/*

    // Graph
var ctx = document.getElementById("myChart");

var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ],
    datasets: [
      {
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: "transparent",
        borderColor: "#007bff",
        borderWidth: 4,
        pointBackgroundColor: "#007bff",
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: false,
          },
        },
      ],
    },
    legend: {
      display: false,
    },
  },
});*/
</script>
</html>
<?php
}
else
{
  header("location: login.php");
}


?>