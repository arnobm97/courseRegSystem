<?php
    include "includes/header.php";
    include "includes/navbar.php";
    // include "includes/dbConfig.php";
?>
<div class="edit-pro-container">
    <div class="form-style-6">
        <h3>Send Your Quaries</h3>
        <form action="#" method="POST">
            <input type="text" name="field1" placeholder="Your Name" />
            <input type="email" name="field2" placeholder="Email Address" />
            <textarea name="field3" placeholder="Type your Message"></textarea>
            <input type="submit" value="Send" name="send" />
        </form>
    </div>
</div>
<?php
    include "includes/footer.php";
?>
