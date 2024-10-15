<?php
session_start();
include("../Asset/Connection/Connection.php");


if(isset($_POST['btn_submit'])){
    $pass=$_POST['txt_pass'];
    $cpass=$_POST['txt_cpass'];
    if($pass==$cpass){
        if(isset($_SESSION['fid'])){ //User
            $updQry="update tbl_freelan set freelan_password='".$pass."' where freelan_id=".$_SESSION['fid'];
            if($con->query($updQry)){
                ?>
                <script>
                    alert("Password Updated")
                    window.location="LogOut.php"
                    </script>
                <?php
            }
        }
        else if(isset($_SESSION['cid'])){ //Seller
            $updQry="update tbl_client set client_password='".$pass."' where client_id=".$_SESSION['cid'];
            if($con->query($updQry)){
                ?>
                <script>
                    alert("Password Updated")
                    window.location="LogOut.php"
                    </script>
                <?php
            }
        }
        
        else{
            ?>
            <script>
                alert('Something went wrong')
                    window.location="LogOut.php"
                </script>
            <?php
        }
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
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input[type="password"] {
            width: 285px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>


</head>
<body>

    <div class="form-container">
        <form action="" method="post">
            <div class="form-group">
                <label for="txt_pass">New Password</label>
                <input type="password" name="txt_pass" id="txt_pass">
            </div>
            <div class="form-group">
                <label for="txt_cpass">Confirm Password</label>
                <input type="password" name="txt_cpass" id="txt_cpass">
            </div>
            <div class="form-group">
                <input type="submit" name="btn_submit" value="Change Password">
            </div>
        </form>
    </div>

</body>
</html>