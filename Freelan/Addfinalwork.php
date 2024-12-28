<?php 
include('../Asset/Connection/Connection.php');

include('Header.php');

if(isset($_POST['btn_submit']))
{
	$work=$_FILES['file']['name'];
	$tempwork=$_FILES['file']['tmp_name'];
	move_uploaded_file($tempwork,'../Asset/Files/Work/Mainwork/'.$work);
	
	$insqry="UPDATE tbl_work SET work_final='$work' where work_id=".$_GET['rid'];
	$update="Update tbl_request set status='3' where work_id=".$_GET['rid'];
	if($con->query($insqry) && $con->query($update))
	{
		?>
		<script>
		alert('Completed Work Submitted Sucessfully')
		window.location="Myworks.php";
		</script>
	<?php
	
	}
	
	else{
		
		?>
		
		<script>
		alert('Failed')
		</script>
        
        <?php
	}
		
}

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallary</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="538" height="359" border="1" align="center">
    <tr>
      <td height="64" align="center">Upload Completed Work</td>
    </tr>
    <tr>
      <td height="238" align="center"><label for="file"></label>
      <input type="file" name="file" id="file" /></td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>

<?php

include('Footer.php')

?>

</html>