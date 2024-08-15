<?php
$conn = mysqli_connect('localhost', 'root', '', 'shortenurl');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); // Fixed typo in error message
} else {
    // echo "Connection successfully";
}
?>
