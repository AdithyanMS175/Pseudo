<?php
include('../Asset/Connection/Connection.php');

include('Header.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client My Profile</title>

<style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
    }
    .profile-container {
      max-width: 800px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .profile-table th {
      background-color: #007bff;
      color: #fff;
      font-size: 1.5em;
      text-align: center;
      border-radius: 8px;
    }
    .profile-table td {
      padding: 15px;
      font-size: 1.1em;
      border-radius: 8px;
    }
    .profile-table td.font-weight-bold {
      background-color: #f1f1f1;
      width: 30%;
      border-radius: 8px;
    }
    .profile-photo {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #007bff;
    }
    .profile-actions .btn {
      margin: 5px;
      width: 45%;
    }
  </style>


</head>

<body>
<div class="container profile-container">
    <form name="frm_profile" action="" method="POST">
      <table class="table table-bordered profile-table">
        <?php
          $selqry = "select * from tbl_client u 
          inner join tbl_place p on u.place_id = p.place_id 
          inner join tbl_district d on d.district_id = p.district_id where u.client_id=".$_SESSION['cid'];
          $client = $con->query($selqry);
          $data = $client->fetch_assoc();
        ?>
        <thead>
          <tr>
            <th colspan="2">My Profile</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="2" class="text-center"><img src="../Asset/Files/client/Photo/<?php echo $data['client_photo'] ?>" class="profile-photo" alt="Profile Photo"/></td>
          </tr>
          <tr>
            <td class="text-right font-weight-bold">Name:</td>
            <td><?php echo $data['client_name'] ?></td>
          </tr>
          <tr>
            <td class="text-right font-weight-bold">Email:</td>
            <td><?php echo $data['client_email'] ?></td>
          </tr>
          <tr>
            <td class="text-right font-weight-bold">Place:</td>
            <td><?php echo $data['client_dob'] ?></td>
          </tr>
          <tr>
            <td class="text-right font-weight-bold">Contact:</td>
            <td><?php echo $data['client_contact'] ?></td>
          </tr>
          <tr>
            <td class="text-right font-weight-bold">Address:</td>
            <td><?php echo $data['client_address'] ?></td>
          </tr>
          <tr>
            <td class="text-right font-weight-bold">District:</td>
            <td><?php echo $data['district_name'] ?></td>
          </tr>
          
          <tr>
            <td colspan="2" class="text-center profile-actions">
              <a href="../Client/Edit_profile.php" class="btn btn-primary">Edit</a>
              <a href="Clientchangepass.php" class="btn btn-secondary">Change Password</a>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
  <script src="../Asset/Templates/Main/js/jquery-3.5.1.slim.min.js"></script>
  <script src="../Asset/Templates/Main/js/popper.min.js"></script>
  <script src="../Asset/Templates/Main/js/bootstrap.min.js"></script>
</body>

<?php

include('Footer.php');

?>

</html>