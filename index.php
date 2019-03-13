<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style_login.css">
  <title> Login From </title>
</head>
<body>
  <div class="login-wrap">
  	<div class="login-html">
  		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
  		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
  		<div class="login-form">
  			<div class="sign-in-htm">
  				<div class="group">
            <form id="sign_in" method="post" enctype="multipart/form-data">
  					<label for="pass" class="label">Email Address</label>
  					<input id="pass" type="text" class="input" placeholder="user@gmail.com" name="email_add">
  				</div>
  				<div class="group">
  					<label for="pass" class="label">Password</label>
  					<input id="pass" type="password" class="input" data-type="password" placeholder="password" name="pass_sign_in">
  				</div>
          </form>
  				<div class="group">
  					<input id="check" type="checkbox" class="check" checked>
  					<label for="check"><span class="icon"></span> Keep me Signed in</label>
  				</div>
  				<div class="group">
  					<a href="#"><input type="submit" class="button" value="Sign In"></a>
  				</div>
  				<div class="hr"></div>
  				<div class="foot-lnk">
  					<a href="#forgot">Forgot Password?</a>
  				</div>
  			</div>
  			<div class="sign-up-htm">
  				<div class="group">
            <form action="register.php" method="post" enctype="multipart/form-data">
  					<label for="user" class="label">First Name</label>
  					<input id="user" type="text"  placeholder="First Name" class="input" name="first_name">
  				</div>
          <div class="group">
  					<label for="user" class="label">Last Name</label>
  					<input id="user" type="text" placeholder="Last Name" class="input" name="last_name">
  				</div>
  				<div class="group">
  					<label for="pass" class="label">Password</label>
  					<input id="pass" type="password" class="input" placeholder="Password" data-type="password" name="pass_sign_up">
  				</div>
  				<div class="group">
  					<label for="pass" class="label">Email Address</label>
  					<input id="pass" type="email" class="input" placeholder="user@gmail.com" name="email_add_sign_up">
  				</div>
          <div class="group">
  					<label for="user" class="label">Birthday</label>
  					<input id="user" type="date"  placeholder="birthday" class="input" name="birthday">
  				</div>
  				<div class="group">
  					<input type="submit" class="button" value="Login">
  				</div>
        </form>
          <div class="group">
  					<a href="Business_login.html"><input type="button" class="button" value="Business"></a>
  				</div>
          <div class="group">
  					<a href="Advertiser_login.html"><input type="submit" class="button" value="Advertiser"></a>
  				</div>
  				<div class="hr"></div>
  				<div class="foot-lnk">
  					<label for="tab-1">Already Member?</a>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>
