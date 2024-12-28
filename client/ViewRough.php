<?php
include('../Asset/Connection/Connection.php');

include('Header.php');






?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Rough</title>
</head>

<body>
<div class="container mt-5">
    <form id="form1" name="form1" method="post" action="">
        <div class="row">
            <?php 
            $selqry="select * from tbl_gallary where work_id=".$_GET['rgh'];
            $rough=$con->query($selqry);
            $i=0;
            while($data=$rough->fetch_assoc()) {
                $i++;
            ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="../Asset/Files/Work/Rough/<?php echo $data['gallary_photo'] ?>" class="card-img-top" alt="Rough Work Image">
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </form>
</div>
</body>
<?php
include('Footer.php');

?>
</html>