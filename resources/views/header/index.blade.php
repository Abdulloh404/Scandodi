<!DOCTYPE html>
<html lang="{{ session()->get('locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="title"
        content="{{ isset(json_decode(get_settings('site_setting'))->meta_title) ? json_decode(get_settings('site_setting'))->meta_title : '' }}">
    <meta name="description"
        content="{{ isset(json_decode(get_settings('site_setting'))->meta_description) ? json_decode(get_settings('site_setting'))->meta_description : '' }}">
    <meta name="keywords"
        content="bulk sms, sms marketing, schedule sms, signalwire, sms , sms gateway, telnyx, twilio" />
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Website Title -->
    <title>
        {{ isset(json_decode(get_settings('site_setting'))->name) ? json_decode(get_settings('site_setting'))->name : '' }}
        - {{ trans('layout.a_simple_restaurant_menu_maker') }}</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- Styles -->
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


    @yield('css')
    {{-- Link CSS --}}
    <link href="{{ asset('front/css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/contactUs.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/price.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/blog-detail.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/content-price.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('uploads/logo.png' . json_decode(get_settings('site_setting'))->favicon) }}">

    {{-- Notify --}}
    <title>Laravel Sweet Alert Notification</title>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('uploads/logo.png' . json_decode(get_settings('site_setting'))->favicon) }}">
</head>

<body>
    @yield('main-content')
</body>


@yield('js')
<!-- Scripts -->
<script src="{{ asset('front/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{ asset('front/js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
<script src="{{ asset('front/js/jquery.easing.min.js') }}"></script>
<!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{ asset('front/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
<script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
<script src="{{ asset('front/js/scripts.js') }}"></script> <!-- Custom scripts -->
@if (isset(json_decode(get_settings('site_setting'))->cookie_consent) &&
    json_decode(get_settings('site_setting'))->cookie_consent == 'enable')
    <script src="{{ asset('js/cookie_consent.js') }}"></script>
    <script>
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#8000ff"
                },
                "button": {
                    "background": "#f2cbcb"
                }
            },
            "theme": "classic",
            "position": "bottom-left",
            "type": "opt-out",
            "content": {
                "href": "{{ route('privacy.policy') }}"
            }
        });
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


{{-- JS Google map --}}
<script>
    $(document).ready(function() {
        buildMap();
    });

    var sw = document.body.clientWidth,
        bp = 550,
        $map = $('.map');
    var embed =
        '<iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=thaicc tower&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>';

    function buildMap() {
        if (sw > bp) { //If Large Screen
            if ($('.map-container').length < 1) { //If map doesn't already exist
                buildEmbed();
            }
        } else {
            if ($('.static-img').length < 1) { //If static image doesn't exist
                buildStatic();
            }
        }
    };

    function buildEmbed() { //Build iframe view
        $('<div class="map-container"/>').html(embed).prependTo($map);
    };

    $(window).resize(function() {
        sw = document.body.clientWidth;
        buildMap();
        google.maps.event.trigger(map, "resize");
    });
</script>
{{-- JS Google map --}}

</html>
