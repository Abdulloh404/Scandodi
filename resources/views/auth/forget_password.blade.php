@extends('layouts.auth')
@section('main-content')
@include('components.navbar')
@include('components.header')

        <div class="container" style="display: flexbox;">
            <div class="row justify-content-center  align-items-center" style="height: 100vh">
                <div class="col-md-5">
                    <div class="authincation-content rounded-5">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">{{trans('auth.forget_pass')}}</h4>
                                    <form action="{{route('password.reset')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>{{trans('auth.email')}}</strong></label>
                                            <input name="email" type="email" class="form-control"
                                                   placeholder="{{trans('auth.email_ex')}}">
                                        </div>
                                        <div class="text-center">
                                            <button
                                                type="{{ json_decode(get_settings('site_setting')) && isset(json_decode(get_settings('site_setting'))->recaptcha_site_key) ? 'button' : 'submit' }}"
                                                class="btn btn-outline-secondary btn-block signIn">{{trans('auth.submit')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
