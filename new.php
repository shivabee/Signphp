<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h2>Sign Up</h2>
    <form action="new.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="bt">Sign Up</button>
    </form>
    <p>Already have an account? <a href="signup.php">Sign In</a></p>
</div>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="data";

// Create connection


$conn = mysqli_connect($servername, $username, $password,$database);


if(isset($_REQUEST["bt"])) {
    $Name = $_REQUEST['username'];
    $Email = $_REQUEST["email"];
    $password=$_REQUEST["password"];



    $query = "INSERT INTO `sign`(`Name`, `Email`, `Password`) VALUES ('$Name','$Email','$password')";



    $res = mysqli_query($conn, $query);
    if($res){
        $_SESSION["$res"];
        header('location: http://localhost/signup%20php/signup.php');
    }else{

    }




}



?>