<?php if (isset($is_auth_page) && !$is_auth_page): ?>
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <i class="fas fa-chart-line"></i>
                    <span class="logo-text">HisabPro</span>
                </div>
                <button class="close-sidebar-btn" id="closeSidebar" aria-label="Close Sidebar">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li class="active"><a href="<?php echo $base_url; ?>dashboard.php"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
                    <li><a href="<?php echo $base_url; ?>modules/products/index.php"><i class="fas fa-box"></i> <span>Products</span></a></li>
                    <li><a href="<?php echo $base_url; ?>modules/customers/index.php"><i class="fas fa-users"></i> <span>Customers</span></a></li>
                    <li><a href="<?php echo $base_url; ?>modules/sales/index.php"><i class="fas fa-file-invoice-dollar"></i> <span>Sales</span></a></li>
                    <li><a href="<?php echo $base_url; ?>modules/reports/index.php"><i class="fas fa-chart-bar"></i> <span>Reports</span></a></li>
                    <li><a href="<?php echo $base_url; ?>admin/index.php"><i class="fas fa-cog"></i> <span>Settings</span></a></li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <a href="<?php echo $base_url; ?>login.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
            </div>
        </aside>
<?php endif; ?>