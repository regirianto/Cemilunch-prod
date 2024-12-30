@extends('layouts.app')

@section('title', 'Home')

@section('css_page')
@endsection

@section('content')

    <div class="login-register-area mb-60px" style="margin-top: 120px;">
        <div class="container">
            @session('status')
            @endsession
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session()->has('loginFailed'))
                <div class="alert alert-danger" role="alert">
                    {{ session('loginFailed') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" href="/login">
                                <h4>login</h4>
                            </a>
                            <a href="/register">
                                <h4>register</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="/login" method="post">
                                            @csrf
                                            <input type="email" name="email" placeholder="Masukan Email" autofocus
                                                required value="{{ @old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror" />
                                            @error('email')
                                                <div class="invalid-feedback pl-2" style="margin-top: -30px">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <input type="password" name="password" placeholder="Masukan Password"
                                                required />
                                            <div class="button-box">
                                                <button type="submit"><span>Login</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('js_page')
@endsection
