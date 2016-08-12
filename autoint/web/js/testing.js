$( document ).ready(function() {
  // $('.imga').hide(); // hides
  // $('#img1_').show(); // hides
  console.log("hey");

  	// get the id clicked
	$(".imgd").click(function() {
		$('.imga').hide(); // hides
		var myClass = $(this).attr("id");
		console.log(myClass);
		var c = myClass+"_";
		$("#"+c).show(); // hides
	});

	// show image


}); // end