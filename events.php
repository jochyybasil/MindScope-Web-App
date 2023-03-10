<?php
 include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="CSS/stylesheet.css" <?php echo time(); ?>>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<header>
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

    <!-- navigation bar -->
    <nav class="navbar navbar-expand">
        <div class="container-fluid d-flex justify-content-between">

        <?php
                if(!isset($loggedin_session)){
                    echo '<div class="d-flex">
                    <a class="nav-link text-nowrap text-truncate" href="register.php">Sign up</a>
                    <span class="mx-3">|</span>
                    <a class="nav-link text-nowrap text-truncate" href="login.php">Login</a>
                </div>';
                }else{
                    echo '<div class="d-flex">
                    <a class="nav-link text-nowrap text-truncate" href="student_profile.php">My Profile</a>
                    <span class="mx-3">|</span>
                    <a class="nav-link text-nowrap text-truncate" href="logout.php">Logout</a>
                </div>';
                }
        ?>
              


            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php"  class="nav-link" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="services.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="events.php" class="nav-link active" class="nav-link">Events</a>
                </li>
                <li class="nav-item">
                    <a href="resources.php" class="nav-link">Resources</a>
                </li>
                <li class="nav-item">
                    <a href="blogs.php" class="nav-link">Blogs</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<body>

    <!-- blogs picture header-->
    <div class="container-fluid">
        <div class="row">
          <div class="col-12 p-0" style="background-image: url(IMAGES/events_header.webp); background-size: cover; height: 370px;">
            <div class="gradient-overlay" style="background: linear-gradient(to bottom, rgba(172, 63, 63, 0.726), rgba(172, 63, 63, 0.726)); height: 100%;">
                <div class="text-wrapper">
                    <h1 class="text-white">Events</h1>
                    <br>
                </div>
            </div>
          </div>
        </div>
    </div>

    <!-- blog posts -->
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Catch All The Gists & Fun Here</h2>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="IMAGES/events_p1.jpg" />
                    <div class="card-body p-4">
                        <h4 class="card-title">Loving Yourself Inside-Out</h4>
                        <!-- <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
                            <div>
                                <p class="fw-bold mb-0">John Smith</p>
                                <p class="text-muted mb-0">Erat netus</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="IMAGES/events_p2.webp" />
                    <div class="card-body p-4">
                        <h4 class="card-title">Finding Yourself</h4>
                        <!-- <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
                            <div>
                                <p class="fw-bold mb-0">John Smith</p>
                                <p class="text-muted mb-0">Erat netus</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="IMAGES/events_p3.avif" />
                    <div class="card-body p-4">
                        <h4 class="card-title">Handling Toxicity</h4>
                        
                        <!-- <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
                            <div>
                                <p class="fw-bold mb-0">John Smith</p>
                                <p class="text-muted mb-0">Erat netus</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <footer class="bg-dark py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2023 MindScope Live. All Rights Reserved.</p>
            </div>
            <div class="col-md-6">
              <ul class="list-unstyled float-md-end">
                <li><a href="contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
    </footer>
</body>
</html>
