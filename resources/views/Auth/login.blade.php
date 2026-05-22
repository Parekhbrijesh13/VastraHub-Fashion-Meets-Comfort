<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VØID — Sign In</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,700;1,300;1,600&family=Outfit:wght@200;300;400;500&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />

</head>

<body>

    <!-- Toast -->
    <div class="toast" id="toast">
        <div class="toast-t" id="toastT"></div>
        <div class="toast-b" id="toastB"></div>
    </div>

    <!-- ════ IMAGE SIDE ════ -->
    <div class="img-side">
        <div class="img-photo"></div>
        <div class="img-gradient"></div>
        <div class="img-label">VØID — SS 2026 Collection</div>
        <div class="img-season">SS 2026 · New Arrivals</div>
        <div class="img-quote">
            <div class="img-quote-text">Style is<br>a <em>language.</em><br>Speak it.</div>
            <div class="img-quote-sub">12,000+ fashion-forward members worldwide</div>
        </div>
    </div>

    <!-- ════ FORM SIDE ════ -->
    <div class="form-side">
        <div class="form-wrap">

            <div class="logo">VØI<span>D</span></div>

            <div class="heading">
                <div class="heading-eyebrow">Member Access</div>
                <div class="heading-title">Welcome<br><em>Back.</em></div>
            </div>

            <!-- Social -->
            <div class="social-row">
                <button class="btn-soc g" onclick="toast('Redirecting','Connecting to Google…')">
                    <i class="fa-brands fa-google"></i> Google
                </button>
                <button class="btn-soc a" onclick="toast('Redirecting','Connecting to Apple…')">
                    <i class="fa-brands fa-apple"></i> Apple
                </button>
                <button class="btn-soc x" onclick="toast('Redirecting','Connecting to X…')">
                    <i class="fa-brands fa-x-twitter"></i> X
                </button>
            </div>

            <div class="divider"><span>or with email</span></div>

            <!-- Fields -->
            <div class="fields">
                <div class="field">
                    <div class="field-label">
                        <span>Email</span>
                    </div>
                    <input class="field-input" type="email" name="email" id="email" placeholder="you@example.com"
                        autocomplete="email" />
                    <i class="fa-regular fa-envelope field-icon"></i>
                    <span class="field-err error-text email_error"></span>
                </div>

                <div class="field">
                    <div class="field-label">
                        <span>Password</span>
                        <a href="#" onclick="goForgot(); return false;">Forgot?</a>
                    </div>
                    <input class="field-input" type="password" name="password" id="password" placeholder="••••••••"
                        autocomplete="current-password" />
                    <i class="fa-regular fa-eye field-icon" id="eyeIcon" onclick="togglePw()"></i>
                    <span class="field-err error-text password_error"></span>
                </div>
            </div>

            <!-- Remember -->
            <div class="remember-row">
                <label class="check-wrap">
                    <input type="checkbox" id="rememberMe" />
                    <div class="check-box"><i class="fa-solid fa-check"></i></div>
                    <span class="check-text">Remember me</span>
                </label>
            </div>

            <button class="btn-submit" id="loginBtn" onclick="handleLogin()">
                <span class="btn-text">Sign In</span>
                <div class="spinner"></div>
            </button>

            <div class="switch-text">
                New to VØID? <a href="{{ route('register') }}">Create account →</a>
            </div>
        </div>

        <div class="form-footer">
            <div class="footer-links">
                <a href="index.html">← Store</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
            </div>
            <span class="footer-copy">© 2026 VØID</span>
        </div>
    </div>

    {{-- <!-- Forgot overlay (inline, no redirect) -->
    <div id="forgotOverlay"
        style="display:none;position:fixed;inset:0;background:rgba(9,9,11,0.88);backdrop-filter:blur(10px);z-index:5000;display:none;align-items:center;justify-content:center;">
        <div
            style="background:var(--surface);border:1px solid var(--border);padding:44px 40px;max-width:400px;width:90%;position:relative;border-top:1px solid rgba(201,169,110,0.2);">
            <button onclick="closeForgot()"
                style="position:absolute;top:18px;right:18px;background:none;border:none;color:var(--muted);font-size:0.9rem;cursor:pointer;"><i
                    class="fa-solid fa-xmark"></i></button>
            <div
                style="font-size:0.6rem;letter-spacing:0.3em;text-transform:uppercase;color:var(--gold);margin-bottom:10px;">
                Password Recovery</div>
            <div style="font-family:var(--font-d);font-size:2rem;font-weight:300;margin-bottom:8px;">Reset <em
                    style="color:var(--gold);font-style:italic;">Access.</em></div>
            <div style="font-size:0.78rem;color:var(--muted);margin-bottom:24px;line-height:1.7;">Enter your email and
                we'll send a secure reset link within minutes.</div>
            <div class="field" style="margin-bottom:20px;">
                <div class="field-label"><span>Email Address</span></div>
                <input class="field-input" type="email" id="forgotEmail" placeholder="you@example.com" />
                <i class="fa-regular fa-envelope field-icon"></i>
                <div class="field-err" id="forgotErr">Please enter a valid email.</div>
            </div>
            <button class="btn-submit" id="forgotBtn" onclick="handleForgot()" style="animation:none;">
                <span class="btn-text">Send Reset Link</span>
                <div class="spinner"></div>
            </button>
        </div>
    </div> --}}

    <script src="https://code.jquery.com/jquery-4.0.0.min.js"
        integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function (){
            $(document).on('submit', '#loginForm', function (e) {
                e.preventDefault();

            });
        });
    </script>

</body>

</html>
