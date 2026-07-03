@extends('layouts.app')

@section('title', 'خانه | نیما احمدی')
@section('meta_description', 'صفحه اصلی نیما احمدی - برنامه‌نویس وب و توسعه‌دهنده لاراول')

@section('content')
    {{-- Section 1: خانه --}}
    <section id="home" class="py-5">
        <div class="container text-center">
            <h1>بخش خانه</h1>
            <p>اینجا محتوای Hero Section قرار می‌گیره</p>
        </div>
    </section>

    {{-- Section 2: درباره من --}}
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <h2>درباره من</h2>
            <p>محتوای بخش درباره من</p>
        </div>
    </section>

    {{-- Section 3: مهارت‌ها --}}
    <section id="skills" class="py-5">
        <div class="container">
            <h2>مهارت‌ها</h2>
            <p>محتوای بخش مهارت‌ها</p>
        </div>
    </section>

    {{-- Section 4: نمونه‌کارها --}}
    <section id="projects" class="py-5 bg-light">
        <div class="container">
            <h2>نمونه‌کارها</h2>
            <p>محتوای بخش نمونه‌کارها</p>
        </div>
    </section>
@endsection