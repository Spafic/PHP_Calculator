<nav class="navbar">
    <a href="signup.php">Sign up</a>
    <a href="index.php">Login</a>
</nav>

<style>
    body {
        font-family: Arial, sans-serif;
        /* Use Arial font */
        margin: 0;
        /* Remove default margin */
        padding: 0;
        /* Remove default padding */
        background-color: #f4f4f4;
        /* Light gray background for contrast */
        opacity: 1;
    }

    nav {
        background-color: #333;
        /* Keeps nav bar dark */
        overflow: hidden;
        /* Ensures the nav content is contained within the nav element */
        display: flex;
        /* Ensures links are laid out horizontally */
        justify-content: center;
        /* Centers items horizontally */
        border-radius: 10px;
        /* Smooth edges */
        gap: 30px;
        /* Adds space between the navigation items */
        position: fixed;
        top: 0;
        width: 100%;

        /* Change this to match your nav's background */
        z-index: 1000;
        /* Ensures the nav is above other content */
        border-bottom: 1px solid #ddd;
        /* Optional: adds a border for visual separation */
    }

    nav a {
        position: relative;
        /* Needed for absolute positioning of ::before pseudo-element */
        display: inline-block;
        /* Display links inline */
        color: white;
        /* Text color */
        text-align: center;
        /* Centers text within the link */
        padding: 14px 16px;
        /* Adds padding inside the links */
        text-decoration: none;
        /* Removes underline from links */
        font-size: 17px;
        /* Sets font size */
        overflow: hidden;
        /* Ensures pseudo-element does not overflow link bounds */
    }

    nav a::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #555;
        /* Color of the fill effect */
        z-index: -1;
        transition: transform 0.2s ease;
        transform: scaleY(0);
        transform-origin: bottom;
    }

    nav a:hover::before {
        transform: scaleY(1);
    }
</style>