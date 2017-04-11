<?php
	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$to = 'nndukwo@claflin.edu';
		$subject = 'New Contact';
		$body = '<html>
					<body>
						<h2> Feedback- '.$email.'</h2>
						<hr>
						<p>Name: <br>'.$name.'</p>
						<p>Email: <br>'.$email.'</p>
						<p>Message: <br>'.$message.'</p>	
					</body>
				</html>';

		//headers
		$headers = "From: ".$name." <".$email.">\r\n";
		$headers .= "Reply-To: ".$email."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; character-utf-8";

		//send
		$send = mail($to, $subject, $body, $headers);
		if ($send) {
			echo '<br>';
			echo 'Thank you for contacting me. I will get back to you as soon as possible';
		} else {
			echo 'error';
		}
}
elseif !(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
	echo 'all inputs are required';
}
?>

<!doctype html>
<html>
	<head>
		<title>Nwokeocha | Contact </title>
		<link href="index.css" rel="stylesheet" type="text/css">
		<link href="responsive.css" rel="stylesheet" media="screen and (max-width: 995px)">
		<meta name="viewport" content="width=device-width">
		<meta charset="utf-8">
		<meta name="keywords" content="website, personal, nwokeocha, ndukwo">
		<meta name="description" content="personal website">
		<meta name="author" content="Nwokeocha Ndukwo">
	</head>

	<body>
		<header>
			<div class="container">
				<div id="branding">
					<h1>Nwokeocha Ndukwo</h1>
				</div>
				<nav>
					<ul>
						<li><a href="index.html">About</a></li>
						<li><a href="about.html">Portfolio</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
		
			<div class="box">
				<form id="form" action="" method="post">
					<div id="form-div">
						<h2 class="hstyle"> Contact me</h2>
						<input type ="text" name="name" cols = "25" row = "7" placeholder="Name" class="form-element"></input><br><br>
						<input type="email" name="email" cols = "25" row = "7" placeholder="Email" class="form-element"></input><br><br>
						<textarea type="text" name="message" cols = "27" row ="35" placeholder="Message" class="form-element"></textarea><br><br>
						<button input type= "submit" value="Submit" class="button">Comment</button>
						<button input type= "reset" value="Reset" class="button">Reset</button>
						<h3 class="hstyle">Thank you for visiting my website</h3>
					</div>
				</form>
			</div>
		</section>

		<footer id="footer">
			<p>Nwokeocha Ndukwo Copyright &copy; 2017</p>
		</footer>
	</body>
</html>
