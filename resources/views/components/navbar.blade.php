<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        {{-- لوگو --}}
        <a class="navbar-brand fw-bold" href="/">
            نیما احمدی
        </a>

        {{-- دکمه همبرگری --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- آیتم‌های منو --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects">پروژه‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">درباره من</a>
                </li>
            </ul>
            
            {{-- دکمه تماس --}}
            <a href="/contact" class="btn btn-outline-light">
                تماس با من
            </a>
        </div>
    </div>
</nav>