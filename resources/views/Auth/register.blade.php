<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VØID — Create Account</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,700;1,300;1,600&family=Outfit:wght@200;300;400;500;600&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <link href="{{ asset('assets/css/register.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Toast -->
    <div class="toast" id="toast">
        <div class="toast-t" id="toastT"></div>
        <div class="toast-b" id="toastB"></div>
    </div>

    <!-- Success Screen -->
    <div class="success-overlay" id="successScreen">
        <div class="success-ring">
            <svg viewBox="0 0 90 90">
                <circle class="ring-circle" cx="45" cy="45" r="40"></circle>
            </svg>
            <div class="ring-inner"><i class="fa-solid fa-check"></i></div>
        </div>
        <div class="success-eyebrow">Account Created</div>
        <div class="success-title">You're In,<br /><em>Welcome.</em></div>
        <div class="success-sub">
            Your VØID account is live. Exclusive drops, early access, and a wardrobe built for you await.
        </div>
        <div class="success-btns">
            <a href="index.html" class="btn-shop">Start Shopping →</a>
            <a href="admin.html" class="btn-admin">Admin Panel</a>
        </div>
        <div class="success-dots">
            <div class="s-dot active"></div>
            <div class="s-dot"></div>
            <div class="s-dot"></div>
        </div>
    </div>

    <!-- IMAGE SIDE -->
    <div class="img-side">
        <div class="img-photo"></div>
        <div class="img-gradient"></div>

        <div class="img-label">VØID — New Member Registration</div>

        <div class="img-stat">
            <div class="stat-num">12<em>k+</em></div>
            <div class="stat-label">Members worldwide</div>
        </div>

        <div class="img-season">Members Only · 2026</div>

        <div class="img-quote">
            <div class="img-quote-text">
                Join the<br />
                <em>Void.</em><br />
                Own your look.
            </div>
            <div class="img-quote-sub">
                Exclusive drops · Early access · Premium quality
            </div>
        </div>

        <div class="img-progress">
            <div class="img-progress-fill"></div>
        </div>
    </div>

    <!-- FORM SIDE -->
    <div class="form-side">
        <div class="form-wrap">
            <div class="logo">VØI<span>D</span></div>

            <div class="heading">
                <div class="heading-eyebrow">New Member</div>
                <div class="heading-title">Create<br />Your <em>Account.</em></div>
                <div class="heading-sub">Just three fields. That's all it takes to join.</div>
            </div>

            <form id="registerForm" novalidate>
                <div class="fields">
                    <div class="field">
                        <label class="field-label" for="name">Full Name</label>
                        <input class="field-input" type="text" id="name" placeholder="Aryan Shah"
                            autocomplete="name" />
                        <i class="fa-regular fa-user field-icon"></i>
                        <div class="field-err" id="nameErr">Please enter your full name.</div>
                    </div>

                    <div class="field">
                        <label class="field-label" for="email">Email Address</label>
                        <input class="field-input" type="email" id="email" placeholder="you@example.com"
                            autocomplete="email" />
                        <i class="fa-regular fa-envelope field-icon"></i>
                        <div class="field-err" id="emailErr">Please enter a valid email.</div>
                    </div>

                    <div class="field">
                        <label class="field-label" for="password">Password</label>
                        <input class="field-input" type="password" id="password" placeholder="Min. 8 characters"
                            autocomplete="new-password" />
                        <i class="fa-regular fa-eye field-icon" id="eyeIcon" onclick="togglePw()"></i>
                        <div class="field-err" id="passErr">Password must be at least 8 characters.</div>

                        <div class="pw-strength" id="pwStrength">
                            <div class="pw-bars">
                                <div class="pw-bar" id="b1"></div>
                                <div class="pw-bar" id="b2"></div>
                                <div class="pw-bar" id="b3"></div>
                                <div class="pw-bar" id="b4"></div>
                            </div>
                            <div class="pw-label" id="pwLabel"></div>
                        </div>
                    </div>
                </div>

                <label class="terms-wrap" id="termsLabel">
                    <input type="checkbox" id="terms" />
                    <div class="check-box" id="termsBox"><i class="fa-solid fa-check"></i></div>
                    <span class="terms-text">
                        I agree to VØID's <a href="#">Terms of Service</a> and <a href="#">Privacy
                            Policy</a>.
                        I'm cool with exclusive style updates too.
                    </span>
                </label>

                <button type="submit" class="btn-submit" id="regBtn">
                    <span class="btn-text">Create My Account</span>
                    <div class="spinner"></div>
                </button>
            </form>

            <div class="switch-text">
                Already a member? <a href="{{ route('login') }}">Sign in →</a>
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
</body>

</html>
