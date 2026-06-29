<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'نیما احمدی - برنامه‌نویس وب و توسعه‌دهنده لاراول. مشاهده نمونه‌کارها، پروژه‌ها و رزومه.')">
    
    <title>@yield('title', 'نیما احمدی | برنامه‌نویس وب')</title>
    
    {{-- Bootstrap 5.3.8 RTL CSS --}}
    <link href="{{ asset('assets/bootstrap-5.3.8/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <main class="flex-grow-1 container py-4">
        @yield('content')
    </main>
    <script src="{{ asset('assets/bootstrap-5.3.8/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>