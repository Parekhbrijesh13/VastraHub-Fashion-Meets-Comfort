<!-- ══════════════════════════════════════════════════════
     PAGES
══════════════════════════════════════════════════════ -->
    <main class="main">
        <!-- ────────── DASHBOARD ────────── -->
        <div class="page active" id="page-dashboard">
            <div class="page-hdr">
                <div class="page-hdr-row">
                    <div>
                        <div class="page-hdr-title">Good morning, <em>Aryan</em> 👋</div>
                        <div class="page-hdr-sub">Here's what's happening with VØID today · Friday, May 15 2026</div>
                    </div>
                    <div style="display:flex;gap:10px;flex-wrap:wrap">
                        <button class="btn-sm btn-ghost" onclick="showToast('Exporting…','Report ready in a moment')"><i
                                class="fa-solid fa-download" style="margin-right:6px"></i>Export</button>
                        <button class="btn-sm btn-solid"
                            onclick="showPage('products', document.querySelector('[onclick*=products]'))"><i
                                class="fa-solid fa-plus" style="margin-right:6px"></i>Add Product</button>
                    </div>
                </div>
            </div>

            <!-- Stat Cards -->
            <div class="stat-cards">
                <div class="stat-card gold">
                    <div class="stat-icon gold"><i class="fa-solid fa-indian-rupee-sign"></i></div>
                    <div class="stat-val">₹8.4L</div>
                    <div class="stat-label">Total Revenue</div>
                    <div class="stat-change up">↑ 14.2%</div>
                </div>
                <div class="stat-card green">
                    <div class="stat-icon green"><i class="fa-solid fa-bag-shopping"></i></div>
                    <div class="stat-val">1,284</div>
                    <div class="stat-label">Total Orders</div>
                    <div class="stat-change up">↑ 8.7%</div>
                </div>
                <div class="stat-card blue">
                    <div class="stat-icon blue"><i class="fa-solid fa-users"></i></div>
                    <div class="stat-val">9,342</div>
                    <div class="stat-label">Customers</div>
                    <div class="stat-change up">↑ 22.1%</div>
                </div>
                <div class="stat-card red">
                    <div class="stat-icon red"><i class="fa-solid fa-rotate-left"></i></div>
                    <div class="stat-val">38</div>
                    <div class="stat-label">Returns</div>
                    <div class="stat-change down">↓ 3.4%</div>
                </div>
            </div>

            <!-- Revenue Chart + Top Products -->
            <div class="grid-2-1">
                <div class="card">
                    <div class="section-hdr">
                        <div>
                            <div class="card-title">Revenue Overview</div>
                            <div style="font-family:var(--font-display);font-size:1.6rem;font-weight:300">₹8,42,500
                                <span style="font-size:0.85rem;color:var(--green);font-family:var(--font-body)">↑
                                    14.2%</span></div>
                        </div>
                        <div style="display:flex;gap:8px">
                            <button class="btn-sm btn-ghost" id="btnWeek"
                                onclick="switchChart('week',this)">Week</button>
                            <button class="btn-sm btn-gold" id="btnMonth"
                                onclick="switchChart('month',this)">Month</button>
                        </div>
                    </div>
                    <div class="chart-wrap">
                        <svg class="chart-svg" viewBox="0 0 560 200" preserveAspectRatio="none"
                            id="revenueChart"></svg>
                    </div>
                    <div style="display:flex;gap:24px;margin-top:16px">
                        <div>
                            <div
                                style="font-size:0.65rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--muted);margin-bottom:3px">
                                This Period</div>
                            <div style="font-family:var(--font-mono);font-size:0.85rem;color:var(--gold)">₹8,42,500
                            </div>
                        </div>
                        <div>
                            <div
                                style="font-size:0.65rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--muted);margin-bottom:3px">
                                Last Period</div>
                            <div style="font-family:var(--font-mono);font-size:0.85rem;color:var(--muted)">₹7,37,200
                            </div>
                        </div>
                        <div>
                            <div
                                style="font-size:0.65rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--muted);margin-bottom:3px">
                                Avg Order</div>
                            <div style="font-family:var(--font-mono);font-size:0.85rem;color:var(--text)">₹6,561</div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="section-hdr">
                        <div class="section-hdr-title">Top <span>Products</span></div>
                        <a class="btn-sm btn-ghost" onclick="showPage('products',null)">View All</a>
                    </div>
                    <div id="topProductsList">
                        <div class="rank-item">
                            <div class="rank-num">01</div><img class="rank-img"
                                src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=100&q=70"
                                alt="" />
                            <div class="rank-info">
                                <div class="rank-name">Silk Drape Maxi</div>
                                <div class="rank-cat">Women · 214 sold</div>
                                <div class="progress-bar-wrap" style="margin-top:6px">
                                    <div class="progress-bar gold" style="width:85%"></div>
                                </div>
                            </div>
                            <div class="rank-revenue">₹91,986</div>
                        </div>
                        <div class="rank-item">
                            <div class="rank-num">02</div><img class="rank-img"
                                src="https://images.unsplash.com/photo-1593030761757-71fae45fa0e7?w=100&q=70"
                                alt="" />
                            <div class="rank-info">
                                <div class="rank-name">Wool Blazer</div>
                                <div class="rank-cat">Men · 178 sold</div>
                                <div class="progress-bar-wrap" style="margin-top:6px">
                                    <div class="progress-bar blue" style="width:70%"></div>
                                </div>
                            </div>
                            <div class="rank-revenue">₹1,15,622</div>
                        </div>
                        <div class="rank-item">
                            <div class="rank-num">03</div><img class="rank-img"
                                src="https://images.unsplash.com/photo-1556821840-3a63f15732ce?w=100&q=70"
                                alt="" />
                            <div class="rank-info">
                                <div class="rank-name">Crop Hoodie</div>
                                <div class="rank-cat">Street · 312 sold</div>
                                <div class="progress-bar-wrap" style="margin-top:6px">
                                    <div class="progress-bar green" style="width:60%"></div>
                                </div>
                            </div>
                            <div class="rank-revenue">₹90,388</div>
                        </div>
                        <div class="rank-item">
                            <div class="rank-num">04</div><img class="rank-img"
                                src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=100&q=70"
                                alt="" />
                            <div class="rank-info">
                                <div class="rank-name">Leather Crossbody</div>
                                <div class="rank-cat">Acc · 96 sold</div>
                                <div class="progress-bar-wrap" style="margin-top:6px">
                                    <div class="progress-bar red" style="width:40%"></div>
                                </div>
                            </div>
                            <div class="rank-revenue">₹30,710</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Orders + Activity + Donut -->
            <div class="grid-2-1">
                <div class="card">
                    <div class="section-hdr">
                        <div class="section-hdr-title">Recent <span>Orders</span></div>
                        <a class="btn-sm btn-ghost" onclick="showPage('orders',null)">View All</a>
                    </div>
                    <div style="overflow-x:auto">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Items</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="order-id">#VD-10284</div>
                                    </td>
                                    <td>
                                        <div class="customer-cell">
                                            <div class="cust-avatar">SM</div>
                                            <div>
                                                <div class="cust-name">Sofia M.</div>
                                                <div class="cust-email">sofia@mail.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td style="font-family:var(--font-mono);color:var(--gold)">₹12,897</td>
                                    <td><span class="badge delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="order-id">#VD-10283</div>
                                    </td>
                                    <td>
                                        <div class="customer-cell">
                                            <div class="cust-avatar">AK</div>
                                            <div>
                                                <div class="cust-name">Aryan K.</div>
                                                <div class="cust-email">aryan@mail.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td style="font-family:var(--font-mono);color:var(--gold)">₹6,499</td>
                                    <td><span class="badge processing">Processing</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="order-id">#VD-10282</div>
                                    </td>
                                    <td>
                                        <div class="customer-cell">
                                            <div class="cust-avatar">PS</div>
                                            <div>
                                                <div class="cust-name">Priya S.</div>
                                                <div class="cust-email">priya@mail.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td style="font-family:var(--font-mono);color:var(--gold)">₹7,798</td>
                                    <td><span class="badge delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="order-id">#VD-10281</div>
                                    </td>
                                    <td>
                                        <div class="customer-cell">
                                            <div class="cust-avatar">RJ</div>
                                            <div>
                                                <div class="cust-name">Raj J.</div>
                                                <div class="cust-email">raj@mail.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td style="font-family:var(--font-mono);color:var(--gold)">₹19,596</td>
                                    <td><span class="badge pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="order-id">#VD-10280</div>
                                    </td>
                                    <td>
                                        <div class="customer-cell">
                                            <div class="cust-avatar">NP</div>
                                            <div>
                                                <div class="cust-name">Neha P.</div>
                                                <div class="cust-email">neha@mail.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td style="font-family:var(--font-mono);color:var(--gold)">₹4,299</td>
                                    <td><span class="badge cancelled">Cancelled</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div style="display:flex;flex-direction:column;gap:16px">
                    <div class="card">
                        <div class="card-title">Sales by Category</div>
                        <div class="donut-wrap">
                            <svg class="donut-svg" viewBox="0 0 110 110">
                                <circle cx="55" cy="55" r="38" fill="none" stroke="var(--raised)"
                                    stroke-width="14" />
                                <circle cx="55" cy="55" r="38" fill="none" stroke="var(--gold)"
                                    stroke-width="14" stroke-dasharray="101 138" stroke-dashoffset="0"
                                    transform="rotate(-90 55 55)" />
                                <circle cx="55" cy="55" r="38" fill="none" stroke="var(--blue)"
                                    stroke-width="14" stroke-dasharray="55 184" stroke-dashoffset="-101"
                                    transform="rotate(-90 55 55)" />
                                <circle cx="55" cy="55" r="38" fill="none" stroke="var(--green)"
                                    stroke-width="14" stroke-dasharray="35 204" stroke-dashoffset="-156"
                                    transform="rotate(-90 55 55)" />
                                <circle cx="55" cy="55" r="38" fill="none" stroke="var(--red)"
                                    stroke-width="14" stroke-dasharray="23 216" stroke-dashoffset="-191"
                                    transform="rotate(-90 55 55)" />
                                <text x="55" y="51" text-anchor="middle" fill="var(--text)" font-size="10"
                                    font-family="Cormorant Garamond">42%</text>
                                <text x="55" y="62" text-anchor="middle" fill="var(--muted)" font-size="7"
                                    font-family="Outfit">Women</text>
                            </svg>
                            <div class="donut-legend">
                                <div class="legend-item">
                                    <div class="legend-dot" style="background:var(--gold)"></div>Women<div
                                        class="legend-pct">42%</div>
                                </div>
                                <div class="legend-item">
                                    <div class="legend-dot" style="background:var(--blue)"></div>Men<div
                                        class="legend-pct">23%</div>
                                </div>
                                <div class="legend-item">
                                    <div class="legend-dot" style="background:var(--green)"></div>Street<div
                                        class="legend-pct">15%</div>
                                </div>
                                <div class="legend-item">
                                    <div class="legend-dot" style="background:var(--red)"></div>Accessories<div
                                        class="legend-pct">10%</div>
                                </div>
                                <div class="legend-item">
                                    <div class="legend-dot" style="background:var(--muted)"></div>Other<div
                                        class="legend-pct">10%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="flex:1">
                        <div class="card-title">Live Activity</div>
                        <div class="activity-item">
                            <div class="act-icon" style="background:var(--green-dim);color:var(--green)"><i
                                    class="fa-solid fa-check"></i></div>
                            <div class="act-content">
                                <div class="act-title"><strong>Order #10284</strong> delivered</div>
                                <div class="act-time">2 min ago</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="act-icon" style="background:var(--gold-dim);color:var(--gold)"><i
                                    class="fa-solid fa-user-plus"></i></div>
                            <div class="act-content">
                                <div class="act-title"><strong>Meera T.</strong> registered</div>
                                <div class="act-time">8 min ago</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="act-icon" style="background:var(--blue-dim);color:var(--blue)"><i
                                    class="fa-solid fa-bag-shopping"></i></div>
                            <div class="act-content">
                                <div class="act-title">New order <strong>#10285</strong> placed</div>
                                <div class="act-time">14 min ago</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="act-icon" style="background:var(--red-dim);color:var(--red)"><i
                                    class="fa-solid fa-rotate-left"></i></div>
                            <div class="act-content">
                                <div class="act-title">Return request <strong>#R-284</strong></div>
                                <div class="act-time">31 min ago</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ────────── ORDERS ────────── -->
        <div class="page" id="page-orders">
            <div class="page-hdr">
                <div class="page-hdr-row">
                    <div>
                        <div class="page-hdr-title"><em>Orders</em> Management</div>
                        <div class="page-hdr-sub">1,284 total orders · 12 require attention</div>
                    </div>
                    <button class="btn-sm btn-ghost" onclick="showToast('Exporting…','Orders CSV ready')"><i
                            class="fa-solid fa-download" style="margin-right:6px"></i>Export CSV</button>
                </div>
            </div>
            <div class="tab-bar">
                <button class="tab-btn active" onclick="switchTab('ord','all',this)">All Orders</button>
                <button class="tab-btn" onclick="switchTab('ord','processing',this)">Processing <span
                        style="background:var(--blue-dim);color:var(--blue);padding:1px 7px;border-radius:10px;font-size:0.6rem;margin-left:4px">24</span></button>
                <button class="tab-btn" onclick="switchTab('ord','pending',this)">Pending <span
                        style="background:var(--gold-dim);color:var(--gold);padding:1px 7px;border-radius:10px;font-size:0.6rem;margin-left:4px">12</span></button>
                <button class="tab-btn" onclick="switchTab('ord','delivered',this)">Delivered</button>
                <button class="tab-btn" onclick="switchTab('ord','cancelled',this)">Cancelled</button>
            </div>
            <div class="card">
                <div style="overflow-x:auto">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Items</th>
                                <th>Amount</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="ordersTableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ────────── PRODUCTS ────────── -->
        <div class="page" id="page-products">
            <div class="page-hdr">
                <div class="page-hdr-row">
                    <div>
                        <div class="page-hdr-title"><em>Products</em> Catalogue</div>
                        <div class="page-hdr-sub">8 products · 2 low stock alerts</div>
                    </div>
                    <button class="btn-sm btn-solid" onclick="showToast('Add Product','Product form opened')"><i
                            class="fa-solid fa-plus" style="margin-right:6px"></i>Add Product</button>
                </div>
            </div>
            <div class="card">
                <div style="display:flex;gap:12px;margin-bottom:20px;flex-wrap:wrap">
                    <div style="flex:1;min-width:200px" class="topbar-search"><i
                            class="fa-solid fa-magnifying-glass"></i><input type="text"
                            placeholder="Search products…"
                            style="background:none;border:none;outline:none;color:var(--text);font-family:var(--font-body);font-size:0.82rem;width:100%" />
                    </div>
                    <select class="form-control" style="width:auto">
                        <option>All Categories</option>
                        <option>Women</option>
                        <option>Men</option>
                        <option>Streetwear</option>
                        <option>Accessories</option>
                    </select>
                    <select class="form-control" style="width:auto">
                        <option>All Stock</option>
                        <option>In Stock</option>
                        <option>Low Stock</option>
                        <option>Out of Stock</option>
                    </select>
                </div>
                <div style="overflow-x:auto">
                    <table class="data-table" id="productsTable">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Sales</th>
                                <th>Revenue</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="productsTableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ────────── INVENTORY ────────── -->
        <div class="page" id="page-inventory">
            <div class="page-hdr">
                <div>
                    <div class="page-hdr-title"><em>Inventory</em> Control</div>
                    <div class="page-hdr-sub">Monitor stock levels and restocking alerts</div>
                </div>
            </div>
            <div class="stat-cards" style="grid-template-columns:repeat(3,1fr)">
                <div class="stat-card green">
                    <div class="stat-icon green"><i class="fa-solid fa-circle-check"></i></div>
                    <div class="stat-val">312</div>
                    <div class="stat-label">In Stock Items</div>
                </div>
                <div class="stat-card gold">
                    <div class="stat-icon gold"><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <div class="stat-val">24</div>
                    <div class="stat-label">Low Stock (&lt;10)</div>
                </div>
                <div class="stat-card red">
                    <div class="stat-icon red"><i class="fa-solid fa-ban"></i></div>
                    <div class="stat-val">8</div>
                    <div class="stat-label">Out of Stock</div>
                </div>
            </div>
            <div class="card">
                <div class="section-hdr">
                    <div class="section-hdr-title">Stock <span>Levels</span></div><button class="btn-sm btn-gold"
                        onclick="showToast('Restock Alert','Emails sent to suppliers')"><i class="fa-solid fa-bell"
                            style="margin-right:6px"></i>Alert Suppliers</button>
                </div>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>SKU</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Level</th>
                            <th>Reorder At</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div style="display:flex;align-items:center;gap:10px"><img
                                        src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=60&q=70"
                                        style="width:40px;height:50px;object-fit:cover;border-radius:2px"
                                        alt="" /><span>Silk Drape Maxi</span></div>
                            </td>
                            <td class="order-id">VD-W-001</td>
                            <td>Women</td>
                            <td>48</td>
                            <td>
                                <div class="progress-bar-wrap" style="width:120px">
                                    <div class="progress-bar green" style="width:80%"></div>
                                </div>
                            </td>
                            <td>15</td>
                            <td><span class="badge active">In Stock</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div style="display:flex;align-items:center;gap:10px"><img
                                        src="https://images.unsplash.com/photo-1593030761757-71fae45fa0e7?w=60&q=70"
                                        style="width:40px;height:50px;object-fit:cover;border-radius:2px"
                                        alt="" /><span>Wool Blazer</span></div>
                            </td>
                            <td class="order-id">VD-M-002</td>
                            <td>Men</td>
                            <td>7</td>
                            <td>
                                <div class="progress-bar-wrap" style="width:120px">
                                    <div class="progress-bar red" style="width:12%"></div>
                                </div>
                            </td>
                            <td>20</td>
                            <td><span class="badge cancelled">Low Stock</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div style="display:flex;align-items:center;gap:10px"><img
                                        src="https://images.unsplash.com/photo-1556821840-3a63f15732ce?w=60&q=70"
                                        style="width:40px;height:50px;object-fit:cover;border-radius:2px"
                                        alt="" /><span>Crop Hoodie</span></div>
                            </td>
                            <td class="order-id">VD-S-003</td>
                            <td>Streetwear</td>
                            <td>104</td>
                            <td>
                                <div class="progress-bar-wrap" style="width:120px">
                                    <div class="progress-bar gold" style="width:90%"></div>
                                </div>
                            </td>
                            <td>25</td>
                            <td><span class="badge active">In Stock</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div style="display:flex;align-items:center;gap:10px"><img
                                        src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=60&q=70"
                                        style="width:40px;height:50px;object-fit:cover;border-radius:2px"
                                        alt="" /><span>Leather Crossbody</span></div>
                            </td>
                            <td class="order-id">VD-A-004</td>
                            <td>Accessories</td>
                            <td>0</td>
                            <td>
                                <div class="progress-bar-wrap" style="width:120px">
                                    <div class="progress-bar red" style="width:0%"></div>
                                </div>
                            </td>
                            <td>10</td>
                            <td><span class="badge cancelled">Out of Stock</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div style="display:flex;align-items:center;gap:10px"><img
                                        src="https://images.unsplash.com/photo-1594938298603-c8148c4b4b6e?w=60&q=70"
                                        style="width:40px;height:50px;object-fit:cover;border-radius:2px"
                                        alt="" /><span>Wide-Leg Pants</span></div>
                            </td>
                            <td class="order-id">VD-W-005</td>
                            <td>Women</td>
                            <td>32</td>
                            <td>
                                <div class="progress-bar-wrap" style="width:120px">
                                    <div class="progress-bar blue" style="width:55%"></div>
                                </div>
                            </td>
                            <td>15</td>
                            <td><span class="badge active">In Stock</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ────────── CUSTOMERS ────────── -->
        <div class="page" id="page-customers">
            <div class="page-hdr">
                <div>
                    <div class="page-hdr-title"><em>Customer</em> Base</div>
                    <div class="page-hdr-sub">9,342 registered customers</div>
                </div>
            </div>
            <div class="stat-cards" style="grid-template-columns:repeat(3,1fr);margin-bottom:24px">
                <div class="stat-card blue">
                    <div class="stat-icon blue"><i class="fa-solid fa-users"></i></div>
                    <div class="stat-val">9,342</div>
                    <div class="stat-label">Total Customers</div>
                    <div class="stat-change up">↑ 22.1%</div>
                </div>
                <div class="stat-card green">
                    <div class="stat-icon green"><i class="fa-solid fa-repeat"></i></div>
                    <div class="stat-val">64%</div>
                    <div class="stat-label">Retention Rate</div>
                    <div class="stat-change up">↑ 4.2%</div>
                </div>
                <div class="stat-card gold">
                    <div class="stat-icon gold"><i class="fa-solid fa-star"></i></div>
                    <div class="stat-val">₹6,561</div>
                    <div class="stat-label">Avg. Lifetime Value</div>
                </div>
            </div>
            <div class="card">
                <div class="section-hdr">
                    <div class="section-hdr-title">Top <span>Customers</span></div>
                </div>
                <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:12px"
                    id="customersGrid">
                    <!-- populated by JS -->
                </div>
            </div>
        </div>

        <!-- ────────── COUPONS ────────── -->
        <div class="page" id="page-coupons">
            <div class="page-hdr">
                <div class="page-hdr-row">
                    <div>
                        <div class="page-hdr-title"><em>Coupons</em> & Offers</div>
                        <div class="page-hdr-sub">4 active promotions</div>
                    </div>
                    <button class="btn-sm btn-solid" onclick="showToast('New Coupon','Coupon creator opened')"><i
                            class="fa-solid fa-plus" style="margin-right:6px"></i>Create Coupon</button>
                </div>
            </div>
            <div class="grid-1-1">
                <div class="card"
                    style="border:1px solid var(--gold-dim);background:linear-gradient(135deg,var(--panel),var(--gold-dim))">
                    <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:20px">
                        <div>
                            <div
                                style="font-size:0.62rem;letter-spacing:0.3em;text-transform:uppercase;color:var(--gold);margin-bottom:8px">
                                Welcome Offer</div>
                            <div
                                style="font-family:var(--font-display);font-size:2.5rem;font-weight:700;letter-spacing:0.1em;color:var(--gold)">
                                VOID30</div>
                        </div>
                        <span class="badge active">Active</span>
                    </div>
                    <div style="font-size:0.82rem;color:var(--muted);margin-bottom:16px">30% off on first order · No
                        min. spend</div>
                    <div style="display:flex;gap:20px;margin-bottom:16px">
                        <div>
                            <div
                                style="font-size:0.65rem;color:var(--muted);letter-spacing:0.15em;text-transform:uppercase">
                                Used</div>
                            <div style="font-family:var(--font-mono);color:var(--text)">1,284</div>
                        </div>
                        <div>
                            <div
                                style="font-size:0.65rem;color:var(--muted);letter-spacing:0.15em;text-transform:uppercase">
                                Expires</div>
                            <div style="font-family:var(--font-mono);color:var(--text)">31 Dec 2026</div>
                        </div>
                    </div>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar gold" style="width:64%"></div>
                    </div>
                    <div style="font-size:0.68rem;color:var(--muted);margin-top:6px">1,284 / 2,000 uses</div>
                </div>
                <div class="card">
                    <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:20px">
                        <div>
                            <div
                                style="font-size:0.62rem;letter-spacing:0.3em;text-transform:uppercase;color:var(--blue);margin-bottom:8px">
                                Flash Sale</div>
                            <div
                                style="font-family:var(--font-display);font-size:2.5rem;font-weight:700;letter-spacing:0.1em;color:var(--text)">
                                FLASH50</div>
                        </div>
                        <span class="badge processing">Scheduled</span>
                    </div>
                    <div style="font-size:0.82rem;color:var(--muted);margin-bottom:16px">50% off selected items · Min.
                        ₹2,000</div>
                    <div style="display:flex;gap:20px">
                        <div>
                            <div
                                style="font-size:0.65rem;color:var(--muted);letter-spacing:0.15em;text-transform:uppercase">
                                Starts</div>
                            <div style="font-family:var(--font-mono);color:var(--text)">20 May 2026</div>
                        </div>
                        <div>
                            <div
                                style="font-size:0.65rem;color:var(--muted);letter-spacing:0.15em;text-transform:uppercase">
                                Limit</div>
                            <div style="font-family:var(--font-mono);color:var(--text)">500 uses</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ────────── SETTINGS ────────── -->
        <div class="page" id="page-settings">
            <div class="page-hdr">
                <div class="page-hdr-title"><em>Settings</em></div>
                <div class="page-hdr-sub">Manage store preferences and configurations</div>
            </div>
            <div class="grid-1-1">
                <div class="card">
                    <div class="section-hdr">
                        <div class="section-hdr-title">Store <span>Profile</span></div>
                    </div>
                    <div class="form-group"><label class="form-label">Store Name</label><input class="form-control"
                            value="VØID Fashion" /></div>
                    <div class="form-row">
                        <div class="form-group"><label class="form-label">Email</label><input class="form-control"
                                value="hello@void.fashion" type="email" /></div>
                        <div class="form-group"><label class="form-label">Phone</label><input class="form-control"
                                value="+91 98765 43210" /></div>
                    </div>
                    <div class="form-group"><label class="form-label">Address</label>
                        <textarea class="form-control">12, Fashion Street, Mumbai 400001, India</textarea>
                    </div>
                    <button class="btn-sm btn-solid" onclick="showToast('Saved','Store profile updated')">Save
                        Changes</button>
                </div>
                <div style="display:flex;flex-direction:column;gap:16px">
                    <div class="card">
                        <div class="section-hdr">
                            <div class="section-hdr-title">Store <span>Features</span></div>
                        </div>
                        <div style="display:flex;flex-direction:column;gap:16px">
                            <div class="toggle-wrap"><label class="toggle"><input type="checkbox" checked />
                                    <div class="toggle-slider"></div>
                                </label><span class="toggle-label">Wishlist Feature</span></div>
                            <div class="toggle-wrap"><label class="toggle"><input type="checkbox" checked />
                                    <div class="toggle-slider"></div>
                                </label><span class="toggle-label">Guest Checkout</span></div>
                            <div class="toggle-wrap"><label class="toggle"><input type="checkbox" />
                                    <div class="toggle-slider"></div>
                                </label><span class="toggle-label">Maintenance Mode</span></div>
                            <div class="toggle-wrap"><label class="toggle"><input type="checkbox" checked />
                                    <div class="toggle-slider"></div>
                                </label><span class="toggle-label">Auto Restock Alerts</span></div>
                            <div class="toggle-wrap"><label class="toggle"><input type="checkbox" checked />
                                    <div class="toggle-slider"></div>
                                </label><span class="toggle-label">Review System</span></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-title">Shipping Defaults</div>
                        <div class="form-row">
                            <div class="form-group"><label class="form-label">Free Shipping Above</label><input
                                    class="form-control" value="₹2,999" /></div>
                            <div class="form-group"><label class="form-label">Flat Rate</label><input
                                    class="form-control" value="₹99" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ────────── ANALYTICS ────────── -->
        <div class="page" id="page-analytics">
            <div class="page-hdr">
                <div class="page-hdr-title">Store <em>Analytics</em></div>
                <div class="page-hdr-sub">Deep dive into performance metrics</div>
            </div>
            <div class="stat-cards">
                <div class="stat-card gold">
                    <div class="stat-icon gold"><i class="fa-solid fa-eye"></i></div>
                    <div class="stat-val">84.2K</div>
                    <div class="stat-label">Page Views</div>
                    <div class="stat-change up">↑ 31%</div>
                </div>
                <div class="stat-card blue">
                    <div class="stat-icon blue"><i class="fa-solid fa-percent"></i></div>
                    <div class="stat-val">3.8%</div>
                    <div class="stat-label">Conversion Rate</div>
                    <div class="stat-change up">↑ 0.4%</div>
                </div>
                <div class="stat-card green">
                    <div class="stat-icon green"><i class="fa-solid fa-clock"></i></div>
                    <div class="stat-val">4m 22s</div>
                    <div class="stat-label">Avg. Session</div>
                    <div class="stat-change up">↑ 18s</div>
                </div>
                <div class="stat-card red">
                    <div class="stat-icon red"><i class="fa-solid fa-door-open"></i></div>
                    <div class="stat-val">42%</div>
                    <div class="stat-label">Bounce Rate</div>
                    <div class="stat-change down">↓ 3.1%</div>
                </div>
            </div>
            <div class="grid-1-1">
                <div class="card">
                    <div class="card-title">Traffic Sources</div>
                    <div style="display:flex;flex-direction:column;gap:14px;margin-top:8px">
                        <div>
                            <div style="display:flex;justify-content:space-between;margin-bottom:6px"><span
                                    style="font-size:0.8rem">Instagram</span><span
                                    style="font-family:var(--font-mono);font-size:0.78rem;color:var(--gold)">38%</span>
                            </div>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar gold" style="width:38%"></div>
                            </div>
                        </div>
                        <div>
                            <div style="display:flex;justify-content:space-between;margin-bottom:6px"><span
                                    style="font-size:0.8rem">Organic Search</span><span
                                    style="font-family:var(--font-mono);font-size:0.78rem;color:var(--green)">29%</span>
                            </div>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar green" style="width:29%"></div>
                            </div>
                        </div>
                        <div>
                            <div style="display:flex;justify-content:space-between;margin-bottom:6px"><span
                                    style="font-size:0.8rem">Direct</span><span
                                    style="font-family:var(--font-mono);font-size:0.78rem;color:var(--blue)">18%</span>
                            </div>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar blue" style="width:18%"></div>
                            </div>
                        </div>
                        <div>
                            <div style="display:flex;justify-content:space-between;margin-bottom:6px"><span
                                    style="font-size:0.8rem">Email Campaign</span><span
                                    style="font-family:var(--font-mono);font-size:0.78rem;color:var(--purple)">10%</span>
                            </div>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" style="width:10%;background:var(--purple)"></div>
                            </div>
                        </div>
                        <div>
                            <div style="display:flex;justify-content:space-between;margin-bottom:6px"><span
                                    style="font-size:0.8rem">Other</span><span
                                    style="font-family:var(--font-mono);font-size:0.78rem;color:var(--muted)">5%</span>
                            </div>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" style="width:5%;background:var(--muted)"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-title">Device Breakdown</div>
                    <div class="donut-wrap" style="margin-top:12px">
                        <svg class="donut-svg" viewBox="0 0 110 110">
                            <circle cx="55" cy="55" r="38" fill="none" stroke="var(--raised)"
                                stroke-width="14" />
                            <circle cx="55" cy="55" r="38" fill="none" stroke="var(--gold)"
                                stroke-width="14" stroke-dasharray="142 97" stroke-dashoffset="0"
                                transform="rotate(-90 55 55)" />
                            <circle cx="55" cy="55" r="38" fill="none" stroke="var(--blue)"
                                stroke-width="14" stroke-dasharray="66 173" stroke-dashoffset="-142"
                                transform="rotate(-90 55 55)" />
                            <circle cx="55" cy="55" r="38" fill="none" stroke="var(--green)"
                                stroke-width="14" stroke-dasharray="31 208" stroke-dashoffset="-208"
                                transform="rotate(-90 55 55)" />
                            <text x="55" y="51" text-anchor="middle" fill="var(--text)" font-size="10"
                                font-family="Cormorant Garamond">60%</text>
                            <text x="55" y="62" text-anchor="middle" fill="var(--muted)" font-size="7"
                                font-family="Outfit">Mobile</text>
                        </svg>
                        <div class="donut-legend">
                            <div class="legend-item">
                                <div class="legend-dot" style="background:var(--gold)"></div>Mobile<div
                                    class="legend-pct">60%</div>
                            </div>
                            <div class="legend-item">
                                <div class="legend-dot" style="background:var(--blue)"></div>Desktop<div
                                    class="legend-pct">28%</div>
                            </div>
                            <div class="legend-item">
                                <div class="legend-dot" style="background:var(--green)"></div>Tablet<div
                                    class="legend-pct">12%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ────────── NEWSLETTER ────────── -->
        <div class="page" id="page-newsletter">
            <div class="page-hdr">
                <div class="page-hdr-title"><em>Newsletter</em> Manager</div>
                <div class="page-hdr-sub">4,218 active subscribers</div>
            </div>
            <div class="stat-cards" style="grid-template-columns:repeat(3,1fr);margin-bottom:24px">
                <div class="stat-card gold">
                    <div class="stat-icon gold"><i class="fa-solid fa-envelope"></i></div>
                    <div class="stat-val">4,218</div>
                    <div class="stat-label">Subscribers</div>
                    <div class="stat-change up">↑ 142 this week</div>
                </div>
                <div class="stat-card green">
                    <div class="stat-icon green"><i class="fa-solid fa-eye"></i></div>
                    <div class="stat-val">62%</div>
                    <div class="stat-label">Open Rate</div>
                </div>
                <div class="stat-card blue">
                    <div class="stat-icon blue"><i class="fa-solid fa-arrow-pointer"></i></div>
                    <div class="stat-val">18%</div>
                    <div class="stat-label">Click Rate</div>
                </div>
            </div>
            <div class="card">
                <div class="section-hdr">
                    <div class="section-hdr-title">Compose <span>Campaign</span></div>
                </div>
                <div class="form-row">
                    <div class="form-group"><label class="form-label">Campaign Name</label><input
                            class="form-control" placeholder="e.g. Summer Drop Announcement" /></div>
                    <div class="form-group"><label class="form-label">Subject Line</label><input class="form-control"
                            placeholder="The drop you've been waiting for…" /></div>
                </div>
                <div class="form-group"><label class="form-label">Audience</label><select class="form-control">
                        <option>All Subscribers (4,218)</option>
                        <option>VIP Customers (428)</option>
                        <option>New Subscribers (142)</option>
                    </select></div>
                <div class="form-group"><label class="form-label">Message</label>
                    <textarea class="form-control" style="min-height:140px" placeholder="Write your newsletter content here…"></textarea>
                </div>
                <div style="display:flex;gap:10px;flex-wrap:wrap">
                    <button class="btn-sm btn-ghost"
                        onclick="showToast('Preview','Email preview generated')">Preview</button>
                    <button class="btn-sm btn-ghost"
                        onclick="showToast('Test Sent','Test email delivered to admin')">Send Test</button>
                    <button class="btn-sm btn-solid"
                        onclick="showToast('Campaign Sent! 🎉','4,218 emails queued for delivery')">Send
                        Campaign</button>
                </div>
            </div>
        </div>

        <!-- ────────── LOGS ────────── -->
        <div class="page" id="page-logs">
            <div class="page-hdr">
                <div class="page-hdr-title">Activity <em>Log</em></div>
                <div class="page-hdr-sub">System events and admin actions</div>
            </div>
            <div class="card">
                <div style="font-family:var(--font-mono);font-size:0.76rem;line-height:2;color:var(--muted)">
                    <div><span style="color:var(--green)">[2026-05-15 14:02:11]</span> <span
                            style="color:var(--blue)">ORDER</span> #VD-10285 placed by Meera T. — ₹8,798</div>
                    <div><span style="color:var(--green)">[2026-05-15 13:54:08]</span> <span
                            style="color:var(--gold)">AUTH</span> Admin aryan@void.fashion logged in</div>
                    <div><span style="color:var(--green)">[2026-05-15 13:40:22]</span> <span
                            style="color:var(--purple)">PRODUCT</span> "Silk Drape Maxi" stock updated: 52 → 48</div>
                    <div><span style="color:var(--green)">[2026-05-15 13:22:15]</span> <span
                            style="color:var(--blue)">ORDER</span> #VD-10284 status updated: Processing → Delivered
                    </div>
                    <div><span style="color:var(--green)">[2026-05-15 12:18:04]</span> <span
                            style="color:var(--red)">RETURN</span> Request #R-284 from Neha P. approved</div>
                    <div><span style="color:var(--green)">[2026-05-15 11:45:33]</span> <span
                            style="color:var(--gold)">COUPON</span> VOID30 used — 1,284th redemption</div>
                    <div><span style="color:var(--green)">[2026-05-15 10:30:01]</span> <span
                            style="color:var(--purple)">SYSTEM</span> Daily analytics snapshot generated</div>
                    <div><span style="color:var(--green)">[2026-05-15 09:00:00]</span> <span
                            style="color:var(--green)">BACKUP</span> Database backup completed successfully</div>
                    <div><span style="color:var(--green)">[2026-05-14 22:14:55]</span> <span
                            style="color:var(--blue)">ORDER</span> #VD-10283 placed by Aryan K. — ₹6,499</div>
                    <div><span style="color:var(--green)">[2026-05-14 20:08:41]</span> <span
                            style="color:var(--red)">ALERT</span> Stock low: "Wool Blazer" — 7 units remaining</div>
                    <div><span style="color:var(--green)">[2026-05-14 18:33:29]</span> <span
                            style="color:var(--gold)">NEWSLETTER</span> Campaign "Spring Drop" sent to 4,218
                        subscribers</div>
                    <div><span style="color:var(--green)">[2026-05-14 16:22:10]</span> <span
                            style="color:var(--purple)">PRODUCT</span> "Denim Jacket" price updated: ₹6,500 → ₹5,299
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Toast -->
    <div class="toast" id="toast">
        <div class="toast-title" id="toastTitle"></div>
        <div class="toast-body" id="toastBody"></div>
    </div>
