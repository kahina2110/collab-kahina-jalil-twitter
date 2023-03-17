<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/signin.css">
    <title>Connexion</title>
</head>

<body>
  
    
    <div class ="oho">
        <h1>Connexion</h1>
        <form id="login__form" method="post">
            <div>
                <!-- <label>Pseudo or Email:</label> -->
                <input type="text" placeholder="Pseudo or Email" id="login__fields" name="nickname_email">
            </div>
            <div>
                <!-- <label>Password:</label> -->
                <input type="password" placeholder="Password" id="login__fields" name="pass">
            </div>
            <button type="submit" id="login__button">Login</button>
            <img src="../Views/assets/Capture_d_écran_2023-02-21_20-01-17-removebg-preview(1).png">
        </form>
        
        
    </div>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="../Ajax/login_ajax.js"></script>
</body>

</html>