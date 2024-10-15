<?php
include('../Asset/Connection/Connection.php');
include('SessionValidator.php');
include('Header.php');

if (isset($_GET['rej'])) {
    $insqry = "UPDATE tbl_request SET status='2' WHERE work_id=" . $_GET['rej'];
    if ($con->query($insqry)) {
?>
        <script>
            alert("Rejected");
            window.location = "Accepted_list.php";
        </script>
<?php
    }
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>My Works</title>
    
    <link rel="stylesheet" href="../Asset/Templates/Main/extra/bootstrap1.min.css">
    <style>
        .cardh {
            margin: 2rem 0;

            border: 1px solid #13547a;
            border-radius: 13px;
            box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);
        }

        .cardh:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .cardh-header {
            background-color: #13547a;
            border-radius: 13px;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px 8px 0 0;
        }

        .cardh-body {
            padding: 2rem;
        }

        .badge {
            font-size: 0.9rem;
        }

        .btn {
            margin-right: 0.5rem;
            margin-top: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>My Works</h2>
        <div class="row">
            <?php
            $selqry = "SELECT * FROM tbl_request u 
                   INNER JOIN tbl_work p ON u.work_id = p.work_id 
                   INNER JOIN tbl_freelan s ON u.freelan_id = s.freelan_id 
                   INNER JOIN tbl_client k ON p.client_id = k.client_id 
                   WHERE p.work_status = '1' AND status != '2' AND p.client_id=" . $_SESSION['cid'];
            $req = $con->query($selqry);
            while ($data = $req->fetch_assoc()) {
            ?>
                <div class="col-md-6">
                    <div class="cardh">
                        <div class="cardh-header">
                            <?php echo $data['work_name']; ?>
                        </div>
                        <div class="cardh-body">
                            <h5 class="cardh-title">Freelancer: <?php echo $data['freelan_name']; ?></h5>
                            <p class="cardh-text">Price: ₹<?php echo $data['work_price']; ?></p>
                            
                            <p class="cardh-text">
                                <?php
                            if ($data['status'] == 1) {
                                ?>
                                <span class="btn ">Accepted</span>
                                
                            <?php
                            } else if ($data['status'] == 2) {
                            ?>
                                <span class="badge badge-danger" style="color:black;">Rejected</span>
                            <?php
                            } else if ($data['status'] == 3) {
                            ?>
                             <span class="badge badge-info" style="color:black;">Completed</span>
                             <?php
                            } else if ($data['status'] == 4) {
                            ?>
                                <span class="btn " style="color:black;">Paid</span>
                            <?php
                              } else {
                                ?>
                                    <span class="badge badge-secondary">Pending</span>
                                <?php
                              }
                                ?>





                            </p>

                            <a class="btn btn-primary btn-sm" href="Chat.php?id=<?php echo $data['freelan_id']; ?>">Chat</a>
                           
                            <?php
                            if ($data['status'] == 1) {
                            ?>
                                <a class="btn btn-primary btn-sm mt-1" href="Agreement.php?rid=<?php echo $data['request_id']; ?>">Agreement</a>
                                <a class="btn btn-info btn-sm mt-1" href="ViewRough.php?rgh=<?php echo $data['request_id']; ?>">View Rough</a>
                                
                            <?php
                            } else if ($data['status'] == 2) {
                            ?>
                                
                            <?php
                            } else if ($data['status'] == 3) {
                            ?>
                               
                                <a class="btn btn-primary btn-sm mt-1" href="Payment.php?rid=<?php echo $data['request_id']; ?>">Payment</a>
                                <a class="btn btn-warning btn-sm mt-1" style="background-color:#ff0000;color:#fff;" href="Clientcomplaint.php?rid=<?php echo $data['request_id']; ?>">Complaint</a>
                                <a class="btn btn-info btn-sm mt-1" href="ViewRough.php?rgh=<?php echo $data['request_id']; ?>">View Rough</a>
                                <a class="btn btn-secondary btn-sm mt-1" style="background-color:#ffc107;color:#212529;" href="Rating.php?tid=<?php echo $data['freelan_id']; ?>">Rate</a>
                            <?php
                            } else if ($data['status'] == 4) {
                            ?>
                                
                                <a class="btn btn-success btn-sm mt-1" href="../Asset/Files/Work/Mainwork/<?php echo $data['work_final']; ?>" download>Download</a>
                                <a class="btn btn-warning btn-sm mt-1" style="background-color:#ff0000;color:#fff;" href="Clientcomplaint.php?rid=<?php echo $data['request_id']; ?>">Complaint</a>
                                <a class="btn btn-secondary btn-sm mt-1" style="background-color:#ffc107;color:#212529;" href="Rating.php?tid=<?php echo $data['freelan_id']; ?>">Rate</a>
                            <?php
                            } else {
                            ?>
                                
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<?php
include('Footer.php');
?>

</html>