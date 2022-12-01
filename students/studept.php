<?php
    include "includes/header.php";
    include "includes/navbar.php";
?>
       <div class="container">
      <form class="form-1" method="post">
        <h1>Student Reg</h1>
        <label for="username">Username</label>
        <input type="text" name="uname" id="email" required />
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
        <label for="password">New Password</label>
        <input type="password" name="password" id="password" required />
        <label for="password">Confirm Password</label>
        <input type="password" name="password" id="password" required />
        <span>Forgot Password</span>
        <button class="login-btn1">Login</button>

      

      </form>
    </div>
<?php
    include "includes/footer.php";
?>