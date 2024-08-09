<?php include('../src/templates/header.php'); ?>
<!-- // synthetiq - github.com/once-human -->
 
<main>
    <div class="register-container">
        <h2>Create an Account</h2>
        <form action="../src/controllers/register_process.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="student">Student</option>
                    <option value="company">Company</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="input-group">
                <button type="submit">Register</button>
            </div>
            <div class="login-link">
                <a href="login.php">Already have an account? Login here</a>
            </div>
        </form>
    </div>
</main>

<?php include('../src/templates/footer.php'); ?>
