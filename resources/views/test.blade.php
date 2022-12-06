@extends('header.index')
@section('main-content')

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
