<?php
    session_start();
    include_once "config.php";
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    // $password = mysqli_real_escape_string($conn, $_POST['password']);


//     $sql = mysqli_query($conn,
//     $selectQuery = "INSERT into addproduct (Name, price, Username)
// VALUES (:name, :surname, :username)";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([
//         	':name' => $data['name'],
//         	':surname' => $data['surname'],
//         	':username' => $data['username']
        	
//         ]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
    
//     $conn = null;
//     return true;


    if(!empty($name) && !empty($price) && !empty($quantity)){
        if($name){
            

            // $sql = mysqli_query($conn, "SELECT * FROM addproduct");
            
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                               
                                // $ran_id = rand(time(), 100000000);   
                                // $status = "Active now";
                                // $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($conn, "INSERT INTO addproduct (name, price, quantity, product_img)
                                VALUES ('{$name}','{$price}', '{$quantity}', '{$new_img_name}')");
                                if($insert_query){ 
                                    // echo "inserting ok";
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM addproduct WHERE name = '{$name}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        // $_SESSION['unique_id'] = $result['unique_id'];
                                        echo "Product Added";
                                    }else{
                                        echo "This email address not Exist!";
                                    }
                                }else{
                                    echo "Something went wrong. Please try again!";
                                }
                            }
                        }else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }
            
        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>