// ── Products Data ──
const products = [
    {
        id: 1,
        name: "Silk Drape Maxi",
        cat: "women",
        catLabel: "Women",
        price: 4299,
        original: 5999,
        rating: 5,
        reviews: 128,
        badge: "Bestseller",
        img: "https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&q=80&auto=format&fit=crop",
    },
    {
        id: 2,
        name: "Tailored Wool Blazer",
        cat: "men",
        catLabel: "Men",
        price: 6499,
        original: 8200,
        rating: 5,
        reviews: 84,
        badge: "New",
        img: "https://images.unsplash.com/photo-1593030761757-71fae45fa0e7?w=600&q=80&auto=format&fit=crop",
    },
    {
        id: 3,
        name: "Oversized Crop Hoodie",
        cat: "street",
        catLabel: "Streetwear",
        price: 2899,
        original: null,
        rating: 4,
        reviews: 212,
        badge: "Hot",
        img: "https://images.unsplash.com/photo-1556821840-3a63f15732ce?w=600&q=80&auto=format&fit=crop",
    },
    {
        id: 4,
        name: "Leather Mini Crossbody",
        cat: "acc",
        catLabel: "Accessories",
        price: 3199,
        original: 3999,
        rating: 5,
        reviews: 67,
        badge: "Sale",
        img: "https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=600&q=80&auto=format&fit=crop",
    },
    {
        id: 5,
        name: "Linen Wide-Leg Pants",
        cat: "women",
        catLabel: "Women",
        price: 3499,
        original: null,
        rating: 4,
        reviews: 95,
        badge: null,
        img: "https://images.unsplash.com/photo-1594938298603-c8148c4b4b6e?w=600&q=80&auto=format&fit=crop",
    },
    {
        id: 6,
        name: "Raw Edge Denim Jacket",
        cat: "street",
        catLabel: "Streetwear",
        price: 5299,
        original: 6500,
        rating: 5,
        reviews: 143,
        badge: "New",
        img: "https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=600&q=80&auto=format&fit=crop",
    },
    {
        id: 7,
        name: "Classic Oxford Shirt",
        cat: "men",
        catLabel: "Men",
        price: 2499,
        original: null,
        rating: 4,
        reviews: 178,
        badge: null,
        img: "https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?w=600&q=80&auto=format&fit=crop",
    },
    {
        id: 8,
        name: "Gold Chain Necklace",
        cat: "acc",
        catLabel: "Accessories",
        price: 1899,
        original: 2400,
        rating: 5,
        reviews: 51,
        badge: "Sale",
        img: "https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=600&q=80&auto=format&fit=crop",
    },
];

let cart = [];
let activeFilter = "all";

function stars(n) {
    return "★".repeat(n) + "☆".repeat(5 - n);
}

// function renderProducts(filter) {
//     const grid = document.getElementById("productsGrid");
//     const filtered =
//         filter === "all" ? products : products.filter((p) => p.cat === filter);
//     grid.innerHTML = filtered
//         .map(
//             (p, i) => `
//     <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="${(i % 4) * 80}">
//       <div class="product-card">
//         <div class="product-img-wrap">
//           <img src="${p.img}" alt="${p.name}" loading="lazy"/>
//           ${p.badge ? `<span class="product-badge">${p.badge}</span>` : ""}
//           <button class="product-wishlist" onclick="showToast('Added to wishlist ♡')"><i class="fa-regular fa-heart"></i></button>
//           <button class="product-quick" onclick="addToCart(${p.id})">Add to Bag</button>
//         </div>
//         <div class="product-info">
//           <div class="product-cat">${p.catLabel}</div>
//           <div class="product-name">${p.name}</div>
//           <div class="product-stars">${stars(p.rating)} <span>(${p.reviews})</span></div>
//           <div class="product-price">
//             ${p.original ? `<span class="original">₹${p.original.toLocaleString("en-IN")}</span>` : ""}
//             ₹${p.price.toLocaleString("en-IN")}
//           </div>
//           <button class="btn-add-cart" onclick="addToCart(${p.id})">Add to Cart</button>
//         </div>
//       </div>
//     </div>
//   `,
//         )
//         .join("");
//     AOS.refresh();
//     refreshLuxuryReveals();
// }

function filterProducts(f, btn) {
    activeFilter = f;
    document
        .querySelectorAll(".filter-btn")
        .forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");
    renderProducts(f);
}

function addToCart(id) {
    const p = products.find((x) => x.id === id);
    const existing = cart.find((x) => x.id === id);
    if (existing) {
        existing.qty++;
    } else {
        cart.push({ ...p, qty: 1 });
    }
    updateCartUI();
    showToast(`${p.name} added to bag ✓`);
}

function updateCartUI() {
    const badge = document.getElementById("cartBadge");
    const total = cart.reduce((s, x) => s + x.qty, 0);
    badge.textContent = total;
    const itemsEl = document.getElementById("cartItems");
    const footerEl = document.getElementById("cartFooter");
    if (cart.length === 0) {
        itemsEl.innerHTML = '<div class="cart-empty-msg">Your bag is empty</div>';
        footerEl.style.display = "none";
        return;
    }
    footerEl.style.display = "block";
    itemsEl.innerHTML = cart
        .map(
            (item) => `
    <div class="cart-item">
      <img src="${item.img}" class="cart-item-img" alt="${item.name}"/>
      <div>
        <div class="cart-item-name">${item.name}</div>
        <div class="cart-item-size">Size: M · Qty: ${item.qty}</div>
        <div class="cart-item-price">₹${(item.price * item.qty).toLocaleString("en-IN")}</div>
      </div>
    </div>
  `,
        )
        .join("");
    const sum = cart.reduce((s, x) => s + x.price * x.qty, 0);
    document.getElementById("cartTotal").textContent =
        "₹" + sum.toLocaleString("en-IN");
}

function openCart() {
    document.getElementById("cartSidebar").classList.add("open");
    document.getElementById("cartOverlay").classList.add("open");
}

function closeCart() {
    document.getElementById("cartSidebar").classList.remove("open");
    document.getElementById("cartOverlay").classList.remove("open");
}

function showToast(msg) {
    const t = document.getElementById("toast");
    t.textContent = msg;
    t.classList.add("show");
    setTimeout(() => t.classList.remove("show"), 3000);
}

function subscribeNewsletter() {
    const v = document.getElementById("emailInput").value.trim();
    if (!v || !v.includes("@")) {
        showToast("Please enter a valid email.");
        return;
    }
    showToast("Welcome to VastraHub Inner Circle ✓");
    document.getElementById("emailInput").value = "";
}

// ── Hero Canvas Particles ──
function initHeroCanvas() {
    const canvas = document.getElementById("particleCanvas");
    if (!canvas) return;
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

    const ctx = canvas.getContext("2d");
    let W, H, particles = [];

    function resize() {
        const hero = document.querySelector(".hero");
        W = canvas.width  = hero ? hero.offsetWidth  : window.innerWidth;
        H = canvas.height = hero ? hero.offsetHeight : window.innerHeight;
    }

    function Particle() {
        this.reset = function () {
            this.x       = Math.random() * W;
            this.y       = H + Math.random() * 20;
            this.r       = Math.random() * 1.5 + 0.4;
            this.speed   = Math.random() * 0.6 + 0.25;
            this.opacity = 0;
            this.maxOp   = Math.random() * 0.35 + 0.1;
            this.drift   = (Math.random() - 0.5) * 0.3;
            this.life    = 0;
            this.maxLife = Math.random() * 220 + 120;
        };
        this.reset();
    }

    function initParticles() {
        particles = [];
        const count = Math.floor(W / 14);
        for (let i = 0; i < count; i++) {
            const p = new Particle();
            // stagger initial positions so they don't all spawn at bottom
            p.y    = Math.random() * H;
            p.life = Math.random() * p.maxLife;
            particles.push(p);
        }
    }

    function animate() {
        ctx.clearRect(0, 0, W, H);
        particles.forEach((p) => {
            p.life++;
            p.y -= p.speed;
            p.x += p.drift;
            const prog = p.life / p.maxLife;
            if (prog < 0.2)       p.opacity = (prog / 0.2) * p.maxOp;
            else if (prog > 0.75) p.opacity = ((1 - prog) / 0.25) * p.maxOp;
            else                  p.opacity = p.maxOp;
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(201,169,110,${p.opacity})`;
            ctx.fill();
            if (p.life >= p.maxLife || p.y < -10) p.reset();
        });
        requestAnimationFrame(animate);
    }

    resize();
    initParticles();
    animate();

    window.addEventListener("resize", () => {
        resize();
        initParticles();
    });
}

// ── Hero Model Parallax ──
function initHeroParallax() {
    const hero     = document.querySelector(".hero");
    const modelImg = document.querySelector(".hero-model-img");
    if (!hero || !modelImg) return;
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

    hero.addEventListener("mousemove", (e) => {
        const rect = hero.getBoundingClientRect();
        const xPct = (e.clientX - rect.left)  / rect.width  - 0.5;
        const yPct = (e.clientY - rect.top)   / rect.height - 0.5;
        modelImg.style.transform = `scale(1.04) translate(${xPct * -8}px, ${yPct * -6}px)`;
    });

    hero.addEventListener("mouseleave", () => {
        modelImg.style.transform = "scale(1) translate(0, 0)";
    });
}

let luxuryRevealObserver = null;
const luxuryRevealSeen = new WeakSet();

function refreshLuxuryReveals() {
    const items = document.querySelectorAll(
        ".cat-card, .product-card, .feature-card, .testimonial-card, .gallery-item, .arrival-img, .arrival-offer, .newsletter-form",
    );

    items.forEach((el, index) => {
        if (luxuryRevealSeen.has(el)) return;
        luxuryRevealSeen.add(el);
        el.classList.add("lux-reveal");
        el.style.setProperty("--reveal-delay", `${Math.min(index % 6, 5) * 70}ms`);

        if (luxuryRevealObserver) {
            luxuryRevealObserver.observe(el);
        } else {
            el.classList.add("in-view");
        }
    });
}

function initLuxuryReveals() {
    if (!("IntersectionObserver" in window)) {
        refreshLuxuryReveals();
        return;
    }

    luxuryRevealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add("in-view");
                luxuryRevealObserver.unobserve(entry.target);
            });
        },
        {
            threshold: 0.12,
            rootMargin: "0px 0px -8% 0px",
        },
    );

    refreshLuxuryReveals();
}

function initNavInteractions() {
    const nav = document.getElementById("mainNav");
    const links = Array.from(document.querySelectorAll(".navbar-nav .nav-link"));
    if (!nav || links.length === 0) return;

    function sectionForLink(link) {
        const href = link.getAttribute("href");
        if (!href || !href.startsWith("#")) return null;
        const id = href === "#" ? "home" : href.slice(1);
        return document.getElementById(id);
    }

    function setActive(sectionId) {
        links.forEach((link) => {
            const href = link.getAttribute("href");
            const matchesHome = sectionId === "home" && href === "#";
            link.classList.toggle("active", matchesHome || href === `#${sectionId}`);
        });
    }

    links.forEach((link) => {
        const target = sectionForLink(link);
        if (!target) return;

        link.addEventListener("click", (event) => {
            event.preventDefault();
            target.scrollIntoView({ behavior: "smooth", block: "start" });
            setActive(target.id);

            const collapse = document.getElementById("navMenu");
            if (collapse && collapse.classList.contains("show") && window.bootstrap) {
                bootstrap.Collapse.getOrCreateInstance(collapse).hide();
            }
        });
    });

    const sections = Array.from(new Set(links.map(sectionForLink).filter(Boolean)));
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) setActive(entry.target.id);
            });
        },
        {
            threshold: 0.08,
            rootMargin: "-36% 0px -48% 0px",
        },
    );

    sections.forEach((section) => observer.observe(section));
    setActive("home");
}

function initLuxuryCursor() {
    if (window.matchMedia("(hover: none)").matches) return;

    const cursor = document.getElementById("cursor");
    const ring = document.getElementById("cursorRing");
    if (!cursor || !ring) return;

    document.body.classList.add("cursor-ready", "cursor-hidden");

    let mx = 0;
    let my = 0;
    let rx = 0;
    let ry = 0;
    let scale = 1;
    let targetScale = 1;
    const interactiveSelector = "a, button, input, textarea, select, .product-card, .cat-card, .gallery-item, .arrival-img, .hero-right";
    const visualSelector = ".product-card, .cat-card, .gallery-item, .arrival-img, .hero-right";

    document.addEventListener("mousemove", (e) => {
        mx = e.clientX;
        my = e.clientY;
        cursor.style.left = `${mx}px`;
        cursor.style.top = `${my}px`;
        document.body.classList.remove("cursor-hidden");
    });

    document.addEventListener("mouseover", (e) => {
        const target = e.target.closest(interactiveSelector);
        if (!target) return;

        const isVisual = target.matches(visualSelector);
        targetScale = isVisual ? 2.05 : 1.55;
        cursor.classList.add("is-hovering");
        ring.classList.add("is-hovering");
        ring.classList.toggle("is-viewing", isVisual);
    });

    document.addEventListener("mouseout", (e) => {
        const target = e.target.closest(interactiveSelector);
        if (!target || target.contains(e.relatedTarget)) return;

        targetScale = 1;
        cursor.classList.remove("is-hovering");
        ring.classList.remove("is-hovering", "is-viewing");
    });

    window.addEventListener("blur", () => document.body.classList.add("cursor-hidden"));
    document.addEventListener("mouseleave", () => document.body.classList.add("cursor-hidden"));

    (function animateRing() {
        rx += (mx - rx) * 0.14;
        ry += (my - ry) * 0.14;
        scale += (targetScale - scale) * 0.18;
        ring.style.left = `${rx}px`;
        ring.style.top = `${ry}px`;
        ring.style.transform = `translate(-50%,-50%) scale(${scale})`;
        requestAnimationFrame(animateRing);
    })();
}

// ── Init ──
document.addEventListener("DOMContentLoaded", () => {

    // Loader
    setTimeout(() => {
        const loader = document.getElementById("loader");
        if (loader) loader.classList.add("hidden");
    }, 1800);

    // AOS
    AOS.init({
        duration: 950,
        easing: "ease-out-cubic",
        once: true,
        offset: 80,
    });

    initLuxuryReveals();

    // Products
    renderProducts("all");

    // ── Legacy DOM particle fallback (heroParticles div) ──
    // Kept for backwards compatibility if canvas is not present
    const particleContainer = document.getElementById("heroParticles");
    if (particleContainer) {
        for (let i = 0; i < 18; i++) {
            const p = document.createElement("div");
            p.classList.add("hero-particle");
            const size = Math.random() * 4 + 1.5;
            p.style.cssText = `
                width: ${size}px;
                height: ${size}px;
                left: ${Math.random() * 100}%;
                top: ${40 + Math.random() * 55}%;
                --dur: ${6 + Math.random() * 8}s;
                --delay: ${Math.random() * 6}s;
                opacity: 0;
            `;
            particleContainer.appendChild(p);
        }
    }

    // ── New Canvas Particles + Parallax ──
    initHeroCanvas();
    initHeroParallax();
    initNavInteractions();
    initLuxuryCursor();

    // Navbar scroll
    const nav = document.getElementById("mainNav");
    if (nav) {
        window.addEventListener("scroll", () => {
            nav.classList.toggle("scrolled", window.scrollY > 60);
        }, { passive: true });
    }

});
