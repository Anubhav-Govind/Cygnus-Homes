<!DOCTYPE html>
<html>
    <head>
        <title>Login Verification</title>
    </head>
    <body>
    <script>
            function hello(){
            window.open('loggedin.html','_self');
            }
</script>

<?php
    
     if (isset($_POST['submit']))
     {  error_reporting(0);
        $y=0;
        $eml= $_POST['email'];
        $psd= $_POST['pass'];
        $passfile="pass.txt";
        $emailfile="email.txt";
        $pwdfile=file($passfile);
        $emafile=file($emailfile);

        for ($i = 2; $i < 30; $i++)
        {
            $pwd = trim($pwdfile[$i])
            $email = trim($emafile[$i])

            if(strcmp($pwd,$psd)==0 && strcmp($email,$eml)==0)
            {echo '<script type="text/javascript"> hello(); </script>';
            $y=1;
            break;}
            

        }
        if($y==0)
        echo '<h1>The login details that you have entered are incorrect. Please <a href = "register.html" target = "_self">Register</a> here first.</h1>';
     }

?>

    </body>
</html>
