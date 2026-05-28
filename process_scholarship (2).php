<!-- Chapter 4 exercise -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Submitted!</title>
	<link rel="stylesheet" href="scholarship_styles.css">
</head>
<body>

	<div class="container">
		<h3>Form Submitted!</h3>
		<?php  
			// Variables that will extract data from the form array
			$firstName = $_POST["fName"];
			$lastName = $_POST["lName"];
			$email = $_POST["user_email"];

			// Output to the web page confirming form data
			echo "<div class='message'>";
			echo "<h3>Thank you, $firstName. A confirmation email has been sent to: $email</h3>";
			echo "</div>";
		?>
	</div>
</body>
</html>