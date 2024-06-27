<?php
// login_logic.php
function login_time() {
    date_default_timezone_set('Africa/Cairo');
    $time_login = date('d/n/Y g:i a');
    return $time_login; // Return the login time
}

session_start(); // Start session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['usernamelogin']);
    $pass = htmlspecialchars($_POST['passlogin']);
    if ($username == "Omar" && $pass == "1234") {
        $_SESSION['user'] = $username; // Set session variable
        $loginTime = login_time(); // Get login time
        $_SESSION['login_message'] = "<div class='response'><strong><span style=\"color:cadetblue\">Welcome back</span> $username <br> Login time: $loginTime</strong></div>";
        // Set a flag for successful login
        $_SESSION['login_success'] = true;
        header("Location: index.php"); // Redirect to home page on success
        exit(); // Ensure no further code is executed after redirection
    } else {
        // Set an error message in session
        $_SESSION['error_message'] = "<div class='response'><strong><span style=\"color:red\">Invalid username or password. </span><br> Please try again</strong></div>";
        header("Location: login.php"); // Redirect back to the login page
        exit(); // Ensure no further code is executed after redirection
    }
}
?>