<?php
include("../Control/login_process.php");
?>
<html>
    <body>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>
                       Username: <input type="text" name="uname">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:<input type="password" name="pass">
                    </td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>