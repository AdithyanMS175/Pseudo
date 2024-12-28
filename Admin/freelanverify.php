<?php
include('../Asset/connection/connection.php');

include('Header.php');

if(isset($_GET['act']))
{
	$up="UPDATE tbl_freelan SET freelan_status='1' where freelan_id='".$_GET['act']."'";
	if($con->query($up))
	{
	?>
    
<script>
	alert('Accepted');
	</script>

	<?php
	}

}

if(isset($_GET['rej']))
{
	$up="UPDATE tbl_freelan SET freelan_status='2' where freelan_id='".$_GET['rej']."'";
	if($con->query($up))
	{
	?>
    
	<script>
	alert('Rejected');
	</script>

	<?php
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freelan Verification</title>



<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .table th, .table td {
      vertical-align: middle;
    }
    
    .action-buttons a {
      display: block;
      margin-bottom: 5px;
    }


    .table .thead-dark th {
    color: #fff;
    background-color: #242f3a;
    border-color: #454d55;
}
  </style>


</head>

<body>
  <div class="container mt-5">
  <h2> Freelancer Verify</h2>
    <form action="" method="post" name="frm_Fverify">
      <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Place</th>
            <th scope="col">Address</th>
            <th scope="col">Photo</th>
            <th scope="col">Proof</th>
            
            <th scope="col">Date of Birth</th>
            <th scope="col">Contact</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          $selqry="select * from tbl_freelan u 
          inner join tbl_place j on u.place_id=j.place_id where freelan_status='0' ";
          $freelan=$con->query($selqry);
          while($data=$freelan->fetch_assoc())
          {
            $i++;
          ?>
          <tr>
            <td><?php echo $i ?></td>
            
            <td><?php echo $data['freelan_name'] ?></td>
            <td><?php echo $data['freelan_email'] ?></td>
            <td><?php echo $data['place_name'] ?></td>
            <td><?php echo $data['freelan_address'] ?></td>
            <td><a href="../Asset/Files/Freelan/Photo/<?php echo $data['freelan_photo'] ?>"><img src="../Asset/Files/Freelan/Photo/<?php echo $data['freelan_photo'] ?>" width="75" height="75"  /></a></td>
            <td><a href="../Asset/Files/Freelan/Proof/<?php echo $data['freelan_proof'] ?>"><img src="../Asset/Files/Freelan/Proof/<?php echo $data['freelan_proof'] ?>" width="75" height="75"  /></a></td>
            
            <td><?php echo $data['freelan_dob'] ?></td>
            <td><?php echo $data['freelan_contact'] ?></td>
            <td class="action-buttons">
              <a href="freelanverify.php?act=<?php echo $data['freelan_id'] ?>" class="btn btn-success btn-sm">Accept</a>
              <a href="freelanverify.php?rej=<?php echo $data['freelan_id'] ?>" class="btn btn-danger btn-sm">Reject</a>
            </td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </form>
  </div>
  <!-- Bootstrap JS and dependencies -->
  <script src="../Asset/Templates/Main/js/core/jquery-3.5.1.slim.min.js"></script>
  <script src="../Asset/Templates/Main/js/core/popper.min.js"></script>
  <script src="../Asset/Templates/Main/js/plugins/bootstrap.min.js"></script>
</body>
<?php
include('Footer.php');


?>


</html>