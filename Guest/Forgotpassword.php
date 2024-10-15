<?php
session_start();
include("../Asset/Connection/Connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../Asset/phpMail/src/Exception.php';
require '../Asset/phpMail/src/PHPMailer.php';
require '../Asset/phpMail/src/SMTP.php';

function generateOTP($length = 6) {
    $digits = '0123456789';
    $otp = '';
    for ($i = 0; $i < $length; $i++) {
        $otp .= $digits[rand(0, strlen($digits) - 1)];
    }
    return $otp;
}

function otpEmail($email,$otp){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'pseudominipro@gmail.com'; // Your gmail
    $mail->Password = 'monj egps suas ggiw'; // Your gmail app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
  
    $mail->setFrom('pseudominipro@gmail.com'); // Your gmail
  
    $mail->addAddress($email);
  
    $mail->isHTML(true);
    $message = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your OTP Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: #fff;
            border-radius: 5px;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .footer {
            font-size: 12px;
            color: #999;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            Your OTP Code
        </div>
        <p>Hello,</p>
        <p>Here is your One-Time Password (OTP) for verification:</p>
        <h2 style="font-size: 36px; color: #333;">' . $otp . '</h2>
        <p>This OTP is valid for the next 5 minutes. Please use it to complete your verification process.</p>
        <p>If you did not request this OTP, please ignore this email or contact support if you have concerns.</p>
        <p>Best regards,<br>Company Name</p>
        <div class="footer">
            This is an automated message. Please do not reply.
        </div>
    </div>
</body>
</html>
';
    $mail->Subject = "Reset your password";  //Your Subject goes here
    $mail->Body = $message; //Mail Body goes here
  if($mail->send())
  {
    ?>
<script>
    alert("Email Send")
    window.location="OTP.php";
</script>
    <?php
  }
  else
  {
    ?>
<script>
    alert("Email Failed")
</script>
    <?php
  }
}

if(isset($_POST['btn_submit'])){
    $email=$_POST['txt_email'];
    $selqry = "select * from tbl_freelan  where freelan_email='" . $email . "' and freelan_status=1";
	$res = $con->query($selqry);
	$cusqry = "select * from tbl_client  where client_email='" . $email . "' and client_status=1";
	$cusres = $con->query($cusqry);
	
    $otp = generateOTP();
    $_SESSION['otp'] = $otp;
    if($userData=$res->fetch_assoc())
	{
		$_SESSION['fid'] = $userData['freelan_id'];
		otpEmail($email,$otp);
	}
	else if($sellerData=$cusres->fetch_assoc())
	{
		$_SESSION['cid'] = $sellerData['client_id'];
		otpEmail($email,$otp);
	}
	
	else{
	?>
    	<script>
		alert("Account Doesn't Exists")
		</script>
    <?php	
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-image:url(../Asset/Templates/Login/assets/images/bg-001.jpg);
            background-size:cover;
        }
        .emailbody{
            width: 500px;
            height: 300px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            gap:70px;
        }

        .emailhead{
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;

        }
        .emaill{
            display:flex;
            gap:40px;

        }

        input[type='text'] {
    height:15px;
    width: 200px;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding: 10px 15px;
    border-radius: 2px;
    background-color: #cccccc1a;
}

    </style>


</head>
<body>
    <form action="" method="post">
        <div class="emailbody">
            <div class="emailhead">Forgot Your Password?No Worries</div>
            <div class="emaill">
                <div class="emailname">Email</div>
                <div class="emailinput"><input type="text" name="txt_email" id=""></div>
            </div>
            <div>
                <div class="emailsubmit"><input type="submit" value="Reset" name="btn_submit"></div>
                
            </div>
        </div>
    </form>
</body>
</html>