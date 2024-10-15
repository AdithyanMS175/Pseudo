<?php
include('../Asset/Connection/Connection.php');
include('SessionValidator.php');
include('Header.php');

if(isset($_POST['btn_submit']))
{
	$oldpass = $_POST['txt_oldpass'];
	$newpass = $_POST['txt_newpass'];
	$repass = $_POST['txt_renewpass'];
	
	$selqry = "select * from  tbl_client where client_id=".$_SESSION['cid'];
	$dbpass = $con->query($selqry);
	$data = $dbpass->fetch_assoc();
	$dbpass = $data['client_password'];
	
	if($oldpass == $dbpass)
    {
        if($newpass == $repass)
        {
            $insqry = "UPDATE tbl_client SET client_password='$newpass' WHERE client_id=" . $_SESSION['cid'];
            if($con->query($insqry))
            {
                echo "<script> alert('Password updated successfully'); </script>";
            }
            else
            {
                echo "<script> alert('Password not changed'); </script>";
            }
        }
        else
        {
            echo "<script> alert('New passwords do not match'); </script>";
        }
    }
    else
    {
        echo "<script> alert('Old password is incorrect'); </script>";
    }
}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
</head>

<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Change Password</h3>
                </div>
                <div class="card-body">
                    <form id="form1" name="form1" method="post" action="">
                        <div class="form-group">
                            <label for="txt_oldpass">Old Password</label>
                            <input type="password" name="txt_oldpass" id="txt_oldpass" class="form-control" placeholder="Enter Old Password"/>
                        </div>
						<br>
                        <div class="form-group">
                            <label for="txt_newpass">New Password</label>
                            <input type="password" name="txt_newpass" id="txt_newpass" class="form-control" placeholder="Enter New Password"/>
                        </div>
						<br>
                        <div class="form-group">
                            <label for="txt_renewpass">Re-Type Password</label>
                            <input type="password" name="txt_renewpass" id="txt_renewpass" class="form-control" placeholder="Re-Type Password"/>
                        </div>
						<br>
                        <div class="text-center">
                            <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary">Change Password</button>
                            <button type="reset" name="btn_cancel" id="btn_cancel" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
include('Footer.php');

?>
</html>
