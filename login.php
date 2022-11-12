<?php
    include "includes/header.php";
    include "includes/navbar.php";
?>
<div class="hero">
    <div class="selector">
        <div id="selectField">
            <p id="selectText">Select Your Interested Field</p>
            <img src="media/images/arrow.png" id ="arrowicon" >
        </div>
        <ul id="list" class="hide">
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
    <button class="submit-btn">Submit</button>
</div>
<script>
    var selectField= document.getElementById("selectField");
    var selectText= document.getElementById("selectText");
    var options= document.getElementsByClassName("options");
    var list= document.getElementById("list");
    var arrowicon= document.getElementById("arrowicon");

    selectField.onclick= function(){
        list.classList.toggle("hide");
        arrowicon.classList.toggle("rotate");
    }
    for(option of options){
        option.onclick = function(){
            selectText.innerHTML = this.textContent;
            list.classList.toggle("hide");
            arrowicon.classList.toggle("rotate");
        } 
    }
</script>
<?php
    include "includes/footer.php";
?>
