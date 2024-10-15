<?php
include('../Connection/Connection.php');
$email=$_GET['email'];
$selFQry= "select * from tbl_freelan where freelan_email='".$email."'";
$selAQry="select * from tbl_admin where admin_email='".$email."'";
$selCQry= "select * from tbl_client where client_email='".$email."'";
$resultF=$con->query($selFQry);
$resultA=$con->query($selAQry);
$resultC=$con->query($selCQry); 
if($resultF->num_rows>0)
{
    echo "EXISTS";
}
else if($resultA->num_rows>0)
{
    echo "EXISTS";
}
else if($resultC->num_rows>0)
{
    echo "EXISTS";
}
else{
    echo "NOT EXIST";
}
?>