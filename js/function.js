$( document ).ready(function() {
///////////////////////////////////////////////////////////////////////////////
// sign up FORM
	$("#signup_form").submit(function(){
			alert("signup_form");
			$("button").prop('disabled', true);
			var formData = new FormData(this);
			$.ajax({
				url:     './inc/insert.php',
				type:    'POST',
				data:    formData,
				async:   false,
				success: function(data) {
					alert("success");
				   	$("#Results_singup").html(data);
					$("button").prop('disabled', false);
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;
	});

///////////////////////////////////////////////////////////////////////////////
// login FORM
	$("#login_form").submit(function(){
			alert("login_form");
			$("button").prop('disabled', true);
			var formData = new FormData(this);
			$.ajax({
				url:     './inc/login.php',
				type:    'POST',
				data:    formData,
				async:   false,
				success: function(data) {
					alert("success");
				   	$("#Results_login").html(data);
					$("button").prop('disabled', false);
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;
	});

///////////////////////////////////////////////////////////////////////////////
	$("#test").on("click",function(){
		alert("here");
	});
///////////////////////////////////////////////////////////////////////////////
	$("#tab_login").on("click",function(){
		$("#Results_login").html("");
		$(".singup").fadeOut();
		$(".login").fadeIn();
	})
///////////////////////////////////////////////////////////////////////////////
	$("#tab_signup").on("click",function(){
		$(".login").fadeOut();
		$(".singup").fadeIn();
	})
///////////////////////////////////////////////////////////////////////////////

});
