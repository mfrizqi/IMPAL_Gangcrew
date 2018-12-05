@extends('layouts.app')

@section('content')
<div class="register-login pb-5" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3)), url('image/bg_3.jpg');background-size: cover;">
    <div class="container pb-5">
        <div class="row justify-content-center pt-5">
            <div class="col-md-8 mt-5">
                <h1 class="mb-3 mt-5 text-primary">Register</h1>

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="">{{ __('Nama') }}</label>

                                        <div>
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">{{ __('Alamat E-Mail') }}</label>

                                        <div>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">{{ __('Alamat') }}</label>

                                        <div>
                                            <textarea id="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}"
                                                rows="5" name="alamat" value="{{ old('alamat') }}" required></textarea>

                                            @if ($errors->has('alamat'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('alamat') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="notelp">{{ __('No Telpon') }}</label>

                                        <div>
                                            <input id="notelp" type="number" class="form-control{{ $errors->has('notelp') ? ' is-invalid' : '' }}"
                                                name="notelp" value="{{ old('notelp') }}"
                                                required>

                                            @if ($errors->has('notelp'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('notelp') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="umur">{{ __('Umur') }}</label>

                                        <div>
                                            <input id="umur" type="number" class="form-control{{ $errors->has('umur') ? ' is-invalid' : '' }}"
                                                name="umur" value="{{ old('umur') }}"
                                                required>

                                            @if ($errors->has('umur'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('umur') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">{{ __('Kata sandi') }}</label>

                                        <div>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm">{{ __('Konfirmasi kata sandi') }}</label>

                                        <div>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Daftar') }}
                                            </button>
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
