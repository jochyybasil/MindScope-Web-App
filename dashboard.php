<?php
 include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet"  href="CSS/stylesheet.css" <?php echo time(); ?>>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>
        /* set style for navigation tabs */
        .nav {
          position: fixed;
          top: 80px;
          left: 0;
          width: 25%;
          height: 100%;
          background-color: #f8f9fa;
          border-right: 1px solid #dee2e6;
        }
        .nav ul {
          list-style: none;
          padding: 0;
          margin: 0;
        }
        .nav li {
          padding: 10px;
          border-bottom: 1px solid #dee2e6;
        }
        .nav li:last-child {
          border-bottom: none;
        }
        .nav a {
          text-decoration: none;
          color: #212529;
        }
        .nav a:hover {
          color:rgba(146, 15, 6);
        }
        
        /* set style for content area */
        .content {
          margin-left: 25%;
          padding: 20px;
        }

        /* dashboard css */
        .input-group{
            width: auto;
        }

        .input-group-append {
        display: flex;
        }

        .input-group-append .btn {
        position: relative;
        z-index: 2;
        }

        .input-group-append .btn:focus {
        z-index: 3;
        }

        .input-group-append {
        margin-left: -1px;
        }
      </style>
</head>

<body>
    <!-- top text -->
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col">
                <div class="box">
                    <a href="index.php" class="toptext nav-link" style="text-decoration: none; padding:14px;">MindScope</a>
                </div>
            </div>
        </div>
    </div>


    <!-- navigation tabs -->
  <nav class="nav">
    <ul>
      <li><a href="#">Dashboard</a></li>
      <li><a href="#">Bookings</a></li>
      <li><a href="#">Messages</a></li>
      <li><a href="#">Statistics</a></li>
    </ul>
  </nav>

  <!-- content area -->
  <div class="content">
    <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <h1>Welcome to the MindScope Dashboard</h1>
    <br>
    <br>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div style="color:rgba(146, 15, 6);">
                                INDIVIDUAL BOOKINGS (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">500</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div style="color:rgba(146, 15, 6);">
                                GROUP THERAPY BOOKINGS (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div style="color:rgba(146, 15, 6);">
                                PENDING APPOINTMENTS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
