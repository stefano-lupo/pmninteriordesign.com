$(document).ready(function() {

	$("form").submit(function() {
		var returnVal = true, postArray = [];
		$('form').find('input, textarea').css('background-color', '#A2F99E');

		$('form input, form textarea').each(function() {
			if (($(this).val() == "") || ($(this).val() == null)) {
				$(this).css("background-color", "red");
				if (returnVal) {
					returnVal = false;
				}
			} else {
				postArray.push($(this).val());
			}
			
		});
		alert(postArray);
		if (returnVal) {
			$.post(
				"send-mail.php",
				{
				posted: postArray,
				name: "daniel"
				},
				function(){
					alert("Sent");
				}
				);
				event.preventDefault();
		} else {
			return returnVal;
		}
	});

	$('input,textarea').focus(function() {
		$(this).css("background-color", "white");
	});

});

