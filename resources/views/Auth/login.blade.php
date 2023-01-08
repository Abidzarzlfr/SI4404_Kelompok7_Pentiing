@extends('Layout.auth')
@section('title')
    Pentiing | Login
@endsection
@section('form')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
    @endif
    <form action="{{ route('login.action') }}" method="POST">
        @csrf
        <h2 class="fw-bold mb-4">Login</h2>
        <!-- Email input -->
        <div class="mb-3 position-relative">
            <label for="form3Example3" class="form-label text-muted">Email</label>
            <span style="left: 41px; color:red;">*</span>
            <input type="email" class="form-control text-muted" id="form3Example3" name="email" required>
        </div>
        <!-- Password input -->
        <div class="mb-3 position-relative">
            <label for="form3Example4" class="form-label text-muted">Password</label>
            <span style="left: 41px; color:red;">*</span>
            <input type="password" class="form-control text-muted" id="form3Example4" name="password" required>
        </div>
        <!-- Checkbox -->
        <div class="d-flex justify-content-between align-items-center">
            <div class="form-check mb-0">
                <input class="form-check-input me-2" name="remember" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                    Remember me
                </label>
            </div>
        </div>
        <!-- Button -->
        <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Masuk</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="{{ route('register') }}"
                    class="link-danger">Daftar</a></p>
        </div>

    </form>
@endsection
