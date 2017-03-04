$(document).ready(function(){

  //On login form submit
  $('#login-form').on('submit', function(event){
    event.preventDefault();

    var username_entry = $('#username').val().trim();
    var password_entry = $('#password').val().trim();

    //console.log(username_entry + " : " + password_entry);

    $.ajax({
			method: "POST",
			url: "../processes/login.php",
			data: {username : username_entry, password : password_entry},
			beforeSend: function() {
			},
			success: function(response) {
				if ($.trim(response) == 'success') {
                    $('.feedback-text').empty();
                    $('.feedback-text').append('Login Success');

                    if($('#feedback-bar').hasClass('feedback-fail')){
                        $('#feedback-bar').removeClass('feedback-fail');
                    }
                    $('#feedback-bar').addClass('feedback-success');
                    $('#feedback-bar').css({
                        "display" : "block"
                    });

					window.location.replace("browser.php");
				} else {
                    $('.feedback-text').empty();
                    $('.feedback-text').append('Incorrect User Credentials. Please Try Again.');

                    if($('#feedback-bar').hasClass('feedback-success')){
                    $('#feedback-bar').removeClass('feedback-success');
                    }
                    $('#feedback-bar').addClass('feedback-fail');
                    $('#feedback-bar').css({
                    "display" : "block"
                     });
				}
			}
		});
  });
});
