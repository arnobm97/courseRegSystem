<?php
    include "includes/header.php";
    include "includes/navbar.php";
?>
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


