<?php
include('../Asset/Connection/Connection.php');
include('SessionValidator.php');
include('Header.php');


if(isset($_GET['act']))
{
	
	$insqry="UPDATE tbl_request SET status='1',agreement_date=curdate() where request_id=".$_GET['act'];
	if($con->query($insqry))
	{
		?>
			<script>
			alert("Accepted")
			window.location="Rejected_list.php";
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
    <h3 class="text-center">Rejected Work Requests</h3>
    <form id="frm_rej" name="frm_rej" method="post" action="">
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
                $selqry = "select * from tbl_request u 
                inner join tbl_work p on u.work_id = p.work_id 
                inner join tbl_freelan s on u.freelan_id = s.freelan_id where status='2'";
                $req = $con->query($selqry);
                $i = 0;
                while($data = $req->fetch_assoc()) {
                    $i++;
                ?>
                <tr>
                    <td class="text-center"><?php echo $i ?></td>
                    <td class="text-center"><?php echo $data['work_name'] ?></td>
                    <td class="text-center"><?php echo $data['freelan_name'] ?></td>
                    <td class="text-center"><?php echo $data['work_price'] ?></td>
                    <td class="text-center">
                        <a href="Rejected_list.php?act=<?php echo $data['request_id']?>" class="btn btn-success btn-sm">Accept</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </form>
</div>
</body>

<?php
include('Footer.php');

?>
</html>