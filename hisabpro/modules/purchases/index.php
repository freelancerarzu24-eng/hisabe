<?php
$prefix = '../../';
if ('modules/purchases/index.php' == 'index.php') {
    header("Location: login.php");
    die();
}
include $prefix . 'includes/header.php';
include $prefix . 'includes/sidebar.php';
?>

        <!-- Main Content Area -->
        <main class="main-content">
            <!-- Top Navigation Bar -->
            <header class="topbar">
                <div class="topbar-left">
                    <button class="toggle-sidebar-btn" id="toggleSidebar" aria-label="Toggle Sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="page-title"><?php echo ucfirst(basename(dirname(__FILE__))); ?> Module</h1>
                </div>
                <div class="topbar-right">
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search...">
                    </div>
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="badge">0</span>
                    </div>
                    <div class="user-profile">
                        <div class="avatar">AD</div>
                        <span class="username">Admin</span>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <div class="content-wrapper">
                <section class="card">
                    <div class="card-header">
                        <h2><?php echo ucfirst(str_replace('.php', '', basename(__FILE__))); ?> Management</h2>
                        <button class="btn btn-primary"><i class="fas fa-plus"></i> Add New</button>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">This is a placeholder for the <?php echo basename(__FILE__); ?> page content.</p>
                        <!-- Data Table Placeholder -->
                        <div class="table-responsive" style="margin-top: var(--space-md);">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" style="text-align: center; padding: var(--space-xl);">No records found.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </main>

<?php include $prefix . 'includes/footer.php'; ?>