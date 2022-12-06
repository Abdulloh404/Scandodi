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

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('uploads/' . json_decode(get_settings('site_setting'))->favicon) }}">



</head>

<body>

    @include('components.header')
    @include('components.navbar')

    @php $template = json_decode(get_settings('frontend_template')); @endphp
    <div class="container-fluid p-0">
        <div class="bg-index text-white d-flex justify-content-center align-items-center text-center ">
            <h1 class="wow fadeInUp" data-wow-delay="0.2s">Enjoy Eatsy Burgers at home!<br>
                You can order until 10PM
            </h1>
        </div>
    </div>
    <div class="container-fluid bg-color mb-xl mb-lg mb-md mb-4">
        <div class="container p-xl-5 p-lg-5 p-md-5 p-3">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-12 text-white my-xl-auto my-lg-auto mb-md-auto mb-3 wow fadeInLeft"
                    data-wow-delay="0.6s">
                    <div class="mb-3">
                        <h3>Dine-in Ordering & Payment Solutions</h3>
                    </div>
                    <div>
                        <p>Enhance your guest experience with FineDine Tablet or QR Mobile ordering solutions. Let your
                            customers view your branded digital menu, place their orders and pay the bills to avoid
                            errors and save time. Your staff will have more time for hospitality.FineDine increases the
                            order amounts with smart upsells and cross-sells.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-8 col-12 mx-auto wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="img-content-index mx-auto">
                        <img src="uploads/phone.png" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-xl mb-lg mb-md mb-4">
        <div class="container p-xl-5 p-lg-5 p-md-5 p-3">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-8 col-12 my-xl-auto my-lg-auto mb-md-5 mb-3 mx-auto">
                    <div class="img-content-index-2 mx-auto wow fadeInRight" data-wow-delay="0.2s">
                        <img src="uploads/img-content-index-2.png" alt="" width="100%">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12 my-auto wow fadeInRight" data-wow-delay="0.4s">
                    <div class="mb-3">
                        <h3>Delivery & Pick-up Menu with Zero Commission</h3>
                    </div>
                    <div>
                        <p>Share your menu with regular customers to take online delivery and pick-up orders. Eliminate
                            high commissions and increase your profit margins. Own your customer data, create engagement
                            and reach out to new customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('components.features')
    @include('components.content-price')
    @include('components.content-1')
    @include('components.cookie-consent')
    @include('components.footer')





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
</body>

</html>
