$( document ).ready(function() {
	///////////////////////////////////////////////////////////////////////////////
		$("#test").on("click",function(){
			alert("here");
		});
///////////////////////////////////////////////////////////////////////////////
// sign up FORM
	$("#singup_form").submit(function(){
			alert("signup_form");
			$("button").prop('disabled', true);
			var formData = new FormData(this);
			$.ajax({
				url:     '../php/insert.php',
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
			// alert("login_form");
			$("button").prop('disabled', true);
			var formData = new FormData(this);
			$.ajax({
				url:     'php/login.php',
				type:    'POST',
				data:    formData,
				async:   false,
				success: function(data) {
					if(data=="success"){
						alert("success");	
					}
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
/*sing up business*/
$("#singup_business").submit(function(){
    alert("singup_business");
    $("button").prop('disabled', true);
    var formData = new FormData(this);
    $.ajax({
      url:     '../php/business_singup.php',
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
/*sing up advertise*/
$("#singup_advertise").submit(function(){
    alert("singup_advertise");
    $("button").prop('disabled', true);
    var formData = new FormData(this);
    $.ajax({
      url:     '../php/singup_advertise.php',
      type:    'POST',
      data:    formData,
      async:   false,
      success: function(data) {
        alert("success");
          $("#result_singup_advertise").html(data);
        $("button").prop('disabled', false);
      },
      cache: false,
      contentType: false,
      processData: false
    });
    return false;
});
});
