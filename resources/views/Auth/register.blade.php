@extends('Layout.auth')
@section('title')
    Pentiing | Register
@endsection
@section('form')
    @if ($errors->any())
        @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
    @endif
<!-- Register Page -->
    <div class="container-fluid">
        <div class="row align-items-center mt-5">
            <div class="col-md-6 left-side">
                <!-- Img Kiri -->
            <!-- <img src="img/lores.png" alt="foto" style="width:100%;"> -->
            </div>
            <div class="cold-md-5">
                <div class="form-login-register m-auto">
                </div>
                <form action="{{ route('register.action') }}" method="POST">
                    @csrf
                    <h2 class="fw-bold mb-4">Register</h2>
                    <!-- Email -->
                    <div class="mb-3 position-relative">
                        <label for="form3Example3" class="form-label text-muted">Email</label>
                        <span style="left: 41px; color:red;">*</span>
                        <input type="email" class="form-control text-muted" id="form3Example3" name="email" required>
                    </div>
                    <!-- Full Name -->
                    <div class="mb-3 position-relative">
                        <label for="form3Example3" class="form-label text-muted">Nama Lengkap</label>
                        <span style="left: 41px; color:red;">*</span>
                        <input type="text" class="form-control text-muted" id="form3Example3" name="name" required>
                    </div>
                    <!-- Password -->
                    <div class="mb-3 position-relative">
                        <label for="form3Example4" class="form-label text-muted">Password</label>
                        <span style="left: 41px; color:red;">*</span>
                        <input type="password" class="form-control text-muted" id="form3Example4" name="password" required>
                    </div>
                    <!-- Confirmation Password -->
                    <div class="mb-4 position-relative">
                        <label for="form3Example4" class="form-label text-muted">Konfirmasi Password</label>
                        <span style="left: 41px; color:red;">*</span>
                        <input type="password" class="form-control text-muted" id="form3Example4" name="password_confirmation" required>
                    </div>

                    <!-- BUTTON -->
                    <input type="hidden" name="role" value="user">
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Buat Akun </button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Sudah punya akun? <a href="/login" class="link-danger">Masuk</a>
                        </p>
                    </div>
                </form>    
            </div>
        </div>
    </div>
    <!-- <form action="{{ route('register.action') }}" method="POST">
        @csrf
        <div class="divider d-flex align-items-center">
            <p class="text-center fw-bold mb-2">Buat Akun</p>
        </div> -->

        <!-- Email input -->
        <!-- <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email</label>
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Masukkan E-mail" /> -->

        <!-- </div> -->

        <!-- <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Nama Lengkap</label>
            <input type="text" name="name" id="form3Example3" class="form-control form-control-lg"
                placeholder="Masukkan Nama Lengkap" />

        </div> -->

        <!-- Password input -->
        <!-- <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Masukkan Password" />

        </div> -->

        <!-- <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="form3Example4" class="form-control form-control-lg"
                placeholder="Masukkan Ulang Password" />
        </div> -->

        <!-- <input type="hidden" name="role" value="user">
        <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Buat Akun </button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Sudah punya akun? <a href="/login" class="link-danger">Masuk</a>
            </p>
        </div> -->

    <!-- </form> -->
@endsection
