<?php 
include('../Asset/Connection/Connection.php');
include('SessionValidator.php');
include('Header.php');


if(isset($_POST['btn_submit']))
{
	$reply=$_POST['txt_reply'];
	$insqry="UPDATE tbl_complaint SET complaint_reply='$reply',complaint_status='2',complaint_rdate=curdate()  where complaint_id='".$_GET['rep']."'";
	if($con->query($insqry))
	{
		?>
		<script>
		alert('Replied')
    
		</script>
	<?php
	}
    
}





?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reply</title>

<style>
    body {
      background-color: #dee2e6;
      padding: 20px;
    }
    .form-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .table-custom {
      width: 100%;
    }
    .textarea-custom {
      
      width: 100%;
      height: 200px;
    }
  </style>





</head>

<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 form-container">
      <form id="form1" name="form1" method="post" action="">
        <div class="form-group text-center">
          <h3>Reply</h3>
        </div>
        <div class="form-group">
          <textarea name="txt_reply" id="txt_reply" class="form-control textarea-custom"></textarea>
        </div>
        <div class="form-group text-center">
          <input type="submit" name="btn_submit" id="btn_submit" value="Submit" class="btn btn-primary"/>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<?php

include('Footer.php');

?>
</html>