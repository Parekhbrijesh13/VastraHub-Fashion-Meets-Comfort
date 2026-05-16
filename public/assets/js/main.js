
        // ── Products Data ──
        const products = [{
                id: 1,
                name: 'Silk Drape Maxi',
                cat: 'women',
                catLabel: 'Women',
                price: 4299,
                original: 5999,
                rating: 5,
                reviews: 128,
                badge: 'Bestseller',
                img: 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&q=80&auto=format&fit=crop'
            },
            {
                id: 2,
                name: 'Tailored Wool Blazer',
                cat: 'men',
                catLabel: 'Men',
                price: 6499,
                original: 8200,
                rating: 5,
                reviews: 84,
                badge: 'New',
                img: 'https://images.unsplash.com/photo-1593030761757-71fae45fa0e7?w=600&q=80&auto=format&fit=crop'
            },
            {
                id: 3,
                name: 'Oversized Crop Hoodie',
                cat: 'street',
                catLabel: 'Streetwear',
                price: 2899,
                original: null,
                rating: 4,
                reviews: 212,
                badge: 'Hot',
                img: 'https://images.unsplash.com/photo-1556821840-3a63f15732ce?w=600&q=80&auto=format&fit=crop'
            },
            {
                id: 4,
                name: 'Leather Mini Crossbody',
                cat: 'acc',
                catLabel: 'Accessories',
                price: 3199,
                original: 3999,
                rating: 5,
                reviews: 67,
                badge: 'Sale',
                img: 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=600&q=80&auto=format&fit=crop'
            },
            {
                id: 5,
                name: 'Linen Wide-Leg Pants',
                cat: 'women',
                catLabel: 'Women',
                price: 3499,
                original: null,
                rating: 4,
                reviews: 95,
                badge: null,
                img: 'https://images.unsplash.com/photo-1594938298603-c8148c4b4b6e?w=600&q=80&auto=format&fit=crop'
            },
            {
                id: 6,
                name: 'Raw Edge Denim Jacket',
                cat: 'street',
                catLabel: 'Streetwear',
                price: 5299,
                original: 6500,
                rating: 5,
                reviews: 143,
                badge: 'New',
                img: 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=600&q=80&auto=format&fit=crop'
            },
            {
                id: 7,
                name: 'Classic Oxford Shirt',
                cat: 'men',
                catLabel: 'Men',
                price: 2499,
                original: null,
                rating: 4,
                reviews: 178,
                badge: null,
                img: 'https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?w=600&q=80&auto=format&fit=crop'
            },
            {
                id: 8,
                name: 'Gold Chain Necklace',
                cat: 'acc',
                catLabel: 'Accessories',
                price: 1899,
                original: 2400,
                rating: 5,
                reviews: 51,
                badge: 'Sale',
                img: 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=600&q=80&auto=format&fit=crop'
            },
        ];

        let cart = [];
        let activeFilter = 'all';

        function stars(n) {
            return '★'.repeat(n) + '☆'.repeat(5 - n);
        }

        function renderProducts(filter) {
            const grid = document.getElementById('productsGrid');
            const filtered = filter === 'all' ? products : products.filter(p => p.cat === filter);
            grid.innerHTML = filtered.map((p, i) => `
    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="${(i%4)*80}">
      <div class="product-card">
        <div class="product-img-wrap">
          <img src="${p.img}" alt="${p.name}" loading="lazy"/>
          ${p.badge ? `<span class="product-badge">${p.badge}</span>` : ''}
          <button class="product-wishlist" onclick="showToast('Added to wishlist ♡')"><i class="fa-regular fa-heart"></i></button>
          <button class="product-quick" onclick="addToCart(${p.id})">Add to Bag</button>
        </div>
        <div class="product-info">
          <div class="product-cat">${p.catLabel}</div>
          <div class="product-name">${p.name}</div>
          <div class="product-stars">${stars(p.rating)} <span>(${p.reviews})</span></div>
          <div class="product-price">
            ${p.original ? `<span class="original">₹${p.original.toLocaleString('en-IN')}</span>` : ''}
            ₹${p.price.toLocaleString('en-IN')}
          </div>
          <button class="btn-add-cart" onclick="addToCart(${p.id})">Add to Cart</button>
        </div>
      </div>
    </div>
  `).join('');
            AOS.refresh();
        }

        function filterProducts(f, btn) {
            activeFilter = f;
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            renderProducts(f);
        }

        function addToCart(id) {
            const p = products.find(x => x.id === id);
            const existing = cart.find(x => x.id === id);
            if (existing) {
                existing.qty++;
            } else {
                cart.push({
                    ...p,
                    qty: 1
                });
            }
            updateCartUI();
            showToast(`${p.name} added to bag ✓`);
        }

        function updateCartUI() {
            const badge = document.getElementById('cartBadge');
            const total = cart.reduce((s, x) => s + x.qty, 0);
            badge.textContent = total;
            const itemsEl = document.getElementById('cartItems');
            const footerEl = document.getElementById('cartFooter');
            if (cart.length === 0) {
                itemsEl.innerHTML = '<div class="cart-empty-msg">Your bag is empty</div>';
                footerEl.style.display = 'none';
                return;
            }
            footerEl.style.display = 'block';
            itemsEl.innerHTML = cart.map(item => `
    <div class="cart-item">
      <img src="${item.img}" class="cart-item-img" alt="${item.name}"/>
      <div>
        <div class="cart-item-name">${item.name}</div>
        <div class="cart-item-size">Size: M · Qty: ${item.qty}</div>
        <div class="cart-item-price">₹${(item.price * item.qty).toLocaleString('en-IN')}</div>
      </div>
    </div>
  `).join('');
            const sum = cart.reduce((s, x) => s + x.price * x.qty, 0);
            document.getElementById('cartTotal').textContent = '₹' + sum.toLocaleString('en-IN');
        }

        function openCart() {
            document.getElementById('cartSidebar').classList.add('open');
            document.getElementById('cartOverlay').classList.add('open');
        }

        function closeCart() {
            document.getElementById('cartSidebar').classList.remove('open');
            document.getElementById('cartOverlay').classList.remove('open');
        }

        function showToast(msg) {
            const t = document.getElementById('toast');
            t.textContent = msg;
            t.classList.add('show');
            setTimeout(() => t.classList.remove('show'), 3000);
        }

        function subscribeNewsletter() {
            const v = document.getElementById('emailInput').value.trim();
            if (!v || !v.includes('@')) {
                showToast('Please enter a valid email.');
                return;
            }
            showToast('Welcome to VØID Inner Circle ✓');
            document.getElementById('emailInput').value = '';
        }

        // ── Init ──
        document.addEventListener('DOMContentLoaded', () => {
            // Loader
            setTimeout(() => {
                document.getElementById('loader').classList.add('hidden');
            }, 1800);

            // AOS
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 60
            });

            // Products
            renderProducts('all');

            // Navbar scroll
            const nav = document.getElementById('mainNav');
            window.addEventListener('scroll', () => {
                nav.classList.toggle('scrolled', window.scrollY > 60);
            });

            // Custom Cursor
            const cursor = document.getElementById('cursor');
            const ring = document.getElementById('cursorRing');
            let mx = 0,
                my = 0,
                rx = 0,
                ry = 0;
            document.addEventListener('mousemove', e => {
                mx = e.clientX;
                my = e.clientY;
                cursor.style.left = mx + 'px';
                cursor.style.top = my + 'px';
            });
            (function animRing() {
                rx += (mx - rx) * 0.12;
                ry += (my - ry) * 0.12;
                ring.style.left = rx + 'px';
                ring.style.top = ry + 'px';
                requestAnimationFrame(animRing);
            })();
            document.querySelectorAll('a,button').forEach(el => {
                el.addEventListener('mouseenter', () => {
                    ring.style.transform = 'translate(-50%,-50%) scale(1.6)';
                });
                el.addEventListener('mouseleave', () => {
                    ring.style.transform = 'translate(-50%,-50%) scale(1)';
                });
            });
        });
