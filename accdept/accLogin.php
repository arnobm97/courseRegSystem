<?php
    include "../includes/header.php";
    include "../includes/dbConfig.php";
?>

<?php

if (isset($_POST['loginbtn'])) {
  $u_signin_email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $u_signin_pass = mysqli_real_escape_string($mysqli, $_POST['password']);
  
  $sql = "SELECT * FROM $accounts WHERE email = '$u_signin_email' AND pass = '$u_signin_pass'";

  $result  = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
  $numrows = mysqli_num_rows($result);

  if ($numrows == 0) {
    echo "<script>alert('Wrong email or password');</script>";
  } else {
    session_start();
    $_SESSION['email'] = $u_signin_email;
    header("Location: accFeed.php");
  }
}

?>


  <div class="container">
    <form class="form-1" method="post">
      <h2>Account Dpt Login</h2>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required />
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required />
      <!-- <span>Forgot Password</span> -->
      <input type="submit" name="loginbtn" value="Login" class="login-btn1">
    </form>
  </div>
<?php
    include "../includes/footer.php";
?>
