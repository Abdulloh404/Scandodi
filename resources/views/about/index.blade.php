@extends('header.index')
@section('main-content')

    @include('components.header')
    @include('components.navbar')

    @php $template = json_decode(get_settings('frontend_template')); @endphp

    <div class="container-fluid p-0">
        <div class="bg-about text-white d-flex justify-content-center align-items-center text-center ">
            <h1 class="wow fadeInUp" data-wow-delay="0.2s">Crazy good<br>
                We strive to elevate the About us
            </h1>
        </div>
    </div>
    <div class="container-fluid bg-color-about">
        <div class="container p-5 px-xl px-lg px-md px-2 pb-3">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 my-xl-auto my-lg-auto my-md mb-3 mx-auto">
                    <div class="img-content-about-1 mx-auto wow fadeInRight" data-wow-delay="0.4s">
                        <img src="uploads/img-content-about-1.jpg" alt="" width="100%">
                    </div>
                </div>
                <div
                    class="col-xl-8 col-lg-8 col-md-12 col-12 my-auto pb-xl-5 pb-lg-5 pb-md-0 p-xl-5 p-lg-5 p-md-5 p-3">
                    <div class="mb-3 wow fadeInRight" data-wow-delay="0.6s">
                        <h1 class="text-gradient">Our Philosophy</h1>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.7s">
                        <h3>We are lucky to live in a glorious age that gives us everything we could ask for as a human
                            race. What more could you need when you have meat covered in cheese nestled between bread.
                        </h3>
                        <h3>From smashed patties at Shake Shack to Glamburgers at Honky Tonk, there’s a little something
                            for everyone. Some burgers are humble, and some are ostentatious, and you just have to try
                            them all to figure out what you want. Feel free to contact us.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container p-5 px-xl px-lg px-md px-2 pt-0">
            <div class="row">
                <div
                    class="col-xl-8 col-lg-8 col-md-12 col-12 my-xl-auto my-lg-auto my-md mb-3 pt-xl-5 pt-lg-5 pt-md-0 p-xl-5 p-lg-5 p-md-5 p-3">
                    <div class="mb-3 wow fadeInRight" data-wow-delay="0.4s">
                        <h1 class="text-gradient">Local ingredients</h1>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.5s">
                        <h3>Whether you’re a ketchup and mustard loyalist or you prefer house sauce to no sauce, you can
                            agree that every cheeseburger has it’s own special flair. Top tip: house sauce begs to be
                            ordered on the side for fry-dipping purposes.</h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 my-auto mx-auto">
                    <div class="img-content-about-2 mx-auto wow fadeInRight" data-wow-delay="0.7s">
                        <img src="uploads/img-content-about-2.jpg" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('components.footer')

@endsection
@section('js')
    @if (json_decode(get_settings('site_setting')) &&
        isset(json_decode(get_settings('site_setting'))->recaptcha_site_key))
        <script
            src="https://www.google.com/recaptcha/api.js?render={{ json_decode(get_settings('site_setting'))->recaptcha_site_key }}">
        </script>
        <script>
            $(document).on('click', '.signIn', function(e) {
                e.preventDefault();
                grecaptcha.ready(function() {
                    grecaptcha.execute('{{ json_decode(get_settings('site_setting'))->recaptcha_site_key }}', {
                        action: 'submit'
                    }).then(function(token) {
                        // Add your logic to submit to your backend server here.
                        if (token) {
                            $('#g_token_append').html(
                                `<input type="hidden" name="grecaptcha_response" value="${token}">`);
                            $('#signInForm').submit();
                        }
                    });
                });
            })
        </script>
    @endif
@endsection
