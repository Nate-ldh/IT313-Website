<!DOCTYPE html>
<html lang="en">
<head>
<title>Grubbing Greens Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>

<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-card w3-left-align w3-large" style="background-color:rgb(9, 102, 29);color:white">
    <a href="homepage.html" class="w3-bar-item w3-button w3-padding-large w3-white"><img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="buttonpng" width="30"/></a>
  </div>
    <!-- Header -->
<header class="w3-container w3-green w3-center" style="padding:128px 16px; border:2px solid black;">
    <h1 class="w3-margin w3-jumbo">Forgot Password</h1>
  </header>
    
	<div class="container">
		<h6 class="information-text">Enter your registered email to reset your password.</h6>
		<div class="form-group">
			<input type="email" name="user_email" id="user_email">
			<button onclick="showSpinner()">Reset Password</button>
		</div>
		<div class="footer">
			<h5>New here? <a href="register.html">Sign Up.</a></h5>
			<h5>Already have an account? <a href="index.html">Sign In.</a></h5>
		</div>
	</div>
</body>
