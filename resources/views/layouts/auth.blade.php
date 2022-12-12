<!DOCTYPE html>
<html lang="{{ session()->get('locale') }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('uploads/' . json_decode(get_settings('site_setting'))->favicon) }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/toastr/css/toastr.min.css') }}">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
    @if (isset(json_decode(get_settings('site_setting'))->cookie_consent) &&
        json_decode(get_settings('site_setting'))->cookie_consent == 'enable')
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    @endif
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('front/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/signIn.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/signUp.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('uploads/logo.png' . json_decode(get_settings('site_setting'))->favicon) }}">

    @yield('css')

</head>

<body class="h-auto" style="background: linear-gradient(180deg, #F54D6F 0%, #FE635B 43.23%, #F54D6F 100%); ">
    @yield('main-content')

    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/toastr/js/toastr.min.js') }}"></script>
    @yield('js')
    @php $allErrors=''; @endphp
    @if (isset($errors) && count($errors) > 0)
        @foreach ($errors->all() as $error)
            @php $allErrors.=$error.'<br/>' @endphp
        @endforeach
        <script>
            $(function() {
                toastr.error('{!! clean($allErrors) !!}', 'Failed', {
                    timeOut: 5000
                });
            });
        </script>
    @endif


    @if (session()->has('success'))
        <script>
            $(function() {
                toastr.info('{{ session()->get('success') }}', 'Success', {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                });
            });
        </script>
    @endif

</body>

</html>
