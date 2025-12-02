<?php
include 'database/db-connect.php';

session_start();

$message = "";
$bg_color = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  // Prepare and execute
  $stmt = $conn->prepare("SELECT f_name, password FROM user_data WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($username, $db_password);
    $stmt->fetch();

    if ($password === $db_password) {
      $message = "Login successful";
      $bg_color = "alert-success";
      // Start the session and redirect to the dashboard or home page

      $_SESSION['email'] = $email;
      $_SESSION['username'] = $username;
      header("Location: my-account.php");
      exit();
    } else {
      $message = "Incorrect password!";
      $bg_color = "alert-danger";
    }
  } else {
    $message = "Email not found";
    $bg_color = "alert-danger";
  }

  $stmt->close();
  $conn->close();
}
?>

<?php include "header.php"; ?>
<section class="login-page">
  <div class="page-title text-center">Log in</div>
  <div class="container">
    <div class="grid grid-2-cols grid-gap-md py-65 px-2 line">
      <div class="w-100">
        <?php echo "<div class='alert $bg_color alert-dismissible fade show' role='alert'>
      $message</div>"; ?>
        <h5 class="heading mb-36">Log in</h5>
        <form class="login-contact" id="loginform" action="" method="post">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" placeholder="" name="email">
            <label for="email">Email</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control " id="password" placeholder="" name="password">
            <label for="password">Password</label>
          </div>
          <a href="#" class="forgot-link mt-5">
            Forgot your password?
          </a>
          <div class="btn-wrap">
            <button type="submit" class="btn d-flex justify-content-center w-100">Log in</button>
          </div>
        </form>
      </div>
      <div class="w-100">
        <h5 class="heading mb-36">I'm new here</h5>
        <p class="mb-20">Sign up for early Sale access plus tailored new arrivals, trends and
          promotions. To opt out, click unsubscribe in our emails.</p>
        <a href="register.php" class="register-link">
          Register
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 26 26" stroke-width="2" stroke="currentColor"
            class="up-right-arrow-icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
<?php include "footer.php" ?>