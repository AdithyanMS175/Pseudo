<?php
include('../Asset/Connection/Connection.php');
include('SessionValidator.php');
include('Header.php');

if(isset($_GET['did']))
{
	
	$delqry="delete from tbl_complaint where complaint_id='".$_GET['did']."'";
	if($con->query($delqry))
	{
		?>
			<script>
			alert("Complaint deleted")
			</script>
		
        	<?php
	}
	
}




?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Freelancer complaints</title>


<!-- Bootstrap CSS -->
<link href="../Asset/Templates/Admin/assets/css/bootstrap.min.css" rel="stylesheet">

<style>
    /* Custom styles */
    body {
        padding-top: 20px;
    }
    .container {
        padding: 20px;
    }
</style>

</head>

<body>
    <div class="container">
        <h2>Freelancer Complaints</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Work name</th>
                        <th>Freelancer name</th>
                        <th>Complaint</th>
                        <th>Reply</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    // Assuming $con is your database connection object
                    $selqry = "SELECT * FROM tbl_complaint u 
                               INNER JOIN tbl_request j ON u.request_id=j.request_id 
                               INNER JOIN tbl_work p ON j.work_id=p.work_id 
                               INNER JOIN tbl_freelan c ON u.freelan_id=c.freelan_id";
                    $complaint = $con->query($selqry);
                    $i = 0;
                    while ($data = $complaint->fetch_assoc()) {
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $data['work_name'] ?></td>
                        <td><?php echo $data['freelan_name'] ?></td>
                        <td><?php echo $data['complaint_details'] ?></td>
                        <td><?php echo $data['complaint_reply'] ?></td>
                        <td><?php echo $data['complaint_date'] ?></td>
                        <td>
                            <a href="ViewFreelancomp.php?did=<?php echo $data['complaint_id']?>" class="btn btn-danger btn-sm">Delete</a>
                            <a href="Reply.php?rep=<?php echo $data['complaint_id']?>" class="btn btn-primary btn-sm">Reply</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../Asset/Templates/Main/js/bootstrap.min.js"></script>
</body>
<?php

include('Footer.php');
?>

</html>