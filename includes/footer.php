	<div class="clearfix"></div> <!-- final clear, all other elements should be floated -->
    
	</div><!-- Main Wrapper -->
		<div id="footer_wrap">
        <div id="footer"> <!-- Sticky Footer -->
        	<ul class="footer_nav">                        
                <li><a href="contact.php" class="ajaxtrigger">Contact</a> |</li>
                <li><a href="help/help.php">Help</a> |</li>
                <li><a href="privacy.php" class="ajaxtrigger">Privacy</a> |</li>
                <li><a href="tos.php" class="ajaxtrigger">Terms of Service</a> </li>
                <!-- <li><a href="http://healthylives.wikispaces.com/">Health Info</a></li> -->
            </ul>
        </div>
		</div>
        
        	<!-- Container for AJAX content -->
        	<div id="results_wrap">
               	<div id="results">
                </div>
            </div><!-- end -->
            
            <div id="tooltip" style="display: none;">
            	<h3 style="display: none;"></h3>
                <div class="body" style="display: block;"></div>
                <div class="url" style="display: none;"></div>
            </div> 
            
            <div id="success" style="display: none;">
            	<p>Your message was submitted successfully.</p>
            </div>
  
<!-- Scripts -->          
<script src="scripts/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.8.1.custom.min.js" type="text/javascript"></script>
<script src="scripts/jquery.tablesorter.min.js" type="text/javascript"></script>
<script src="scripts/jquery.tooltip.min.js" type="text/javascript"></script>
<script src="scripts/jeditable.js" type="text/javascript"></script>
<script src="scripts/custom.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
		var availableTags = ["banana", "apple", "pear", "orange", "peach", "plum", "toast", "egg", "cheese", "bell pepper", "lettuce", "ham", "spaghetti", "lasagna", "pizza", "chicken"];
		$(".meal").autocomplete({
			source: availableTags
		});
	});	
$(function() {
	var availableTags = ["running", "swimming", "jogging", "bicycling", "weight lifting", "yoga", "pilaties", "gymnastics", "waking", "treadmill", "pushups", "situps", "chinups", "bench pressing"];
	$(".exercise_input").autocomplete({
		source: availableTags
	});
});		
</script>        
            
    
	</body>
</html>