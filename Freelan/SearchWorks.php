<?php
ob_start();

include("../Asset/Connection/Connection.php");
include('Header.php');

?>


<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Browse Works</title>
    <link rel="stylesheet" href="../Asset/Templates/Search/bootstrap.min.css">
</head>

<body onload="productCheck()">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <h5>Filter</h5>
                <hr>
                <h6 class="text-info"> Search</h6>
                <ul class="list-group">

                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="text" onkeyup="productCheck()" class="product_check" id="txt_name">
                            </label>
                        </div>
                    </li>
                </ul>
                <br />
                <h6 class="text-info"> Select Category</h6>
                <ul class="list-group">
                    <?php
                    $selCat = "SELECT * from tbl_category";
                    $result = $con->query($selCat);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" onclick="changeSub(),productCheck()"
                                        class="form-check-input product_check" value="<?php echo $row["category_id"]; ?>"
                                        id="category"><?php echo $row["category_name"]; ?>
                                </label>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <br />

            </div>
            <div class="col-lg-9">
                <h5 class="text-center" id="textChange">All Works</h5>
                <hr>
                <div class="text-center">
                    <img src="../Asset/Templates/Search/loader.gif" id='loder' width="200" style="display: none" />
                </div>
                <div class="row" id="result">
                </div>

            </div>

        </div>
    </div>
    <script src="../Asset/Templates/Search/jquery.min.js"></script>
    <script src="../Asset/Templates/Search/bootstrap.min.js"></script>
    <script src="../Asset/Templates/Search/popper.min.js"></script>
    <script>
        function changeSub() {
            var cat = get_filter_text('category');
            if (cat.length !== 0) {
                $.ajax({
                    url: "../Asset/AjaxPages/AjaxSearchSubCat.php?did=" + cat,
                    success: function(response) {
                        $("#subcat").html(response);
                    }
                });

            } else {
                $("#subcat").html("");
            }


            function get_filter_text(text_id) {
                var filterData = [];

                $('#' + text_id + ':checked').each(function() {
                    filterData.push("\'" + $(this).val() + "\'");
                });
                return filterData;
            }
        }




        function productCheck() {
            $("#loder").show();

            var action = 'data';
            var category = get_filter_text('category');
            var subcategory = get_filter_text('subcategory');
            var name = document.getElementById('txt_name').value;



            $.ajax({
                url: "../Asset/AjaxPages/AjaxSearchWork.php?action=" + action + "&category=" + category + "&subcategory=" + subcategory + "&name=" + name,
                success: function(response) {
                    $("#result").html(response);
                    $("#loder").hide();
                    $("#textChange").text("Browse Works");
                }
            });


        }



        function get_filter_text(text_id) {
            var filterData = [];

            $('#' + text_id + ':checked').each(function() {
                filterData.push($(this).val());
            });
            return filterData;
        }
    </script>
</body>
<?php
include('Footer.php');
ob_flush();

?>

</html>