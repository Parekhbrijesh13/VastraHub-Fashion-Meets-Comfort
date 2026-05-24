<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VastraHub Admin — @yield('title', 'Master')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Outfit:wght@200;300;400;500;600&family=JetBrains+Mono:wght@300;400&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet" /> --}}
    <style>
        /* MODAL BACKDROP */
        .modal {
            position: fixed;
            inset: 0;
            z-index: 9999;

            display: none;

            background: rgba(0, 0, 0, .7);

            overflow-y: auto;
            padding: 30px 15px;

            align-items: center;
            justify-content: center;
        }

        /* SHOW MODAL */
        .modal.show {
            display: flex !important;
        }

        /* DIALOG */
        .modal-dialog {
            width: 100%;
            max-width: 520px;
            margin: auto;
        }

        /* MODAL BOX */
        .custom-modal {
            background: #12121a;
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 20px;

            max-height: 90vh;
            overflow-y: auto;

            animation: modalFade .25s ease;
        }

        /* ANIMATION */
        @keyframes modalFade {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* HEADER */
        .custom-modal .modal-header {
            padding: 18px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
        }

        /* BODY */
        .custom-modal .modal-body {
            padding: 20px;
        }

        /* FOOTER */
        .custom-modal .modal-footer {
            padding: 18px 20px;
            border-top: 1px solid rgba(255, 255, 255, .08);
        }

        /* TITLE */
        .custom-modal .modal-title {
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
        }

        /* INPUTS */
        .custom-modal .form-control,
        .custom-modal .form-select,
        .custom-modal textarea,
        .custom-modal select,
        .custom-modal input {
            background: rgba(255, 255, 255, .04) !important;
            border: 1px solid rgba(255, 255, 255, .08) !important;
            color: white !important;

            border-radius: 12px;
            min-height: 52px;
        }

        /* TEXTAREA */
        .custom-modal textarea {
            min-height: 140px;
            resize: vertical;
        }

        /* FOCUS */
        .custom-modal .form-control:focus,
        .custom-modal .form-select:focus,
        .custom-modal textarea:focus {
            box-shadow: 0 0 0 3px rgba(201, 169, 110, .18) !important;
            border-color: #c9a96e !important;
        }

        /* LABELS */
        .custom-modal .form-label {
            color: rgba(255, 255, 255, .7);
            font-size: .78rem;
            letter-spacing: .12em;
            text-transform: uppercase;

            margin-bottom: 8px;
        }

        /* BUTTONS */
        .custom-modal .btn {
            border: none;
            border-radius: 10px;

            padding: 10px 18px;
        }

        /* CLOSE BUTTON */
        .custom-modal .btn-secondary {
            background: rgba(255, 255, 255, .08);
            color: white;
        }

        /* SAVE BUTTON */
        .custom-modal .btn-primary {
            background: #c9a96e;
            color: black;
        }

        /* SELECT OPTIONS */
        .custom-modal select option {
            background: #111;
            color: white;
        }

        /* SCROLLBAR */
        .custom-modal::-webkit-scrollbar {
            width: 6px;
        }

        .custom-modal::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, .15);
            border-radius: 10px;
        }
    </style>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            <a class="nav-item" href="{{ route('admin.category.index') }}">
                <i class="fa-solid fa-layer-group"></i> Categories
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

    <div class="main">
        <div class="page active">
            @yield('content')
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
