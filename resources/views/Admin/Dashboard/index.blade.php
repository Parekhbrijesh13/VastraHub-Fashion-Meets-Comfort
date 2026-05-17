@extends('Admin.layouts.master-admin')

@section('title','Dashboard')

@section('content')


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

            {{-- <!-- Stat Cards -->
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
            </div> --}}
    </main>

    <!-- Toast -->
    <div class="toast" id="toast">
        <div class="toast-title" id="toastTitle"></div>
        <div class="toast-body" id="toastBody"></div>
    </div>

    @endsection