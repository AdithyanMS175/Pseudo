<?php
include('../Asset/connection/connection.php');
session_start();
if (isset($_POST['btn_save'])) {

  $email = $_POST['txt_email'];
  $password = $_POST['txt_password'];

  $selAdmin = "select * from tbl_admin  where admin_email='" . $email . "' and admin_password='" . $password . "'";
  $resultAdmin = $con->query($selAdmin);

  $selfreelan = "select * from tbl_freelan  where freelan_email='" . $email . "' and freelan_password='" . $password . "'";
  $resultfreelan = $con->query($selfreelan);

  $selClient = "select * from tbl_client  where client_email='" . $email . "' and client_password='" . $password . "' ";
  $resultClient = $con->query($selClient);


  if ($dataadmin = $resultAdmin->fetch_assoc()) {
    $_SESSION['aid'] = $dataadmin['admin_id'];
    $_SESSION['aName'] = $dataadmin['admin_name'];
    header('location:../Admin/HomepageA.php');
  } elseif ($datafreelan = $resultfreelan->fetch_assoc()) {
    $_SESSION['fid'] = $datafreelan['freelan_id'];
    $_SESSION['fph'] = $datafreelan['freelan_photo'];
    $_SESSION['FName'] = $datafreelan['freelan_name'];
    if ($datafreelan['freelan_status'] == 1) {
      header('location:../Freelan/HomepageU.php');
    } else if ($datafreelan['freelan_status'] == '2') {
?>
      <script>
        alert("Rejected");
      </script>
    <?php
    } else {

    ?>
      <script>
        alert("Pending");
      </script>
    <?php

    }
  } elseif ($dataclient = $resultClient->fetch_assoc()) {
    $_SESSION['cid'] = $dataclient['client_id'];
    $_SESSION['cph'] = $dataclient['client_photo'];
    $_SESSION['cName'] = $dataclient['client_name'];
    if ($dataclient['client_status'] == 1) {
      header('location:../client/HomepageC.php');
    } else if ($dataclient['client_status'] == '2') {
    ?>
      <script>
        alert("Rejected");
      </script>
    <?php
    } else {
    ?>
      <script>
        alert("Pending");
      </script>
    <?php
    }
  } else {

    ?>
    <script>
      alert("invalid credentials");
    </script>
<?php
  }
}

?>

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body><form action="" method="post" name="frm_login">
<table width="440" height="201" border="1" align="center">
  <tr>
    <td width="214">Email</td>
    <td width="210"><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label for="txt_password"></label>
      <input type="password" name="txt_password" id="txt_password" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="btn_save" id="btn_submit" value="Login"  />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="Forgotpass.php">Forgot Password</a></td>

  
    </tr>
</table>
</form>
</body>
</html> -->








<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="../Asset/Templates/Login/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Asset/Templates/Login/assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="../Asset/Templates/Login/assets/css/style.css" rel="stylesheet">

  <title>Sign In</title>
  <style>
    .new {
      display: block;
      text-align: left;
      margin-bottom: 20px;
      margin-left: 20px;
    }

    input[type='submit'] {
      border: none;
      color: white;
    }
  </style>



</head>

<body>
  <section class="form-08">
    <form action="" method="post">
      <div class="container">

        <div class="row">
          <div class="col-12">

            <div class="_form-08-main">

              <a href="../index.php" style="color:black" class="new">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                </svg>
              </a>
              <div class="_form-08-head">
                <h2>Welcome Back</h2>
              </div>

              <div class="form-group">
                <label>Enter Your Email</label>
                <input type="email" name="txt_email" class="form-control" type="text" placeholder="Enter Email" required="" aria-required="true">
              </div>

              <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="txt_password" id="password" class="form-control" type="text" placeholder="Enter Password" required="" aria-required="true">
<!-- 
                <button type="button" id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer;">
                  <i class="fa fa-eye"></i>
                </button> -->
              </div>

              <div class="checkbox mb-0 form-group">

                <a href="Forgotpassword.php">Forgot Password?</a>
              </div>

              <div class="form-group">

                <!-- <div class="_btn_04"> -->
                <input type="submit" class="_btn_04" name="btn_save" id="togglePassword" value="Login">
                <!-- <a href="#">Login</a> -->
                <!-- </div> -->
              </div>

              <div class="sub-01">
                <img src="../Asset/Templates/Login/assets/images/shap-02.png">
              </div>
            </div>

          </div>
        </div>
      </div>
    </form>
  </section>

  <script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
      // Toggle the type attribute
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);

      // Toggle the eye icon
      this.innerHTML = type === 'password' ? '<i class="fa fa-eye"></i>' : '<i class="fa fa-eye-slash"></i>';
    });
  </script>





</body>




</html>