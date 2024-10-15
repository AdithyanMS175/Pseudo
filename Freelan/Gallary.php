<?php 
include('../Asset/Connection/Connection.php');
include('SessionValidator.php');
include('Header.php');


if(isset($_POST['btn_submit']))
{
	$photo = $_FILES['file']['name'];
	$tempphoto = $_FILES['file']['tmp_name'];
	move_uploaded_file($tempphoto, '../Asset/Files/Work/Rough/'.$photo);
	
	$insqry = "INSERT INTO tbl_gallary(gallary_photo, work_id) VALUES('$photo', '".$_GET['rid']."')";
	if($con->query($insqry))
	{
		echo "<script>alert('Rough Draft uploaded successfully');</script>";
	}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery</title>


</head>

<body>
<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header text-center">
					<h3>Add Rough Draft</h3>
				</div>
				<div class="card-body">
					<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
						<div class="form-group">
							<label for="file">Upload File</label>
							<input type="file" name="file" id="file" class="form-control" />
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
