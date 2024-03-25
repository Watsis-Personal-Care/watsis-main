<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/34fcbc38f7.js" crossorigin="anonymous"></script>
</head>
<body>
	<!--Nav Bar-->
    <?php include('templates/header.php')?>
	
	<section class="contact">
		<div class="content">
			<h2><b>Contact Us</b></h2>
				<h3><b>Ask us a question!</b></h3>
				<p>Watsis here,if you need to stay in contact with us, have doubts on your purchase and registration,
				please do not hesitate to contact us.
				</p>
				<p>Please feel free to fill in the form at the right bottom of the page, we will get in touch with you within 5 working days.
				We believe in providing the best cusotmers' satisfaction to you.</p>
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Address</h3>
						<p>Jalan Sungai Long,<br> Bandar Sungai Long, Cheras <br>43000 Kajang, Selangor.</p>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Phone</h3>
						<p>+603-9086 0288</p>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Email</h3>
						<p>info@utar.edu.my</p>
				</div>
			</div>
			<div class="FeedbackForm">
				<button class="open-button" onclick="openForm()">Feedback</button>
				<div class="container2" id="containerId">
					<form action="/action_page.php" class="form-container">
						<h1>Feedback</h1>

						<label for="name"><b>Full Name</b></label>
						<input type="text" id="name" placeholder="Full name.." name="name" required>

						<label for="email"><b>Email Address</b></label>
						<input type="text" id="email" placeholder="Email Address.." name="email" required>
						
						<label for="phone"><b>Phone Number</b></label>
						<input type="text" id="phone" placeholder="Phone Number.." name="phone" required>
						
						<label for="country"><b>Country</b></label>
						<select id="country" name="country">
							<option value="china">China</option>
							<option value="korea">Korea</option>
							<option value="malaysia">Malaysia</option>		
						</select>
						
						<label for="subject"><b>Subject</b></label>
						<textarea id="subject" name="subject" placeholder="Write something.." style="height:100px" required></textarea>
						
						
						<div class="feedbackFormButton">
							<button type="submit" class="btn">Submit</button>
							<button type="button" class="btn cancel" onclick="closeForm()">Back</button>
						</div>
					</form>
				</div>
				<script>
					function openForm() {
					  document.getElementById("containerId").style.display = "block";
					}

					function closeForm() {
					  document.getElementById("containerId").style.display = "none";
					}
				</script>
			</div>
		</div>
	</section>
	<!--Footer-->
	<?php include('templates/footer.php')?>
</body>
</html>
