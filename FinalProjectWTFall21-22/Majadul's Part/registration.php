<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>





<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Dev Chat</header>
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off" name="myform"  onsubmit="return ValidationEvent()"">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" id="fname" name="fname" placeholder="First name" >
          </div>  
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" id="lname"placeholder="Last name" >
          </div>
          <div class="alert alert-danger result" role="alert">
            
</div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" id="email" name="email" placeholder="Enter your email" >
          <div class="alert alert-danger result"  role="alert">
</div>

        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" id="password" name="password" placeholder="Enter new password" >
          <i class="fas fa-eye"></i>
          <div class="alert alert-danger result"  role="alert">
</div>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" >
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
  <!-- <script src="javascript/signupvalidation.js"></script> -->

</body>
</html>
