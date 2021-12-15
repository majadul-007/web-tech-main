<link rel="stylesheet" href="css/style.css"> 
<?php 
  session_start();
  include_once "model/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }

  
  ?>




<?php include_once "header.php"; ?>
<body>
  <div class="">
    <section class="form signup userprofile-wrapper">
     
      <?php 
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }
        ?>
      <form action="controller/update-profile.php" method="POST" enctype="multipart/form-data" autocomplete="off" name="myform"  onsubmit="return ValidationEvent()"">
        <div class="error-text"></div>
        <div class="userpro-img">

            <img src="images/<?php echo $row['img']; ?>" alt="">
        </div>
        <div class="name-details">
          <div class="field input">
            <label class="ftest">First Name</label>
            <input type="text" value="<?php echo $row['fname'] ?>" id="fname" name="fname" placeholder="First name" >
          </div>  
          <div class="field input">
            <label>Last Name</label>
            <input type="text" value="<?php echo $row['lname'] ?>" name="lname" id="lname"placeholder="Last name" >
          </div>
          <div class="alert alert-danger result" role="alert">
            
</div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" id="email" value="<?php echo $row['email'] ?>" name="email" placeholder="Enter your email" >
          <div class="alert alert-danger result"  role="alert">
</div>

        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" value="<?php echo $row['password'] ?>" id="password" name="password" placeholder="Enter new password" >
          <i class="fas fa-eye"></i>
          <div class="alert alert-danger result"  role="alert">
</div>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" >
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Update Profile">
         
        </div>
      </form>
      <!-- <div class="link">Already signed up? <a href="login.php">Login now</a></div> -->
    </section>
  </div>

  <script src="../javascript/pass-show-hide.js"></script>
  <!-- <script src="../javascript/updatevalidation.js"></script> -->
  <!-- <script src="javascript/signupvalidation.js"></script> -->

</body>
</html>
