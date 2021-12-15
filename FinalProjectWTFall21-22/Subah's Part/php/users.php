

<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   }
   

    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM productmanager WHERE NOT unique_id = {$outgoing_id} ORDER BY pmanager_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No productmanager are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>