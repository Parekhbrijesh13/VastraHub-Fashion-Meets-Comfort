<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>VØID — Sign In</title>

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,700;1,300;1,600&family=Outfit:wght@200;300;400;500&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <!-- CSS -->
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
            <div class="img-quote-text">
                Style is<br>a <em>language.</em><br>Speak it.
            </div>

            <div class="img-quote-sub">
                12,000+ fashion-forward members worldwide
            </div>
        </div>
    </div>

    <!-- ════ FORM SIDE ════ -->
    <form id="loginForm">

        @csrf

        <div class="form-side">

            <div class="form-wrap">

                <!-- Logo -->
                <div class="logo">VØI<span>D</span></div>

                <!-- Heading -->
                <div class="heading">
                    <div class="heading-eyebrow">Member Access</div>

                    <div class="heading-title">
                        Welcome<br><em>Back.</em>
                    </div>
                </div>

                <!-- Social -->
                <div class="social-row">

                    <button type="button" class="btn-soc g">
                        <i class="fa-brands fa-google"></i> Google
                    </button>

                    <button type="button" class="btn-soc a">
                        <i class="fa-brands fa-apple"></i> Apple
                    </button>

                    <button type="button" class="btn-soc x">
                        <i class="fa-brands fa-x-twitter"></i> X
                    </button>

                </div>

                <div class="divider">
                    <span>or with email</span>
                </div>

                <!-- Fields -->
                <div class="fields">

                    <!-- Email -->
                    <div class="field">

                        <div class="field-label">
                            <span>Email</span>
                        </div>

                        <input
                            class="field-input"
                            type="email"
                            name="email"
                            id="email"
                            placeholder="you@example.com"
                            autocomplete="email" />

                        <i class="fa-regular fa-envelope field-icon"></i>

                        <span class="field-err error-text email_error"></span>

                    </div>

                    <!-- Password -->
                    <div class="field">

                        <div class="field-label">
                            <span>Password</span>

                            <a href="#">Forgot?</a>
                        </div>

                        <input
                            class="field-input"
                            type="password"
                            name="password"
                            id="password"
                            placeholder="••••••••"
                            autocomplete="current-password" />

                        <i
                            class="fa-regular fa-eye field-icon"
                            id="eyeIcon"
                            onclick="togglePw()"></i>

                        <span class="field-err error-text password_error"></span>

                    </div>

                </div>

                <!-- Remember -->
                <div class="remember-row">

                    <label class="check-wrap">

                        <input
                            type="checkbox"
                            name="remember"
                            id="rememberMe" />

                        <div class="check-box">
                            <i class="fa-solid fa-check"></i>
                        </div>

                        <span class="check-text">
                            Remember me
                        </span>

                    </label>

                </div>

                <!-- Submit -->
                <button type="submit" class="btn-submit" id="loginBtn">

                    <span class="btn-text">
                        Sign In
                    </span>

                    <div class="spinner"></div>

                </button>

                <!-- Register -->
                <div class="switch-text">
                    New to VØID?
                    <a href="{{ route('register') }}">
                        Create account →
                    </a>
                </div>

            </div>

            <!-- Footer -->
            <div class="form-footer">

                <div class="footer-links">
                    <a href="#">← Store</a>
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                </div>

                <span class="footer-copy">
                    © 2026 VØID
                </span>

            </div>

        </div>

    </form>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>

        // Show / Hide Password
        function togglePw() {
            const password = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            if (password.type === 'password') {
                password.type = 'text';

                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');

            } else {
                password.type = 'password';

                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }

        // AJAX Setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Login Submit
        $(document).ready(function() {

            $('#loginForm').submit(function(e) {
                e.preventDefault();
                $('.error-text').text('');

                const email = $('#email').val();
                const password = $('#password').val();

                $.ajax({
                    url: '/api/login',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        email: email,
                        password: password
                    }),

                    success: function(response) {
                        localStorage.setItem('token', response.token);
                        window.location.href = '/dashboard';
                    },

                    error: function(xhr) {

                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            for (const field in errors) {
                                $(`.${field}_error`).text(errors[field][0]);
                            }
                        } else {
                            alert('Login Failed');
                        }
                    }
                });
            });
        });

    </script>

</body>

</html>
