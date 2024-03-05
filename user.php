<!DOCTYPE html>
<?php include 'details.php' ?>
<html>

<head>
    <title>User account</title>

    <style>

        *{
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background-image: url("background_image1.jpg");
            background-size: cover;
        }

        .detail{
            border: 3px solid black;
            background-color: #6f9fc1;
            border-radius: 10px;
            padding: 12px 25px;
            margin-top: 60px;
            margin-left: 38%;
            margin-right: 38%;
        
        }

        .php-content{
            display: block;
            border: 3px solid black;
            background-color: #6f9fc1;
            border-radius: 10px;
            margin-top: 50px;
            margin-right: 65%;
            margin-left: 2%;
            padding: 12px 12px;
        }

        .main1{
            display: flex;
            justify-content: space-evenly;
            margin-top: 50px;
        }

        .main2{
            display: flex;
            justify-content: space-evenly;
            margin-top: 30px;
            
        }

        img{
            height: 450px;
            width: 500px;
            border: 3px solid black;
        }

    </style>
    
</head>

<body>
    

    <h1 align="center" class="detail">USER DETAILS</h1>    
    <div class="php-content">

        <?php 
            $sqlo = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sqlo);
            $displayed = false;

            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
                    if (!$displayed) {
                        echo "<h2>Name: " . $rows["name"] . "</h2>
                            <h2>Email: " . $rows["email"] . "</h2>
                            <h2> user ID: ".$rows["user_id"]."</h2>";
                        $displayed = true; // Set the flag to true after displaying the information
                    }
                }
            }
        ?>

    </div>

    <div class="main-content">
        <div class="main1">
            <h1>EMR</h1>
            <h1>MedBot</h1>
        </div>

        <div class="main2">

            <a href=/login.php ><img class="emo" src= "/emrs.png" /></a> 
            
            <a href=/login.php><img class="eml" src="https://cdn4.vectorstock.com/i/1000x1000/81/78/chatbot-icon-outline-robot-sign-on-a-blue-vector-19838178.jpg" /></a>

        </div>
    </div>

</body>

</html>