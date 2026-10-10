document.addEventListener('DOMContentLoaded', () => {
    // Select elements
    const sidebar = document.getElementById('sidebar');
    const toggleSidebarBtn = document.getElementById('toggleSidebar');
    const closeSidebarBtn = document.getElementById('closeSidebar');

    // Toggle sidebar on tablet/desktop (collapse) and mobile (open/close)
    toggleSidebarBtn.addEventListener('click', () => {
        if (window.innerWidth >= 768) {
            // Desktop/Tablet mode: Collapse sidebar
            sidebar.classList.toggle('collapsed');
        } else {
            // Mobile mode: Open sidebar overlay
            sidebar.classList.add('active');
        }
    });

    // Close sidebar on mobile
    if (closeSidebarBtn) {
        closeSidebarBtn.addEventListener('click', () => {
            sidebar.classList.remove('active');
        });
    }

    // Close sidebar overlay when clicking outside on mobile
    document.addEventListener('click', (e) => {
        if (window.innerWidth < 768 && sidebar.classList.contains('active')) {
            if (!sidebar.contains(e.target) && !toggleSidebarBtn.contains(e.target)) {
                sidebar.classList.remove('active');
            }
        }
    });

    // Handle window resize to reset states if moving between mobile and desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            sidebar.classList.remove('active'); // Remove mobile active state
        } else {
            sidebar.classList.remove('collapsed'); // Remove desktop collapsed state
        }
    });

    // Simple interaction for mobile bottom navigation active states
    const bottomNavItems = document.querySelectorAll('.bottom-nav ul li');
    bottomNavItems.forEach(item => {
        item.addEventListener('click', function(e) {
            // Only handle if it's an anchor tag to prevent double firing
            if(e.target.closest('a')) {
                // Prevent default for prototyping purposes unless it's the center add button
                if(!e.target.closest('a').querySelector('.center-icon')) {
                    e.preventDefault();
                    bottomNavItems.forEach(nav => nav.classList.remove('active'));
                    this.classList.add('active');
                }
            }
        });
    });

    // Simple interaction for sidebar navigation active states
    const sidebarItems = document.querySelectorAll('.sidebar-nav ul li');
    sidebarItems.forEach(item => {
        item.addEventListener('click', function(e) {
            if(e.target.closest('a')) {
                e.preventDefault();
                sidebarItems.forEach(nav => nav.classList.remove('active'));
                this.classList.add('active');

                // Auto close on mobile after selection
                if (window.innerWidth < 768) {
                    sidebar.classList.remove('active');
                }
            }
        });
    });
});