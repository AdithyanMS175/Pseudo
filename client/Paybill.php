<?php
include('../Asset/Connection/Connection.php');

include('Header.php');

$selqry = "select * from tbl_request u inner join tbl_work p on u.work_id = p.work_id inner join tbl_freelan s on u.freelan_id = s.freelan_id inner join tbl_client k on p.client_id = k.client_id where u.request_id=" . $_SESSION['rid'];
$req = $con->query($selqry);
$data = $req->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
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

        .header,
        .footer {
            text-align: center;
        }

        .details,
        .payment-details {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        .details td,
        .payment-details td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .details th,
        .payment-details th {
            border: 1px solid #ddd;
            padding: 8px;
            background-color: #f2f2f2;
        }

        .text-right {
            text-align: right;
        }
    </style>
</head>

<body>
    <div id="print-content">
        <div class="containerh" style=" width: 80%;margin: 0 auto;border: 1px solid #ddd;padding: 20px;">
            <div class="header">
                <h1>Payment Receipt</h1>
                <p>PSEUDO</p>
                <p>Kerala, India</p>
            </div>
            <table class="details" style="width: 100%;margin: 20px 0;border-collapse: collapse;">
                <tr>
                    <th style=" border: 1px solid #ddd;padding: 8px;background-color: #f2f2f2;">Payee</th>
                    <th style=" border: 1px solid #ddd;padding: 8px;background-color: #f2f2f2;">Invoice Date</th>

                </tr>
                <tr>
                    <td style=" border: 1px solid #ddd;padding: 8px;"><?php echo $data['client_name']; ?></td>
                    <td style=" border: 1px solid #ddd;padding: 8px;"><?php echo $data['payment_date']; ?></td>

                </tr>
            </table>
            <table class="details">
                <tr>
                    <th style=" border: 1px solid #ddd;padding: 8px;background-color: #f2f2f2;">Invoice Total</th>
                    <th style=" border: 1px solid #ddd;padding: 8px;background-color: #f2f2f2;">Paid</th>
                    <th style=" border: 1px solid #ddd;padding: 8px;background-color: #f2f2f2;">Due</th>
                </tr>
                <tr>
                    <td class="text-right" style="border: 1px solid #ddd;padding: 8px;"><?php echo $data['work_price']; ?></td>
                    <td class="text-right" style="border: 1px solid #ddd;padding: 8px;"><?php echo $data['work_price']; ?></td>
                    <td class="text-right" style="border: 1px solid #ddd;padding: 8px;"><?php echo $data['work_price']; ?></td>
                </tr>
            </table>
            <h2>Payment Details</h2>
            <table class="payment-details" style="width: 100%;margin: 20px 0;border-collapse: collapse;">
                <tr>
                    <th style=" border: 1px solid #ddd;padding: 8px;background-color: #f2f2f2;">Memo</th>
                    <th style=" border: 1px solid #ddd;padding: 8px;background-color: #f2f2f2;">Payment Date</th>
                    <th style=" border: 1px solid #ddd;padding: 8px;background-color: #f2f2f2;">Method</th>
                    <th style=" border: 1px solid #ddd;padding: 8px;background-color: #f2f2f2;">Amount</th>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;">Customer Payment: INV/2017/0002</td>
                    <td style="border: 1px solid #ddd;padding: 8px;"><?php echo $data['payment_date']; ?></td>
                    <td style="border: 1px solid #ddd;padding: 8px;">Bank</td>
                    <td class="text-right" style="border: 1px solid #ddd;padding: 8px;"><?php echo $data['work_price']; ?></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;">Customer Payment: INV/2017/0002</td>
                    <td style="border: 1px solid #ddd;padding: 8px;"><?php echo $data['payment_date']; ?></td>
                    <td style="border: 1px solid #ddd;padding: 8px;">Bank</td>
                    <td style="border: 1px solid #ddd;padding: 8px;" class="text-right"><?php echo $data['work_price']; ?></td>
                </tr>
            </table>
            <div class="footer">
                <p>Phone: +91 8606627707 | Email: info@pseudo.com | Website: http://www.Pseudo.com</p>
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