<?php
 include('include/dbconfig.php'); 
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
   $error .="<p>Invalid email address please type a valid email address!</p>";
   }else{
   $sel_query = "SELECT * FROM `users` WHERE email='".$email."'";
   $results = mysqli_query($conn,$sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){
   $error .= "<p>No user is registered with this email address!</p>";
   }
  }
   if($error!=""){
   echo "<div class='error'>".$error."</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
   }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(2418*2+$email);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
// Insert Temp Table
mysqli_query($con,
"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('".$email."', '".$key."', '".$expDate."');");

$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="https://www.blood4Uganda.org/forgot.php?
key='.$key.'&email='.$email.'&action=reset" target="_blank">
https://www.blood4Uganda.org/forgot.php?key='.$key.'&email='.$email.'&action=reset</a></p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks,</p>';
$body = $output; 
$subject = "Password Recovery - Blood4Uganda.org";

$email_to = $email;
$fromserver = "recoverypassword@blood4uganda.org"; 
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.blood4uganda.org"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "recoverypassword@blood4uganda.org"; // Enter your email here
$mail->Password = "password"; //Enter your password here
$mail->Port = 25;
$mail->IsHTML(true);
$mail->From = "recoverypassword@blood4uganda.org";
$mail->FromName = "Blood 4 Uganda";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "<div class='error'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br /><br /><br />";
	}
   }
}else{
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
    <div class="wrapper">
       
      <div class="title-text">
        <div class="title">RESET PASSWORD</div>
      </div>
      
      <div class="form-container">
        <div class="form-inner">
          <form action="include/verify.php" method="POST" class="login">
              <div class="field">
                <input type="email" name="email" placeholder="Email Address" required>
              </div>
             
            <div class="field btn">
              <input type="submit" value="Continue Securely">
            </div>
            <div class="signup-link">Remember Password? <a href="login.php">Login now</a></div>
          
          </form>
          
        </div>
      </div>
    </div>

   

  </body>
</html>
<?php } ?>