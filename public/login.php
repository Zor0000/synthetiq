<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['role'])) {
    // Redirect to the respective dashboard based on the user role
    switch ($_SESSION['role']) {
        case 'student':
            header("Location: ../public/student-d.php");
            exit();
        case 'company':
            header("Location: ../company-d.php");
            exit();
        case 'admin':
            header("Location: ../admin-d.php");
            exit();
    }
}
    
// Header Inclusion
include('../src/templates/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../public/assets/css/login.css">
</head>
<body>
    <main>
        <div class="login-container">
            <h1>Login</h1>
            <form action="../src/controllers/login_process.php" method="POST">
                <div class="input-group">
                    <label for="email_username">Email/Username</label>
                    <input type="text" id="email_username" name="email_username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <button type="submit">Login</button>
                </div>
                <div class="register-link">
                    <a href="register.php">New user? Register here</a>
                </div>
            </form>
        </div>
    </main>
    <?php include('../src/templates/footer.php'); ?>
</body>
</html>
