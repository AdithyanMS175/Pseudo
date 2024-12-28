<?php
include('../Asset/Connection/Connection.php');

include('Header.php');




	$selqry="select * from  tbl_work where client_id=".$_SESSION['cid'];
		$work=$con->query($selqry);
		$datamain=$work->fetch_assoc();
		

if(isset($_POST['btn_add']))
{
	$Wname=$_POST['txt_workname'];
	$Details=$_POST['txt_details'];
	$category=$_POST['sel_cat'];
	$subcat=$_POST['sel_subcat'];
	$price=$_POST['txt_price'];
	$document=$_FILES['fileField']['name'];
	$tempdocument=$_FILES['fileField']['tmp_name'];
	move_uploaded_file($tempdocument,'../Asset/Files/Client/Workdocs/'.$document);
	
	
	$insqry="UPDATE tbl_work SET work_name='$Wname', work_details='$Details', work_doc='$document', work_price='$price',subcat_id='$subcat' WHERE client_id=".$_SESSION['cid'];
		if($con->query($insqry))
		{
			?>
			<script>
			alert("Work Details changed");
			</script>
		
        	<?php
		}
			else{
					?>
			<script>
			alert("Work Details not changed")
			</script>
		
        	<?php
				}
	
}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Work</title>
</head>


<style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }
    </style>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 form-container">
                <h2>Edit Work</h2>
                <form action="" method="post" enctype="multipart/form-data" name="workadd" id="frm_workadd">
                    <div class="form-group">
                        <label for="txt_workname">Work Name</label>
                        <input type="text" class="form-control" name="txt_workname" id="txt_workname" value="<?php echo $datamain['work_name'] ?>" />
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="txt_details">Details</label>
                        <textarea class="form-control" name="txt_details" id="txt_details" cols="45" rows="5"><?php echo $datamain['work_details'] ?></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="sel_cat">Category</label>
                        <select class="form-control" name="sel_cat" id="sel_cat" onChange="getsubcat(this.value)">
                            <?php
                                $selqry="select * from tbl_category";
                                $category=$con->query($selqry);
                                while($data=$category->fetch_assoc())
                                {
                                    $i++;
                            ?>
                            <option value="<?php echo $data['category_id']?>"><?php echo $data['category_name'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="sel_subcat">Sub Category</label>
                        <select class="form-control" name="sel_subcat" id="sel_subcat">
                            <option value="select">-----Select-----</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="txt_price">Price</label>
                        <input type="text" class="form-control" name="txt_price" id="txt_price" value="<?php echo $datamain['work_price'] ?>" />
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="fileField">Document:</label>
                        <input type="file" class="form-control-file" name="fileField" id="fileField" />
                    </div>
                    <br>
                    <div class="text-center">
                        <input type="submit" class="btn btn-custom" name="btn_add" id="btn_add" value="Edit" />
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="../Asset/Templates/Main/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../Asset/Templates/Main/js/popper.min.js"></script>
    <script src="../Asset/Templates/Main/js/bootstrap.min.js"></script>
</body>
<script src="../Asset/JQ/jQuery.js"></script>
<script>
  function getsubcat(did) {
    $.ajax({
      url: "../Asset/AjaxPages/Ajaxsubcat.php?did=" + did,
      success: function (result) {

        $("#sel_subcat").html(result);
      }
    });
  }
</script>

<?php
include('Footer.php');

?>

</html>