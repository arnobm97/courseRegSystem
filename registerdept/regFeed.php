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
                <th>Student Name</th>
                <th>Student Id</th>
                <th>Student Batch</th>
                <th>Which course to Enroll</th>
                <th>Clearance from Teacher</th>
                <th>Clearance from Registar</th>
                <th>Payment</th>
            </tr>
            <tr>
            <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td> <select name="practical" class="select-button4">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> 
                <input type="button" class="table-btn" value="save">
                <td>no</td>
                
            </tr>
            <tr>
            <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td> <select name="practical" class="select-button4">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> 
                <input type="button" class="table-btn" value="save">
                <td>no</td>
            </tr>
            <tr>
            <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td> <select name="practical" class="select-button4">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> 
                <input type="button" class="table-btn" value="save">
                <td>no</td>
            </tr>
            <tr>
            <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td> <select name="practical" class="select-button4">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> 
                <input type="button" class="table-btn" value="save">
                <td>no</td>
            </td>
            </tr>
            <tr>
            <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td> <select name="practical" class="select-button4">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> 
                <input type="button" class="table-btn" value="save">
                <td>no</td>
            </tr>
            <tr>
            <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>yes</td>
                <td> <select name="practical" class="select-button4">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> 
                <input type="button" class="table-btn" value="save">
                <td>no</td>
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
