<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{config('app.name', 'Mal3aby')}}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
{{-- <link rel="stylesheet" href="css/app.css"> --}}
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="mypackage/images/icons/favicon.ico)">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="mypackage/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="mypackage/css/util.css">
	<link rel="stylesheet" type="text/css" href="mypackage/css/main.css">
<!--===============================================================================================-->
</head>
<body>	
	
	<div class="container-login100" style="background-image: url('mypackage/images/background2.jpg')">
		<div class="alert" id="ErrorPopup">
			<strong>Passwords Don't Match!</strong>
		</div>
		<div class="wrap-reg100 p-l-55 p-r-55 p-t-65 p-b-54 m-b-70 m-t-70">
			<form class="login100-form validate-form">
				{{-- <img src="mypackage/images/logo4.jpg" alt="Login" class="logo-img"> --}}

				<span class="login100-form-title p-b-50">
					Register
				</span>

				<div class="wrap-input100 validate-input m-b-23" data-validate = "Name is required">
					<span class="label-input100">Fullname</span>
					<input class="input100" type="text" name="username" placeholder="Type your name">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Type your email">
					<span class="focus-input100" data-symbol="&#xf1d8;"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="pass" id="txtPassword" placeholder="Type your password">
					<span class="focus-input100" data-symbol="&#xf190;"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-23" data-validate="Confirming password is required" data-confirm="Passwords do not match">
					<span class="label-input100">Confirm Password</span>
					<input class="input100" type="password" name="cpass" id="txtConfirmPassword" placeholder="Confirm your password">
					<span class="focus-input100" data-symbol="&#xf190;"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-70" data-validate = "Phone-number is required">
					<span class="label-input100">Phone-number</span>
					<input class="input100" type="text" name="phonenumber" placeholder="Type your Phone-number">
					<span class="focus-input100" data-symbol="&#xf2b9;"></span>
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" id="submit-btn" onclick="confirm()">
							Sign Up
						</button>
					</div>
				</div>

				<div class="flex-col-c p-t-55">
					<span class="txt1 p-b-17">
						Already Have An Account?
					</span>

					<a href="/" class="txt2">
						Login
					</a>
				</div>

			</form>

		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="mypackage/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="mypackage/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="mypackage/vendor/bootstrap/js/popper.js"></script>
	<script src="mypackage/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="mypackage/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="mypackage/vendor/daterangepicker/moment.min.js"></script>
	<script src="mypackage/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="mypackage/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="mypackage/js/main.js"></script>

<!--===============================================================================================-->
	<script type="text/javascript">
		function confirm() {
			var password = document.getElementById("txtPassword").value;
			var confirmPassword = document.getElementById("txtConfirmPassword").value;
			if (password != confirmPassword) {
				document.getElementById("ErrorPopup").style.display = 'inline';
				document.body.scrollTop = 0;
  				document.documentElement.scrollTop = 0;
			}
		}
	</script>

</body>
</html>