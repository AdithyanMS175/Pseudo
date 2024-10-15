<?php

include('../Asset/Connection/Connection.php');
include('SessionValidator.php');
include('Header.php');

if(isset($_POST['btn_submit']))
{
    $Nname = $_POST['txt_name'];
    $Nemail = $_POST['txt_email'];
    $Ncontact = $_POST['txt_contact'];
    $Naddress = $_POST['txt_address'];

    $selqry = "SELECT * FROM tbl_freelan WHERE freelan_id=" . $_SESSION['fid'];
    $freelan = $con->query($selqry);
    $data = $freelan->fetch_assoc();

    $insqry = "UPDATE tbl_freelan SET freelan_name='$Nname', freelan_email='$Nemail', freelan_contact='$Ncontact', freelan_address='$Naddress' WHERE freelan_id=" . $_SESSION['fid'];
    if($con->query($insqry))
    {
        echo "<script>alert('Details changed successfully');</script>";
    }
    else
    {
        echo "<script>alert('Details not changed');</script>";
    }
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profile</title>

</head>

<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Edit Profile</h3>
                </div>
                <div class="card-body">
                    <?php
                    $selqry = "SELECT * FROM tbl_freelan WHERE freelan_id=" . $_SESSION['fid'];
                    $freelan = $con->query($selqry);
                    $data = $freelan->fetch_assoc();
                    ?>
                    <form id="form1" name="form1" method="post" action="">
                        <div class="form-group">
                            <label for="txt_name">Name</label>
                            <input type="text" name="txt_name" pattern="[A-Z][a-zA-Z ]{1,}" value="<?php echo $data['freelan_name']; ?>" id="txt_name" class="form-control" />
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="txt_email">Email</label>
                            <input type="email" name="txt_email"onChange="emailCheck(this.value)" value="<?php echo $data['freelan_email']; ?>" id="txt_email" class="form-control" />
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="txt_contact">Contact</label>
                            <input type="text" name="txt_contact" value="<?php echo $data['freelan_contact']; ?>" id="txt_contact"  class="form-control" />
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="txt_address">Address</label>
                            <textarea name="txt_address" id="txt_address" cols="45" rows="5" class="form-control"><?php echo $data['freelan_address']; ?></textarea>
                        </div>
                        
                        <br>
                        <div class="text-center">
                            <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

<script>

function emailCheck(email) {
      const submitButton = document.getElementById('btn_submit');
      const isValidEmail = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/.test(email);
      const emailCheckSpan = document.getElementById('emailcheck');

      if (isValidEmail) {
        submitButton.removeAttribute('disabled');
        emailCheckSpan.textContent = ''; // Clear any previous error message
        $.ajax({
          url: "../Asset/AjaxPages/AjaxEmail.php?email=" + email,
          success: function(result) {
            if (result == "EXISTS") {
              submitButton.setAttribute('disabled', 'true');
              emailCheckSpan.textContent = 'Email already exists'; // Display error message
            } else {
              submitButton.removeAttribute('disabled');
              emailCheckSpan.textContent = ''; // Enable the submit button
            }

          }
        });
      } else {
        submitButton.setAttribute('disabled', 'true');
        emailCheckSpan.textContent = 'Invalid email format'; // Display error message
      }



    }


</script>

<?php
include('Footer.php');
?>
</html>
