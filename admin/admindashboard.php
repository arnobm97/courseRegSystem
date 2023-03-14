<?php
session_start();
include "../includes/header.php";
include "../includes/navbar.php";
include "../includes/dbConfig.php";
?>

<?php

$fetchsql = "SELECT * FROM $courses";
$result = $mysqli->query($fetchsql) or die($mysqli->error);

?>
<div class="container">
    <div class="btn-section">
        <div class="username-btn"><button onclick="gotoadmindash()">
                <?= $_SESSION['username_admin'] ?>
            </button></div>
        <a href="/coursereg/logout.php">
            <div class="logout-btn"><button>logout</button></div>
        </a>
    </div>
    <hr>
    <input type="text" id="myInput" onkeyup='tableSearch()' placeholder="Name">

    <table class="table" id="myTable" data-filter-control="true" data-show-search-clear-button="true">
        <tr>
            <th>Course Name</th>
            <th>Assigned Teacher</th>
            <th>Course Start Date</th>
            <th>Course End Date</th>
            <th>Course Fee</th>
            <th>Actions</th>
        </tr>
        <?php while ($data = $result->fetch_assoc()) { ?>
            <tr>
                <td>
                    <?= $data['courName'] ?>
                </td>
                <td>
                    <?= $data['courTeacher'] ?>
                </td>
                <td>
                    <?= $data['courStarts'] ?>
                </td>
                <td>
                    <?= $data['courEnds'] ?>
                </td>
                <td>
                    <?= $data['courseFees'] ?>
                </td>
                <td><a href="/coursereg/admin/updatecourse.php?course=<?= $data['courID'] ?>"><input type="button"
                            class="table-btn" value="update"></a>
                    <input type="button" class="delete-btn" value="delete">
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<script type="application/javascript">
    function tableSearch() {
        let input, filter, table, tr, td, txtValue;

        //Intialising Variables
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (let i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }

    }

    function gotoadmindash() {
        window.location = '/coursereg/admin/admindashboard.php';
    }
</script>
<?php
include "../includes/footer.php";
?>