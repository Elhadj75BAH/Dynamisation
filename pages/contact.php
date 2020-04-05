
<!--Head-->
<?php include("layouts/head.php"); ?>
<!--Fin Head-->

<!--Header-->
<?php include("layouts/header.php");?>
	<!--Fin Header-->


<div id="letMeMessage">
				<h2>Leave me a message</h2>
				<form action="recuperationdata.php" method="post">
					<div class="form">
						<label class="marge" for="name">Name</label>
						<input class="name" id="name" placeholder="Name" type="text" name="name" required>
					</div>
					<div class="form">
						<label class="marge" for="email">Your email</label>
						<input class="email" id="email" placeholder="Your mail" type="email" name="email" required>
					</div>
					<div class="form">
						<label class="marge" for="message">Your message</label>
						<textarea class="txtArea" id="message" placeholder="Your message" name="yourMessage" required></textarea>
					</div>
					<div class="blocButton">
						<button class="homeButton" type="submit">Send !</button>
					</div>
				</form>
			</div>




            <!--Footer-->
			<?php include("layouts/footer.php");?>
			<!--Fin Footer-->