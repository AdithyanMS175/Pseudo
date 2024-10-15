<?php
include('../Asset/connection/connection.php');
include('SessionValidator.php');
include('Header.php');


if(isset($_POST['btn_save'])!=null)
{
	$district_name=$_POST['txt_districtname'];
	
	
	$check="select district_id from tbl_district where district_name='$district_name' ";
	
	$result=$con->query($check);
	
	if($result->num_rows>0) 
	{
	
		 echo "<script>alert('Place already exists!')</script>";
		 
	}
	else{
	
	$insqry="insert into tbl_district(district_name) values('$district_name')";
	if($con->query($insqry))
	{
    ?>
    <script>
    alert('District Inserted')
		window.location="District.php";
    </script>
    <?php
	}

 }

}


if(isset($_GET['did']))
{	
	$delqry="delete from tbl_district where district_id='".$_GET['did']."'";
	if($con->query($delqry))
	{
    ?>
    <script>
    alert('District Deleted')
		window.location="District.php";
    </script>
    <?php
	}
}





	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>District</title>

<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 20px;
  }
  table {
    border-collapse: collapse;
    margin: 20px auto;
    width: 80%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }
  th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
  }
  th {
    background-color: #343a40;
    color: white;
  }
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  tr:hover {
    background-color: #ddd;
  }
  input[type="text"] {
    width: calc(100% - 12px);
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  input[type="submit"], input[type="reset"] {
    padding: 10px 20px;
    margin: 10px;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
  }
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
  }
  input[type="reset"] {
    background-color: #f44336;
    color: white;
  }
  input[type="submit"]:hover, input[type="reset"]:hover {
    opacity: 0.8;
  }
  .form-container {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-radius: 8px;
  }
  .form-container h2 {
    text-align: center;
    color: #4CAF50;
  }
</style>



</head>

<body>
<div class="form-container">
  <h2 style="color:#343a40;">Add District</h2>
  <form action="" method="post" name="frm_submit">
    <table>
      <tr>
        <td>District name:</td>
        <td><label for="txt_districtname"></label>
        <input type="text" name="txt_districtname" id="txt_districtname" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" name="btn_save" id="btn_save" value="Save" />
          <input type="reset" name="btn_cancel" id="btn_cancel" value="Reset" />
        </td>
      </tr>
    </table>
  </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
<table>
  <tr>
    <th>Sl No</th>
    <th>District Name</th>
    <th>Action</th>
  </tr>
  <?php
  $selqry="select *from tbl_district";
  $district=$con->query($selqry);
  $i=0;
  while($data=$district->fetch_assoc())
  {
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $data['district_name'] ?></td>
    <td><a href="District.php?did=<?php echo $data['district_id'];?>" style="color: #f44336; text-decoration: none;">Delete</a></td>
  </tr>
  <?php  } ?> 
</table>
</div>
</body>

<?php

include('Footer.php');

?>


</html>