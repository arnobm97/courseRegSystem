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
      <h2>New Course Upload</h2>
      <label for="cour_name">Course Name</label>
      <input type="text" name="cour_name" class="input_field" required />
      <label for="assigned_teacher">Assigned Teacher</label>
      <input type="date" name="Assigned Teacher" class="input_field" required />
      <label for="cour_name">Course Start Date</label>
      <input type="date" name="cour_start" class="input_field" required />
      <label for="cour_name">Course End Date</label>
      <input type="text" name="cour_end" class="input_field" required />
      <label for="assigned_teacher">Course Fees</label>
      <input type="text" name="cour_fee" class="input_field" required />
      <input type="submit" name="loginbtn" value="Upload" class="login-btn1">
    </form>
  </div>
<?php
    include "../includes/footer.php";
?>