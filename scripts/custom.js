/* Healthy Lives
   Developed by Stuart Runyan
*/
$(document).ready( function() {
	
		// defines dialog properties
		$('#results_wrap').dialog({ 
			autoOpen: false,
			closeOnEscape: true,
			width: 600,
			maxWidth: 500,
			maxHeight: 540,
			position: ['center', 50],
			draggable: true,
			show: 'drop',
			hide: 'drop'
		});
		
		//Loads the href of a link with the ajaxtrigger class through ajax
		$('.ajaxtrigger').click( function() {
			var url = $(this).attr('href');
			$('#load_content').html('<div><img src="../images/ajax-loader.gif" width="220" height="19" /></div>');
			$('#results').load(url+'#content #load_content');
			$('#results_wrap').dialog('open');
			return false;
		});
		
		
		//email report function
		$('.email-report-btn').click( function(){
			$('#email-report').css('display','inline').appendTo('#results');
			$('#results_wrap').dialog('open');
			return false;
		});
		$('.submit').click( function(){
			$('#success').css('display','inline').appendTo('#load_content').
			delay(2000).
			$('#results_wrap').dialog('close').
			$('#success').fadeOut('fast');
			return false;
		});
		
		//closing functions
		$('.close').click( function(){
			$('#results_wrap').dialog('close');
			return false;
		});
		$('.close').click( function(){
			$(this).parent().parent().fadeOut('fast');
			return false;
		});//end
		
			
		
		// Adds focus to signup form on landing page
		$('#username').focus();
		
		//Shows error messages
		var emailError = $('#login form fieldset #email-error').text();
		var passError = $('#login form fieldset #pass-error').text();
		var loginError = $('#login form fieldset #login-error').text();
		if(emailError.length != 0){
			$('#login form fieldset #email-error').slideDown();
		}
		if(passError.length != 0){
			$('#login form fieldset #pass-error').slideDown();
		}
		if(loginError.length != 0){
			$('#login form fieldset #login-error').slideDown();
		}
		else {
			$('#login form fieldset .error').hide();
		}
		
		 
		 //Clears input fields of values on focus		 		 
		 $('input[type="text"]').addClass("idleField");
		 $('input[type="text"]').focus(function() {
			$(this).removeClass("idleField").addClass("focusField");
			if(this.value == this.defaultValue) {
				$(this).attr('value', '');	
			}
			else {
				$(this).attr('value');
			}
		 });
		 $('input[type="text"]').blur(function() {  
			$(this).removeClass("focusField").addClass("idleField");
			if(this.value == ''){
				$(this).attr('value', this.defaultValue);
			}
			else {
				$(this).attr('value');
			}
			
		 });
		//end

	
		//Tooltip functionality
		$('h3').tooltip({
			showURL: false,
			opacity: 1
		});
		$('a').tooltip({
			showURL: false,
			opacity: 1
		});
		$('input').tooltip('');//end

      
	    //Tabs functionality
		$(function() {
			$('#finger-tabs').tabs({ 
						spinner: '<em>Loading</em>',
						fx: { opacity: 'toggle' }
				});	   
			$('#tabs').tabs({ 
						spinner: '<em>Loading</em>',
						fx: { opacity: 'toggle' }
				});	   
		});//end
		
		
		//Datepicker
		$("#datepicker").datepicker();
				
		
		//Drag and Drop
		$('.module_small').draggable({ 
				helper:'clone',					 
				revert: 'invalid',
				containment: 'document',
				cursor: 'move',
				opacity: 0.35,
				snap: '.drop_area',
				snapMode: 'inner'
		});
		$('.module_medium').draggable({ 
				helper:'clone',					 
				revert: 'invalid',
				containment: 'document',
				cursor: 'move',
				opacity: 0.35,
				snap: '.drop_area',
				snapMode: 'inner'
		});
		$('.drop_area').droppable({
				accept: '.module_small, .module_medium',
				greedy: true ,
				activeClass:'active_drop',
				hoverClass:'hover_drop', 
				drop:
					function(event,ui) {
						$(this).append(ui.draggable);
					}
		});
				
		
		//Inline editing
		$('.editable_textarea').editable("http://dev.uyeia.com/objects/save.php", { 
			  indicator : "<img src='../images/indicator.gif'>",
			  select : true,
			  submit : 'OK',
			  cancel : 'cancel',
			  cssclass : "editable",
			  tooltip: "Click to edit..."
		});
		$('tbody tr td').editable("http://www.appelsiini.net/projects/jeditable/php/save.php", { 
			  indicator : "<img src='../images/indicator.gif'>",
			  type   : 'textarea',
			  submitdata: { _method: "post" },
			  select : true,
			  submit : 'OK',
			  cancel : 'cancel',
			  cssclass : "editable"
		  });
		$('table tbody tr').focus(function(){
			$(this).fadeTo(400,'1').css('font-weight', 'bold');						
		});
		
		
		
		//Functionality for adding rows to the tracking tables!!!!!!!!!!!!!!!!
		/*
		$('.add-btn').click(function (){
			$('table tbody tr:first-child').fadeIn(5000, function () {
				$.get("tracker-info/calories.php", function(html){
					$('table tbody tr:first-child').before(html);										
				});												  
														  
			});
			return false
		}); 
		*/
		//end
		
		
		//Table sorting 
		$('table').tablesorter();
		$(".btn_add").click(function() { 
			$(this).ajaxStart(function(){
				$('.loading').css('display','inline');
			});	
			$.get("tracker-info/calories.php", function(html) {
				 // append the "ajax'd" data to the table body 
				 $("table tbody tr").fadeTo(800,'0.33');
				 $("table tbody tr:first").before(html);
				 $('table tbody tr:first td').css('font-weight', 'bold');	
				// let the plugin know that we made a update 
				$("table").trigger("update"); 
				// set sorting column and direction, this will sort on the first and third column 
				//var sorting = [[2,1],[0,0]]; 
				// sort on the first column 
				//$("table").trigger("sorton",[sorting]); 
			});
			$(this).ajaxComplete(function(){
				$('.loading').css('display','none');
			});	
			return false; 
    	});
		

		
		

});