<?php
include ('../Asset/connection/connection.php');
include ('SessionValidator.php');
include ('Header.php');

if (isset($_POST['btn_save']) != null) {
  $catid = $_POST["selcat"];
  $subcat_name = $_POST['txt_subcat'];

  $check = "select subcat_id from tbl_subcat where subcat_name='$subcat_name' ";
  $result = $con->query($check);

  if ($result->num_rows > 0) {

    ?>
    <script>
      alert('Subcategory already exist');
    </script>
    <?php
  }
  else{



  $insqry = "insert into tbl_subcat(subcat_name,category_id)values('$subcat_name','$catid')";
  if ($con->query($insqry)) {
   
   ?>
   <script>
   alert('Subcategory added successfully');
   window.location="SubCategory.php";
   </script>
   <?php
  }
}


}


if(isset($_GET['did']))
{	
	$delqry="delete from tbl_subcat where subcat_id='".$_GET['did']."'";
	if($con->query($delqry))
	{
    ?>
    <script>
    alert('SubCategory Deleted')
		window.location="SubCategory.php";
    </script>
    <?php
	}
}



?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Subcategory</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      height: fit-content;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 1px solid #ddd;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f4f4f4;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
    }

    input[type="submit"],
    input[type="reset"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      margin: 10px 5px;
      cursor: pointer;
      border-radius: 4px;
    }

    input[type="reset"] {
      background-color: #f44336;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
      opacity: 0.8;
    }
  </style>
</head>

<body>
  <form id="frm_subcat" name="frm_subcat" method="post" action="">
    <h2 align="center">Add SubCategory</h2>
    <table>
      <tr>
        <td>Category Name</td>
        <td>
          <select name="selcat" id="selcat">
            <option value="select">-------select-------</option>
            <?php
            $selqry = "select * from tbl_category";
            $subcategory = $con->query($selqry);
            $i = 0;
            while ($data = $subcategory->fetch_assoc()) {
              $i++;
              ?>
              <option value="<?php echo $data['category_id']; ?>"><?php echo $data['category_name'] ?></option>
              <?php
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Sub Category Name</td>
        <td>
          <input type="text" name="txt_subcat" id="txt_subcat" />
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" name="btn_save" id="btn_save" value="Save" />
          <input type="reset" name="btn_cancel" id="btn_cancel" value="Reset" />
        </td>
      </tr>
    </table>
  </form>
  <div></div>
  <br>
  <table>

    <tr>
      <th style="background-color:white;">#</th>
      <th style="background-color:white;">Category Name</th>
      <th style="background-color:white;">Sub Category Name</th>
      <th style="background-color:white;">Action</th>
    </tr>

    <?php

    $selqry = "SELECT * from tbl_subcat u INNER JOIN  tbl_category p on u.category_id=p.category_id ";
    $subcategory = $con->query($selqry);
    $i = 0;
    while ($data = $subcategory->fetch_assoc()) {
      $i++;
      ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $data['category_name'] ?></td>
        <td><?php echo $data['subcat_name'] ?></td>
        <td><a href="SubCategory.php?did=<?php echo $data['subcat_id']; ?>"
            style="color: #f44336; text-decoration: none;">Delete</a></td>
      </tr>
      <?php
    }
    ?>
  </table>
</body>

<?php

include ('Footer.php');

?>

</html>