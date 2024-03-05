

<?php
SESSION_START();
$server='localhost';
$username='root';
$password='';
$database='user';
$conn=mysqli_connect($server,$username,$password,$database);

if(isset($_POST['book']))
{
 $name=$_POST['name'];
 $train=$_POST['train']; 
 $phone=$_POST['mobile'];
 $station=$_POST['station'];
 $bags=$_POST['bags'];
 $coach=$_POST['coach'];
 $seat=$_POST['seat'];
 $email=$_POST['email'];
 $date=$_POST['date'];
 $time=$_POST['time'];
 $cost=$bags*10;
 
 $sql="INSERT INTO `books`( `train`, `name`, `phone`, `station`, `bags`, `coach`, `seat`,`email`,`date`,`time`,`cost`) VALUES ('$train','$name','$phone','$station','$bags','$coach','$seat','$email','$date','$time','$cost');";
 $result=mysqli_query($conn,$sql);
 $_SESSION['email'] = $email; header("location:receipt.php");
 
} 

if(isset($_POST['rate']))
{ 
    $name=$_POST['name']; 
    $feed=$_POST['feed']; 
    
    
     $sql="INSERT INTO `rating`(`name`,`feed`) VALUES('$name','$feed');";
     mysqli_query($conn,$sql);}
 

 
?>