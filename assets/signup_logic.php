<?php
// Check if the form was submitted
// ** $_SERVER is a PHP superglobal array that contains information about headers, paths, and script locations
// ** ["REQUEST_METHOD"] is an associative key within the $_SERVER array. It specifies the request method used to access the page. 
// ** It can be 'GET', 'POST'
// ** "POST" is the value being checked against. HTTP POST is a request

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent XSS attacks

    // ? htmlspecialchars() function converts special characters to HTML entities
    // ? The function converts characters like <, >, ", and & to &lt;, &gt;, &quot;, and &amp;
    // ? This way, the browser renders the characters as text instead of interpreting them as code

    // ? The function takes two parameters:
    // ? 1. The string to sanitize
    // ? 2. A flag indicating if quotes should be converted to HTML entities
    // ? By default, the flag is set to ENT_COMPAT, which converts double quotes
    // ? To convert single quotes as well, set the flag to ENT_QUOTES

    // ! $_POST['username']
    // ! $Post[] global array
    // ! username is the key within the $_POST array that corresponds to the input field with the name="username"
    // ! return value data that the user entered into the username field of the form.

    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    // Normally, you would process the data here (e.g., validate and store in a database)

    $pass = htmlspecialchars($_POST['pass']);
    # Validate the password

    // For demonstration, echo the sanitized inputs
    $response = "<div class='response'><strong>Username: <span style=\"color:green\">$username</span> <br> Email: <span style=\"color:green\">$email</span> </strong></div>";
}
?>