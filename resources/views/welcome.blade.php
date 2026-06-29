@extends('layouts.app')

@section('title', 'خانه | نیما احمدی')

@section('content')
    <div class="alert alert-success text-center">
        <h1 class="display-4">سلام نیما! 🎉</h1>
        <p class="lead">Layout پایه آماده‌ست و Bootstrap لوکال کار می‌کنه.</p>
        <hr>
        <p>این یک تست از <strong>@yield('content')</strong> هست.</p>
    </div>
@endsection