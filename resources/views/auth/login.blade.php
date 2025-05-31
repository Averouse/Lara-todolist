@extends('layouts.app')

@section('content')
    <div class="min-vh-100 d-flex align-items-center justify-content-center py-5 bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5">
                    <!-- Ganti .card menjadi card bg-dark text-light -->
                    <div class="card auth-card shadow-sm bg-dark border-secondary">
                        <div class="card-body p-4 p-md-5">
                            <!-- Alert Message -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="text-center mb-4">
                                <h2 class="todo fw-bold mb-4 text-light">To-Do-List</h2>
                                <p class="text-muted">Masuk ke akun Anda</p>
                            </div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-secondary border-end-0 text-light">
                                            <i class="bi bi-person"></i>
                                        </span>
                                        <!-- Input dengan bg-secondary dan text-light -->
                                        <input type="text" name="login"
                                            class="form-control bg-secondary border-start-0 text-light @error('login') is-invalid @enderror"
                                            placeholder="Email atau Username" value="{{ old('login') }}" required
                                            autofocus>
                                    </div>
                                    @error('login')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text bg-secondary border-end-0 text-light">
                                            <i class="bi bi-key"></i>
                                        </span>
                                        <input type="password" name="password"
                                            class="form-control bg-secondary border-start-0 text-light @error('password') is-invalid @enderror"
                                            placeholder="Password" required>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Tombol utama: ganti warna jadi btn-dark atau varian kustom -->
                                <button type="submit" class="btn btn-dark w-100 mb-3 position-relative overflow-hidden">
                                    <span class="d-flex align-items-center justify-content-center text-light">
                                        Masuk
                                        <i class="ms-2 text-light">➜</i>
                                    </span>
                                </button>

                                <div class="text-center">
                                    <a href="{{ route('register') }}" class="text-decoration-none text-secondary">
                                        Belum Punya Akun? Daftar Sekarang
                                    </a>
                                </div>

                                <div class="mt-4 pt-4 border-top border-secondary">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon me-2 text-secondary">
                                                    <i class="bi bi-check-circle"></i>
                                                </div>
                                                <span class="small text-light">Task Management</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon me-2 text-secondary">
                                                    <i class="bi bi-check-circle"></i>
                                                </div>
                                                <span class="small text-light">Progress Tracking</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon me-2 text-secondary">
                                                    <i class="bi bi-check-circle"></i>
                                                </div>
                                                <span class="small text-light">Team Collaboration</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon me-2 text-secondary">
                                                    <i class="bi bi-check-circle"></i>
                                                </div>
                                                <span class="small text-light">Priority Settings</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
