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
        window.location = 'Login.php';
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
      color: white !important;
    }

    select {
      color: white !important;
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
      <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validateForm()">
        <div class="form-group">
          <label for="txt_name" style="color:white">Name</label>
          <input type="text" name="txt_name" id="txt_name" pattern="^[A-Z][a-zA-Z ]{1,}$" oninput="validateName()" required />
          <div class="error" id="nameError"></div>
        </div>
        <div class="form-group">
          <label for="txt_email" style="color:white">Email</label>
          <input type="email" name="txt_email" id="txt_email" oninput="validateEmail()" required />
          <span class="error" id="emailError"></span>

        </div>


        <div class="form-group">
          <label for="gender">Gender</label>
          <div class="gender-options">
            <input type="radio" name="txt_gender" id="male" value="Male">
            <label for="male">Male</label>
            <input type="radio" name="txt_gender" id="female" value="Female">
            <label for="female">Female</label>
            <span class="error" id="genderError"></span>
          </div>
        </div>







        <div class="form-group">
          <label for="seldistrict" style="color:white">District</label>
          <select name="seldistrict" id="seldistrict" required onChange="getPlace(this.value)">
            <option value="">-----select-----</option>
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
            <option value="">-----select-----</option>
          </select>
        </div>
        <div class="form-group">
          <label for="txt_address" style="color:white">Address</label>
          <textarea name="txt_address" id="txt_address" cols="45" rows="5" required></textarea>
          <span class="error" id="addressError"></span><br>
        </div>
        <div class="form-group">
          <label for="date" style="color:white">Date of Birth</label>
          <input type="date" name="date" id="dateInput" oninput="dobCheck()" required />
          <span class="error" id="DobError"></span><br>
        </div>
        <div class="form-group">
          <label for="txt_contact" style="color:white">Contact No</label>
          <input type="tel" name="txt_contact" id="txt_contact" oninput="validateContact()"
            pattern="[6-9]{1}[0-9]{9}" required />
          <span class="error" id="contactError"></span>
          <!-- <span id="contactcheck"></span>
          <span id="clength" class="invalid">length should be 10 and begin with number between 6 and 9  </span><br /> -->
        </div>
        <div class="form-group">
          <label for="photo" style="color:white">Photo</label>
          <input type="file" name="photo" id="photo" class="form-control-file" oninput="validatePhoto()" required />
          <span class="error" id="filephoto"></span>

        </div>
        <div class="form-group">
          <label for="proof" style="color:white">Proof</label>
          <input type="file" name="proof" id="proof" class="form-control-file" oninput="validateProof()" required />
          <span class="error" id="fileproof"></span>
        </div>
        <div class="form-group">
          <label for="txt_password" style="color:white">Password</label>
          <input type="password" name="txt_password" id="txt_password" oninput="validatePassword()" required />
          <span id="passwordError" class="invalid"></span><br />
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
      document.getElementById("dateInput").setAttribute("max", new Date().toISOString().split("T")[0]);

      function getPlace(did) {
        $.ajax({
          url: "../Asset/AjaxPages/AjaxPlace.php?did=" + did,
          success: function(result) {

            $("#selplace").html(result);
          }
        });
      }



      function validatePassword() {
        const password = document.getElementById("txt_password").value;
        const passwordError = document.getElementById("passwordError");

        const uppercasePattern = /[A-Z]/;
        const lowercasePattern = /[a-z]/;
        const numberPattern = /[0-9]/;
        const lengthPattern = /^.{6,16}$/;

        let missingCriteria = [];
        if (!uppercasePattern.test(password)) missingCriteria.push("at least one uppercase letter");
        if (!lowercasePattern.test(password)) missingCriteria.push("at least one lowercase letter");
        if (!numberPattern.test(password)) missingCriteria.push("at least one number");
        if (!lengthPattern.test(password)) missingCriteria.push("a length between 6 and 16 characters");

        if (missingCriteria.length > 0) {
          passwordError.textContent = "Password must contain " + missingCriteria.join(", ") + ".";
          passwordError.classList.add("error");
          return false;
        } else {
          passwordError.textContent = "";
          passwordError.classList.remove("error");
          return true;
        }
      }

      function validateName() {
        const name = document.getElementById("txt_name").value;
        const nameError = document.getElementById("nameError");

        if (/^[A-Z][a-zA-Z ]*$/.test(name)) {
          nameError.textContent = "";
          return true;
        } else {
          nameError.textContent = "Name must start with a capital letter and contain only alphabets.";
          return false;
        }
      }

      function validatePhoto() {
        const photoInput = document.getElementById("photo");
        const photoError = document.getElementById("filephoto");

        if (photoInput.files.length > 0) {
          photoError.textContent = "";
          return true;
        } else {
          photoError.textContent = "Please upload a photo.";
          return false;
        }
      }

      function validateProof() {
        const proofInput = document.getElementById("proof"); // Input field for proof
        const proofError = document.getElementById("fileproof"); // Span for error message

        if (proofInput.files.length > 0) {
          proofError.textContent = ""; // Clear error if a file is selected
          return true;
        } else {
          proofError.textContent = "Please upload an ID proof."; // Set error message if no file is selected
          return false;
        }
      }

      function validateContact() {
        const contact = document.getElementById("txt_contact").value;
        const contactError = document.getElementById("contactError");

        if (/^[6-9]\d{9}$/.test(contact)) {
          contactError.textContent = "";
          return true;
        } else {
          contactError.textContent = "Contact must start with 6, 7, 8, or 9 and be 10 digits.";
          return false;
        }
      }

      function validateEmail() {
        const email = document.getElementById("txt_email").value;
        const emailError = document.getElementById("emailError");

        if (/^[\w-.]+@gmail\.com$/.test(email)) {
          emailError.textContent = "";
          return true;
        } else {
          emailError.textContent = "Please enter a valid Gmail address.";
          return false;
        }
      }

      function validateGender() {
        const genderError = document.getElementById("genderError");
        const isGenderSelected = document.querySelector("input[name='txt_gender']:checked");

        if (isGenderSelected) {
          genderError.textContent = "";
          return true;
        } else {
          genderError.textContent = "Please select a gender.";
          return false;
        }
      }

      function validateAddress() {
        const address = document.getElementById("txt_address").value;
        const addressError = document.getElementById("addressError");

        if (/^[a-zA-Z0-9\s,.-]{10,}$/.test(address)) {
          addressError.textContent = "";
          return true;
        } else {
          addressError.textContent = "Invalid address format. It must be at least 10 characters long.";
          return false;
        }
      }

      function dobCheck() {
        const dob = document.getElementById("dateInput").value;
        const dobError = document.getElementById("DobError");

        if (/^\d{4}-\d{2}-\d{2}$/.test(dob)) {
          dobError.textContent = "";
          return true;
        } else {
          dobError.textContent = "Please enter a valid date of birth.";
          return false;
        }
      }

      function validateForm() {
        const validations = [
          validateName(),
          validateGender(),
          validateContact(),
          validateEmail(),
          validatePhoto(),
          validateProof(),
          validatePassword(),
          dobCheck(),
          validateAddress()
        ];

        console.log("Validation results:", validations);

        return validations.every((isValid) => isValid);
      }
    </script>

</html>