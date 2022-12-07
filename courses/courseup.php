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
                
                    <input type="text"class="post-text" spellcheck="false" placeholder="Type something here..."name="title" required>
                </div>
                <div class="wrapper">
                <div class="input-post"> Who is Taking the Course  </div>  
                
                    <input type="text"class="post-text" spellcheck="false" placeholder="Type something here..."name="title" required>
                </div>
                <div class="wrapper">
                <div class="input-post"> Course Starting Date</div>  
                
                    <input type="text"class="post-text" spellcheck="false" placeholder="Type something here..."name="title" required>
                </div>
                <div class="wrapper">
                <div class="input-post"> Course Ending Date </div>  
                
                    <input type="text"class="post-text" spellcheck="false" placeholder="Type something here..."name="title" required>
                </div>
                <div class="wrapper">
                <div class="input-post"> Course Fees </div>  
                
                    <input type="text"class="post-text" spellcheck="false" placeholder="Type something here..."name="title" required>
                </div>
            </form>
    </section>
</div>
<?php
    include "../includes/footer.php";
?>
