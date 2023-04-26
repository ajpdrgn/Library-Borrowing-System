<?php
$link = mysqli_connect("localhost", "root", "", "library_database");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$borrower_name = $_POST['borrower_name'];
$borrower_program = $_POST['borrower_program'];
$borrower_email = $_POST['borrower_email'];
$book_title = $_POST['book_title'];
$book_author =$_POST['book_author'];
$book_accession_number = $_POST['book_accession_number'];
$date_borrowed = $_POST['date_borrowed'];
$date_due = $_POST['date_due'];

$sql = "INSERT INTO registration_tb(borrower_name, borrower_program, borrower_email, book_title, book_author, book_accession_number, date_borrowed, date_due) VALUES ('$borrower_name', '$borrower_program', '$borrower_email','$book_title','$book_author','$book_accession_number','$date_borrowed','$date_due')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>