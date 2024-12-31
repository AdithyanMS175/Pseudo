<?php
include('../Asset/Connection/Connection.php');

include('Header.php');





if (isset($_POST['btn_add'])) {
  $Wname = $_POST['txt_workname'];
  $Details = $_POST['txt_details'];
  $category = $_POST['sel_cat'];
  $subcat = $_POST['sel_subcat'];
  $price = $_POST['txt_price'];
  $document = $_FILES['fileField']['name'];
  $tempdocument = $_FILES['fileField']['tmp_name'];
  move_uploaded_file($tempdocument, '../Asset/Files/Client/Workdocs/' . $document);


  $insqry = "insert into tbl_work(work_name,work_price,work_details,work_doc,client_id,subcat_id)values('$Wname','$price','$Details','$document','" . $_SESSION['cid'] . "','$subcat')";
  if ($con->query($insqry)) {
?>
    <script>
      alert("New work Added")
    </script>

  <?php

  }
}
if (isset($_GET['did']) != null) {

  $delqry = "delete from tbl_work where work_id='" . $_GET['did'] . "'";
  if ($con->query($delqry)) {
  ?>
    <script>
      alert("Work deleted")
    </script>

<?php
  }
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>CLient MyWork</title>
  <Style>
    .table thead th {
      background-color: #13547a;
      color: white;

    }
  </Style>



</head>

<body>
  <form action="" method="post" enctype="multipart/form-data" name="workadd" id="frm_workadd">
    <div class="container mt-5">
      <div class="card">
        <div class="card-header text-center">
          <h3>Add New Work</h3>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group row">
              <label for="txt_workname" class="col-sm-4 col-form-label">Work Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txt_workname" name="txt_workname" required />
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="txt_details" class="col-sm-4 col-form-label">Details</label>
              <div class="col-sm-8">
                <textarea class="form-control" id="txt_details" name="txt_details" rows="5" placeholder="explain in detail" required></textarea>
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="sel_cat" class="col-sm-4 col-form-label">Category</label>
              <div class="col-sm-8">
                <select class="form-control" id="sel_cat" name="sel_cat" onChange="getsubcat(this.value)" required>
                  <option value="select">-----Select-----</option>
                  <?php
                  $selqry = "select * from tbl_category";
                  $category = $con->query($selqry);
                  while ($data = $category->fetch_assoc()) {
                    $i++;
                    echo '<option value="' . $data['category_id'] . '">' . $data['category_name'] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="sel_subcat" class="col-sm-4 col-form-label">Sub Category</label>
              <div class="col-sm-8">
                <select class="form-control" id="sel_subcat" name="sel_subcat" required>
                  <option value="select">-----Select-----</option>
                </select>
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="txt_price" class="col-sm-4 col-form-label">Price</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" id="txt_price" name="txt_price" required placeholder="in rupees(₹)" pattern="[0-9]*" minlength="4" maxlength="7"/>
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="fileField" class="col-sm-4 col-form-label">Document</label>
              <div class="col-sm-8">
                <input type="file" class="form-control-file" id="fileField" name="fileField" required />
              </div>
            </div>
            <br>
            <div class="form-group row">
              <div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-primary" id="btn_add" name="btn_add">Add Work</button>
              </div>
            </div>
            <br>
          </form>
        </div>
      </div>
    </div>


    <br>
    <br>
    <div class="container">
      <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Work name</th>
            <th scope="col">Details</th>
            <th scope="col">Category</th>
            <th scope="col">Sub category</th>
            <th scope="col">Price(₹)</th>
            <th scope="col">Document</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $selqry = "select * from tbl_work u inner join tbl_subcat p on u.subcat_id = p.subcat_id inner join tbl_category d on d.category_id = p.category_id where u.client_id=" . $_SESSION['cid'];
          $client = $con->query($selqry);
          $i = 0;
          while ($data = $client->fetch_assoc()) {
            $i++;
          ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $data["work_name"] ?></td>
              <td><?php echo $data["work_details"] ?></td>
              <td><?php echo $data["category_name"] ?></td>
              <td><?php echo $data["subcat_name"] ?></td>
              <td>₹<?php echo $data["work_price"] ?></td>
              <td><?php echo $data["work_doc"] ?></td>
              <td>
                <a href="WorkAdd.php?did=<?php echo $data['work_id']; ?>" class="btn btn-danger">Delete</a>
                <a href="Edit_work.php" class="btn btn-primary">Edit</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </form>
</body>
<script src="../Asset/JQ/jQuery.js"></script>
<script>
  function getsubcat(did) {
    $.ajax({
      url: "../Asset/AjaxPages/Ajaxsubcat.php?did=" + did,
      success: function(result) {

        $("#sel_subcat").html(result);
      }
    });
  }
</script>
<?php

include('Footer.php');

?>

</html>