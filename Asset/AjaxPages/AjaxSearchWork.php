<?php
include("../Connection/Connection.php");

if (isset($_GET["action"])) {

    $sqlQry = "SELECT * from tbl_work  p inner join tbl_subcat sc on sc.subcat_id=p.subcat_id inner join tbl_category c on c.category_id=sc.category_id   where  p.work_status='0' ";

    if ($_GET["category"] != null) {

        $category = $_GET["category"];

        $sqlQry = $sqlQry . " AND c.category_id IN(" . $category . ")";
    }
    if ($_GET["subcategory"] != null) {

        $subcategory = $_GET["subcategory"];

        $sqlQry = $sqlQry . " AND sc.subcat_id IN(" . $subcategory . ")";
    }

    if ($_GET["name"] != null) {

        $name = $_GET["name"];

        $sqlQry = $sqlQry . " AND (p.work_name LIKE '%" . $name . "%' 
                          OR sc.subcat_name LIKE '%" . $name . "%' 
                          OR c.category_name LIKE '%" . $name . "%')";
    }
    $resultS = $con->query($sqlQry);




?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-pane-all" role="tabpanel" aria-labelledby="tab-all" tabindex="0">
                        <div class="row mb-4">
                            <?php
                            if ($resultS->num_rows > 0) {
                                while ($rowS = $resultS->fetch_assoc()) {
                            ?>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                                        <a href="Work_Details.php?wid=<?php echo $rowS['work_id']; ?>">
                                            <div class="custom-block bg-white shadow-lg">

                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2"><?php echo $rowS['work_name'] ?></h5>
                                                        <p class="mb-0">₹<?php echo $rowS['work_price'] ?></p>
                                                        <p class="mb-0"><?php echo $rowS['subcat_name'] ?></p>
                                                    </div>
                                                    <!-- <span class="badge bg-design rounded-pill ms-auto">14</span> -->
                                                </div>
                                                <p class="mt-2"><?php echo substr($rowS['work_details'], 0, 100); ?>...</p> <!-- Description field -->


                                            </div>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
                            }
                        } else {
                            echo "<h4 align='center'>Products Not Found!!!!</h4>";
                        }
?>