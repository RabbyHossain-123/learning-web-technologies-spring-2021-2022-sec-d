<?php
include("../Control/updatecontrol.php");
?>
<html>
    <body>
        <form action="" method="POST">
            Your id <input type="text" name="id" value="<?php echo $id; ?>">
            Your Name <input type="text" name="name" value="<?php echo $name; ?>">
            Your Username <input type="text" name="uname" value="<?php echo $username; ?>" readonly>
            Your Password <input type="password" name="pass" value="<?php echo $pass; ?>">

            <input type="submit" name="update" value="Update">

        </form>
    </body>
</html>