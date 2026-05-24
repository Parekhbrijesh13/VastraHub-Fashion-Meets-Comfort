@extends('User.Layouts.master')

@section('title', 'VastraHub — Home')

@section('content')
    <!-- Home content goes here -->

    <!-- ══════════ HERO ══════════ -->
    <section class="hero" id="home">
        <canvas id="particleCanvas"></canvas>

        <!-- LEFT -->
        <div class="hero-left">
            <div class="hero-left-inner">

                <!-- TAG -->
                <div class="hero-tag">
                    <span class="hero-tag-dot"></span>
                    <span>SS 2026 Collection</span>
                </div>

                <!-- TITLE -->
                <h1 class="hero-title">
                    Where <em>Style</em><br>
                    Meets<br>
                    <span class="hero-title-outline">
                        Elegance.
                    </span>
                </h1>

                <!-- LINE -->
                <div class="hero-separator-line"></div>
                <!-- SUBTITLE -->
                <p class="hero-sub">
                    Curated pieces for women who see fashion as an expression of power.
                    Be bold. Be iconic. Be <em>you</em>.
                </p>

                <!-- BUTTONS -->
                <div class="hero-ctas">
                    <a href="#products" class="btn-hero-primary">
                        <span>Shop Now</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#categories" class="btn-hero-outline">
                        Explore Collection
                    </a>
                </div>

                <!-- STATS -->
                <div class="hero-stats">

                    <div class="hero-stat-item">
                        <div class="hero-stat-num">
                            12k<span>+</span>
                        </div>

                        <div class="hero-stat-lbl">
                            Happy Clients
                        </div>
                    </div>

                    <div class="hero-stat-divider"></div>

                    <div class="hero-stat-item">
                        <div class="hero-stat-num">
                            4k<span>+</span>
                        </div>

                        <div class="hero-stat-lbl">
                            Styles
                        </div>
                    </div>

                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat-item">
                        <div class="hero-stat-num">
                            98<span>%</span>
                        </div>

                        <div class="hero-stat-lbl">
                            Satisfaction
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT -->
        <div class="hero-right">
            <div class="hero-deco-circle hero-deco-circle-1"></div>
            <div class="hero-deco-circle hero-deco-circle-2"></div>
            <div class="hero-deco-line hero-deco-line-1"></div>
            <div class="hero-deco-line hero-deco-line-2"></div>

            <div class="hero-model-wrap">
                <img src="{{ asset('assets/hero3.jpeg') }}" alt="VastraHub Fashion Model" class="hero-model-img"
                    id="modelImg" />
                <div class="hero-model-glow"></div>
            </div>

            <!-- Floating product card -->
            <div class="hero-float-card">
                <div class="hero-float-card-icon"><i class="fa-solid fa-star" aria-hidden="true"></i></div>
                <div>
                    <div class="hero-float-card-name">New Drop</div>
                    <div class="hero-float-card-sub">Spring Collection 2026</div>
                </div>
                <div class="hero-float-card-badge">₹2,499</div>
            </div>

            <!-- Floating trust badge -->
            <div class="hero-float-trust">
                <i class="fa-solid fa-shield-check" aria-hidden="true"></i>
                <span>Premium Quality</span>
            </div>
        </div>

        <!-- Scroll cue -->
        <div class="hero-scroll">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <!-- ══════════ MARQUEE ══════════ -->
    <div class="hero-marquee-strip">
        <div class="hero-marquee-track">
            <span>New Arrivals</span><span class="hero-marquee-dot">✦</span>
            <span>Exclusive Drops</span><span class="hero-marquee-dot">✦</span>
            <span>Spring 2026</span><span class="hero-marquee-dot">✦</span>
            <span>Free Shipping Above ₹2,999</span><span class="hero-marquee-dot">✦</span>
            <span>Premium Fabrics</span><span class="hero-marquee-dot">✦</span>
            <span>30-Day Returns</span><span class="hero-marquee-dot">✦</span>
            <span>New Arrivals</span><span class="hero-marquee-dot">✦</span>
            <span>Exclusive Drops</span><span class="hero-marquee-dot">✦</span>
            <span>Spring 2026</span><span class="hero-marquee-dot">✦</span>
            <span>Free Shipping Above ₹2,999</span><span class="hero-marquee-dot">✦</span>
            <span>Premium Fabrics</span><span class="hero-marquee-dot">✦</span>
            <span>30-Day Returns</span><span class="hero-marquee-dot">✦</span>
        </div>
    </div>



    <!-- ══════════════════════ CATEGORIES ══════════════════════ -->
    <section class="categories-section" id="categories">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="section-label">Discover</span>
                    <h2 class="section-title">Shop by <em>Category</em></h2>
                    <div class="title-line"></div>
                </div>
                <div class="col-lg-6 d-flex align-items-end" data-aos="fade-left">
                    <p class="section-sub">From tailored classics to bold streetwear — every style, every season.</p>
                </div>
            </div>

            <div class="cat-grid" data-aos="fade-up" data-aos-delay="100">
                @foreach ($categories as $category)
                    <div class="cat-card">
                        <img src="{{ Storage::url($category->image) }}" alt="Women's Wear" loading="lazy" />
                        <div class="cat-overlay">
                            <span class="cat-label">Category {{ $category->id }}</span>
                            <div class="cat-title">{{ $category->name }}</div>
                            <a href="#products" class="cat-cta">
                                <div class="line"></div>Shop Now
                            </a>
                        </div>
                    </div>
                @endforeach


                {{-- <div class="cat-card">
                    <img src="https://images.unsplash.com/photo-1617137984095-74e4e5e3613f?w=600&q=80&auto=format&fit=crop"
                        alt="Men's Wear" loading="lazy" />
                    <div class="cat-overlay">
                        <span class="cat-label">Category 02</span>
                        <div class="cat-title">Men's<br>Wear</div>
                        <a href="#products" class="cat-cta">
                            <div class="line"></div>Shop Now
                        </a>
                    </div>
                </div>
                <div class="cat-card">
                    <img src="https://images.unsplash.com/photo-1552346154-21d32810aba3?w=600&q=80&auto=format&fit=crop"
                        alt="Streetwear" loading="lazy" />
                    <div class="cat-overlay">
                        <span class="cat-label">Category 03</span>
                        <div class="cat-title">Street<br>wear</div>
                        <a href="#products" class="cat-cta">
                            <div class="line"></div>Shop Now
                        </a>
                    </div>
                </div>
                <div class="cat-card">
                    <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600&q=80&auto=format&fit=crop"
                        alt="Accessories" loading="lazy" />
                    <div class="cat-overlay">
                        <span class="cat-label">Category 04</span>
                        <div class="cat-title">Acces<br>sories</div>
                        <a href="#products" class="cat-cta">
                            <div class="line"></div>Shop Now
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- ══════════════════════ PRODUCTS ══════════════════════ -->
    <section class="products-section" id="products">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="section-label">Trending Now</span>
                    <h2 class="section-title">Featured <em>Picks</em></h2>
                    <div class="title-line"></div>
                </div>
            </div>
            <div class="filter-tabs mb-5" data-aos="fade-up">
                <button class="filter-btn active" onclick="filterProducts('all', this)">All</button>
                @foreach ($categories as $category)
                    <button class="filter-btn">{{ $category->name }}</button>
                @endforeach

                {{-- <button class="filter-btn" onclick="filterProducts('men', this)">Men</button>
                <button class="filter-btn" onclick="filterProducts('street', this)">Streetwear</button>
                <button class="filter-btn" onclick="filterProducts('acc', this)">Accessories</button> --}}
            </div>

            @foreach ($categories as $category)
                {{-- <h2 class="mb-4">{{ $category->name }}</h2> --}}

                <div class="row g-4" id="productsGrid">

                    @foreach ($category->products as $product)
                        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                            <div class="product-card">
                                <div class="product-img-wrap">
                                    <img src="{{ asset('assets/hero3.jpeg') }}" alt="{{ $product->name }}" loading="lazy" />
                                    <span class="product-badge">New</span>

                                    <button class="product-wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                    <button class="product-quick">
                                        Add to Bag
                                    </button>

                                </div>

                                <div class="product-info">

                                    <div class="product-cat">
                                        {{ $product->category->name }}
                                    </div>

                                    <div class="product-name">
                                        {{ $product->name }}
                                    </div>

                                    <div class="product-stars">
                                        ★★★★☆ <span>(120)</span>
                                    </div>

                                    <div class="product-price">
                                        <span class="original">₹</span>
                                        {{ $product->price }}
                                    </div>

                                    <button class="btn-add-cart">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>
    </section>

    <!-- ══════════════════════ NEW ARRIVAL ══════════════════════ -->
    <section class="arrival-section" id="arrival">
        <div class="arrival-inner">
            <div class="arrival-img" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=900&q=85&auto=format&fit=crop"
                    alt="New Arrival" loading="lazy" />
            </div>
            <div class="arrival-content" data-aos="fade-left">
                <div class="arrival-season">New Arrival · Spring 2026</div>
                <h2 class="arrival-title">Step Into<br>The <em>New</em><br>Season.</h2>
                <p class="arrival-desc">Our latest collection blends fluid silhouettes with timeless materials.
                    Effortlessly modern, endlessly wearable.</p>
                <a href="#products" class="btn-arrival">Explore The Drop <i class="fa-solid fa-arrow-right ms-2"></i></a>
                <div class="arrival-offer mt-5">
                    <div class="offer-pct">30%</div>
                    <div class="offer-text">Off on first order · Use code VOID30</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════ WHY US ══════════════════════ -->
    <section class="whyus-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-label">Our Promise</span>
                <h2 class="section-title">Why Choose <em>VØID</em></h2>
                <div class="title-line mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa-solid fa-truck-fast"></i></div>
                        <div class="feature-title">Free Shipping</div>
                        <p class="feature-desc">Complimentary delivery on all orders above ₹2,999. Fast & reliable.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="feature-title">Secure Payment</div>
                        <p class="feature-desc">256-bit SSL encrypted checkout. Your data stays protected.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa-solid fa-gem"></i></div>
                        <div class="feature-title">Premium Quality</div>
                        <p class="feature-desc">Ethically sourced fabrics. Crafted for longevity and style.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa-solid fa-rotate-left"></i></div>
                        <div class="feature-title">Easy Returns</div>
                        <p class="feature-desc">Hassle-free 30-day returns. No questions asked policy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════ TESTIMONIALS ══════════════════════ -->
    <section class="testimonials-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="section-label">Reviews</span>
                    <h2 class="section-title" style="color:var(--white)">What They <em>Say</em></h2>
                    <div class="title-line"></div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="testimonial-card">
                        <div class="testi-stars">★★★★★</div>
                        <div class="testi-quote">"</div>
                        <p class="testi-text">VØID is the only brand that makes me feel like myself. The quality is
                            unmatched and every piece feels like it was made for me. Absolutely obsessed.</p>
                        <div class="testi-author">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&q=80&auto=format&fit=crop&crop=face"
                                class="testi-avatar" alt="Sofia" />
                            <div>
                                <div class="testi-name">Sofia M.</div>
                                <div class="testi-loc">Mumbai, India</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <div class="testi-stars">★★★★★</div>
                        <div class="testi-quote">"</div>
                        <p class="testi-text">The new arrivals collection is fire. Delivery was super fast and
                            packaging felt luxurious. Will 100% be ordering again. VØID is a lifestyle.</p>
                        <div class="testi-author">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&q=80&auto=format&fit=crop&crop=face"
                                class="testi-avatar" alt="Aryan" />
                            <div>
                                <div class="testi-name">Aryan K.</div>
                                <div class="testi-loc">Delhi, India</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="testi-stars">★★★★★</div>
                        <div class="testi-quote">"</div>
                        <p class="testi-text">I've tried so many fashion brands but VØID hits differently. The fabrics
                            are incredible and the sizing is perfect. Already recommended to everyone.</p>
                        <div class="testi-author">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&q=80&auto=format&fit=crop&crop=face"
                                class="testi-avatar" alt="Priya" />
                            <div>
                                <div class="testi-name">Priya S.</div>
                                <div class="testi-loc">Bangalore, India</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════ GALLERY ══════════════════════ -->
    <section class="gallery-section" id="gallery">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-label">@voidfashion</span>
                <h2 class="section-title">Style <em>Gallery</em></h2>
                <div class="title-line mx-auto"></div>
            </div>
        </div>
        <div class="gallery-grid">
            <div class="item">
                <div class="gallery-item"><img
                        src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&q=80&auto=format&fit=crop"
                        alt="Gallery" loading="lazy" />
                    <div class="gallery-overlay"><i class="fa-brands fa-instagram gallery-icon"></i></div>
                </div>
            </div>
            <div class="item">
                <div class="gallery-item"><img
                        src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=600&q=80&auto=format&fit=crop"
                        alt="Gallery" loading="lazy" />
                    <div class="gallery-overlay"><i class="fa-brands fa-instagram gallery-icon"></i></div>
                </div>
            </div>
            <div class="item">
                <div class="gallery-item"><img
                        src="https://images.unsplash.com/photo-1485968579580-b6d095142e6e?w=600&q=80&auto=format&fit=crop"
                        alt="Gallery" loading="lazy" />
                    <div class="gallery-overlay"><i class="fa-brands fa-instagram gallery-icon"></i></div>
                </div>
            </div>
            <div class="item">
                <div class="gallery-item"><img
                        src="https://images.unsplash.com/photo-1506629082955-511b1aa562c8?w=600&q=80&auto=format&fit=crop"
                        alt="Gallery" loading="lazy" />
                    <div class="gallery-overlay"><i class="fa-brands fa-instagram gallery-icon"></i></div>
                </div>
            </div>
            <div class="item">
                <div class="gallery-item"><img
                        src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=1200&q=80&auto=format&fit=crop"
                        alt="Gallery" loading="lazy" />
                    <div class="gallery-overlay"><i class="fa-brands fa-instagram gallery-icon"></i></div>
                </div>
            </div>
            <div class="item">
                <div class="gallery-item"><img
                        src="https://images.unsplash.com/photo-1566206091558-7f218b696731?w=600&q=80&auto=format&fit=crop"
                        alt="Gallery" loading="lazy" />
                    <div class="gallery-overlay"><i class="fa-brands fa-instagram gallery-icon"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════ NEWSLETTER ══════════════════════ -->
    <section class="newsletter-section" id="newsletter">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7" data-aos="fade-up">
                    <span class="section-label">Stay in the Loop</span>
                    <h2 class="newsletter-title">Join the <em>VØID</em><br>Inner Circle.</h2>
                    <p class="newsletter-sub">Get early access to drops, exclusive offers, and style inspiration
                        delivered straight to your inbox.</p>
                    <div class="newsletter-form mx-auto" style="max-width:480px">
                        <input type="email" class="newsletter-input" placeholder="your@email.com" id="emailInput" />
                        <button class="newsletter-btn" onclick="subscribeNewsletter()">Subscribe</button>
                    </div>
                    <p class="newsletter-privacy mt-3">No spam, ever. Unsubscribe anytime.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
