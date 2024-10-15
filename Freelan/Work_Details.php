<?php
include('../Asset/Connection/Connection.php');
include('SessionValidator.php');
include('Header.php');








if (isset($_GET['did'])) {
    $did = $_GET['did'];


    $insqry = "INSERT INTO tbl_request(freelan_id, work_id, request_date) VALUES ('" . $_SESSION['fid'] . "', '$did', curdate())";
    if ($con->query($insqry)) {
        ?>
                <script>
                    alert("Requested");
                    window.location = "SearchWorks.php";
                </script>
        <?php
            }
   
    
}
$selqry = "select * from tbl_work u inner join tbl_client p on u.client_id=p.client_id where work_id=" . $_GET['wid'];
$work = $con->query($selqry);
$data = $work->fetch_assoc();

?>


<style>
    .cardh-main {
        border-radius: 25px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: fit-content;
        height: fit-content;
        min-width: 500px;
        min-height: 300px;


    }

    .cardh {

        
        transition: 0.3s;
        
        height: fit-content;
    }


    .cardh:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }


    .containerh {
        padding: 5px 20px;
    }
</style>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Work Details</title>
</head>

<body>
    <div class="container mt-5" style="display:flex;justify-content: center;align-items: center;">
        <form id="form1" name="form1" method="post" action="">
            <div class="cardh-main">
                <div class="cardh-header text-center">
                    <h2>Work Details</h2>
                </div>
                <div class="cardh-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Work Name</td>
                            <td><?php echo $data['work_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Client</td>
                            <td><?php echo $data['client_name'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><strong>Details</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="cardh">
                                    <div class="containerh">
                                        <?php echo $data['work_details'] ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <td><?php echo $data['work_price'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">
                                <a href="../Asset/Files/Client/workdocs/<?php echo $data['work_doc'] ?>" download class="btn btn-primary">Download</a>
                                <?php
                                $check = "select work_id from tbl_request where freelan_id=" . $_SESSION['fid'] . " and work_id=" . $_GET['wid'];
                                $result = $con->query($check);

                                if ($result->num_rows > 0) {
                                ?>
                                    <script>
                                        alert("You can only request a work at once");
                                    </script>
                                <?php
                                } else {
                                ?>
                                    <a href="Work_Details.php?did=<?php echo $data['work_id']; ?>" class="btn btn-success ml-3">Request</a>
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>
</body>

<?php
include('Footer.php');

?>

</html>