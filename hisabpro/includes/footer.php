<?php if (isset($is_auth_page) && !$is_auth_page): ?>
        <!-- Mobile Bottom Navigation -->
        <nav class="bottom-nav">
            <ul>
                <li class="active"><a href="<?php echo $base_url; ?>dashboard.php"><i class="fas fa-home"></i><span>Home</span></a></li>
                <li><a href="<?php echo $base_url; ?>modules/sales/index.php"><i class="fas fa-shopping-cart"></i><span>POS</span></a></li>
                <li><a href="#"><i class="fas fa-plus-circle center-icon"></i></a></li>
                <li><a href="<?php echo $base_url; ?>modules/customers/index.php"><i class="fas fa-users"></i><span>Clients</span></a></li>
                <li><a href="<?php echo $base_url; ?>admin/index.php"><i class="fas fa-cog"></i><span>Menu</span></a></li>
            </ul>
        </nav>
<?php endif; ?>
    </div>

    <script src="<?php echo $base_url; ?>assets/js/script.js"></script>
</body>
</html>