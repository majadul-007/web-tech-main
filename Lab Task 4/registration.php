<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once('index.php') ?>
  <div class="container-wrapper">

  
   

<form method="POST"  action="submit.php" >
    <fieldset>
        <legend>Registration</legend>

        <label for="fname">Name:</label>
        <input type="text" id="fname" name="fname" ><br><br>
        <label for="lname">Email:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="fname">User Name:</label>
        <input type="text" id="fname" name="fname" ><br><br>
        <label for="fname">Password:</label>
        <input type="text" id="fname" name="fname" ><br><br>
        <label for="fname">Confirm Password:</label>
        <input type="text" id="fname" name="fname" ><br><br>
        
        
        <fieldset>
                <legend>Gender</legend>
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label for="html">HTML</label><br>
            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="css">CSS</label><br>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">JavaScript</label>
            <br>
            <br>
        </fieldset>
        <br>
        <br>
        
        <input type="submit" value="submit">
    </fieldset>
    </form>
</div>

</body>
</html>