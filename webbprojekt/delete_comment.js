

$(document).ready(function(){
	var pathname = window.location.pathname; 


	$(".delete_button").click(function(){
		
		
		var comment_text = $(this).siblings("#comment").val();
		var user = $(this).siblings("#user").val();
		var pathname = window.location.pathname;

		// skickar meddelande till servern för att radera 
		$.ajax({type:'POST',
			url: "delete_comment_controller.php",
			data: {User: user, Comment: comment_text, recept: pathname},
			success: function(result){
					
				// ladda tillbaka kommentarer
				load_comments();

			}
		});

	});

});

/*function deletef(){
	

	var comment_text = $("#delete_button").siblings("#comment").val();
		var user = $("#delete_button").siblings("#user").val();
		var pathname = window.location.pathname;
		$.ajax({type:'POST',
			url: "delete_comment_controller.php",
			data: {User: user, Comment: comment_text, recept: pathname},
			success: function(result){
					
				load_comments();

			}
		}); 
}

*/