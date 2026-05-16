<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'VastraHub — Fashion Meets Comfort')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=Outfit:wght@200;300;400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- Cursor -->
    <div class="cursor" id="cursor"></div>
    <div class="cursor-ring" id="cursorRing"></div>

    <!-- Loader -->
    <div id="loader">
        <div class="loader-brand">VØID</div>
        <div class="loader-bar"></div>
    </div>

    <!-- Cart Overlay -->
    <div class="cart-overlay" id="cartOverlay" onclick="closeCart()"></div>

    <!-- Cart Sidebar -->
    <div class="cart-sidebar" id="cartSidebar">
        <div class="cart-header">
            <div>
                <div class="cart-title">Your Bag</div>
            </div>
            <button class="cart-close" onclick="closeCart()"><i class="fa-solid fa-xmark fa-lg"></i></button>
        </div>
        <div class="cart-items" id="cartItems">
            <div class="cart-empty-msg">Your bag is empty</div>
        </div>
        <div class="cart-footer" id="cartFooter" style="display:none">
            <div class="cart-total">
                <span class="cart-total-label">Total</span>
                <span class="cart-total-amount" id="cartTotal">$0</span>
            </div>
            <button class="btn-checkout">Proceed to Checkout →</button>
        </div>
    </div>

    <!-- Toast -->
    <div class="toast-notif" id="toast"></div>

    <!-- ══════════════════════ NAVBAR ══════════════════════ -->
    <nav class="navbar navbar-expand-lg" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#">VØID</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navMenu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#categories">Men</a></li>
                    <li class="nav-item"><a class="nav-link" href="#categories">Women</a></li>
                    <li class="nav-item"><a class="nav-link" href="#arrival">New Arrivals</a></li>
                    <li class="nav-item"><a class="nav-link" href="#newsletter">Contact</a></li>
                </ul>
            </div>
            <div class="nav-icons">
                <button class="nav-icon-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                <button class="nav-icon-btn"><i class="fa-regular fa-heart"></i></button>
                <button class="nav-icon-btn" onclick="openCart()" style="position:relative">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="cart-badge" id="cartBadge">0</span>
                </button>
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <!-- ══════════════════════ FOOTER ══════════════════════ -->
    <footer id="contact">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="footer-brand">VØID</div>
                    <div class="footer-tagline">Wear the Void. Define Yourself.</div>
                    <div class="footer-social">
                        <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-pinterest"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 offset-lg-1" data-aos="fade-up" data-aos-delay="100">
                    <div class="footer-heading">Shop</div>
                    <ul class="footer-links">
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Streetwear</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="150">
                    <div class="footer-heading">Company</div>
                    <ul class="footer-links">
                        <li><a href="#">About VØID</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="footer-heading">Support</div>
                    <ul class="footer-links">
                        <li><a href="#">Size Guide</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-copy">© 2026 VØID Fashion. All rights reserved.</div>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
