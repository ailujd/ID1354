


$(document).ready(function(){
	var pathname = window.location.pathname; 

		// 
	$("#post_button").click(function(){
		var comment_text = $("#commentfield").val();
		
		// kallar på funktion som lägger in kommentar på server
		$.ajax({type:'POST',
			url: "create_comment_controller.php",
			data: {comment: comment_text, recept: pathname},
			
			// svar från php
			success: function(result){
					
				load_comments();

			}
		});
		
	});

});