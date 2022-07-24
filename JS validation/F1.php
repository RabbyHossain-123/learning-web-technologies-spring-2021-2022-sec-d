<html>
    <body>
        <form action="next.php" onsubmit="return validate()">
        Username:<input type="text" id="uname" name="uname"><br>
        Password:<input type="password" id="pass" name="pass"><br>
        <input type="submit" name="btnLogin" value="Login">

        </form>
        <script>
            function validate()
            {
                var username=document.getElementById('uname');
                var password=document.getElementById('pass');
                if(username.value=="" || password.value=="")
                {
                    alert("Username or password is empty");
                    return false;
                }
                else
                return true;
            }
        </script>
    </body>
</html>