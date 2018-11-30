<?php 
include("includes/config.php");
include('includes/classes/Account.php');
include('includes/classes/Constans.php');

$account = new Account($con);

include('includes/handlers/register-handler.php');
include("includes/handlers/login-handler.php");


function getInputValue($name)
{
	if(isset($_POST[$name])){
		echo $_POST[$name];
	}
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to slotify!</title>
	<link rel="stylesheet" href="assets/css/register.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script type="text/javascript" src="assets/js/register.js"></script>
</head>
<body>
	<?php
		if(isset($_POST['registerButton'])){
			echo '<script>
		$(document).ready(function() {
			$("#loginForm").hide();
			$("#registerForm").show();
});
	</script>';
		}else {
			echo '<script>
		$(document).ready(function() {
			$("#loginForm").show();
			$("#registerForm").hide();
});
	</script>';
		}
	?>
	
	
	<div id="background">
		<div id="loginContainer">
			<div id="inputContainer">
				<form action="register.php" id="loginForm" method="POST">
					<h2>Login to your account</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username</label>
						<input type="text" id="loginUsername" name="loginUsername" placeholder="enter your name" value="<?php getInputValue('loginUsername') ?>" required>
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input type="password" name="loginPassword" id="loginPassword"  required>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>
					
					<div class="hasAccount">
						<span id="hideLogin">Dont't have an account yer? Signup here.</span>
					</div>

				</form>


				<form action="register.php" id="registerForm" method="POST">
					<h2>Create your free account</h2>
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<?php echo $account->getError(Constants::$useranemTaken); ?>	
						<label for="username">Username</label>
						<input type="text" id="username" name="username" placeholder="enter your name" value="<?php getInputValue('username') ?>" required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">First Name</label>
						<input type="text" id="firstName" name="firstName" placeholder="enter your first name" value="<?php getInputValue('firstName') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Last Name</label>
						<input type="text" id="lastName" name="lastName" placeholder="enter your last name" value="<?php getInputValue('lastName') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$emailDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
						<label for="email">Email</label>
						<input type="email" id="email" name="email" placeholder="enter your email" value="<?php getInputValue('email') ?>" required>
					</p>

					<p>
						<label for="confirmEmail">Confirm email</label>
						<input type="email" id="confirmEmail" name="confirmEmail" placeholder="enter your email" value="<?php getInputValue('confirmEmail') ?>" required>
					</p>

					<p>
						<label for="confirmPassword">Confirm password</label>
						<input type="password" name="confirmPassword" id="confirmPassword" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$passwordDoNotMatch); ?>
						<?php echo $account->getError(Constants::$passwordNotAlphaNumeric); ?>
						<?php echo $account->getError(Constants::$passwordCharacters); ?>
						<label for="registerPassword">Password</label>
						<input type="password" name="registerPassword" id="registerPassword" required>
					</p>

					<button type="submit" name="registerButton">SIGN UP</button>
					
					<div class="hasAccount">
						<span id="hideRegister">Already have an account login here.</span>
					</div>

				</form>
			</div>
			
			<div id="loginText">
				<h1>Get great music</h1>
				<h2>Listen to loads of songs for free</h2>
				<ul>
					<li>Discover music you'll fall in love with</li>
					<li>Create your own playlists</li>
					<li>Follow your favorite artists</li>
				</ul>
			</div>

		</div>
	</div>
</body>
</html>