<?php
include('../Asset/connection/connection.php');

include('Header.php');


if (isset($_POST['btn_save']) != null) {
  $place_name = $_POST['txt_place'];
  $place_pincode = $_POST['txt_pincode'];
  $disId = $_POST["seldistrict"];

  $check = "select place_id from tbl_place where place_name='$place_name' ";

  $result = $con->query($check);

  if ($result->num_rows > 0) {

    echo "<script>alert(Place already exists!)</script>";
  } else {


    $insqry = "insert into tbl_place(place_name,place_pincode,district_id) values('$place_name','$place_pincode','$disId')";
    if ($con->query($insqry)) {
?>
      <script>
        alert("Place inserted");
        window.location = "Place.php";
      </script>
    <?php
    }
  }
}
if (isset($_GET['did']) != null) {

  $delqry = "delete from tbl_place where place_id='" . $_GET['did'] . "'";
  if ($con->query($delqry)) {
    ?>
    <script>
      alert("Place deleted");
      window.location = "Place.php";
    </script>
<?php
  }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Place</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="">
    <style>
      body {
        font-family: Arial, sans-serif;
      }

      table {
        border-collapse: collapse;
        margin: 20px auto;
        width: 60%;
      }

      table,
      th,
      td {
        border: 1px solid #ddd;
        padding: 8px;
      }

      th {
        background-color: #f2f2f2;
      }

      tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      tr:hover {
        background-color: #f1f1f1;
      }

      td {
        text-align: left;
      }

      select,
      input[type="text"],
      input[type="submit"],
      input[type="reset"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
      }

      input[type="submit"],
      input[type="reset"] {
        width: 45%;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
      }

      input[type="reset"] {
        background-color: #f44336;
      }

      input[type="submit"]:hover,
      input[type="reset"]:hover {
        opacity: 0.8;
      }

      .center {
        text-align: center;
      }
    </style>
    <h2 align="center">Add Place</h2>
    <table>
      <tr>
        <td>District</td>
        <td>
          <label for="seldistrict"></label>
          <select name="seldistrict" id="seldistrict">
            <option value="select">------select------</option>
            <?php
            $selqry = "select * from tbl_district";
            $district = $con->query($selqry);
            while ($data = $district->fetch_assoc()) {
              $i++;
            ?>
              <option value="<?php echo $data['district_id'] ?>"><?php
                                                                echo $data['district_name'] ?></option>

            <?php
            }
            ?>

          </select>
        </td>
      </tr>
      <tr>
        <td>Place</td>
        <td>
          <label for="txt_place"></label>
          <input type="text" name="txt_place" id="txt_place" />
        </td>
      </tr>
      <tr>
        <td>Pincode</td>
        <td>
          <label for="txt_pincode"></label>
          <input type="text" name="txt_pincode" id="txt_pincode" />
        </td>
      </tr>
      <tr>
        <td colspan="2" class="center">
          <input type="submit" name="btn_save" id="btn_save" value="Save" />
          <input type="reset" name="btn_cancel" id="btn_cancel" value="Reset" />
        </td>
      </tr>
    </table>

    <br><br>

    <table>
      <tr>
        <th>Sl No</th>
        <th>Place name</th>
        <th>Pincode</th>
        <th>District</th>
        <th>Action</th>
      </tr>
      <?php
      $selqry = "select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id";
      $place = $con->query($selqry);
      $i = 0;
      while ($data = $place->fetch_assoc()) {
        $i++;
      ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $data['place_name'] ?></td>
          <td><?php echo $data['place_pincode'] ?></td>
          <td><?php echo $data['district_name'] ?></td>
          <td><a href="Place.php?did=<?php echo $data['place_id']; ?>">Delete</a></td>
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