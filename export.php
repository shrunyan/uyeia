<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	  include('includes/header.php');
}?>
<div id="content_wrap">
    <div id="content">
        <div id="load_content">
            <h1>Export your health report</h1>
            
            <h2>Select your desired format:</h2>
            
            <form action="" method="post" id="export">
            <fieldset>
                <label for="print-export">Print a copy:</label>
                <input type="checkbox" name="print-export" class="checkbox" />
                
                <label for="email-export">Email me:</label>
                <input type="checkbox" name="email-export" class="checkbox" />
                
                <label for="pdf-export">Download a PDF:</label>
                <input type="checkbox" name="pdf-export" class="checkbox" />
            </fieldset>

			<input type="submit" class="btn" value="Export" />
            
            </form>
        </div>
    <div class="clearfix"></div>
</div>
</div>

<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	 include('includes/footer.php');
}?>