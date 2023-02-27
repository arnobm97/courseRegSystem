<?php
session_start();
include "../includes/header.php";
include "../includes/dbConfig.php";
?>

<div class="container">
  <form class="form-1" method="post">
    <h2>Admin Login</h2>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required />
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required />
    <input type="submit" name="loginbtn" value="Login" class="login-btn1">
  </form>
</div>

<?php
if (isset($_POST['loginbtn'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $loginsql = "SELECT * FROM $admin WHERE adminEmail = '$email' AND adminPass = '$pass'";
  $result = $mysqli->query($loginsql) or die($mysqli->error);
  $row = mysqli_num_rows($result);
  $data = mysqli_fetch_assoc($result);

  if ($row > 0) {
    $_SESSION['username_admin'] = $data['adminName'];
    echo "<script>window.location='/coursereg/admin/adminfeed.php'</script>";
  } else {
    echo "<script>
    alert('Wrong username or password');
    window.location ='/coursereg/admin/adminlogin.php';
    </script>";
  }

}
?>
<?php
include "../includes/footer.php";
?>