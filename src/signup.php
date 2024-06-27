<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<?php require_once '../assets/sign_login_nav.php'; ?>
<?php require_once '../assets/signup_logic.php'; ?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color:cadetblue;
    }

    .form-container {
        background-color: #fff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background: linear-gradient(to right, #333 50%, #555 50%);
        background-size: 200% 100%;
        background-position: right bottom;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-position 0.6s ease-out;
    }

    input[type="submit"]:hover {
        background-position: left bottom;
    }

    .response {
        margin-top: 20px;
        text-align: center;
        color: #333;
    }
</style>

<body>
    <div class="form-container">
        <h1 style="text-align: center;">Sign Up</h1>
        <form action="signup.php" method="post">
            <!-- Add a username field -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <!-- Add an email field -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <!-- Add a password field -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="pass" required>

            <!-- submit button -->
            <input type="submit" value="Sign Up">
        </form>

        <!-- Display the sanitized inputs -->

        <?php if (!empty($response))
            echo $response; ?>

    </div>
    <?php require_once '../assets/footer.php' ?>
</body>

</html>