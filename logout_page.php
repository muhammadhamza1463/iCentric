<?php
session_start();
session_destroy();
header('location: login.php');
?>
<html>

<body>
    <form id="logoutForm" action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
    <!-- In your HTML file -->
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            // Check if the session indicates the user is logged out
            <?php if (!isset($_SESSION['user_id'])) : ?>
                // Show popup if logged out
                alert('You are logged out.');
            <?php endif; ?>
        });
    </script>

</body>

</html>