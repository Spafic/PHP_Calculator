<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>home</title>
    <?php require_once '../assets/nav.php'?>
    <style>
        h1 {
            text-align: center;
            margin-top: 50px;
            color: cadetblue;
            font-family: Arial, sans-serif;
            text-decoration: underline;
        }
        .response {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 35px;
            text-align: center;
            padding: 20px;
            margin: 0;
            /* Optional: adds a border */
            background-color: #f4f4f4 ;
            /* Optional: adds a background color */
            border-radius: 8px;
            /* Optional: rounds the corners */
            
        }
    </style>
</head>

<body>
    <h1>Welcome to our website!</h1>
    <?php
    if (isset($_SESSION['login_message'])) {
        echo $_SESSION['login_message'];
    }
    ?>
<?php require_once '../assets/footer.php' ?>
</body>

</html>