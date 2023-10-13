<?php
include "header.php";
include "config.php";


if (isset($_POST['register'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$Password = $_POST['password'];

	$hashPass = password_hash($Password, PASSWORD_BCRYPT);

	$check_email = "SELECT * from `user` where email = '$email' ";
	$run_email = mysqli_query($connection, $check_email);

	if (mysqli_num_rows($run_email) > 0) {
		echo '<script>alert("Email already exist")</script>';
	} else {
		$insert = "INSERT INTO `user` (`username`, `email`, `password`) VALUES ('$username','$email','$hashPass')";
		$connect_insert = mysqli_query($connection, $insert);

		if ($connect_insert) {
			echo '<script>alert("Registration Successfull")</script>';
		} else {
			echo '<script>alert("Registration Failed")</script>';
		}
	}
}

?>


<section class="home-slider owl-carousel">

	<div class="slider-item" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center">

				<div class="col-md-7 col-sm-12 text-center ftco-animate">
					<h1 class="mb-3 mt-5 bread">Register</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Register</span></p>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<form action="register.php" class="billing-form ftco-bg-dark p-3 p-md-5" method="post">
					<h3 class="mb-4 billing-heading">Register</h3>
					<div class="row align-items-end">
						<div class="col-md-12">
							<div class="form-group">
								<label for="Username">Username</label>
								<input type="text" class="form-control" placeholder="Username" name="username">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="Email">Email</label>
								<input type="email" class="form-control" placeholder="Email" name="email">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="Password">Password</label>
								<input type="password" class="form-control" placeholder="Password" name="password">
							</div>

						</div>
						<div class="col-md-12">
							<div class="form-group mt-4">
								<div class="radio">
									<button class="btn btn-primary py-3 px-4" value="submit" name="register">Register</button>
								</div>
							</div>
						</div>


				</form><!-- END -->
			</div> <!-- .col-md-8 -->
		</div>
	</div>
	</div>
</section> <!-- .section -->

<?php
include "footer.php";
?>
<script>
	$(document).ready(function() {

		var quantitiy = 0;
		$('.quantity-right-plus').click(function(e) {

			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			$('#quantity').val(quantity + 1);


			// Increment

		});

		$('.quantity-left-minus').click(function(e) {
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			// Increment
			if (quantity > 0) {
				$('#quantity').val(quantity - 1);
			}
		});

	});
</script>


</body>

</html>