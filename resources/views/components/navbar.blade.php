<link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">

<nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-custom">
    <div class="container">
        {{-- لوگو --}}
        <a class="navbar-brand navbar-brand-custom fs-4" href="/">
            نیما احمدی
        </a>

        {{-- دکمه همبرگری --}}
        <button class="navbar-toggler navbar-toggler-custom border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- محتوای منو --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- آیتم‌های منو --}}
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-custom fw-medium active" href="#home">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom fw-medium" href="#about">درباره من</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom fw-medium" href="#skills">مهارت‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom fw-medium" href="#projects">نمونه‌کارها</a>
                </li>
            </ul>

            {{-- دکمه‌ها --}}
            <div class="d-flex align-items-center gap-2">
                <button class="theme-toggle-switch" type="button" disabled title="به زودی">
                    <span class="toggle-icons">
                        <span>☀️</span>
                        <span>🌙</span>
                    </span>
                    <span class="toggle-circle">🌙</span>
                </button>
                <a href="/contact" class="btn btn-cta-custom text-white">
                    درخواست همکاری
                </a>
            </div>
        </div>
    </div>
</nav>