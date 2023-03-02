<? php 
  include "../MODEL\db.php";
  include  "../MODEL\session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="CSS/stylesheet.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/profile.css? <?php echo time(); ?>">
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

        <div class="d-flex">
           
        </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="services.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="events.php" class="nav-link">Events</a>
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

 
    <!-- <? php
      $select = mysqli_query($conn, "SELECT * FROM `user_profile` WHERE web_userID = '$loggedin_id'");
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?> -->

    <form method="post">  
    <div class="profile-pic-container">
        <div class="profile-pic">
        <!-- <?php
         if($fetch['user_image'] == ''){
            // echo '<i class="fa-thin fa-user-tie"></i>';
         }else{
            echo '<img src="uploaded_img/'.$fetch['user_image'].'">';
         }
         ?> -->
        <style>
         /* echo '<img src="uploaded_img/'.$fetch['image'].'">'; */
         
        </style>
         
        </div>
        <div class="info-content">
        <br>
        <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" >
        </div>
    </div>
    </form>

    <form action="http://localhost/MindScope-Web-App/CONTROL/student_proc.php" method="POST">
        <div class="profile-info-container info-content" style="padding-left:20px; padding-top:10px;"> 
            <label> First Name: </label>
            <input name="user_fname" value="<?php echo $row['userFname']; ?>" type="text">
            <br>
            <label>Last Name: </label>
            <input name="user_lname" value="<?php echo $row['userLname']; ?>" type="text">
            <br>
            
            <label> Gender: </label>
            <input name="user_gender" value="<?php echo $row['gender']; ?>" type="text">

            <br>
            <label> Mobile: </label>
            <input name="user_phone" value="<?php echo $row['phone_number']; ?>" type="text">

            <br>
            <label> Major: </label>
            <input name="user_major" value="<?php echo $row['department']; ?>" type="text">
            
            <br>
            <input type="submit" class="edit-profile-text" value ="Edit Profle" ></p>


        </div>
    </form>



</body>

</html>
