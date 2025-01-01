<?php 
include('../Asset/Connection/Connection.php');

include('Header.php');

$freelan_id=$_SESSION['fid'];

if(isset($_POST['btn_submit']))
{
	
	$complaint=$_POST['txt_complaint'];
	$insqry="insert into tbl_complaint(freelan_id,complaint_details,complaint_date,request_id,complaint_status)values('$freelan_id','$complaint',curdate(),'".$_GET['rid']."','1')";
	if($con->query($insqry))
	{
        ?>
        <script>
            alert("Complaint Submitted");
			
        </script>
        <?php
	
	}
	else{
		?>
        <script>
            alert("complaint not submitted");
			
        </script>
        <?php
	}
}

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
<title>Freelan complaint</title>


<style>
        .table-container {
            width: 90%;
            margin: 20px auto;
        }
        .table thead th {
            background-color: #13547a;
            color: white;
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #ddd;
        }
        .table td, .table th {
            text-align: center;
            vertical-align: middle;
        }

        .form-container {
            width: 60%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
        .form-container h3 {
            text-decoration: underline;
            margin-bottom: 20px;
        }
        .form-container textarea {
            width: 100%;
            height: 300px;
        }
        
    </style>
</head>

<body>
<form id="frm_complaint" name="frm_complaint" method="post" action="">
<div class="container form-container">
    <form method="post" action="your_action_page.php">
        <h3 class="text-center">Complaint</h3>
        <div class="form-group">
            <textarea class="form-control" name="txt_complaint" id="txt_complaint" placeholder="Enter your complaint"></textarea>
        </div>
        <br>
        <div class="form-group text-center">
            <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="table-container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Sl No</th>
                <th scope="col">Work Name</th>
                <th scope="col">Client Name</th>
                <th scope="col">Complaint</th>
                <th scope="col">Date</th>
                <th scope="col">Reply</th>
                <th scope="col">Replied On</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $selqry="select * from tbl_complaint u inner join tbl_request j on u.request_id=j.request_id  inner join tbl_work p on j.work_id=p.work_id  inner join tbl_client c on p.client_id=c.client_id where u.freelan_id=".$_SESSION['fid'];
                $complaint=$con->query($selqry);
                $i=0;
                while($data=$complaint->fetch_assoc()) {
                    $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $data['work_name'] ?></td>
                <td><?php echo $data['client_name'] ?></td>
                <td><?php echo $data['complaint_details'] ?></td>
                <td><?php echo $data['complaint_date'] ?></td>
                <td><?php echo $data['complaint_reply'] ?></td>
                <td><?php echo $data['complaint_rdate'] ?></td>
                <td><a href="Freelancomplaint.php?did=<?php echo $data['complaint_id']?>" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
  <p>&nbsp;</p>
  
  
</form>


</body>

<?php
include('Footer.php');
?>

</html>