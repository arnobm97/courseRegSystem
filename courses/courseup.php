<?php
    include "../includes/header.php";
    include "../includes/navbar.php";
    // include "includes/dbConfig.php";
?>
<div class="form-container">
    <section class="post-left">
            <form action="" method="post" class="post-form"id="left-hand" enctype="multipart/form-data">
                <h5 class="inventor-header">Course Upload</h5>
                <div class="input-post"> Upload A Thumbnail For The Course   </div>
                <input type="file" class="hidden" id="file-thumbnail" name="thumbnail" accept="image/*"  />
                <label for="file-thumbnail"class="select-button2">Select Pictures</label>

                <div class="wrapper">
                <div class="input-post"> Name of the Course </div>  
                <textarea spellcheck="false" name="typeofinvest" placeholder="Type something here..."></textarea>
                </div>
                <div class="wrapper">
                <div class="input-post"> Details of the Course </div>  
                <textarea spellcheck="false" name="typeofinvest" placeholder="Type something here..."></textarea>
                </div>
                <div class="wrapper">
                <div class="input-post"> Who is Taking the Course  </div>  
                <textarea spellcheck="false" name="typeofinvest" placeholder="Type something here..."></textarea>
                </div>
                <div class="wrapper">
                <div class="input-post"> Course Starting Date</div>  
                <textarea spellcheck="false" name="typeofinvest" placeholder="Type something here..."></textarea>
                </div>
                <div class="wrapper">
                <div class="input-post"> Course Ending Date </div>  
                <textarea spellcheck="false" name="typeofinvest" placeholder="Type something here..."></textarea>
                </div>
                <div class="wrapper">
                <div class="input-post"> Course Fees </div>  
                <textarea spellcheck="false" name="typeofinvest" placeholder="Type something here..."></textarea>
                </div>
                <div style="display:flex; align-items:center; justify-content:center;">

                <input type="submit" class="enroll-btn" name="courseSubmitBtn"> 
                </div>
            </form>
    </section>
</div>
<?php
    include "../includes/footer.php";
?>
