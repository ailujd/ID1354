
$(document).ready(function(){
	load_comments();

	
			
		});


function load_comments(){

	//tömmer kommentarer
	$("#comments").empty();

	var pathname = window.location.pathname; 

	// skickar instruktion till php
	$.ajax({type:'POST',
		url: "view_comment_controller.php",
		data: {recept: pathname} ,
		
		// svaret från php filen
		success: function(result){
				$("#comments").append(result);
	
	
	$(".delete_button").click(function(){
		
		var comment_text = $(this).siblings("#comment").text();
		var user = $(this).siblings("#user").text();
		var pathname = window.location.pathname;
		
		// skriver ut värdera 
		console.log(comment_text);
		console.log(user);
		console.log(pathname);

		//skickar ett instruktion till server
		$.ajax({type:'POST',
			url: "delete_comment_controller.php",
			data: {User: user, Comment: comment_text, recept: pathname},
			
				//svaret från php
			success: function(result){
					
				// skriver ut kommentarerna igen 
				load_comments();

			}
		});
 
	});

	 }});
}