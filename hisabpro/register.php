<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

    <!-- Auth specific content wrapper -->
    <div class="auth-card">
        <div class="auth-header">
            <div class="logo">
                <i class="fas fa-chart-line"></i>
                <span class="logo-text">HisabPro</span>
            </div>
            <p>Create a new account</p>
        </div>

        <form class="organized-form" action="dashboard.php" method="GET">
            <div class="form-row" style="margin-bottom: 0;">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" placeholder="John" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" placeholder="Doe" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" id="email" placeholder="john@example.com" required>
                </div>
            </div>

            <div class="form-group">
                <label for="company">Company Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                    <input type="text" id="company" placeholder="Acme Corp" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" id="password" placeholder="••••••••" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-large">Create Account</button>
        </form>

        <div class="auth-links">
            Already have an account? <a href="login.php">Sign in</a>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>