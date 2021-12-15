<?php 
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
  include_once "model/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  
  <div class="chat-users-wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="controller/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Search Product</span>
        <input type="text" placeholder="Enter product name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <!-- <div class="users-list">
  
      </div> -->
    </section>
    <div class="marketplace-chat">
        <button type="button" class="btn btn-success"><a href="users.php">Get Back To Chat</a></button>

    </div>
  </div>
  

  <script src="javascript/users.js"></script>

</body>
</html>
