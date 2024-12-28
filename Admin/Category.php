<?php
include('../Asset/connection/connection.php');

include('Header.php');

if (isset($_POST['btn_save']) != null) {


  $cat_name = $_POST['txt_category'];


  $check = "select category_id from tbl_category where category_name='$cat_name' ";

  $result = $con->query($check);

  if ($result->num_rows > 0) {

    ?>
    <script>

    alert("Category already exists!");
    </script>
    <?php
  } else {

    
    $insqry = "insert into tbl_category(category_name)values('$cat_name')";

    if ($con->query($insqry)) {

      ?>
      <script>

      alert("Category inserted");
      </script>
      <?php
    }
  }
}



if(isset($_GET['did']))
{	
	$delqry="delete from tbl_category where category_id='".$_GET['did']."'";
	if($con->query($delqry))
	{
    ?>
    <script>
    alert('Category Deleted')
		window.location="Category.php";
    </script>
    <?php
	}
}





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Category</title>
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

    input[type="text"] {
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
  <form id="form1" name="form1" method="post" action="">
    <h2 align="center">Add Category</h2>
    <table>
      <tr>
        <td>Category Name</td>
        <td><label for="txt_category"></label>
          <input type="text" name="txt_category" id="txt_category" />
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

  <br>
  <br>
  <br>
  <br>
  <h5>List of category</h5>

  <br>

  <form id="form2" name="form2" method="POST" action="">
    <table>
      <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Action</th>
      </tr>

      <?php
      $selqry = "SELECT * FROM tbl_category";
      $category = $con->query($selqry);
      $i = 1;
      while ($data = $category->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $i++ ?></td>
          <td><?php echo $data['category_name']; ?></td>
          <td><a href="Category.php?did=<?php echo $data['category_id'];?>" style="color: #f44336; text-decoration: none;">Delete</a></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </form>




</body>

<?php

include('Footer.php');

?>

</html>