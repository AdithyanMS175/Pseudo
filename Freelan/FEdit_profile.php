<?php

include('../Asset/Connection/Connection.php');

include('Header.php');

if (isset($_POST['btn_submit'])) {
    $Nname = $_POST['txt_name'];
    $Nemail = $_POST['txt_email'];
    $Ncontact = $_POST['txt_contact'];
    $Naddress = $_POST['txt_address'];

    $selqry = "SELECT * FROM tbl_freelan WHERE freelan_id=" . $_SESSION['fid'];
    $freelan = $con->query($selqry);
    $data = $freelan->fetch_assoc();

    $insqry = "UPDATE tbl_freelan SET freelan_name='$Nname', freelan_email='$Nemail', freelan_contact='$Ncontact', freelan_address='$Naddress' WHERE freelan_id=" . $_SESSION['fid'];
    if ($con->query($insqry)) {
        echo "<script>alert('Details changed successfully');</script>";
    } else {
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
                                <input type="text" name="txt_name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" title="Please enter a valid email address, e.g., example@domain.com" value="<?php echo $data['freelan_name']; ?>" id="txt_name" class="form-control" />
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txt_email">Email</label>
                                <input type="email" name="txt_email" onChange="emailCheck(this.value)" value="<?php echo $data['freelan_email']; ?>" id="txt_email" class="form-control"  />
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txt_contact">Contact</label>
                                <input type="text" name="txt_contact" value="<?php echo $data['freelan_contact']; ?>" id="txt_contact" pattern="[6-9]{1}[0-9]{9}" title="Please enter a valid 10-digit contact number starting with 6-9." class="form-control" />
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txt_address">Address</label>
                                <textarea name="txt_address" id="txt_address" cols="45" rows="5" required pattern="^[a-zA-Z0-9\s,.-]{10,}$" title="Address must be at least 10 characters long and can include letters, numbers, spaces, commas, periods, and hyphens." class="form-control" oninput="addressCheck(this.value)"><?php echo $data['freelan_address']; ?></textarea>
                                <span id="addresscheck" style="color: red;"></span>
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
            emailCheckSpan.textContent = alert('Invalid email format'); // Display error message
        }



    }

    function addressCheck(address) {
        const submitButton = document.getElementById('btn_submit');
        const addressCheckSpan = document.getElementById('addresscheck'); // Ensure this element exists

        if (address.trim() === "") {
            submitButton.setAttribute('disabled', 'true');
            addressCheckSpan.textContent = 'Address cannot be empty'; // Display an error message
        } else {
            const isValidAddress = /^[a-zA-Z0-9\s,.-]{10,}$/.test(address); // Regular expression for address format
            if (isValidAddress) {
                submitButton.removeAttribute('disabled');
                addressCheckSpan.textContent = ''; // Clear the error message
            } else {
                submitButton.setAttribute('disabled', 'true');
                addressCheckSpan.textContent = 'Invalid address format'; // Display an error message
            }
        }
    }
</script>

<?php
include('Footer.php');
?>

</html>