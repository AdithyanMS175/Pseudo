<?php
$name="";
$Fname="";
$Lname="";
$gender="";
$dept="";
$total="";
$pp="";
$grade="";
$m1="";
$m2="";
$m3="";
if(isset($_POST['btn_submit'])!=null)
{
	$Fname=$_POST['txt_Fname'];
	$Lname=$_POST['txt_Lname'];
	$gender=$_POST['gender'];
	$dept=$_POST['dept'];
	$m1=$_POST['txt_m1'];
	$m2=$_POST['txt_m2'];
	$m3=$_POST['txt_m3'];
	
	if($gender=="male")
	{
		$name="Mr.".$Fname."".$Lname;
	}
	else
	{
		$name="Mrs.".$Fname."".$Lname;
	}
	$total=$m1+$m2+$m3;
	$pp=($total/300)*100;
	if($pp>=90)
	{
		$grade="A+";
	}
	elseif($pp>=80)
	{
		$grade="A";
	}
	elseif($pp>70)
	{
		$grade="B+";
	}
	elseif($pp>=60)
	{
		$grade="B";
	}
	elseif($pp>=50)
	{
		$grade="C+";
	}
	elseif($pp>=40)
	{
		$grade="C";
	}
	elseif($pp<40)
	{
		$grade="Fail";
	}
	
}
	
		
	
	
	
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="418" height="408" border="1">
    <tr>
      <td width="206">First Name</td>
      <td width="196"><label for="txt_Fname"></label>
      <input type="text" name="txt_Fname" id="txt_Fname" /></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><label for="txt_Lname"></label>
      <input type="text" name="txt_Lname" id="txt_Lname" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="gender" id="gender" value="male" />
      <label for="gender">male</label>
      <input type="radio" name="gender" id="gender2" value="female" />
      <label for="gender2">female</label></td>
    </tr>
    <tr>
      <td>Dept</td>
      <td>
        <select name="dept" id="dept">
        <option>--select--</option>
        <option>CS</option>
        <option>Biology</option>
        
      </select></td>
    </tr>
    <tr>
      <td>M1</td>
      <td><label for="txt_m1"></label>
      <input type="text" name="txt_m1" id="txt_m1" /></td>
    </tr>
    <tr>
      <td>M2</td>
      <td><label for="txt_m2"></label>
      <input type="text" name="txt_m2" id="txt_m2" /></td>
    </tr>
    <tr>
      <td>M3</td>
      <td><label for="txt_m3"></label>
      <input type="text" name="txt_m3" id="txt_m3" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      <input type="reset" name="Cancel" id="Cancel" value="Cancel" /></td>
    </tr>
  </table>
  <br>
  <table width="420"  height="30%" border="1">
  <tr>
    <td width="212">Name</td>
    <td width="192"><?php echo $name ?></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><?php echo $gender ?> </td>
  </tr>
  <tr>
    <td>Dept</td>
    <td><?php echo $dept ?></td>
  </tr>
  <tr>
    <td>Total</td>
    <td><?php echo $total ?></td>
  </tr>
  <tr>
    <td>%</td>
    <td><?php echo $pp ?></td>
  </tr>
  <tr>
    <td>Grade</td>
    <td><?php echo $grade ?></td>
  </tr>
</table>

</form>
</body>
</html>