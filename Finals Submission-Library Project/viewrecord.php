<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" sizes="32x32" href="https://drive.google.com/uc?export=view&id=1Fj1Yc-AB5Fl2DYB4sJYYJLeyHRn0UMlS">
		<title>iACADEMY View Records</title>
	</head>
	<body>
		<?php
		$link = mysqli_connect("localhost", "root", "", "library_database");

		if($link === false)
			{
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

		$sql = "SELECT * FROM registration_tb";
		if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Borrower Name</th>";
		                echo "<th>Borrower Program</th>";
		                echo "<th>Borrower Email</th>";
		                echo "<th>Book Title</th>";
		                echo "<th>Book Author</th>";
		                echo "<th>Book Accession Number</th>";
		                echo "<th>Date Borrowed</th>";
		                echo "<th>Date Due</th>";
		            echo "</tr>";
		        while($row = mysqli_fetch_array($result)){
		        	echo "<tr>";
		                echo "<td>" . $row['borrower_name'] . "</td>";
		                echo "<td>" . $row['borrower_program'] . "</td>";
		                echo "<td>" . $row['borrower_email'] . "</td>";
		                echo "<td>" . $row['book_title'] . "</td>";
		                echo "<td>" . $row['book_author'] . "</td>";
		                echo "<td>" . $row['book_accession_number'] . "</td>";
		                echo "<td>" . $row['date_borrowed'] . "</td>";
		                echo "<td>" . $row['date_due'] . "</td>";
		            echo "</tr>";
		        }
		        echo "</table>";
      			mysqli_free_result($result);
			}
			else{
        		echo "No records matching your query were found.";
        	}

		}
		else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		mysqli_close($link);
		?>
	</body>
</html>