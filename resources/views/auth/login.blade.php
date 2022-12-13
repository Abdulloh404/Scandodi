@extends('layouts.auth')
@section('main-content')
    @include('components.navbar')
    @include('components.header')

    {{-- Sweet alert submit --}}
    @include('sweetalert::alert')
    <div class="container" style="display: flexbox;">
        <div class="row justify-content-center  align-items-center" style="height: 123vh">
            <div class="col-md-5 p-10 mx-auto bg-white rounded-5" style="padding:10px;">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="text-center mt-2 d-none"><span
                                    class="text-red font-weight-bolder">{{ trans('Database is being refreshed every 2 hours') }}</span>
                            </div>

                            <div class="auth-form">
                                <h4 class="text-center mb-4">{{ trans('auth.login_title') }}</h4>
                                <form action="{{ route('authenticate') }}" method="post" id="signInForm">
                                    @csrf
                                    <div class="mb-3">
                                        <div class="d-grid text-center mt-4">
                                            <a href="{{ route('facebook.login') }}"
                                                class="btn btn-outline-secondary d-flex justify-content-center align-items-center">
                                                <span role="img" aria-label="google"
                                                    class="d-flex align-items-center pe-2"><svg viewBox="64 64 896 896"
                                                        focusable="false" data-icon="google" width="100%" height="20px"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M881 442.4H519.7v148.5h206.4c-8.9 48-35.9 88.6-76.6 115.8-34.4 23-78.3 36.6-129.9 36.6-99.9 0-184.4-67.5-214.6-158.2-7.6-23-12-47.6-12-72.9s4.4-49.9 12-72.9c30.3-90.6 114.8-158.1 214.7-158.1 56.3 0 106.8 19.4 146.6 57.4l110-110.1c-66.5-62-153.2-100-256.6-100-149.9 0-279.6 86-342.7 211.4-26 51.8-40.8 110.4-40.8 172.4S151 632.8 177 684.6C240.1 810 369.8 896 519.7 896c103.6 0 190.4-34.4 253.8-93 72.5-66.8 114.4-165.2 114.4-282.1 0-27.2-2.4-53.3-6.9-78.5z">
                                                        </path>
                                                    </svg></span>
                                                <i class="fab fa facebook-f fa-fw text-white "></i>Sign up with Facebook
                                            </a>
                                        </div>
                                        <div class="d-grid text-center mt-4">
                                            <a href="{{ route('google.login') }}"
                                                class="btn btn-outline-secondary d-flex justify-content-center align-items-center">
                                                <span role="img" aria-label="google"
                                                    class="d-flex align-items-center pe-2"><svg viewBox="64 64 896 896"
                                                        focusable="false" data-icon="google" width="100%" height="20px"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M881 442.4H519.7v148.5h206.4c-8.9 48-35.9 88.6-76.6 115.8-34.4 23-78.3 36.6-129.9 36.6-99.9 0-184.4-67.5-214.6-158.2-7.6-23-12-47.6-12-72.9s4.4-49.9 12-72.9c30.3-90.6 114.8-158.1 214.7-158.1 56.3 0 106.8 19.4 146.6 57.4l110-110.1c-66.5-62-153.2-100-256.6-100-149.9 0-279.6 86-342.7 211.4-26 51.8-40.8 110.4-40.8 172.4S151 632.8 177 684.6C240.1 810 369.8 896 519.7 896c103.6 0 190.4-34.4 253.8-93 72.5-66.8 114.4-165.2 114.4-282.1 0-27.2-2.4-53.3-6.9-78.5z">
                                                        </path>
                                                    </svg></span>
                                                <i class="fab fa facebook-f fa-fw text-white "></i>Sign up with Google
                                            </a>
                                        </div>
                                        <div class="d-grid text-center mt-4">
                                            <a href="{{ route('line.login') }}"
                                                class="btn btn-outline-secondary d-flex justify-content-center align-items-center">
                                                <span role="img" aria-label="google"
                                                    class="d-flex align-items-center pe-2"><svg viewBox="64 64 896 896"
                                                        focusable="false" data-icon="google" width="100%" height="20px"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M881 442.4H519.7v148.5h206.4c-8.9 48-35.9 88.6-76.6 115.8-34.4 23-78.3 36.6-129.9 36.6-99.9 0-184.4-67.5-214.6-158.2-7.6-23-12-47.6-12-72.9s4.4-49.9 12-72.9c30.3-90.6 114.8-158.1 214.7-158.1 56.3 0 106.8 19.4 146.6 57.4l110-110.1c-66.5-62-153.2-100-256.6-100-149.9 0-279.6 86-342.7 211.4-26 51.8-40.8 110.4-40.8 172.4S151 632.8 177 684.6C240.1 810 369.8 896 519.7 896c103.6 0 190.4-34.4 253.8-93 72.5-66.8 114.4-165.2 114.4-282.1 0-27.2-2.4-53.3-6.9-78.5z">
                                                        </path>
                                                    </svg></span>
                                                <i class="fab fa facebook-f fa-fw text-white "></i>Sign up with Line
                                            </a>
                                        </div><br>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <hr>
                                                </div>
                                                <div class="col-1 text-center" style="color:rgb(115, 115, 115);">
                                                    <span>or</span>
                                                </div>
                                                <div class="col">
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="{{ trans('email') }}"
                                            name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            placeholder="{{ trans('auth.password') }}" name="password">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox ml-1">
                                                <input type="checkbox" class="custom-control-input" id="basic_checkbox_1"
                                                    name="remember_me">
                                                <label class="custom-control-label"
                                                    for="basic_checkbox_1">{{ trans('auth.remember_pass') }}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="{{ route('forget.password') }}">{{ trans('auth.forget_pass') }}?</a>
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
                                    <p>{{ trans('auth.haven\'t_account') }} <a class="text-primary"
                                            href="{{ route('registration', ['type' => request()->get('type')]) }}">{{ trans('auth.sign_up') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
