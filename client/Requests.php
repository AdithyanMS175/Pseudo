<?php
include('../Asset/Connection/Connection.php');
include('SessionValidator.php');
include('Header.php');




if(isset($_GET['rej']))
{
	
	$insqry="UPDATE tbl_request SET status='2' where request_id=".$_GET['rej'];
	if($con->query($insqry))
	{
		?>
			<script>
			alert("Rejected")
			window.location="Requests.php";
			</script>
		
        	<?php
	}
	
}

if(isset($_GET['act']))
{
    $selqqry="select work_id from tbl_request where request_id=".$_GET['act']."";
    $result=$con->query($selqqry);
    $data = $result->fetch_assoc();
    $work_id = $data['work_id'];
	
	$up1="UPDATE tbl_request SET status='1',agreement_date=curdate() where request_id=".$_GET['act'];
    $con->query($up1);
    $up2="update tbl_work set work_status='1' where work_id=".$work_id;
    $con->query($up2);

	if($con->query($up1) && $con->query($up2))
	{
		?>
			<script>
			alert("Accepted")
			window.location="Requests.php";
			</script>
		
        	<?php
	}
	
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Requests</title>

<style>
.table thead th {
            background-color: #13547a;
            color: white;
  }


</style>


</head>

<body>
<div class="container mt-5">
    <h3 class="text-center">Work Requests</h3>
    <form id="form1" name="form1" method="post" action="">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th width="49" class="text-center">Sl No</th>
                    <th width="249" class="text-center">Work Name</th>
                    <th width="201" class="text-center">Freelancer Name</th>
                    <th width="176" class="text-center">Price</th>
                    <th width="155" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $selqry="select * from tbl_request u 
                 inner join tbl_work p on u.work_id = p.work_id 
                 inner join tbl_freelan s on u.freelan_id = s.freelan_id where u.status='0' and p.client_id=".$_SESSION["cid"];
                $req=$con->query($selqry);
                $i=0;
                while($data=$req->fetch_assoc()) {
                    $i++;
                ?>
                <tr>
                    <td class="text-center"><?php echo $i ?></td>
                    <td class="text-center"><?php echo $data['work_name'] ?></td>
                    <td class="text-center"><?php echo $data['freelan_name'] ?></td>
                    <td class="text-center"><?php echo $data['work_price'] ?></td>
                    <td class="text-center">
                        <a href="Requests.php?act=<?php echo $data['request_id']?>" class="btn btn-success btn-sm">Accept</a>
                        <a href="Requests.php?rej=<?php echo $data['request_id'];?>" class="btn btn-danger btn-sm">Reject</a>
                        
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </form>
</div>


<?php
include('Footer.php');

?>
</html>