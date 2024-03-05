<?php 

include 'bookcon.php';
$email=$_SESSION['email'];
$sqlg ="SELECT * FROM books WHERE email='$email'";
 $result=mysqli_query($conn,$sqlg);?>