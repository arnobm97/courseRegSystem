<?php
session_start();
include "../includes/header.php";
include "../includes/dbConfig.php";
?>

<div class="container">
    <div class="btn-section">
        <div class="username-btn"><button>
                <?= $_SESSION['username_admin'] ?>
            </button></div>
        <a href="../index.php">
            <div class="logout-btn"><button>logout</button></div>
        </a>
    </div>
    <form class="form-1" method="post">
        <h2>Update Course Details for
            <?= $_GET['course'] ?>
        </h2>
        <label for="cour_name">Course Name</label>
        <input type="text" name="cour_name" class="input_field" required />
        <input type="submit" name="submitbtn" value="Upload" class="login-btn1">
        <label for="assigned_teacher">Assigned Teacher</label>
        <input type="text" name="assigned_teacher" class="input_field" required />
        <input type="submit" name="submitbtn" value="Upload" class="login-btn1">
        <label for="cour_name">Course Start Date</label>
        <input type="date" name="cour_start" class="input_field" required />
        <input type="submit" name="submitbtn" value="Upload" class="login-btn1">
        <label for="cour_name">Course End Date</label>
        <input type="date" name="cour_end" class="input_field" required />
        <input type="submit" name="submitbtn" value="Upload" class="login-btn1">
        <label for="assigned_teacher">Course Fees</label>
        <input type="number" name="cour_fee" class="input_field" required />
        <input type="submit" name="submitbtn" value="Upload" class="login-btn1">
    </form>
</div>

<?php

if (isset($_POST['submitbtn'])) {
    $c_name = $_POST['cour_name'];
    // $c_details = $_POST['cour_details'];
    $c_teacher = $_POST['assigned_teacher'];
    $c_start_date = $_POST['cour_start'];
    $c_end_date = $_POST['cour_end'];
    $c_fees = $_POST['cour_fee'];

    $insertsql = "UPDATE $courses SET
    courName='$c_name', courTeacher='$c_teacher', courStarts='$c_start_date', courEnds='$c_end_date', courseFees='$c_fees')";

    if ($mysqli->query($insertsql)) {
        echo "<script>
    alert('Course updated succesfully');
    window.location='/coursereg/admin/adminfeed.php';
    </script>";
    } else {
        echo "<script>
    alert('Something went wrong');
    window.location='/coursereg/admin/adminfeed.php';
    </script>";
    }
}

?>
<?php
include "../includes/footer.php";
?>