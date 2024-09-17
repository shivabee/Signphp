<?php
    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container styling */
        .container {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Heading styling */
        h1 {
            margin-bottom: 1rem;
            text-align: center;
            color: #333;
        }

        /* Form group styling */
        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            color: #333;
        }

        /* Button styling */
        button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Sign In</h1>
    <form action="signup.php" method="post">

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="bt">Sign In</button>
        <a href="forget.php">Forget Password</a>
    </form>
</div>
</body>
</html>
<?php



    $con =mysqli_connect("localhost",'root','','data');



    if(isset($_POST["bt"])){
        $Email=$_POST['email'];
        $Password=$_POST['password'];

        $query="SELECT * FROM `sign` WHERE `Email`='$Email' AND `Password`='$Password'";

        $result=mysqli_query($con,$query);

        if(mysqli_num_rows($result)==1){

            session_start();

            header("location: https://www.google.com/");

        }else{
            echo '<script>alert("Welcome on the youtube!")</script>';
        }


    }



?>;