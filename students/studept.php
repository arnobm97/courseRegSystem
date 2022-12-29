<?php
    include "../includes/header.php";
    include "../includes/navbar.php";
    include "../includes/dbConfig.php";
?>
      <div class="container">
      <form class="form-1" method="post">
        <h1>Register New user</h1>
        <label for="username">Username</label>
        <input type="text" name="uname" id="email" required />
        <label for="username">University ID</label>
        <input type="text" name="uid" id="email" required />
        <label for="username">Batch</label>
        <input type="text" name="batch" id="email" required />
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
        <label for="password">New Password</label>
        <input type="password" name="password" id="password" required />
        <label for="password">Confirm Password</label>
        <input type="password" name="cpassword" id="password" required />
        <input type="submit" name="submitbtn" value="Login" class="login-btn1"/>
      </form>
    </div>

    <?php

// Registration Backend

if (isset($_POST['submitbtn'])) {
  
    $u_signup_name  = mysqli_real_escape_string($mysqli, $_POST['uname']);
    $u_signup_password  = mysqli_real_escape_string($mysqli, $_POST['password']);
    $u_signup_cpassword = mysqli_real_escape_string($mysqli, $_POST['cpassword']);
    $u_signup_email     = mysqli_real_escape_string($mysqli, $_POST['email']);
    $u_signup_uid     = mysqli_real_escape_string($mysqli, $_POST['uid']);
    $u_signup_batch     = mysqli_real_escape_string($mysqli, $_POST['batch']);

    $email_sql = "SELECT * FROM $students WHERE email = '$u_signup_email'";

    $result  = mysqli_query($mysqli, $email_sql) or die(mysqli_error($mysqli));
    $numrows = mysqli_num_rows($result);

    if($numrows==0){
        if ($u_signup_password  == $u_signup_cpassword) {

            $sql = "INSERT IGNORE INTO $students (username,stuPass,stuEmail,universityID,batch) VALUES('$u_signup_name','$u_signup_password','$u_signup_email','$u_signup_uid','$u_signup_batch')";
            $mysqli->query($sql) or die($mysqli->error);
            header("Location: stuLogin.php");
            echo "<script>alert('Registration is completed. Now login to continue.')</script>";
        } else {
        echo "<script>alert('Password and Confirm Password is not matched.')</script>";
        }
    }
    else{
        echo "<script>alert('This email is already in use. Try a different one.');
        window.location='/coursereg/index.php';</script>";
    }


}
?>
<?php
    include "../includes/footer.php";
?>