
<head>
	<title>Dropbox Form</title>
	<link href="bootstrap.css" rel="stylesheet">
	<link href="register.css" rel="stylesheet">
	<script type="text/javascript" src="dob_form.js"></script>
</head>
<body>
	<div class="parent-element-center">
		<div class="element-center">
			<div class="element-center">
				<h1>Dropbox</h1>
				<h4>With Smooth animation via JQuery</h4>
			</div>
			<div class="login-box">
				<form class="form-signin" id="loginform">
					<input type="text" id="email-focus" name="user_name" class="form-control" placeholder="E-Mail" required autofocus>
					<input type="password" name="user_password" class="form-control" placeholder="Password" required>
				</form>
			</div>
			<div class="reg-box">
				<form action="register_script.php" id="registerform" class="form" role="form" name="registerform" method="POST">
					<div class="row">
						<div class="col-xs-6 col-md-6">
							<input class="form-control" id="name-focus" name="user_fname" placeholder="First Name" type="text" 
							required />
						</div>
						<div class="col-xs-6 col-md-6">
							<input class="form-control" name="user_lname" placeholder="Last Name" type="text" 
							required />
						</div>
					</div>
					<input class="form-control" name="user_email" placeholder="Your Email" type="email" 
					required />
					<input class="form-control" name="user_password" placeholder="New Password (min. 6 characters)" 
					type="password" required />
					<label for="">Birth Date</label>
					<div class="row">
						<div class="col-xs-4 col-md-4 dop-drop">
							<select name="month" onchange="call()" class="form-control" required > 
								<option value="">Month</option> 
								<option value="1">Jan</option> 
								<option value="2">Feb</option>
								<option value="3">Mar</option> 
								<option value="4">Apr</option> 
								<option value="5">May</option> 
								<option value="6">Jun</option> 
								<option value="7">Jul</option> 
								<option value="8">Aug</option> 
								<option value="9">Sep</option> 
								<option value="10">Oct</option> 
								<option value="11">Nov</option> 
								<option value="12">Dec</option> 
							</select>
						</div>
						<div class="col-xs-4 col-md-4 dop-drop">
							<select class="form-control" name="day" required >
								<option value="">Day</option>
							</select>
						</div>
						<div class="col-xs-4 col-md-4 dop-drop">
							<select name="year" onchange="call()" class="form-control" required > 
								<option value="">Year</option> 
							</select>
						</div>
					</div>
					<label class="radio-inline">
						<input type="radio" name="user_gender" id="inlineCheckbox1" value="1" class="rb" 
						required />
						Male
					</label>
					<label class="radio-inline">
						<input type="radio" name="user_gender" id="inlineCheckbox2" value="2" class="rb" 
						required />
						Female
					</label>
				</form>
			</div>
			<button class="btn btn-lg btn-primary btn-block" onClick="return false;" form="registerform"
			type="submit" name="register" id="regBtn">Sign up</button>
			<div class="element-center" style="text-align:center;margin-top:25px;">
				or <a href="#" id="sign_in">Sign in</a>
			</div>
		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="bootstrap.js"></script>
	<script src="dropbox.js"></script>
</body>

