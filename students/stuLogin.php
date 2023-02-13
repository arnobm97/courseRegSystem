<?php
include "../includes/header.php";
include "../includes/navbar.php";
include "../includes/dbConfig.php";
session_start();
?>
<div class="container">
  <form class="form-1" method="post">
    <h2>Students Login</h2>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required />
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required />
    <input type="submit" value="Login" name="stulogin" class="login-btn1">
  </form>
</div>

<?php

if (isset($_POST['stulogin'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $loginsql = "SELECT * FROM $students WHERE stuEmail = '$email' AND stuPass = '$pass'";
  $result = $mysqli->query($loginsql) or die($mysqli->error);
  $row = mysqli_num_rows($result);
  $data = mysqli_fetch_assoc($result);

  if ($row > 0) {
    $_SESSION['username'] = $data['username'];
    echo "<script>window.location='/coursereg/students/stuFeed.php'</script>";
  } else {
    echo "<script>
    alert('Wrong username or password');
    window.location ='/coursereg/students/stuLogin.php';
    </script>";
  }

}

?>
<?php
include "../includes/footer.php";
?>