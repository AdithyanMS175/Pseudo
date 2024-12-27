<?php
include('../Asset/connection/connection.php');

include('SessionValidator.php');

include('Header.php');

if (isset($_GET['act'])) {
    $up = "UPDATE tbl_client SET client_status='1' where client_id='" . $_GET['act'] . "'";
    if ($con->query($up)) {
?>

        <script>
            alert('Accepted');
        </script>

    <?php
    }
}

if (isset($_GET['rej'])) {
    $up = "UPDATE tbl_client SET client_status='2' where client_id='" . $_GET['rej'] . "'";
    if ($con->query($up)) {
    ?>

        <script>
            alert('Rejected');
        </script>

<?php
    }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Client Verification</title>

    <link rel="stylesheet" href="../Asset/Templates/Admin/assets/css/bootstrap.min.css">


    <style>
        .table-container {
            margin-top: 50px;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table img {
            max-width: 75px;
            max-height: 75px;
        }

        .action-links a {
            display: block;
            margin-bottom: 5px;
        }

        .row {

            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -60px;
        }
    </style>



</head>

<body>
    <div class="container table-container">
        <h2> Client Verification</h2>
        <form action="" method="post" name="frm_Cverify">
            <table class="table table-bordered table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Place</th>
                        <th scope="col" style="width:200px !important;">Address</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Proof</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $selqry = "select * from tbl_client u inner join tbl_place j on u.place_id=j.place_id where client_status='0'";
                    $client = $con->query($selqry);
                    while ($data = $client->fetch_assoc()) {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>

                            <td><?php echo $data['client_name'] ?></td>
                            <td><?php echo $data['client_email'] ?></td>
                            <td><?php echo $data['place_name'] ?></td>
                            <td><?php echo $data['client_address'] ?></td>
                            <td><a href="../Asset/Files/Client/Photo/<?php echo $data['client_photo'] ?>"><img src="../Asset/Files/Client/Photo/<?php echo $data['client_photo'] ?>" alt="Client Photo" /></a></td>
                            <td><a href="../Asset/Files/Client/Proof/<?php echo $data['client_proof'] ?>"><img src="../Asset/Files/Client/Proof/<?php echo $data['client_proof'] ?>" alt="Client Proof" /></a></td>

                            <td><?php echo $data['client_dob'] ?></td>
                            <td><?php echo $data['client_contact'] ?></td>
                            <td class="action-links">
                                <a href="Clientverify.php?act=<?php echo $data['client_id'] ?>" class="btn btn-success btn-sm">Accept</a>
                                <a href="Clientverify.php?rej=<?php echo $data['client_id'] ?>" class="btn btn-danger btn-sm">Reject</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="../Asset/Templates/Main/js/core/jquery-3.5.1.slim.min.js"></script>
    <script src="../Asset/Templates/Main/js/core/popper.min.js"></script>
    <script src="../Asset/Templates/Main/js/plugins/bootstrap.min.js"></script>
</body>

<?php
include('Footer.php');


?>

</html>