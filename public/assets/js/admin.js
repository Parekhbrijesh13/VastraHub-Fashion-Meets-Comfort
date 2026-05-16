
        // ─── Data ───
        const ordersData = [{
                id: '#VD-10285',
                name: 'Meera T.',
                email: 'meera@mail.com',
                initials: 'MT',
                date: '15 May 2026',
                items: 2,
                amount: '₹8,798',
                payment: 'UPI',
                status: 'processing'
            },
            {
                id: '#VD-10284',
                name: 'Sofia M.',
                email: 'sofia@mail.com',
                initials: 'SM',
                date: '15 May 2026',
                items: 3,
                amount: '₹12,897',
                payment: 'Card',
                status: 'delivered'
            },
            {
                id: '#VD-10283',
                name: 'Aryan K.',
                email: 'aryan@mail.com',
                initials: 'AK',
                date: '14 May 2026',
                items: 1,
                amount: '₹6,499',
                payment: 'Card',
                status: 'processing'
            },
            {
                id: '#VD-10282',
                name: 'Priya S.',
                email: 'priya@mail.com',
                initials: 'PS',
                date: '14 May 2026',
                items: 2,
                amount: '₹7,798',
                payment: 'UPI',
                status: 'delivered'
            },
            {
                id: '#VD-10281',
                name: 'Raj J.',
                email: 'raj@mail.com',
                initials: 'RJ',
                date: '13 May 2026',
                items: 4,
                amount: '₹19,596',
                payment: 'COD',
                status: 'pending'
            },
            {
                id: '#VD-10280',
                name: 'Neha P.',
                email: 'neha@mail.com',
                initials: 'NP',
                date: '13 May 2026',
                items: 1,
                amount: '₹4,299',
                payment: 'Card',
                status: 'cancelled'
            },
            {
                id: '#VD-10279',
                name: 'Karan M.',
                email: 'karan@mail.com',
                initials: 'KM',
                date: '12 May 2026',
                items: 3,
                amount: '₹15,197',
                payment: 'UPI',
                status: 'delivered'
            },
            {
                id: '#VD-10278',
                name: 'Ananya R.',
                email: 'ananya@mail.com',
                initials: 'AR',
                date: '12 May 2026',
                items: 2,
                amount: '₹9,498',
                payment: 'Card',
                status: 'delivered'
            },
        ];

        const productsData = [{
                img: 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=80&q=70',
                name: 'Silk Drape Maxi',
                cat: 'Women',
                price: '₹4,299',
                stock: 48,
                sold: 214,
                revenue: '₹91,986',
                status: 'active'
            },
            {
                img: 'https://images.unsplash.com/photo-1593030761757-71fae45fa0e7?w=80&q=70',
                name: 'Wool Blazer',
                cat: 'Men',
                price: '₹6,499',
                stock: 7,
                sold: 178,
                revenue: '₹1,15,622',
                status: 'active'
            },
            {
                img: 'https://images.unsplash.com/photo-1556821840-3a63f15732ce?w=80&q=70',
                name: 'Crop Hoodie',
                cat: 'Streetwear',
                price: '₹2,899',
                stock: 104,
                sold: 312,
                revenue: '₹90,388',
                status: 'active'
            },
            {
                img: 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=80&q=70',
                name: 'Leather Crossbody',
                cat: 'Accessories',
                price: '₹3,199',
                stock: 0,
                sold: 96,
                revenue: '₹30,710',
                status: 'inactive'
            },
            {
                img: 'https://images.unsplash.com/photo-1594938298603-c8148c4b4b6e?w=80&q=70',
                name: 'Wide-Leg Pants',
                cat: 'Women',
                price: '₹3,499',
                stock: 32,
                sold: 95,
                revenue: '₹33,240',
                status: 'active'
            },
            {
                img: 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=80&q=70',
                name: 'Denim Jacket',
                cat: 'Streetwear',
                price: '₹5,299',
                stock: 19,
                sold: 143,
                revenue: '₹75,775',
                status: 'active'
            },
            {
                img: 'https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?w=80&q=70',
                name: 'Oxford Shirt',
                cat: 'Men',
                price: '₹2,499',
                stock: 67,
                sold: 178,
                revenue: '₹44,482',
                status: 'active'
            },
            {
                img: 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=80&q=70',
                name: 'Gold Chain',
                cat: 'Accessories',
                price: '₹1,899',
                stock: 44,
                sold: 51,
                revenue: '₹9,684',
                status: 'active'
            },
        ];

        const customersData = [{
                initials: 'SM',
                name: 'Sofia M.',
                orders: 14,
                spend: '₹87,420',
                badge: 'VIP'
            },
            {
                initials: 'AK',
                name: 'Aryan K.',
                orders: 9,
                spend: '₹52,191',
                badge: ''
            },
            {
                initials: 'PS',
                name: 'Priya S.',
                orders: 12,
                spend: '₹71,388',
                badge: 'VIP'
            },
            {
                initials: 'RJ',
                name: 'Raj J.',
                orders: 7,
                spend: '₹43,170',
                badge: ''
            },
            {
                initials: 'MT',
                name: 'Meera T.',
                orders: 6,
                spend: '₹38,988',
                badge: ''
            },
            {
                initials: 'KM',
                name: 'Karan M.',
                orders: 11,
                spend: '₹65,967',
                badge: 'VIP'
            },
            {
                initials: 'AR',
                name: 'Ananya R.',
                orders: 5,
                spend: '₹29,990',
                badge: ''
            },
            {
                initials: 'NP',
                name: 'Neha P.',
                orders: 4,
                spend: '₹18,196',
                badge: ''
            },
        ];

        // ─── Page Routing ───
        function showPage(name, el) {
            document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
            document.getElementById('page-' + name).classList.add('active');
            document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
            if (el) el.classList.add('active');
            const titles = {
                dashboard: 'Dashboard Overview',
                orders: 'Orders Management',
                products: 'Products Catalogue',
                inventory: 'Inventory Control',
                customers: 'Customer Base',
                coupons: 'Coupons & Offers',
                settings: 'Settings',
                analytics: 'Analytics',
                newsletter: 'Newsletter',
                logs: 'Activity Log'
            };
            const spans = {
                dashboard: 'Overview',
                orders: 'Management',
                products: 'Catalogue',
                inventory: 'Control',
                customers: 'Base',
                coupons: 'Offers',
                settings: '',
                analytics: '',
                newsletter: '',
                logs: ''
            };
            const first = titles[name].split(' ')[0];
            const rest = spans[name] ? ` <span>${spans[name]}</span>` : '';
            document.getElementById('topbarTitle').innerHTML = first + rest;
            closeSidebar();
            if (name === 'orders') renderOrders('all');
            if (name === 'products') renderProducts();
            if (name === 'customers') renderCustomers();
        }

        // ─── Render Orders ───
        function renderOrders(filter) {
            const filtered = filter === 'all' ? ordersData : ordersData.filter(o => o.status === filter);
            document.getElementById('ordersTableBody').innerHTML = filtered.map(o => `
    <tr>
      <td><div class="order-id">${o.id}</div></td>
      <td><div class="customer-cell"><div class="cust-avatar">${o.initials}</div><div><div class="cust-name">${o.name}</div><div class="cust-email">${o.email}</div></div></div></td>
      <td style="color:var(--muted);font-size:0.78rem">${o.date}</td>
      <td>${o.items}</td>
      <td style="font-family:var(--font-mono);color:var(--gold)">${o.amount}</td>
      <td><span style="font-size:0.72rem;color:var(--muted)">${o.payment}</span></td>
      <td><span class="badge ${o.status}">${o.status}</span></td>
      <td><div style="display:flex;gap:6px">
        <button class="btn-sm btn-ghost" onclick="showToast('Order ${o.id}','Details opened')" style="padding:5px 10px"><i class="fa-solid fa-eye"></i></button>
        <button class="btn-sm btn-ghost" onclick="showToast('Invoice','PDF generated')" style="padding:5px 10px"><i class="fa-solid fa-file-invoice"></i></button>
      </div></td>
    </tr>
  `).join('');
        }

        // ─── Render Products ───
        function renderProducts() {
            document.getElementById('productsTableBody').innerHTML = productsData.map(p => `
    <tr>
      <td><div style="display:flex;align-items:center;gap:12px"><img src="${p.img}" style="width:38px;height:48px;object-fit:cover;border-radius:2px" alt=""/><span style="font-size:0.85rem">${p.name}</span></div></td>
      <td><span style="font-size:0.72rem;color:var(--muted);letter-spacing:0.1em">${p.cat}</span></td>
      <td style="font-family:var(--font-mono);font-size:0.82rem">${p.price}</td>
      <td><span style="font-family:var(--font-mono);color:${p.stock===0?'var(--red)':p.stock<10?'var(--gold)':'var(--green)'}">${p.stock}</span></td>
      <td>${p.sold}</td>
      <td style="font-family:var(--font-mono);color:var(--gold);font-size:0.8rem">${p.revenue}</td>
      <td><span class="badge ${p.status}">${p.status}</span></td>
      <td><div style="display:flex;gap:6px">
        <button class="btn-sm btn-ghost" onclick="showToast('Edit Product','Editor opened')" style="padding:5px 10px"><i class="fa-solid fa-pen"></i></button>
        <button class="btn-sm btn-danger" onclick="showToast('Deleted','Product removed')" style="padding:5px 10px"><i class="fa-solid fa-trash"></i></button>
      </div></td>
    </tr>
  `).join('');
        }

        // ─── Render Customers ───
        function renderCustomers() {
            document.getElementById('customersGrid').innerHTML = customersData.map(c => `
    <div class="customer-card" onclick="showToast('${c.name}','Customer profile opened')">
      <div class="cust-big-avatar">${c.initials}</div>
      <div style="flex:1">
        <div style="font-size:0.88rem;font-weight:500;margin-bottom:2px">${c.name}${c.badge?` <span style="font-size:0.55rem;background:var(--gold-dim);color:var(--gold);padding:2px 7px;border-radius:10px;vertical-align:middle">${c.badge}</span>`:''}</div>
        <div style="font-size:0.72rem;color:var(--muted)">${c.orders} orders</div>
      </div>
      <div class="cust-spend"><div class="cust-spend-val">${c.spend}</div><div class="cust-spend-label">total spent</div></div>
    </div>
  `).join('');
        }

        // ─── Tab Switching ───
        function switchTab(group, filter, btn) {
            btn.closest('.tab-bar').querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            if (group === 'ord') renderOrders(filter);
        }

        // ─── Chart Rendering ───
        const chartData = {
            month: [28, 42, 35, 55, 48, 62, 58, 72, 68, 80, 74, 88, 82, 95, 90, 105, 98, 112, 108, 118, 112, 125, 120,
                132, 128, 140, 135, 148, 145, 160
            ],
            week: [38, 55, 48, 70, 62, 88, 75]
        };
        let currentChart = 'month';

        function renderChart(type) {
            const svg = document.getElementById('revenueChart');
            const data = chartData[type];
            const w = 560,
                h = 200,
                pad = 20;
            const minV = Math.min(...data),
                maxV = Math.max(...data);
            const pts = data.map((v, i) => {
                const x = pad + (i / (data.length - 1)) * (w - pad * 2);
                const y = h - pad - ((v - minV) / (maxV - minV)) * (h - pad * 2);
                return [x, y];
            });
            const path = pts.map((p, i) => (i === 0 ? `M${p[0]},${p[1]}` : `L${p[0]},${p[1]}`)).join(' ');
            const area = path + ` L${pts[pts.length-1][0]},${h} L${pts[0][0]},${h} Z`;
            svg.innerHTML = `
    <defs>
      <linearGradient id="areaGrad" x1="0" y1="0" x2="0" y2="1">
        <stop offset="0%" stop-color="var(--gold)" stop-opacity="0.18"/>
        <stop offset="100%" stop-color="var(--gold)" stop-opacity="0"/>
      </linearGradient>
      <filter id="glow"><feGaussianBlur stdDeviation="3" result="blur"/><feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
    </defs>
    <path d="${area}" fill="url(#areaGrad)"/>
    <path d="${path}" fill="none" stroke="var(--gold)" stroke-width="2" filter="url(#glow)" stroke-linecap="round" stroke-linejoin="round"/>
    ${pts.filter((_,i) => i % Math.max(1, Math.floor(pts.length/7)) === 0).map(p => `<circle cx="${p[0]}" cy="${p[1]}" r="3.5" fill="var(--gold)" opacity="0.8"/>`).join('')}
  `;
        }

        function switchChart(type, btn) {
            currentChart = type;
            document.querySelectorAll('[id^=btn]').forEach(b => {
                b.className = 'btn-sm btn-ghost';
            });
            btn.className = 'btn-sm btn-gold';
            renderChart(type);
        }

        // ─── Sidebar ───
        function openSidebar() {
            document.getElementById('sidebar').classList.add('open');
            document.getElementById('sidebarOverlay').classList.add('open');
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('open');
            document.getElementById('sidebarOverlay').classList.remove('open');
        }

        // ─── Toast ───
        let toastTimer;

        function showToast(title, body) {
            clearTimeout(toastTimer);
            document.getElementById('toastTitle').textContent = title;
            document.getElementById('toastBody').textContent = body;
            const t = document.getElementById('toast');
            t.classList.add('show');
            toastTimer = setTimeout(() => t.classList.remove('show'), 3500);
        }

        // ─── Init ───
        document.addEventListener('DOMContentLoaded', () => {
            renderChart('month');
            renderOrders('all');
            renderProducts();
            renderCustomers();
        });