<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		h1 {
			text-align: center;
		}

		form {
			margin: 0 auto;
			max-width: 600px;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		label {
			display: block;
			margin-bottom: 10px;
		}

		input[type="text"], input[type="email"], textarea {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			box-sizing: border-box;
		}

		textarea {
			height: 150px;
		}
		* {
    box-sizing: border-box;
  }
  
  body {
    margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
  }
  
  header {
    background-color:orange;
	color: #fff;
	padding: 10px;
	display: flex;
	justify-content: space-between;
	align-items: center;
  }
  
  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  nav li {
    display: inline-block;
    margin-right: 20px;
  }
  
  nav li:last-child {
    margin-right: 0;
  }

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}
		nav a {
    color: #fff;
    text-decoration: none;
      }
	  footer{
	text-align: center;
	font-weight: 700;
	margin-top: 110px;
	font-size: larger;
	color:white;
    background-color: #555;
    padding: 25px;
}

  

		.success {
			background-color: #dff0d8;
			border: 1px solid #d6e9c6;
			color: #3c763d;
			padding: 10px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<header>
		<h1>Contact</h1>
		<nav>
			<ul>
				<li><a href="index.php"><b>Home</b></a></li>
				<li><a href="blog.php"><b>Blog</b></a></li>
				<li><a href="contact.php"><b>Contact</b></a></li>
			</ul>
		</nav>
	</header>
	<h1>Contact Us</h1>
	<form method="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="subject">Subject:</label>
		<input type="text" id="subject" name="subject" required>

		<label for="message">Message:</label>
		<textarea id="message" name="message" required></textarea>

		<input type="submit" value="Submit">
	</form>

	<?php
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$to = "youremail@example.com";
		$headers = "From: " . $email . "\r\n" .
				   "Reply-To: " . $email . "\r\n" .
				   "X-Mailer: PHP/" . phpversion();

		if(mail($to, $subject, $message, $headers)) {
			echo '<div class="success">Your message has been sent successfully. We will get back to you soon.</div>';
		} else {
			echo '<div class="error">An error occurred while sending the message. Please try again later.</div>';
		}
	}
	?>
	<footer>
		<p>&copy; 2023 My Personal Blog</p>
	</footer>
</body>
</html>
