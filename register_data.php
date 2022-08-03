<!DOCTYPE html>
<html>

<head>
   <title>Registration</title>
</head>

<body>
   <?php

   if (isset($_POST['submit'])) {
      $nam = $_POST['fname'];
      $siz = $_POST['size'];
      $eml = $_POST['email'];
      $phn = $_POST['phone'];
      $psd1 = $_POST['pass1'];


      $fn = fopen('name.txt', 'a');
      $fs = fopen('size.txt', 'a');
      $fe = fopen('email.txt', 'a');
      $fph = fopen('phone.txt', 'a');
      $fpw = fopen('pass.txt', 'a');


      $fnx = "\n" . $nam;
      $fsx = "\n" . $siz;
      $fex = "\n" . $eml;
      $fphx = "\n" . $phn;
      $fpwx = "\n" . $psd1;

      fwrite($fn, $fnx);
      fwrite($fs, $fsx);
      fwrite($fe, $fex);
      fwrite($fph, $fphx);
      fwrite($fpw, $fpwx);

      fclose($fn);
      fclose($fs);
      fclose($fe);
      fclose($fph);
      fclose($fpw);

 echo '<h1>Your details have been saved successfully. You can now login using your e-mail and password. Click <a href = "home.html" target = "_self">here</a> to go to homepage.</h1>';
   }

   ?>
</body>

</html>