$(document).ready(function(){

	$('.comment-button').click(function(){
		$(this).siblings('.comment-box-wrapper').toggle();
	});


	// Submit post via ajax
	$('.post-button').click(function(){

		var postContent = $( ".post-input" ).val();
		console.log(postContent);
		var request = $.ajax({
		  url: "post.php",
		  type: "POST",
		  data: { postContent : postContent },
		  dataType: "html"
		});
		 
		request.done(function( data ) {
		  console.log(data);
		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});


	//Submit comment via ajax

	$('.comment-post-button').click(function(){
		var userName = $(this).siblings('.user-name').val();
		var comment = $(this).siblings('.comment-input').val();
		console.log(userName+":"+comment);
		var request = $.ajax({
		  url: "post-comment.php",
		  type: "POST",
		  data: { userName : userName,comment : comment },
		  dataType: "html"
		});
		 
		request.done(function( msg ) {
		  $( "#log" ).html( msg );
		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});


	//delete a comment
	$('.delete-comment').click(function(){

        var commentId = $(this).attr( "id" );
		var request = $.ajax({
		  url: "delete-comment.php",
		  type: "GET",
		  data: { id : commentId},
		  dataType: "html"
		});
		 
		request.done(function( msg ) {
		  $( "#log" ).html( msg );
		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});
});