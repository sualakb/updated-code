<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Fee Payment</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===================================================================================== ==========-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>
<style>
.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.button {
  background-color: #009bff;
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}

.rest {
  overflow: hidden;
  background-color: #ffffff;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

</style>

<div class="topnav">
  <a class="active" href="index2.php">Home</a>
  <a href="ofp.php">Online Fee Payment</a>
  <a href="tc.php">Transfer Certificate</a>
<a href="contact.php">Contact Us</a></div>
</div>
	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
            <i class="fas fa-graduation-cap"></i>
        <h1>BR AMBEDKAR INSITUTE OF TECHNOLODGY</h1>
			</div>

			<form action="tcout.php" method="post" class="contact1-form validate-form">
			
				<span class="contact1-form-title">
					Transfer Certificate
				</span>

								<div class="wrap-input1 validate-input" data-validate = "ID is required">
					<input class="input1" type="text" name="id" placeholder="ID" required>
					<span class="shadow-input1"></span>
				</div>

									<div class="wrap-input1 validate-input" data-validate = "Email is required">
					<input class="input1" type="text" name="email" placeholder="Email" required>
					<span class="shadow-input1"></span>
</div>

									<div class="wrap-input1 validate-input" data-validate = "Phone is required">
					<input class="input1" type="text" name="phone" placeholder="Phone" required>
					<span class="shadow-input1"></span>
	</div>

    <div class="wrap-input1 validate-input" data-validate = "DOB is required">
					<input class="input1" type="date" name="dob" placeholder="Date of Birth" required>
					<span class="shadow-input1"></span>
	</div>

	<input type="checkbox" name="checkbox"><span>I agree to the <u><b><a href="https://dbrait.andaman.gov.in/">Privacy Policy</a></b></u> for BR Ambedkar Institute of Technology.</span><br>
    <button class="button">Submit</button>
    
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
