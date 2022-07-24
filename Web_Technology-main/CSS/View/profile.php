<?php
session_start();
include("../Model/db.php");
if(empty($_SESSION["uname"]) && empty($_SESSION["pass"])){
    header("Location: ../View/Login.php");
}
include("../Control/profileprocess.php");
?>
<html>
    <body>
        
    <?php
    echo "hi there <h3>".$_SESSION["uname"]."</h3>";
    ?>
    

    <form action="" method="POST">
        <input type="text" name="searchdata" >
        <input type="submit" name="Search" value="Search" >
    </form>
    <br>
    <br>
    <a href="../View/UpdateProfile.php">Profile Data</a>
    </body>
</html>