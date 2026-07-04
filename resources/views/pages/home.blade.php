@extends('layouts.app')

@section('title', 'خانه | نیما احمدی')

{{-- استایل به صورت استاندارد به head تزریق میشه --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endpush

@section('content')

    {{-- Section 1: Hero --}}
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center gy-4">

                {{-- متن و دکمه‌ها --}}
                <div class="col-lg-7 order-lg-1 order-2">
                    <h2 class="display-4 fw-bold lh-sm mb-4 text-dark">
                        طراحی و توسعه وب‌سایت‌های حرفه‌ای<br>
                        <span class="text-gradient-primary">با تمرکز روی بک‌اند تمیز و قابل توسعه</span>
                    </h2>

                    <p class="fs-4 text-secondary lh-lg mb-4">
                        من <strong class="text-dark">نیما احمدی</strong> هستم؛ توسعه‌دهنده نرم‌افزار و وب،
                        مسلط به <span class="fw-semibold text-primary">PHP و Laravel</span>، علاقه‌مند به ساخت
                        پروژه‌های کاربردی و یادگیری فناوری‌های جدید.
                    </p>

                    <div class="d-flex gap-3 flex-wrap justify-content-lg-start justify-content-center">
                        <a href="#projects" class="btn btn-primary btn-hero">
                            <i class="bi bi-folder2-open"></i> مشاهده نمونه‌کارها
                        </a>
                        <a href="/contact" class="btn btn-outline-dark btn-hero">
                            <i class="bi bi-envelope"></i> درخواست همکاری
                        </a>
                    </div>
                </div>

                {{-- Profile Card --}}
                <div class="col-lg-5 order-lg-2 order-1 d-flex justify-content-center">
                    <div class="profile-card card border-0 p-5 w-100">
                        <div class="avatar-circle d-flex align-items-center justify-content-center rounded-circle mx-auto mb-4"
                             style="width: 140px; height: 140px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="white" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Z"/>
                            </svg>
                        </div>

                        <h2 class="h2 fw-bold text-center text-dark mb-3">نیما احمدی</h2>

                        <div class="d-flex justify-content-center gap-2 flex-wrap mb-3">
                            <span class="badge badge-skill">💻 PHP Backend</span>
                            <span class="badge badge-skill">🚀 Laravel</span>
                            <span class="badge badge-skill">🎂 ۱۸ ساله</span>
                        </div>

                        <p class="text-center text-secondary mb-0 lh-base">
                            برنامه‌نویس بک‌اند وب، آماده همکاری روی پروژه‌های سفارشی، پنل‌های مدیریتی و وب‌سایت‌های شرکتی.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Section 2: درباره من --}}
    <section id="about" class="py-5 bg-white">
        <div class="container">
            <h2 class="display-5 fw-bold text-center text-dark mb-4">درباره من</h2>
            <p class="text-center text-secondary fs-5">محتوای این بخش به زودی اضافه می‌شود.</p>
        </div>
    </section>

    {{-- Section 3: مهارت‌ها --}}
    <section id="skills" class="py-5" style="background-color: #f8fafc;">
        <div class="container">
            <h2 class="display-5 fw-bold text-center text-dark mb-4">مهارت‌ها</h2>
            <p class="text-center text-secondary fs-5">محتوای این بخش به زودی اضافه می‌شود.</p>
        </div>
    </section>

    {{-- Section 4: نمونه‌کارها --}}
    <section id="projects" class="py-5 bg-white">
        <div class="container">
            <h2 class="display-5 fw-bold text-center text-dark mb-4">نمونه‌کارها</h2>
            <p class="text-center text-secondary fs-5">محتوای این بخش به زودی اضافه می‌شود.</p>
        </div>
    </section>

@endsection