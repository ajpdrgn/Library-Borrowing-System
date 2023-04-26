<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="registrationpage.css">
		<link rel="icon" type="image/png" sizes="32x32" href="https://drive.google.com/uc?export=view&id=1Fj1Yc-AB5Fl2DYB4sJYYJLeyHRn0UMlS">
		<title>Borrowing Management System</title>
	</head>
	<body>
		<main>
			<header>
				<h1>Borrowing Management System</h1>
			</header>
			<section>
					<button onclick="window.location.href='viewrecord.php'">View Records</button>
			</section>
			<section class="formProper">
				<h3 class="formTitle">Registration Form</h3>
				<hr/>
				<form action="action.php" method="post">
					<div class="informationDiv">
						<div>
							<label for="borrower_name">Borrower Name:</label><br>
							<input type="text" id="borrower_name" name="borrower_name" required><br>
						</div>
						
						<div>
							<label for="borrower_email">Education Email:</label><br>
							<input type="text" id="borrower_email" name="borrower_email" required><br>
						</div>
						
						<div>
							<label for="borrower_program">Department:</label><br>
							<select name="borrower_program">
								<option value="none" selected disabled hidden>Select an option</option>
								<option value="sd">Software Development</option>
								<option value="mma">Multimedia Arts</option>
								<option value="gi">Graphic Illustration</option>
								<option value="abm">Accountancy and Business Management</option>
								<option value="stem">Robotics</option>
							</select>
						</div>
						
					</div>
					<div class="book_TitleDiv">
						<label for="book_title">Book Title:</label><br>
						<input type="text" id="book_title" name="book_title" required><br>
					</div>
					<div class="book_AuthorDiv">
						<label for="book_author">Book Author:</label><br>
						<input type="text" id="book_author" name="book_author" required><br>
					</div>
					<div class="book_ANumberDiv">
						<label for="book_accession_number">Book Accession Number:</label><br>
						<input type="number" id="	book_accession_number" name="book_accession_number" required><br>
					</div>
					<div class="date_BorrowedDiv">
						<label for="date_borrowed">Date Borrowed:</label><br>
						<input type="date" id="date_borrowed" name="date_borrowed" required><br>
					</div>
					<div class="date_DueDiv">
						<label for="date_due">Expected Due Date:</label><br>
						<input type="date" id="date_due" name="date_due" required><br>
					</div>
					<center>
						<input type="submit" value="submit">
					</center>
				</form>
			</section>
		</main>
	</body>
</html>