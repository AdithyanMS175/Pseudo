<?php
include('../Asset/Connection/Connection.php');
include('SessionValidator.php');
include('Header.php');

if (isset($_GET['rid'])) {
    $request_id = $_GET['rid'];

    $selqry = "SELECT * FROM tbl_request u 
               INNER JOIN tbl_work p ON u.work_id = p.work_id 
               INNER JOIN tbl_freelan s ON u.freelan_id = s.freelan_id 
               INNER JOIN tbl_client k ON p.client_id = k.client_id 
               WHERE u.request_id = $request_id";
    $req = $con->query($selqry);

    if ($req->num_rows > 0) {
        $data = $req->fetch_assoc();
    } else {
        echo "No data found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client and Developer Agreement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .containerh {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding: 20px;
        }
        .header, .footer {
            text-align: center;
        }
        .content {
            margin: 20px 0;
        }
        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>
    <div id="print-content">
        <div class="containerh">
            <div class="header" align="center">
                <h1><u> PSEUDO</u></h1>
                <p><strong><u>Client and Developer Agreement</u></strong></p>
                <p><strong>Kerala, India</strong></p>
            </div>
            <div class="content" align="center">
                <p><strong>This Client and Freelancer Agreement (the "Agreement") is effective <?php echo $data['agreement_date']; ?>,</strong></p>
                <p><STRONG>BETWEEN</STRONG>
                <strong><?php echo $data['client_name']; ?></strong>, a company organized and existing under the laws of the State of Kerala, with its head office located at:</p>
                <p><?php echo $data['client_address']; ?></p>
                
                <p><STRONG>AND</STRONG>&nbsp;<strong><?php echo $data['freelan_name']; ?></strong>, a Freelancer organized and existing under the laws of the State of Kerala,with his/her address located at</p>
                <p><?php echo $data['freelan_address']; ?></p>
                <p><strong>at the price of <?php echo $data['work_price']; ?></strong></p>
                <p>WHEREAS, Developer performs programming and systems analysis services;</p>
                <p>WHEREAS, Client desires to avail itself of Developer programming and systems analysis services. and</p>
                <p>WHEREAS, Client and Developer desire to establish standard terms and conditions that shall apply to such services to be performed by Developer for Client.</p>
                <p>NOW, THEREFORE, it is mutually agreed as follows:</p>
                <br><br><br><br><br><br><br>
                <h2>1. Definitions</h2>
                <p>As used throughout this Agreement, the following shall have the meanings below unless otherwise indicated:</p>
                <p>The term "Acceptance" shall have the meaning as defined in Section 5, hereto.</p>
                <p>The term "Affiliate" of a named Party means a corporation, partnership, joint venture or other entity controlling, controlled by or under common control with such Party. For the purposes hereof, the term "control" shall mean the possession, directly or indirectly, of the power to direct or cause the direction of the management and policies of any such entity whether through the ownership of voting securities, by contract or otherwise.</p>
                <p>[...]</p>
            </div>
            <div class="footer">
                <p>Phone: +91 8606627707 | Email: info@pseudo.com | Website: http://www.pseudo.com</p>
                <p>Verified by <strong>PSEUDO</strong></p>
            </div>
        </div>
    </div>
    <br>
    <div class="Print" align="center">
        <button onclick="printDiv('print-content')">Print</button>
    </div>
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
</body>
<?php
include('Footer.php');
?>
</html>