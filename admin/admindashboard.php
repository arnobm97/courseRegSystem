<?php
    include "../includes/header.php";
    include "../includes/navbar.php";
    // include "includes/dbConfig.php";
?>
   
    <div class="container">
    <div class="btn-section">
            <div class="username-btn"><button></button></div>
                <a href="../index.php">
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
            <tr>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td><input type="button" class="table-btn" value="update">
                <input type="button" class="delete-btn" value="delete">
                </td>
            </tr>
            <tr>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td><input type="button" class="table-btn" value="update">
                <input type="button" class="delete-btn" value="delete">
                </td>
            </tr>
            <tr>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td><input type="button" class="table-btn" value="update">
                <input type="button" class="delete-btn" value="delete">
                </td>
            </tr>
            <tr>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td><input type="button" class="table-btn" value="update">
                <input type="button" class="delete-btn" value="delete">
                </td>
            </td>
            </tr>
            <tr>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td><input type="button" class="table-btn" value="update">
                <input type="button" class="delete-btn" value="delete">
                </td>
            </tr>
            <tr>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td>Maria Anders</td>
                <td><input type="button" class="table-btn" value="update">
                <input type="button" class="delete-btn" value="delete">
                </td>
            </tr>
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
    </script>
<?php
    include "../includes/footer.php";
?>
