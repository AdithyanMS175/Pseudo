<?php 
include('../Asset/connection/connection.php');
include('SessionValidator.php');
include('Header.php');
if(isset($_POST['btn_reg'])!=null)
{
    $name=$_POST["txt_name"];
    $email=$_POST["txt_email"];
    $password=$_POST["txt_pass"];
    $insqry="insert into tbl_admin(admin_email,admin_password,admin_name)values('$email','$password','$name')";
    if($con->query($insqry))
    {
      ?>
      <script>
        alert('Admin Registered');
      </script>
       <?php
    }
}

if(isset($_GET['did']))
{
    $delqry="delete from tbl_admin where admin_id='".$_GET['did']."'";
    if($con->query($delqry))
    {
        ?>
        <script>
        alert("Admin Removed")
        </script>
        <?php
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adminreg</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    table {
        border-collapse: collapse;
        width: 50%;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    input[type=text], input[type=password] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 10px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
    .container {
        padding: 16px;
    }
    .title {
        text-align: center;
        font-size: 24px;
        margin-top: 20px;
    }
</style>
</head>

<body>
<div class="title">Admin Registration</div>
<form id="form1" name="form1" method="post" action="">
  <table>
    <tr>
      <td>Name:</td>
      <td><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><label for="txt_pass"></label>
        <input type="password" name="txt_pass" id="txt_pass" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_reg" id="btn_reg" value="Register" /></td>
    </tr>
  </table>
  <br><br>
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Action</th>
    </tr>
    <?php
        $selqry="select * from tbl_admin";
        $admin=$con->query($selqry);
         $i=0;
         while($data=$admin->fetch_assoc())
            {
                $i++;
    ?>
    <tr>
      <td><?php echo $data['admin_name'] ?></td>
      <td><?php echo $data['admin_email'] ?></td>
      <td><?php echo $data['admin_password'] ?></td>
      <td><a href="Adminreg.php?did=<?php echo $data['admin_id'] ?>">Delete</a></td>
    </tr>
    <?php
            }
    ?>
  </table>
</form>
</body>
<?php include('Footer.php'); ?>
</html>
