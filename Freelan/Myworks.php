<?php
include('../Asset/Connection/Connection.php');

include('Header.php');

if(isset($_GET['com'])) {
    $update = "UPDATE tbl_request SET status='3' WHERE request_id=" . $_GET['com'];
    if($con->query($update)) {
        echo '<script>alert("Work Completed")</script>';
    }
}

$selqry = "SELECT * FROM tbl_request r 
           INNER JOIN tbl_work w ON r.work_id = w.work_id  
           INNER JOIN tbl_client c ON w.client_id = c.client_id 
           WHERE freelan_id=" . $_SESSION['fid'];
$mywork = $con->query($selqry);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Works</title>
<link rel="stylesheet" href="../Asset/Templates/Main/extra/bootstrap.min.css">
<style>
    .card {
        margin-bottom: 20px;
        
        transition: box-shadow 0.3s ease;
    }
    .card:hover {
        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }
    .card-body {
        padding: 20px;
    }
    .badge {
        font-size: 0.8rem;
    }
</style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">My Works</h2>
    <div class="row">
        <?php while($data = $mywork->fetch_assoc()): ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['work_name']; ?></h5>
                        <p class="card-text">
                            <strong>Price:</strong> ₹<?php echo $data['work_price']; ?><br>
                            <strong>Client:</strong> <?php echo $data['client_name']; ?><br>
                            <strong>Contact:</strong> <?php echo $data['client_contact']; ?>
                        </p>
                        <hr>
                        <p>
                            <?php if($data['status'] == 1): ?>
                                <span class="badge badge-success">Accepted</span>
                            <?php elseif($data['status'] == 2): ?>
                                <span class="badge badge-danger">Rejected</span>
                            <?php elseif($data['status'] == 3): ?>
                                <span class="badge badge-primary">Completed (Not Paid)</span>
                            <?php elseif($data['status'] == 4): ?>
                                <span class="badge badge-success">Paid</span>
                            <?php else: ?>
                                <span class="badge badge-warning">Pending</span>
                            <?php endif; ?>
                        </p>
                        <a href="Chat.php?id=<?php echo $data['client_id']; ?>" class="btn btn-info btn-sm">Chat</a>
                        
                        <?php if($data['status'] == 1): ?>
                            <a href="Gallary.php?rid=<?php echo $data['request_id']; ?>" class="btn btn-secondary btn-sm">Add Photo</a>
                            <a href="Addfinalwork.php?rid=<?php echo $data['work_id']; ?>" class="btn btn-success btn-sm">Complete</a>
                            <a href="Freelancomplaint.php?rid=<?php echo $data['request_id']; ?>" class="btn btn-warning btn-sm">Complaint</a>
                        <?php elseif($data['status'] == 3): ?>
                            <a href="Freelancomplaint.php?rid=<?php echo $data['request_id']; ?>" class="btn btn-warning btn-sm">Complaint</a>
                           
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

</body>
<?php
include('Footer.php');
?>
</html>
