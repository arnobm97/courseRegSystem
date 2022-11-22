<?php
    include "includes/header.php";
    include "includes/navbar.php";
?>
       <div class="container">
      <form class="form-1" method="post">
        <h1>Account Dpt Login</h1>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />
        <span>Forgot Password</span>
        <button class="login-btn1">Login</button>

        <!-- .........///sign-up///.......... -->

      </form>
    </div>
<?php
    include "includes/footer.php";
?>
