
<?php 
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
  include_once "model/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  
  // Include config file
  
// Check existence of id parameter before processing further

?>


<!-- <link rel="stylesheet" href="style.css"> -->

<?php include_once "header.php"; ?>
<?php include_once "marketplace-back.php"; ?>
<div class="marketplace">
  <h1>Welcome To DevChat Marketplace</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
<?php 
          // $sql = mysqli_query($conn, "SELECT * FROM addproduct");
          // if(mysqli_num_rows($sql) > 0){
          //   $row = mysqli_fetch_assoc($sql);
          // }
          
          $query = "SELECT * FROM addproduct ORDER BY product_id DESC";
          $result = mysqli_query($conn, $query);
          if(mysqli_num_rows($result) > 0)
          {
            while($row = mysqli_fetch_array($result))
            {
          ?>
        

  <div class="col">
    <div class="card h-100">
    <img src="images/macbook.jpg" class="img-responsive" /><br />
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['name'] ?></h5>
        <h5 class="card-title">Price: <?php echo $row['price'] ?> $</h5>
        <h5 class="card-title">Stock:  <?php echo $row['quantity'] ?></h5>
        
        <div class="cart-btn">

          <button type="button" class="btn btn-light">Add To Cart</button>
        </div>
      </div>
    </div>
  </div>
  <?php
					}
				}
			?>
  
 
  
</div>
</div>