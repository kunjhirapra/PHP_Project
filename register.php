<?php
include 'database/db-connect.php';
$message = "";
$bg_color = "";
$f_name = $l_name = $email = $password = $cpassword = "";
$f_nameErr = $l_nameErr = $emailErr = $passwordErr  = $cpasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  function input_data($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  /// Validate first name
  if (empty($_POST["f_name"])) {
    $f_nameErr = "First name is required";
  } else {
    $f_name = input_data($_POST["f_name"]);
    if (!preg_match("/^[a-zA-Z]+$/", $f_name)) {
      $f_nameErr = "Only alphabets are allowed";
    }
  }

  // Validate last name
  if (empty($_POST["l_name"])) {
    $l_nameErr = "Last name is required";
  } else {
    $l_name = input_data($_POST["l_name"]);
    if (!preg_match("/^[a-zA-Z]+$/", $l_name)) {
      $l_nameErr = "Only alphabets are allowed";
    }
  }

  // Validate email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = input_data($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid Email format";
    }
  }
  // Checking if email exists
  // $query = "SELECT * FROM user_data WHERE email= '$email' ";
  // $query_run = mysqli_query($conn, $query);
  // if(mysqli_num_rows($query_run) > 0){
  //   $emailErr = "Email already exists try another one!";
  // }

  // Validate password
  if ($_POST["password"] === $_POST["cpassword"]) {
    if (empty($_POST["password"])) {
      $passwordErr = "Password is required";
    } else {
      $password = input_data($_POST["password"]);
      if (strlen($password) < 6 || strlen($password) > 14) {
        $passwordErr = "Password must be between 6 and 14 characters long";
      }
    }
    if (empty($_POST["cpassword"])) {
      $cpasswordErr = "Confirm Password is required";
    } else {
      $cpassword = input_data($_POST["cpassword"]);
      if (strlen($cpassword) < 6 || strlen($cpassword) > 14) {
        $cpasswordErr = "Confirm Password must be between 6 and 14 characters long";
      }
    }
  } else {
    $cpasswordErr = "Password and Confirm Password did not match try again!";
  }

  // If no errors, insert into database
  if ($f_nameErr == "" && $l_nameErr == "" && $emailErr == "" && $passwordErr == "" && $cpasswordErr == "") {
    $encryptedPassword = md5($password);
    $stmt = $conn->prepare("INSERT INTO user_data (f_name, l_name, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $f_name, $l_name, $email, $encryptedPassword);

    if ($stmt->execute()) {
      // echo "<p class='msg success'>Account created successfully!</p>";
      $message = "Account created successfully!";
      $bg_color = "alert-success";
    } else {
      // echo "<p class='msg error'>Error: " . $stmt->error . "</p>";
      $message = $stmt->error;
      $bg_color = "alert-danger";
    }
    $stmt->close();
    $conn->close();
  } else {
    // echo "<p class='error'>Sorry! Registraion failed please try again</p>";
    $message = "Sorry! Registraion failed, please try again";
    $bg_color = "alert-danger";
  }
}
?>


<?php include "header.php"; ?>
<section class="register-page">
  <div class="page-title text-center">Register</div>
  <div class="container py-65 line">
    <div class="content-box m-auto px-2">
      <?php echo "<div class='alert $bg_color alert-dismissible fade show' role='alert'>
      $message </div>"; ?>
      <h5 class="heading mb-20">Register</h5>
      <p class="mb-20">Sign up for early Sale access plus tailored new arrivals, trends and
        promotions. To opt out, click unsubscribe in our emails.</p>
      <form method="post" class="register-contact" id="registerform" action="register.php">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="f_name" placeholder="" name="f_name">
          <label for="f_name">First name *</label>
        </div>
        <?php echo "<p class='error'>$f_nameErr</p>"; ?>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="l_name" placeholder="" name="l_name">
          <label for="l_name">Last name *</label>
        </div>
        <?php echo "<p class='error'>$l_nameErr</p>"; ?>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" placeholder="" name="email">
          <label for="email">Email *</label>
        </div>
        <?php echo "<p class='error'>$emailErr</p>"; ?>

        <div class="form-floating">
          <input type="password" class="form-control " id="password" placeholder="" name="password">
          <label for="password">Password *</label>
        </div>
        <?php echo "<p class='error'>$passwordErr</p>"; ?>

        <div class="form-floating">
          <input type="password" class="form-control " id="cpassword" placeholder="" name="cpassword">
          <label for="cpassword">Confirm Password *</label>
        </div>
        <?php echo "<p class='error'>$cpasswordErr</p>"; ?>
        <div class="btn-wrap mt-5">
          <button type="submit" name="register" vlaue="Submit"
            class="btn d-flex justify-content-center w-100">Register</button>
        </div>
        <div class="text-center">
          <a href="login.php" class="forgot-link mt-4">
            Already have an account? Log in here <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 26 26"
              stroke-width="2" stroke="currentColor" class="up-right-arrow-icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
            </svg>
          </a>
        </div>
      </form>
    </div>
  </div>
</section>
<?php include "footer.php" ?>