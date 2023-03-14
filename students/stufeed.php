<?php
include "../includes/header.php";
include "../includes/navbar.php";
include "../includes/dbConfig.php";
session_start();
?>
<div class="btn-section">
    <div class="username-btn"><button>
            <!-- <?= $_SESSION['username'] ?> -->
        </button></div>
    <a href="/coursereg/logout.php">
        <div class="logout-btn"><button>logout</button></div>
    </a>
</div>

<?php

$coursesql = "SELECT * FROM courses";
$resultcourse = mysqli_query($mysqli, $coursesql) or die(mysqli_error($mysqli));
// $stuID = $_SESSION['userid'];
// echo $stuID;

?>
<div class="course-wrapper">
    <h1 class="course-title-text">Courses for Summer 2023</h1>
    <div class="courses-card">
        <?php while ($datacourse = mysqli_fetch_array($resultcourse)) { ?>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/coursereg/media/images/sample1.png" class="flip-card-img">
                    </div>
                    <div class="flip-card-back">
                        <h1>
                            <?= $datacourse['courName'] ?>
                        </h1>
                        <p>Teacher:
                            <?= $datacourse['courTeacher'] ?>
                        </p>
                        <p>Course Starts on:
                            <?= $datacourse['courStarts'] ?>
                        </p>
                        <p>Course Ends on:
                            <?= $datacourse['courEnds'] ?>
                        </p>
                        <p>Course Price:
                            <?= $datacourse['courseFees'] ?>
                        </p>
                        <abbr title="<?= $datacourse['courDetails'] ?>">Details</abbr>
                        <p>
                        <form action="#" method="POST"><input type="submit" name="submitCourse" value="Enroll"
                                class="enroll-btn">
                            <input type="hidden" name="courseID" value="<?= $datacourse['courID'] ?>">
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
if (isset($_POST['submitCourse'])) {

    $courID = $_POST['courseID'];

    // $insertsql = "INSERT IGNORE INTO pendingreq(stuID, courID) VALUES('$stuID', '$courID')";
    // if (mysqli_query($mysqli, $insertsql)) {
    //     echo "<script>
    //     alert('You will be assigned the course after verifying. Please Wait');
    //     window.location = '/coursereg/students/stufeed.php';
    //     </script>";
    // } else if (mysqli_error($mysqli)) {
    //     echo "<script>
    //     alert('Something went wrong');
    //     window.location = '/coursereg/students/stufeed.php';
    //     </script>";
    // }
}
?>
<?php
include "../includes/footer.php";
?>