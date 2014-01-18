/*Jonas King Jan 2014
this script assumes that jquery has already been linked in the main document
This script  will check if the text box (id'd as text) is a certain length (5),
check for similarity, and then post it below to a div.
*/
$(document).ready(function () {
	$('#text').keyup(function(e){
		var text = $(this).val();

		// don't do anything until/unless the text box is at least five characters long
		if (text.length > 5) {
		      $.get("suggest.php?val=" + text,
        {language: "php", version: 5},
        function(xhr) {
	        $("#target").html(xhr);
	      }
	    
	  )
		}
	});
});
