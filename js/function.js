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
				url:     '../php/login_mysql.php',
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
				url:     'php/login.php',
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
/*sing up business*/
$("#singup_business").submit(function(){
    alert("singup_business");
    $("button").prop('disabled', true);
    var formData = new FormData(this);
    $.ajax({
      url:     '../php/business_singup_mysql.php',
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
      url:     '../php/ad_singup_mysql.php',
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


$("#sidenav_from").submit(function(){
    alert("someting");
  /*li in place of button??*/  $("button").prop('disabled', true);
    var formData = new FormData(this);
    $.ajax({
      url:     '../php/business_dashborad.php',
      type:    'POST',
      data:    formData,
      async:   false,
      success: function(data) {
        alert("success");
          $("#info").html(data);
        /*li in place of button??*/$("button").prop('disabled', false);
      },
      cache: false,
      contentType: false,
      processData: false
    });
    return false;
});


/////////////////////////////////////////////////////////////
/*dashborads*/
///////////

});

/////////////////////////js/////////////

////////////////print pie-chrart////
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
var data = google.visualization.arrayToDataTable([
['Task', 'Hours per Day'],
['Work', 8],
['Eat', 2],
['TV', 4],
['Gym', 2],
['Sleep', 8]
]);

// Optional; add a title and set the width and height of the chart
var options = {'title':'My Average Day', 'width':550, 'height':400};

// Display the chart inside the <div> element with id="piechart"
var chart = new google.visualization.PieChart(document.getElementById('chart'));
chart.draw(data, options);
}
</script>
