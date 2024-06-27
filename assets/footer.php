<footer>
    <div>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About</a>
        <a href="privacy.php">Privacy Policy</a>
    </div>
    <p>Copyright © <?php echo date("Y"); ?> Omar Mamon. All rights reserved.</p>
</footer>
<style>
    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 20px;
        position: fixed;
        bottom: 0;
        width: 100%;
        font-size: 0.9em;
    }
    footer a {
        color: #f2f2f2;
        text-decoration: none;
        margin-right: 15px;
    }
    footer a:last-child {
        margin-right: 0;
    }
    footer a:hover {
        color: grey; /* Lighter shade for hover effect */
        text-decoration: none; /* Optional: adds an underline on hover */
    }
</style>
