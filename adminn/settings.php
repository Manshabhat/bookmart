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
            <h1>Settings</h1>
          </h5>
        </div>
        
             
              <?php
include('./sidenav.php');
?>

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
      <div class="row mx-auto">
        <div class="col-xl-4 col-sm-6 col-12 mb-4">
          <div class="card">
            <a href="#" ><div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center">
                  <i class="fas fa-pencil-alt fa-3x"></i>
                </div>
                <div class="text-end">
                
                  <h4 class="mb-0">Privacy Settings</h4>
                </div>
              </div>
            </div></a>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12 mb-4">
          <div class="card">
           <a href="email.php"> <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center">
                <i class="fa-solid fa-envelope fa-3x"></i>
                </div>
                <div class="text-end">
                  
                  <h4 class="mb-0">Change Email</h4>
                </div>
              </div>
            </div></a>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
             <a href="testform.php"> <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center">
                  <i class="fa-solid fa-lock fa-3x"></i>
                </div>
                <div class="text-end">
                
                  <h4 class="mb-0">Change Password</h4>
                </div>
              </div></a>
            </div>
          </div>
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