var username = "";
var checkname = function(){
     var username = $("#username").val();
     $('#checking').html("");
	 if(username!=""){
	 	$('#checking').html("<p>Checking....</p>");
	 	$.ajax({
	      url: "check.php",
	      type: 'GET',
	      data: {username : username},
	      success: function(data) {  
	      	$('#checking').html("");
			if(data=="Available"){
				
				$('#checking').html('<p class="bg-success">Available</p>');
			}else{
				
				$('#checking').html('<p class="bg-danger">Not available</p>');
			}
	  },
	  	  error: function(e) {
		 		$('#checking').html('<p class="bg-danger">There was an error</p>');
		}
	});

 }
}