<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

        <!-- Main Content Area -->
        <main class="main-content">
            <!-- Top Navigation Bar -->
            <header class="topbar">
                <div class="topbar-left">
                    <button class="toggle-sidebar-btn" id="toggleSidebar" aria-label="Toggle Sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="page-title">Dashboard</h1>
                </div>
                <div class="topbar-right">
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search...">
                    </div>
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="user-profile">
                        <div class="avatar">AD</div>
                        <span class="username">Admin</span>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="content-wrapper">
                <!-- Dashboard Cards -->
                <section class="dashboard-cards">
                    <div class="card stat-card">
                        <div class="card-icon blue"><i class="fas fa-dollar-sign"></i></div>
                        <div class="card-info">
                            <h3>Total Revenue</h3>
                            <p class="value">$24,500</p>
                            <span class="trend positive"><i class="fas fa-arrow-up"></i> 12%</span>
                        </div>
                    </div>
                    <div class="card stat-card">
                        <div class="card-icon green"><i class="fas fa-shopping-cart"></i></div>
                        <div class="card-info">
                            <h3>Sales</h3>
                            <p class="value">1,245</p>
                            <span class="trend positive"><i class="fas fa-arrow-up"></i> 8%</span>
                        </div>
                    </div>
                    <div class="card stat-card">
                        <div class="card-icon purple"><i class="fas fa-users"></i></div>
                        <div class="card-info">
                            <h3>Customers</h3>
                            <p class="value">3,456</p>
                            <span class="trend negative"><i class="fas fa-arrow-down"></i> 2%</span>
                        </div>
                    </div>
                    <div class="card stat-card">
                        <div class="card-icon orange"><i class="fas fa-box-open"></i></div>
                        <div class="card-info">
                            <h3>Products</h3>
                            <p class="value">458</p>
                            <span class="trend neutral"><i class="fas fa-minus"></i> 0%</span>
                        </div>
                    </div>
                </section>

                <div class="grid-layout">
                    <!-- Financial Charts Placeholder -->
                    <section class="card chart-section">
                        <div class="card-header">
                            <h2>Revenue Overview</h2>
                            <div class="actions">
                                <select><option>This Year</option><option>Last Year</option></select>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-placeholder">
                                <!-- Chart goes here -->
                                <p>Financial Chart Widget</p>
                            </div>
                        </div>
                    </section>

                    <!-- POS Checkout Component -->
                    <section class="card pos-section">
                        <div class="card-header">
                            <h2>Quick POS</h2>
                        </div>
                        <div class="card-body">
                            <div class="pos-search">
                                <input type="text" placeholder="Scan barcode or search...">
                                <button class="btn btn-primary"><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="pos-cart">
                                <div class="cart-item">
                                    <div class="item-details">
                                        <span class="item-name">Premium Widget</span>
                                        <span class="item-price">$45.00</span>
                                    </div>
                                    <div class="item-actions">
                                        <button class="qty-btn">-</button>
                                        <span class="qty">2</span>
                                        <button class="qty-btn">+</button>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="item-details">
                                        <span class="item-name">Super Gadget</span>
                                        <span class="item-price">$120.00</span>
                                    </div>
                                    <div class="item-actions">
                                        <button class="qty-btn">-</button>
                                        <span class="qty">1</span>
                                        <button class="qty-btn">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="pos-summary">
                                <div class="summary-row">
                                    <span>Subtotal</span>
                                    <span>$210.00</span>
                                </div>
                                <div class="summary-row">
                                    <span>Tax (10%)</span>
                                    <span>$21.00</span>
                                </div>
                                <div class="summary-row total">
                                    <span>Total</span>
                                    <span>$231.00</span>
                                </div>
                            </div>
                            <button class="btn btn-success btn-large btn-block">Checkout</button>
                        </div>
                    </section>
                </div>

                <!-- Professional Data Table -->
                <section class="card table-section">
                    <div class="card-header">
                        <h2>Recent Transactions</h2>
                        <button class="btn btn-outline">View All</button>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#TRX-001</td>
                                    <td>John Doe</td>
                                    <td>Oct 24, 2024</td>
                                    <td>$231.00</td>
                                    <td><span class="badge status-completed">Completed</span></td>
                                    <td><button class="btn btn-icon"><i class="fas fa-ellipsis-v"></i></button></td>
                                </tr>
                                <tr>
                                    <td>#TRX-002</td>
                                    <td>Jane Smith</td>
                                    <td>Oct 23, 2024</td>
                                    <td>$1,450.00</td>
                                    <td><span class="badge status-pending">Pending</span></td>
                                    <td><button class="btn btn-icon"><i class="fas fa-ellipsis-v"></i></button></td>
                                </tr>
                                <tr>
                                    <td>#TRX-003</td>
                                    <td>Bob Johnson</td>
                                    <td>Oct 21, 2024</td>
                                    <td>$45.00</td>
                                    <td><span class="badge status-completed">Completed</span></td>
                                    <td><button class="btn btn-icon"><i class="fas fa-ellipsis-v"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- Well-organized Forms -->
                <section class="card form-section">
                    <div class="card-header">
                        <h2>Add New Product</h2>
                    </div>
                    <div class="card-body">
                        <form class="organized-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="productName">Product Name</label>
                                    <input type="text" id="productName" placeholder="Enter product name">
                                </div>
                                <div class="form-group">
                                    <label for="sku">SKU</label>
                                    <input type="text" id="sku" placeholder="Enter SKU">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" id="price" placeholder="0.00">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select id="category">
                                        <option value="">Select Category</option>
                                        <option value="electronics">Electronics</option>
                                        <option value="clothing">Clothing</option>
                                        <option value="food">Food</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" rows="3" placeholder="Enter product description"></textarea>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-outline">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Product</button>
                            </div>
                        </form>
                    </div>
                </section>

            </div>
        </main>

<?php include 'includes/footer.php'; ?>