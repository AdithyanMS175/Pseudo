<?php
include('../Asset/Connection/Connection.php');

include('Header.php');

if(isset($_POST['btn_submit']))
	{
		$Nname=$_POST['txt_name'];
		$Nemail=$_POST['txt_email'];
		$Ncontact=$_POST['txt_contact'];
		$Naddress=$_POST['txt_address'];
	
		$selqry="select * from  tbl_client where client_id=".$_SESSION['cid'];
		$client=$con->query($selqry);
		$data=$client->fetch_assoc();
		
		$insqry="UPDATE tbl_client SET client_name='$Nname', client_email='$Nemail', client_contact='$Ncontact', client_address='$Naddress' WHERE client_id=".$_SESSION['cid'];
		if($con->query($insqry))
			{
				echo "<script>alert('Details changed successfully');</script>";
			}
			else{
					echo "<script>alert('Details not changed');</script>";
				}
	
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client Edit Profile</title>
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
                    $selqry = "SELECT * FROM tbl_client WHERE client_id=" . $_SESSION['cid'];
                    $client = $con->query($selqry);
                    $data = $client->fetch_assoc();
                    ?>
                    <form id="form1" name="form1" method="post" action="">
                        <div class="form-group">
                            <label for="txt_name">Name</label>
                            <input type="text" name="txt_name" value="<?php echo $data['client_name']; ?>" id="txt_name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="txt_email">Email</label>
                            <input type="email" name="txt_email" value="<?php echo $data['client_email']; ?>" id="txt_email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="txt_contact">Contact</label>
                            <input type="text" name="txt_contact" value="<?php echo $data['client_contact']; ?>" id="txt_contact" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="txt_address">Address</label>
                            <textarea name="txt_address" id="txt_address" cols="45" rows="5" class="form-control"><?php echo $data['client_address']; ?></textarea>
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

<?php

include('Footer.php');
?>
</html>