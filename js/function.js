$( document ).ready(function() {
///////////////////////////////////////////////////////////////////////////////
// sign up FORM
	$("#singup_form").submit(function(){
			alert("signup_form");
			$("button").prop('disabled', true);
			var formData = new FormData(this);
			$.ajax({
				url:     '../php/inc/insert.php',
				type:    'POST',
				data:    formData,
				async:   false,
				success: function(data) {
					alert("success");
				   	$("#result_singup").html(data);
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
	$("#log_in").submit(function(){
			alert("login_form");
			$("button").prop('disabled', true);
			var formData = new FormData(this);
			$.ajax({
				url:     'php/inc/login.php',
				type:    'POST',
				data:    formData,
				async:   false,
				success: function(data) {
					alert("success");
				   	$("#result_login").html(data);
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
/*sing up business*/
$("#singup_business").submit(function(){
    alert("singup_business");
    $("button").prop('disabled', true);
    var formData = new FormData(this);
    $.ajax({
      url:     '../php/inc/business_singup.php',
      type:    'POST',
      data:    formData,
      async:   false,
      success: function(data) {
        alert("success");
          $("#result_singup_business").html(data);
        $("button").prop('disabled', false);
      },
      cache: false,
      contentType: false,
      processData: false
    });
    return false;
});
///////////////////////////////////////////////////////////////////////////////

});
