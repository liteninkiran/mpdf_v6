<!DOCTYPE html>

<html>

	<head>
		<title>PDF Form</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		
	</head>

	<body>

		<div class="container mt-5">

			<form action="make_pdf.php" method="post" class="col-md-6">

				<h1>Create your own PDF</h1>
				<p>Fill out the details below and the PDF will download</p>

				<div class="row mb-2">
					<div class="col-md-6">
						<input type="text" name="first_name" placeholder="First name" class="form-control" required>
					</div>
					<div class="col-md-6">
						<input type="text" name="last_name" placeholder="Last name" class="form-control" required>
					</div>
				</div>


				<div class="mb-2">
					<input type="email" name="email" placeholder="Email address" class="form-control" required>
				</div>

				<div class="mb-2">
					<input type="tel" name="phone" placeholder="Telephone number" class="form-control" required>
				</div>

				<div class="mb-2">
					<textarea name="message" placeholder="Enter a message"  class="form-control"></textarea>
				</div>

				<button type="submit" name="make_pdf" class="btn btn-success btn-large btn-block">Create PDF</button>

			</form>

			<br>

			<form action="download_pdf.php" method="post" class="col-md-6">
				<button type="submit" name="download_pdf" class="btn btn-success btn-large btn-block">Download PDF</button>
			</form>

			<br>

			<form action="merge_pdf.php" method="post" class="col-md-6">
				<button type="submit" name="merge_pdf" class="btn btn-success btn-large btn-block">Merge PDF</button>
			</form>

		</div>

	</body>

</html>


