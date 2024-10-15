<?php
include('../Asset/connection/connection.php');
if (isset($_POST['btn_submit'])) {
  $name = $_POST['txt_name'];
  $email = $_POST['txt_email'];
  $Gender = $_POST['txt_gender'];
  $address = $_POST['txt_address'];
  $date = $_POST['date'];
  $contact = $_POST['txt_contact'];
  $password = $_POST['txt_password'];
  $confirmpass = $_POST['txt_confirmpass'];
  $place = $_POST['selplace'];
  $photo = $_FILES['photo']['name'];
  $tempphoto = $_FILES['photo']['tmp_name'];
  move_uploaded_file($tempphoto, '../Asset/Files/Client/Photo/' . $photo);
  $proof = $_FILES['proof']['name'];
  $tempproof = $_FILES['proof']['tmp_name'];
  move_uploaded_file($tempproof, '../Asset/Files/Client/Proof/' . $proof);
  $insQry = "insert into tbl_client(client_name,client_email,place_id,client_address,client_photo,client_proof,client_password,client_dob,
  client_contact,client_gender) values('$name','$email','$place','$address','$photo','$proof','$password','$date','$contact','$Gender')";
  if ($confirmpass == $password) {
    if ($con->query($insQry)) {
?>
      <script>
        alert('Client Registration Successfull')
        window.location = '../index.php';
      </script>
    <?php
    } else {
    ?>
      <script>
        alert('Client Registration Failed')
      </script>
    <?php
    }
  } else {
    ?>
    <script>
      alert("Password Doesn't Match")
    </script>
<?php
  }
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Client Registration</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url("../Asset/Templates/Main/images/waterfall-rocks-4k-ch.jpg");

      /* Center and scale the image nicely */
      background-position: fit;
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white !important;
    }


    input,
    select {
      color: black !important;
    }

    /* Glassmorphism card effect */
    /* Ultra-transparent glassmorphism effect */
    .card {
      backdrop-filter: blur(1px) saturate(180%);
      -webkit-backdrop-filter: blur(12px) saturate(180%);
      /* Safari compatibility */
      background-color: rgba(255, 255, 255, 0.2);
      /* A whisper-thin glass color */
      border-radius: 12px;
      border: 1px solid rgba(209, 213, 219, 0.3);
      /* Subtle border for elegance */
      max-width: 600px;
      width: 100%;
      margin: 20px;
      padding: 20px;
    }

    .card h3 {
      text-align: center;
      margin-bottom: 10;
    }

    .form-group {
      margin-bottom: 15px;
      margin-top: 10px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: calc(100% - 12px);
      padding: 8px;
      border: 1px solid #ced4da;
      border-radius: 4px;
      font-size: 16px;
    }

    .form-group textarea {
      resize: vertical;
    }

    .form-control-file {
      display: block;
      margin-top: 5px;
    }

    .text-center {
      text-align: center;
    }

    .btn {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .valid {
      color: green;
    }

    .invalid {
      color: red;
    }

    .gender-options {
      display: flex;
      gap: 15px;
    }

    .gender-options input[type="radio"] {
      display: none;
    }

    .gender-options label {
      padding: 10px 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s, border-color 0.3s;
    }

    .gender-options input[type="radio"]:checked+label {
      background-color: #007bff;
      border-color: #007bff;
      color: #fff;
    }

    .gender-options input[type="radio"]#male:checked+label {
      background-color: #007bff;
      border-color: #007bff;
    }

    .gender-options input[type="radio"]#female:checked+label {
      background-color: #ff69b4;
      border-color: #ff69b4;
    }



    .gender-options label:hover {
      background-color: #e9ecef;
    }

    input[type=text],
    [type=email],
    [type=date],
    [type=password],
    [type=file],
    [type=tel] {
      background-color: transparent;
      color: white !important;
    }

    textarea {
      background-color: transparent;
      color:white !important;
    }

    select {
      color:white !important;
      background-color: transparent;
    }

    option {
      -webkit-appearance: none;
      background-color: black;
    }


  






  </style>

</head>

<body>

  <body>
    
    <div class="card">
    <a href="../index.php" style="color:white" align="top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
      </svg></a>
      <h3 style="color:white">Client Registration</h3>
      <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <div class="form-group">
          <label for="txt_name" style="color:white">Name</label>
          <input type="text" name="txt_name" id="txt_name" required oninput="nameCheck(this.value)" />
          <span id="namecheck"></span>
        </div>
        <div class="form-group">
          <label for="txt_email" style="color:white">Email</label>
          <input type="email" name="txt_email" id="txt_email" required onChange="emailCheck(this.value)" />
          <span id="emailcheck"></span>
        </div>


        <div class="form-group">
          <label for="gender" style="color:white">Gender</label>
          <div class="gender-options">
            <input type="radio" name="txt_gender" id="male" value="Male" required>
            <label for="male">Male</label>
            <input type="radio" name="txt_gender" id="female" value="Female" required>
            <label for="female">Female</label>
          </div>
        </div>







        <div class="form-group">
          <label for="seldistrict" style="color:white">District</label>
          <select name="seldistrict" id="seldistrict" required onChange="getPlace(this.value)">
            <option value="select">-----select-----</option>
            <?php
            $selqry = "select * from tbl_district";
            $district = $con->query($selqry);
            while ($data = $district->fetch_assoc()) {
              $i++;
            ?>
              <option value="<?php echo $data['district_id'] ?>"><?php echo $data['district_name'] ?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="selplace" style="color:white">Place</label>
          <select name="selplace" id="selplace" required>
            <option value="select">-----select-----</option>
          </select>
        </div>
        <div class="form-group">
          <label for="txt_address" style="color:white">Address</label>
          <textarea name="txt_address" id="txt_address" cols="45" rows="5" required></textarea>
        </div>
        <div class="form-group">
          <label for="date" style="color:white">Date of Birth</label>
          <input type="date" name="date" id="dateInput" required />
        </div>
        <div class="form-group">
          <label for="txt_contact" style="color:white">Contact No</label>
          <input type="tel" name="txt_contact" id="txt_contact" required oninput="contactCheck(this.value)" pattern="[6-9]{1}[0-9]{9}"/>
          <span id="contactcheck"></span>
          <span id="clength" class="invalid">length should be 10 and begin with number between 6 and 9  </span><br />
        </div>
        <div class="form-group">
          <label for="photo" style="color:white">Photo</label>
          <input type="file" name="photo" id="photo" class="form-control-file" required  />
         
        </div>
        <div class="form-group">
          <label for="proof" style="color:white">Proof</label>
          <input type="file" name="proof" id="proof" class="form-control-file" required />
        </div>
        <div class="form-group">
          <label for="txt_password" style="color:white">Password</label>
          <input type="password" name="txt_password" id="txt_password" required oninput="passCheck(this.value)" />
          <span id="passcheck">
            <span id="uppercase" class="invalid">At least one uppercase letter</span><br />
            <span id="lowercase" class="invalid">At least one lowercase letter</span><br />
            <span id="number" class="invalid">At least one number</span><br />
            <span id="length" class="invalid">Length of password should be in between 6 to 16</span><br />
          </span>
        </div>
        <div class="form-group">
          <label for="txt_confirmpass" style="color:white">Confirm Password</label>
          <input type="password" name="txt_confirmpass" id="txt_confirmpass" required />
        </div>
        <div class="text-center">
          <input type="submit" class="btn" name="btn_submit" id="btn_submit" value="Submit" />
        </div>
      </form>
    </div>


    <script src="../Asset/JQ/jQuery.js"></script>
    <script>
      document.getElementById('dateInput').setAttribute('max', new Date().toISOString().split('T')[0]);

      function getPlace(did) {
        $.ajax({
          url: "../Asset/AjaxPages/AjaxPlace.php?did=" + did,
          success: function(result) {

            $("#selplace").html(result);
          }
        });
      }

      function emailCheck(email) {
        const submitButton = document.getElementById('btn_submit');
        const isValidEmail = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/.test(email);
        const emailCheckSpan = document.getElementById('emailcheck');

        if (isValidEmail) {
          submitButton.removeAttribute('disabled');
          emailCheckSpan.textContent = ''; // Clear any previous error message
          $.ajax({
            url: "../Asset/AjaxPages/AjaxEmail.php?email=" + email,
            success: function(result) {
              if (result == "EXISTS") {
                submitButton.setAttribute('disabled', 'true');
                emailCheckSpan.textContent = 'Email already exists'; // Display error message
              } else {
                submitButton.removeAttribute('disabled');
                emailCheckSpan.textContent = ''; // Enable the submit button
              }

            }
          });
        } else {
          submitButton.setAttribute('disabled', 'true');
          emailCheckSpan.textContent = 'Invalid email format'; // Display error message
        }



      }

      function nameCheck(name) {
        const submitButton = document.getElementById('btn_submit');
        const isValidName = /^[A-Z][a-zA-Z ]{1,}$/.test(name); // Regular expression for capital first letter and minimum length of 2
        const nameCheckSpan = document.getElementById('namecheck');

        if (isValidName) {
          submitButton.removeAttribute('disabled');
          nameCheckSpan.textContent = ''; // Enable the submit button
        } else {
          submitButton.setAttribute('disabled', 'true'); // Disable the submit button
          nameCheckSpan.textContent = 'Invalid Name'; // Display an error message
        }
      }

     




      function passCheck(password) {

        const submitButton = document.getElementById('btn_submit');
        const uppercase = document.getElementById('uppercase');
        const lowercase = document.getElementById('lowercase');
        const number = document.getElementById('number');
        const length = document.getElementById('length');



        const uppercasePattern = /[A-Z]/;
        const lowercasePattern = /[a-z]/;
        const numberPattern = /[0-9]/;
        const lengthPattern = /^.{6,16}$/;

        if (lengthPattern.test(password)) {

          length.classList.add('valid');
          length.classList.remove('invalid');

        } else {

          length.classList.remove('valid');
          length.classList.add('invalid');

        }

        if (uppercasePattern.test(password)) {
          uppercase.classList.add('valid');
          uppercase.classList.remove('invalid');


        } else {
          uppercase.classList.remove('valid');
          uppercase.classList.add('invalid');

        }

        if (lowercasePattern.test(password)) {

          lowercase.classList.remove('invalid');
          lowercase.classList.add('valid');

        } else {
          lowercase.classList.remove('valid');
          lowercase.classList.add('invalid');

        }

        if (numberPattern.test(password)) {
          number.classList.remove('invalid');
          number.classList.add('valid');

        } else {
          number.classList.remove('valid');
          number.classList.add('invalid');

        }

        if (uppercasePattern.test(password) && numberPattern.test(password) && lowercasePattern.test(password) && lengthPattern.test(password)) {
          submitButton.removeAttribute('disabled');
        } else {
          submitButton.setAttribute('disabled', 'true');
        }


      }

      function contactCheck(contact) {
        const clength = document.getElementById('clength');
        console.log("Length: " + typeof(length));
        const lengthPattern = /^[6-9][0-9]{9}$/;

        if (lengthPattern.test(contact)) {
          clength.classList.add('valid');
          clength.classList.remove('invalid');
        } else {
          clength.classList.remove('valid');
          clength.classList.add('invalid');
        }



      }


      //own hiding rules

      function showPassCheck() {
        document.getElementById('passcheck').style.display = 'block';
      }

      function hidePassCheck() {
        const passcheck = document.getElementById('passcheck');
        const invalidElements = passcheck.getElementsByClassName('invalid');
        if (invalidElements.length === 0) {
          passcheck.style.display = 'none';
        }
      }

      function showContactCheck() {
        document.getElementById('contactcheck').style.display = 'block';
      }

      function hideContactCheck() {
        const contactcheck = document.getElementById('contactcheck');
        const invalidElements = contactcheck.getElementsByClassName('invalid');
        if (invalidElements.length === 0) {
          contactcheck.style.display = 'none';
        }
      }











      // function validateForm() {
      //   var name = document.getElementById("txt_name").value;
      //   var email = document.getElementById("txt_email").value;
      //   var password = document.getElementById("txt_password").value;
      //   var contact = document.getElementById("txt_contact").value;

      //   if (name == "" || email == "" || password == "" || contact == "") {
      //     alert("All fields are required");
      //     return false;
      //   }

      //   // Validate email format
      //   var emailRegex = [a - z0 - 9._ % + -] + @[a - z0 - 9. - ] + \.[a - z] {
      //     2,
      //     4
      //   }
      //   $;
      //   if (!emailRegex.test(email)) {
      //     alert("Invalid email address");
      //     document.getElementById("emailcheck") value="Email pattern doesn't match";
      //     return false;
      //   }

      //   // Validate password length
      //   if (password.length < 6) {
      //     alert("Password must be at least 6 characters long");
      //     return false;
      //   }

      //   // Validate contact number
      //   var contactRegex = /^\d{10}$/;
      //   if (!contactRegex.test(contact)) {
      //     alert("Invalid contact number");
      //     return false;
      //   }

      //   return true;
      // }
    </script>

</html>