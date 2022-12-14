@extends('layouts.auth')
@section('main-content')
    @include('components.navbar')
    @include('components.header')


    {{-- Sweet alert submit --}}
    @include('sweetalert::alert')
    <div class="container" style=" display: flexbox;">
        <div class="row justify-content-center  align-items-center height-page-login">
            <div class="col-xl-6 col-lg-8 col-md-10 p-10 mx-auto bg-white rounded-5" style="padding:10px;">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="text-center mt-2 d-none"><span
                                    class="text-red font-weight-bolder">{{ trans('Database is being refreshed every 2 hours') }}</span>
                            </div>

                            {{-- Sweet alert submit --}}
                            @include('sweetalert::alert')
                            <div class="container" style="display: flexbox;">
                                <div
                                    class="row justify-content-center align-items-center height-page-login mt-md-5 py-md-5 mt-0 py-0">
                                    <div class="col-xl-5 col-lg-6 col-md-8 p-10 mx-auto bg-white rounded-5">
                                        <div class="row no-gutters">
                                            <div class="col-xl-12">
                                                <div class="text-center mt-2 d-none"><span
                                                        class="text-red font-weight-bolder">{{ trans('Database is being refreshed every 2 hours') }}</span>
                                                </div>


                                                <div class="p-4">
                                                    <h4 class="text-center mb-4">{{ trans('auth.login_title') }}</h4>
                                                    <form action="{{ route('authenticate') }}" method="post"
                                                        id="signInForm">
                                                        @csrf
                                                        <div class="mb-2">
                                                            <div class="d-grid text-center mt-3">
                                                                <a href="{{ route('facebook.login') }}"
                                                                    class="btn btn-outline-secondary d-flex justify-content-center align-items-center">
                                                                    <i
                                                                        class="fab fa-facebook-square fa-lg pe-3 text-primary"></i>Sign
                                                                    up with
                                                                    Facebook
                                                                </a>
                                                            </div>
                                                            <div class="d-grid text-center mt-4">
                                                                <a href="{{ route('google.login') }}"
                                                                    class="btn btn-outline-secondary d-flex justify-content-center align-items-center">
                                                                    <i
                                                                        class="fab fa-facebook-square fa-lg pe-3 text-primary"></i>Sign
                                                                    up with
                                                                    Facebook
                                                                </a>
                                                            </div>

                                                            <div class="d-grid text-center mt-4">
                                                                <a href="{{ route('line.login') }}"
                                                                    class="btn btn-outline-secondary d-flex justify-content-center align-items-center">
                                                                    <i class="fab fa-google fa-lg pe-3 text-danger"></i>Sign
                                                                    up with Google
                                                                </a>
                                                            </div>
                                                            <div class="my-3">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <hr>
                                                                    </div>
                                                                    <div class="col-1 text-center"
                                                                        style="color:rgb(115, 115, 115);">
                                                                        <span>or</span>
                                                                    </div>
                                                                    <div class="col">
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control"
                                                                placeholder="{{ trans('email') }}" name="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control"
                                                                placeholder="{{ trans('auth.password') }}" name="password">
                                                        </div>
                                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox ml-1">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="basic_checkbox_1" name="remember_me">
                                                                    <label class="custom-control-label"
                                                                        for="basic_checkbox_1">{{ trans('auth.remember_pass') }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <a
                                                                    href="{{ route('forget.password') }}">{{ trans('auth.forget_pass') }}?</a>
                                                            </div>
                                                        </div>
                                                        <div id="g_token_append">

                                                        </div>
                                                        <div class="text-center">
                                                            <button
                                                                type="{{ json_decode(get_settings('site_setting')) && isset(json_decode(get_settings('site_setting'))->recaptcha_site_key) ? 'button' : 'submit' }}"
                                                                class="btn btn-outline-secondary btn-block signIn">{{ trans('Login') }}</button>
                                                        </div>
                                                    </form>
                                                    <div class="new-account mt-3 text-center ">
                                                        <p class="m-0">{{ trans('auth.haven\'t_account') }} <a
                                                                class="text-primary"
                                                                href="{{ route('registration', ['type' => request()->get('type')]) }}">{{ trans('auth.sign_up') }}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endsection
