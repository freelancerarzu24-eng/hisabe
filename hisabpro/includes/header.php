<?php
// Define base path based on server document root
$base_url = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') . '/';
// If it's empty or just /, we'll rely on relative paths, else prefix with /hisabpro/ if that's the setup.
// A robust fallback for this specific setup:
$base_url = '/hisabpro/';

// Determine if we are on an auth page (login or register)
$current_page = basename($_SERVER['PHP_SELF']);
$is_auth_page = in_array($current_page, ['login.php', 'register.php']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HisabPro - Professional SaaS Dashboard</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/styles.css">
    <!-- Using a lightweight icon library for prototyping -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="<?php echo $is_auth_page ? 'auth-layout' : ''; ?>">
    <div class="app-container <?php echo $is_auth_page ? 'auth-container' : ''; ?>">
        <?php if (!$is_auth_page): ?>
        <!-- Main Content Area wrapper starts in header, wraps sidebar, ends in footer -->
        <?php endif; ?>