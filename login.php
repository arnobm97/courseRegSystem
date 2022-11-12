<<<<<<< HEAD
<?php
    include "includes/header.php";
    include "includes/navbar.php";
//     include "includes/dbConfig.php";
// ?>
<!-- 
Here will only be a select box where user will input if he is a student or account or advisor or register. Depending on the input user will be redirected to the certain login page. 
-->
<div class="hero">
    <div class="selector">
        <div id="selectField">
            <p id="selectText">Select Your Interested Field</p>
            <img src="media/images/arrow.png" >
        </div>
        <ul id="list">
            <li class="options">
            <img src="media/images/student1.png" >
                <p>Student</p>
            </li>
            <li class="options">
            <img src="media/images/account.png" >
                <p>Accountant</p>
            </li>
            <li class="options">
            <img src="media/images/advisor.png" >
                <p>Advisor</p>
            </li>
            <li class="options">
            <img src="media/images/register.png" >
                <p>Regsitrar Office</p>
            </li>
        </ul>
    </div>
</div>
<script>
    var selectField= document.getElementById("selectField");
    var selectText= document.getElementById("selectText");
    var options= document.getElementsByClassName("options");

    for(option of options){
        option.onclick = function(){
            selectText.innerHTML = this.textContent;
        } 
    }
</script>
<?php
    include "includes/footer.php";
?>
=======
<!-- 
Here will only be a select box where user will input if he is a student or account or advisor or register. Depending on the input user will be redirected to the certain login page. 
-->
>>>>>>> e64ecc52610cd9fe18497edb47c51f7cd12f3e0d
