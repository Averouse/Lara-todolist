@extends('layouts.app')

@section('content')
    <div class="min-vh-100 d-flex align-items-center justify-content-center py-5 bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card auth-card shadow-sm bg-dark border-secondary">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center mb-4">
                                <h2 class="todo fw-bold mb-4 text-light">To-Do-List</h2>
                                <p class="text-secondary">Buat akun dan mulai membuat tugas baru</p>
                            </div>

                            <form method="POST" action="{{ route('create.user') }}">
                                @csrf

                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-secondary border-end-0 text-light">
                                            <i class="bi bi-person"></i>
                                        </span>
                                        <input type="text" name="nama"
                                            class="form-control bg-secondary border-start-0 text-light @error('nama') is-invalid @enderror"
                                            placeholder="Nama Lengkap" value="{{ old('nama') }}" required autocomplete="nama"
                                            autofocus>
                                    </div>
                                    @error('nama')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-secondary border-end-0 text-light">
                                            <i class="bi bi-person-badge"></i>
                                        </span>
                                        <input type="text" name="username"
                                            class="form-control bg-secondary border-start-0 text-light @error('username') is-invalid @enderror"
                                            placeholder="Username" value="{{ old('username') }}" required autocomplete="username">
                                    </div>
                                    @error('username')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-secondary border-end-0 text-light">
                                            <i class="bi bi-envelope-at"></i>
                                        </span>
                                        <input type="email" name="email"
                                            class="form-control bg-secondary border-start-0 text-light @error('email') is-invalid @enderror"
                                            placeholder="Email Address" value="{{ old('email') }}" required
                                            autocomplete="email">
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-secondary border-end-0 text-light">
                                            <i class="bi bi-key"></i>
                                        </span>
                                        <input type="password" name="password"
                                            class="form-control bg-secondary border-start-0 text-light @error('password') is-invalid @enderror"
                                            placeholder="Password" required autocomplete="new-password">
                                    </div>
                                    @error('password')
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
                                        <input type="password" name="password_confirmation"
                                            class="form-control bg-secondary border-start-0 text-light"
                                            placeholder="Confirm Password" required autocomplete="new-password">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-dark w-100 mb-3 position-relative overflow-hidden">
                                    <span class="d-flex align-items-center justify-content-center text-light">
                                        Buat Akun
                                        <i class="ms-2 text-light">➜</i>
                                    </span>
                                </button>

                                <div class="text-center">
                                    <a href="{{ route('login') }}" class="text-decoration-none text-secondary">
                                        Sudah Punya Akun? Silahkan Login
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
