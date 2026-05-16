<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VØID Admin — Command Center</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Outfit:wght@200;300;400;500;600&family=JetBrains+Mono:wght@300;400&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
</head>

<body>

    <!-- Sidebar Overlay (mobile) -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

    <!-- ══════════ SIDEBAR ══════════ -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <div class="logo-mark">VØI<span class="logo-dot">D</span></div>
            <div class="logo-sub">Admin Command Center</div>
        </div>

        <nav class="sidebar-nav">
            <div class="nav-group-label">Overview</div>
            <a class="nav-item active" onclick="showPage('dashboard', this)">
                <i class="fa-solid fa-chart-line"></i> Dashboard
            </a>
            <a class="nav-item" onclick="showPage('analytics', this)">
                <i class="fa-solid fa-chart-pie"></i> Analytics
            </a>

            <div class="nav-group-label">Commerce</div>
            <a class="nav-item" onclick="showPage('orders', this)">
                <i class="fa-solid fa-bag-shopping"></i> Orders
                <span class="nav-badge red">12</span>
            </a>
            <a class="nav-item" onclick="showPage('products', this)">
                <i class="fa-solid fa-shirt"></i> Products
            </a>
            <a class="nav-item" onclick="showPage('inventory', this)">
                <i class="fa-solid fa-boxes-stacked"></i> Inventory
                <span class="nav-badge">3</span>
            </a>
            <a class="nav-item" onclick="showPage('customers', this)">
                <i class="fa-solid fa-users"></i> Customers
            </a>

            <div class="nav-group-label">Marketing</div>
            <a class="nav-item" onclick="showPage('coupons', this)">
                <i class="fa-solid fa-tag"></i> Coupons
            </a>
            <a class="nav-item" onclick="showPage('newsletter', this)">
                <i class="fa-solid fa-envelope"></i> Newsletter
                <span class="nav-badge green">New</span>
            </a>

            <div class="nav-group-label">System</div>
            <a class="nav-item" onclick="showPage('settings', this)">
                <i class="fa-solid fa-gear"></i> Settings
            </a>
            <a class="nav-item" onclick="showPage('logs', this)">
                <i class="fa-solid fa-terminal"></i> Activity Log
            </a>
        </nav>

        <div class="sidebar-footer">
            <div class="admin-profile">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=100&q=80&auto=format&fit=crop&crop=face"
                    class="admin-avatar" alt="Admin" />
                <div>
                    <div class="admin-name">Aryan Shah</div>
                    <div class="admin-role">Super Admin</div>
                </div>
                <i class="fa-solid fa-ellipsis-vertical admin-chevron"></i>
            </div>
        </div>
    </aside>

    <!-- ══════════ TOPBAR ══════════ -->
    <header class="topbar">
        <button class="topbar-btn hamburger" onclick="openSidebar()"><i class="fa-solid fa-bars"></i></button>
        <div class="topbar-title" id="topbarTitle">Dashboard <span>Overview</span></div>
        <div class="topbar-search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search orders, products…" />
        </div>
        <div class="topbar-actions">
            <div class="topbar-btn" onclick="showToast('No new messages', 'All caught up!')">
                <i class="fa-regular fa-bell"></i>
                <div class="notif-dot"></div>
            </div>
            <div class="topbar-btn" onclick="showToast('Theme', 'Dark mode active')">
                <i class="fa-solid fa-moon"></i>
            </div>
            <div class="topbar-btn" onclick="showToast('Refreshing…', 'Data synced successfully')">
                <i class="fa-solid fa-rotate"></i>
            </div>
        </div>
    </header>

    <script src="{{asset('assets/js/admin.js')}}"></script>
</body>

</html>
