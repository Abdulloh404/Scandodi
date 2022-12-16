@extends('header.index')
@section('main-content')
    @include('components.header')
    @include('components.navbar')

    @php $template = json_decode(get_settings('frontend_template')); @endphp

    <div class="container-fluid p-0">
        <div class="bg-price text-white d-flex justify-content-center align-items-center text-center">
            <h1>How much does Dine cost?<br>
                Start for free today. We have plans for every size of businesses. No credit card required.
            </h1>
        </div>
    </div>

    @include('components.content-price')
    @include('components.features')
    @include('components.content-1')
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

    @if (isset(json_decode(get_settings('site_setting'))->crips_token) &&
        json_decode(get_settings('site_setting'))->crips_token)
        <script type="text/javascript">
            window.$crisp = [];
            window.CRISP_WEBSITE_ID = "{{ json_decode(get_settings('site_setting'))->crips_token }}";
            (function() {
                d = document;
                s = d.createElement("script");
                s.src = "https://client.crisp.chat/l.js";
                s.async = 1;
                d.getElementsByTagName("head")[0].appendChild(s);
            })();
        </script>
    @endif
@endsection
