    <?php
    session_start();
    include("../Asset/Connection/Connection.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../Asset/phpMail/src/Exception.php';
    require '../Asset/phpMail/src/PHPMailer.php';
    require '../Asset/phpMail/src/SMTP.php';

    function generateOTP($length = 6)
    {
        $digits = '0123456789';
        $otp = '';
        for ($i = 0; $i < $length; $i++) {
            $otp .= $digits[rand(0, strlen($digits) - 1)];
        }
        return $otp;
    }

    function otpEmail($email, $otp)
    {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '@gmail.com'; // Your gmail
        $mail->Password = ''; // Your gmail app password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('@gmail.com'); // Your gmail

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
        if ($mail->send()) {
    ?>
            <script>
                alert("Otp has been send to your email")
                window.location = "OTP.php";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Email Failed")
            </script>
        <?php
        }
    }

    if (isset($_POST['btn_submit'])) {
        $email = $_POST['txt_email'];
        $selqry = "select * from tbl_freelan  where freelan_email='" . $email . "' and freelan_status=1";
        $res = $con->query($selqry);
        $cusqry = "select * from tbl_client  where client_email='" . $email . "' and client_status=1";
        $cusres = $con->query($cusqry);

        $otp = generateOTP();
        $_SESSION['otp'] = $otp;
        if ($userData = $res->fetch_assoc()) {
            $_SESSION['fid'] = $userData['freelan_id'];
            otpEmail($email, $otp);
        } else if ($sellerData = $cusres->fetch_assoc()) {
            $_SESSION['cid'] = $sellerData['client_id'];
            otpEmail($email, $otp);
        } else {
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
            body {
                background-image: url(../Asset/Templates/Login/assets/images/bg-001.jpg);
                background-size: cover;
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .emailbody {
                width: 450px;
                background-color: white;
                border-radius: 12px;
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
                padding: 25px;
                text-align: center;
                border-top: 8px solid #4caf50;
                /* Green top border */
                border-bottom: 8px solid #2196f3;
                /* Blue bottom border */
            }

            .emailhead {
                font-size: 24px;
                font-weight: bold;
                color: #4caf50;
                margin-bottom: 20px;
                text-align: center;
                border-bottom: 2px solid #ffeb3b;
                /* Yellow underline */
                display: inline-block;
                padding-bottom: 5px;
            }

            .emaill {
                margin-top: 20px;
                text-align: left;
            }

            .emailname {
                font-size: 18px;
                font-weight: bold;
                color: #2196f3;
                /* Blue for label */
                margin-bottom: 5px;
            }

            input[type="text"] {
                width: 100%;
                padding: 10px;
                font-size: 14px;
                border: 1px solid #ccc;
                border-radius: 6px;
                background-color: #f9f9f9;
                transition: all 0.3s ease;
            }

            input[type="text"]:focus {
                outline: none;
                border-color: #4caf50;
                background-color: #fff;
                box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
                /* Subtle green glow */
            }

            .emailsubmit input[type="submit"] {
                width: 100%;
                padding: 12px;
                font-size: 16px;
                font-weight: bold;
                color: white;
                background-color: #2196f3;
                /* Blue button */
                border: none;
                border-radius: 6px;
                cursor: pointer;
                transition: background-color 0.3s ease, transform 0.2s ease;
                margin-top: 15px;
            }

            .emailsubmit input[type="submit"]:hover {
                background-color: #4caf50;
                /* Green hover */
                transform: translateY(-2px);
                /* Slight lift on hover */
            }
        </style>



    </head>

    <body>
        <form action="" method="post">
            <div class="emailbody">
                <div class="emailhead">Forgot Your Password?No Worries</div>
                <div class="emaill">
                    <div class="emailname">Email:</div>
                    <div class="emailinput"><input type="text" name="txt_email" id="" placeholder="Type your email"></div>
                </div>
                <div>
                    <div class="emailsubmit"><input type="submit" value="Reset" name="btn_submit"></div>

                </div>
            </div>
        </form>
    </body>

    </html>
