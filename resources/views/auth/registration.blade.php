@extends('layouts.auth')
@section('main-content')
    @include('components.navbar')
    @include('components.header')
    @include('sweetalert::alert')
    <div class="container" style="display: flexbox;">
        <div class="row justify-content-center  align-items-center height-page">
            <div class="col-xl-6 col-lg-8 col-md-10 p-10 mx-auto bg-white rounded-5" style="padding:10px;">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="text-center mt-2 d-none"><span
                                    class="text-red font-weight-bolder">{{ trans('Database is being refreshed every 2 hours') }}</span>
                            </div>
                            <div class="auth-form bg-white rounded-5 ">
                                <h4 class="text-center mb-4">Setup Your Menu in Minutes</h4>
                                <p class="text-center mb-4" style="color:rgb(115, 115, 115);">No commitments. Try for
                                    free now and pay later. No credit card required.</p>


                                <form action="{{ route('user.store') }}" method="post" id="signUpForm">
                                    @csrf
                                    @if (request()->has('type'))
                                        <input type="hidden" name="type" value="{{ request()->get('type') }}">
                                    @endif
                                    @if (request()->has('plan'))
                                        <input type="hidden" name="plan" value="{{ request()->get('plan') }}">
                                    @endif
                                    @if (request()->has('slug'))
                                        <input type="hidden" name="slug" value="{{ request()->get('slug') }}">
                                    @endif

                                    @if (request()->has('restaurant'))
                                        <input type="hidden" name="restaurant"
                                            value="{{ request()->get('restaurant') }}">
                                    @endif
                                    <div class="form-group">
                                        <input type="text" id="name" class="form-control"
                                            placeholder="{{ trans('auth.name_ex') }}" value="{{ old('name') }}"
                                            name="name">
                                    </div>
                                    <div class="form-group">

                                        <input type="email" id="email" class="form-control"
                                            value="{{ old('email') }}" placeholder="{{ trans('auth.email_ex') }}"
                                            name="email" onkeydown="function validation()">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="password" class="form-control" value=""
                                            placeholder="{{ trans('auth.password') }}" name="password">
                                    </div>

                                    <div class="text-center mt-4">
                                        <button
                                            type="{{ json_decode(get_settings('site_setting')) && isset(json_decode(get_settings('site_setting'))->recaptcha_site_key) ? 'button' : 'submit' }}"
                                            id="submitForm"
                                            class="btn btn-outline-danger btn-block">{{ trans('Create Account') }}</button>
                                    </div>
                                </form>
                                <div class="row my-2">
                                    <div class="col">
                                        <hr>
                                    </div>
                                    <div class="col-1 text-center" style="color:rgb(115, 115, 115);"><span>or</span>
                                    </div>
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="d-grid text-center mt-2">
                                    <a href="{{ route('facebook.login') }}"
                                        class="btn btn-outline-secondary d-flex justify-content-center align-items-center btn-block">
                                        <?php /*<span role="img" aria-label="google"
                                            class="d-flex align-items-center pe-2"><svg viewBox="64 64 896 896"
                                                focusable="false" data-icon="google" width="100%" height="20px"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M881 442.4H519.7v148.5h206.4c-8.9 48-35.9 88.6-76.6 115.8-34.4 23-78.3 36.6-129.9 36.6-99.9 0-184.4-67.5-214.6-158.2-7.6-23-12-47.6-12-72.9s4.4-49.9 12-72.9c30.3-90.6 114.8-158.1 214.7-158.1 56.3 0 106.8 19.4 146.6 57.4l110-110.1c-66.5-62-153.2-100-256.6-100-149.9 0-279.6 86-342.7 211.4-26 51.8-40.8 110.4-40.8 172.4S151 632.8 177 684.6C240.1 810 369.8 896 519.7 896c103.6 0 190.4-34.4 253.8-93 72.5-66.8 114.4-165.2 114.4-282.1 0-27.2-2.4-53.3-6.9-78.5z">
                                                </path>
                                            </svg></span>*/ ?>
                                            <i class="fab fa-facebook-square fa-lg pe-3 text-primary"></i>Sign up with Facebook
                                    </a>
                                </div>
                                <div class="d-grid text-center mt-4">
                                    <a href="{{ route('google.login') }}"
                                        class="btn btn-outline-secondary d-flex justify-content-center align-items-center">
                                        <?php /* <span role="img" aria-label="google"
                                            class="d-flex align-items-center pe-2"><svg viewBox="64 64 896 896"
                                                focusable="false" data-icon="google" width="100%" height="20px"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M881 442.4H519.7v148.5h206.4c-8.9 48-35.9 88.6-76.6 115.8-34.4 23-78.3 36.6-129.9 36.6-99.9 0-184.4-67.5-214.6-158.2-7.6-23-12-47.6-12-72.9s4.4-49.9 12-72.9c30.3-90.6 114.8-158.1 214.7-158.1 56.3 0 106.8 19.4 146.6 57.4l110-110.1c-66.5-62-153.2-100-256.6-100-149.9 0-279.6 86-342.7 211.4-26 51.8-40.8 110.4-40.8 172.4S151 632.8 177 684.6C240.1 810 369.8 896 519.7 896c103.6 0 190.4-34.4 253.8-93 72.5-66.8 114.4-165.2 114.4-282.1 0-27.2-2.4-53.3-6.9-78.5z">
                                                </path>
                                            </svg></span>*/ ?>
                                            <i class="fab fa-google fa-lg pe-3 text-danger"></i>Sign up with Google
                                    </a>
                                </div>
                                <div class="d-grid text-center mt-4">
                                    <a href="{{ route('line.login') }}"
                                        class="btn btn-outline-secondary d-flex justify-content-center align-items-center">
                                        <?php /* ?><span role="img" aria-label="google"
                                            class="d-flex align-items-center pe-2"><svg viewBox="64 64 896 896"
                                                focusable="false" data-icon="google" width="100%" height="20px"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M881 442.4H519.7v148.5h206.4c-8.9 48-35.9 88.6-76.6 115.8-34.4 23-78.3 36.6-129.9 36.6-99.9 0-184.4-67.5-214.6-158.2-7.6-23-12-47.6-12-72.9s4.4-49.9 12-72.9c30.3-90.6 114.8-158.1 214.7-158.1 56.3 0 106.8 19.4 146.6 57.4l110-110.1c-66.5-62-153.2-100-256.6-100-149.9 0-279.6 86-342.7 211.4-26 51.8-40.8 110.4-40.8 172.4S151 632.8 177 684.6C240.1 810 369.8 896 519.7 896c103.6 0 190.4-34.4 253.8-93 72.5-66.8 114.4-165.2 114.4-282.1 0-27.2-2.4-53.3-6.9-78.5z">
                                                </path>
                                            </svg></span> */ ?>
                                            <i class="fab fa-line fa-lg pe-3 text-success"></i>Sign up with Line
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
