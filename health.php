<!DOCTYPE html>
<?php include 'details.php' ?>
<html>

<head>
<title>User account</title>

    
 
    <style>.emo:hover{width:"auto"; height:30%;}</style>
        <style>.em:hover{width:"auto"; height:30%;} </style>
        <style>.eml:hover{width:"auto"; height:30%;} </style>
        <style>body{background-image: url('/spiral.png'); padding:80px; background-size:50%;background-repeat:no-repeat;}</style>
        

</head>

<body>
    

</div> 

   
    
    <h1 align='center'>USER DETAILS</h1>    
    <?php 
    $sqlo = "SELECT * FROM coolie WHERE email='$email'";
$result = mysqli_query($conn, $sqlo);
$displayed = false;

if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        if (!$displayed) {
            echo "<h2>Name: " . $rows["name"] . "</h2>
                <h2>Email: " . $rows["email"] . "</h2>";
            $displayed = true; // Set the flag to true after displaying the information
        }
    }
}
?>
     
    
    <hr>
    
 <div align="center" >
            
         <br>
             <h1>EMR</h1>
             <a href=/login.php ><img class="emo" src= "/emrs.png" width="460" height="460"></a> 
             <br><hr>
            
             <h1>Data entry</h1>
             <a href=/payment.php><img class="eml" src="https://b2461891.smushcdn.com/2461891/wp-content/uploads/2021/10/E-prescription-Software-Development_-benefits-solutions-features.png?lossy=1&strip=1&webp=1.png" width="500" height="485"/></a>
            
</div>  

    </body>




</html>