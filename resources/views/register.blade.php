@extends('layouts.app')

@section('title', 'Home')

@section('css_page')
@endsection

@section('content')
    <div class="login-register-area mb-60px" style="margin-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a href="/login">
                                <h4>login</h4>
                            </a>
                            <a class="active" href="/register">
                                <h4>register</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg2" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="/register" method="post">
                                            @csrf
                                            <input type="text" name="name" placeholder="Masukan Nama"
                                                value="{{ @old('name') }}" required
                                                class="form-control @error('name') is-invalid @enderror" />
                                            @error('name')
                                                <div class="invalid-feedback pl-2" style="margin-top: -30px">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                            <input name="email" placeholder="Email" type="email" required
                                                value="{{ @old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror" />
                                            @error('email')
                                                <div class="invalid-feedback pl-2" style="margin-top: -30px">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <input type="password" name="password" placeholder="Password" required
                                                value="{{ @old('password') }}"
                                                class="form-control @error('password') is-invalid @enderror" />
                                            @error('password')
                                                <div class="invalid-feedback pl-2" style="margin-top: -30px">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="button-box">
                                                <button type="submit"><span>Register</span></button>
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
    @endsection



    @section('js_page')
    @endsection
