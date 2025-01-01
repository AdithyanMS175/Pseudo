<?php
include('../Asset/connection/connection.php');
include('Header.php');
?>

<html>

<head>
    <title>Work List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .card-body {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table .text-center {
            text-align: center;
        }

        .table .text-uppercase {
            text-transform: uppercase;
        }

        .table .text-secondary {
            color: #6c757d;
        }

        .table .text-xxs {
            font-size: 0.75rem;
        }

        .table .font-weight-bolder {
            font-weight: bolder;
        }

        .table .opacity-7 {
            opacity: 0.7;
        }

        .table .avatar {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            object-fit: cover;
        }

        .table .avatar-group {
            display: flex;
            align-items: center;
        }

        .table .text-sm {
            font-size: 0.875rem;
        }

        .table .font-weight-bold {
            font-weight: bold;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-center {
            justify-content: center;
        }

        .align-items-center {
            align-items: center;
        }

        .px-2 {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        .py-1 {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }

        .me-3 {
            margin-right: 1rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mb-0 {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <div class="card-body px-0 pb-2">
        <h2 align="center">Work List</h2>
        <div class="table-responsive">

            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Freelancer</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Work Name</th>
                        <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Budget</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $selqry = "SELECT * FROM tbl_request u 
                    //        INNER JOIN tbl_work j ON u.work_id=j.work_id 
                    //        INNER JOIN tbl_freelan c ON u.freelan_id=c.freelan_id
                    //        INNER JOIN tbl_client k ON j.client_id=k.client_id";
                    $selqry = "SELECT * FROM tbl_work u
                                       LEFT JOIN tbl_request j ON u.work_id = j.work_id
                                       LEFT JOIN tbl_freelan c ON j.freelan_id = c.freelan_id
                                       LEFT JOIN tbl_client k ON u.client_id = k.client_id";
                    $result = $con->query($selqry);
                    while ($data = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <?php if (!empty($data['freelan_photo']) && !empty($data['freelan_name'])): ?>
                                        <div>
                                            <img src="../Asset/Files/Freelan/Photo/<?php echo $data['freelan_photo']; ?>" class="avatar avatar-sm me-3" alt="Freelancer Photo">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm"><?php echo $data['freelan_name']; ?></h6>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </td>
                            <td>
                                <div class="avatar-group mt-2">
                                    <?php echo $data['work_name'] ?>
                                </div>
                            </td>


                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../Asset/Files/Client/Photo/<?php echo $data['client_photo'] ?>" class="avatar avatar-sm me-3" alt="Client Photo">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm"><?php echo $data['client_name'] ?></h6>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-xs font-weight-bold"><?php echo $data['work_price'] ?></span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="text-xs font-weight-bold">
                                    <?php if ($data['status'] == 1) {
                                    ?>
                                        <span class="" style="color: #212529;">Accepted</span>

                                    <?php
                                    } else if ($data['status'] == 2) {
                                    ?>
                                        <span class="" style="color:black;">Rejected</span>
                                    <?php
                                    } else if ($data['status'] == 3) {
                                    ?>
                                        <span class="" style="color:black;">Completed</span>
                                    <?php
                                    } else if ($data['status'] == 4) {
                                    ?>
                                        <span class=" " style="color:black;">Paid</span>
                                    <?php
                                    } else {
                                    ?>
                                        <span class="" style="color:black;">Pending</span>
                                    <?php
                                    }
                                    ?>
                                </span>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<?php
include('Footer.php');
?>

</html>