<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

    <!-- Auth specific content wrapper -->
    <div class="auth-card">
        <div class="auth-header">
            <div class="logo">
                <i class="fas fa-chart-line"></i>
                <span class="logo-text">HisabPro</span>
            </div>
            <p>Sign in to your account to continue</p>
        </div>

        <form class="organized-form" action="dashboard.php" method="GET">
            <div class="form-group">
                <label for="email">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" id="email" placeholder="admin@example.com" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" id="password" placeholder="••••••••" required>
                </div>
            </div>

            <div class="form-group" style="display: flex; justify-content: space-between; align-items: center;">
                <label style="display: flex; align-items: center; gap: 8px; font-weight: normal; margin: 0;">
                    <input type="checkbox" style="width: auto;"> Remember me
                </label>
                <a href="#" style="color: var(--primary); font-size: var(--fs-sm);">Forgot password?</a>
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-large">Sign In</button>
        </form>

        <div class="auth-links">
            Don't have an account? <a href="register.php">Sign up</a>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>