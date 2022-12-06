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

    <link href="{{ asset('front/css/policy.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('uploads/' . json_decode(get_settings('site_setting'))->favicon) }}">



</head>

<body data-spy="scroll" data-target=".fixed-top">

    @include('components.header')
    @include('components.navbar')

    <div class="bg1">
        <div class="container">
            <div class="mt-5 p-xl-5 p-lg-5 p-md-5 p-3 pt-xl-3 pt-lg-3 pt-md-3 pt-5 text-center bg-white">
                <div class="py-5">
                    <h1><b>
                            Privacy Policy for Consumers<br>
                            Last updated: February 23, 2021<br>
                            Data Controller | Owner: Bambulabs, Inc.</br></h1>
                </div>
                <div class="mb-5">
                    <p>
                        This privacy policy (“Privacy Policy”) explains to you how we collect, use, and share
                        information and Personal Data that we obtain through your use of the internet sites,
                        applications and online services (“Services”) that are operated by, controlled by or affiliated
                        with scandodi, Inc. Including www.scandodi.com (collectively, “scandodi ,” we,” “us” or “our”).
                        This Privacy Policy only covers information and Personal Data collected through the Services and
                        via direct communications between you and scandodi, and does not cover any information collected
                        at any other website, application or otherwise by us (unless specifically stated), including
                        when you call us, write to us, or communicate with us in any manner other than through the
                        Services. By using the Services, you consent to such use of your information and Personal Data
                        and agree to the terms of this Privacy Policy.

                        We will only process your Personal Data in accordance with applicable data protection and
                        privacy laws. For the purposes of UK and EU data protection legislation, the data controller is
                        scandodi, Inc.

                        Information We Automatically Collect

                        We and our third-party service providers (including any third-party content, advertising, and
                        analytics providers) may automatically collect certain information from your device or web
                        browser when you interact with the Services to help us understand how our users use the Services
                        and to target advertising to you (which we will refer to in this Privacy Policy collectively as
                        “Usage Data”). For example, each time you visit the Services we and our third-party service
                        providers may automatically collect your IP address, mobile device identifier or other unique
                        identifier, browser and computer style, access time, the Web page you came from, the URL you go
                        to next, the Web page(s) that you access during your visit and your interaction with the content
                        or advertising on the Services.

                        Information You Choose to Submit

                        You can visit the Services without telling us who you are or revealing any information by which
                        someone could identify you as a specific, identifiable individual (which we will refer to in
                        this Privacy Policy collectively as “Personal Data”). If, however, you wish to register to
                        become a member of the Services, or to use the Services for ordering, you are required to
                        provide certain Personal Data (for example, your name, address, e-mail address, telephone number
                        and information regarding the payment or delivery option you choose), and financial and credit
                        card information, and you must also provide a user name and password. We use your Personal Data
                        to fulfill your requests for products and services, to improve our Services, to contact you from
                        time to time, with your consent, about us and our products and services, and as otherwise
                        described in this Privacy Policy. We refer collectively to all information we collect that is
                        not Personal Data, including Usage Data, demographic data, and de-identified Personal Data, as
                        “Non-Personal Data”. If we combine Non-Personal Data with Personal Data, we will treat the
                        combined information as Personal Data under this Privacy Policy.

                        You also may choose to submit photos, descriptions, comments, ratings, visual materials, or
                        feedback (which we will refer to in this Privacy Policy collectively as “User Content”).
                        Personal Data, Non-Personal Usage Data, and User Content are referred to in this Privacy Policy
                        collectively as (“User Information”).

                        Information Obtained From Third Parties

                        We may receive information about you from third parties (including, for example, subcontractors
                        in technical, payment and delivery services, advertising networks, analytics providers, search
                        information providers) and may receive information about you from them, subject to your
                        agreements with them.

                        Transaction Information

                        When you make orders using our Services, we may collect information about the transaction,
                        including date, time and amount of the transaction, the merchant’s location, and description,
                        any photo, and description you choose to associate with the transaction, the names of the
                        merchant Partner and the names of the products.

                        How We Use The Information

                        We may use the information we collect, including Usage Data, Personal Data, and User Content:

                        To enable you to use our Services, to create an account or profile, to process the information
                        you provide via our Services (including verifying that your email address is active and valid)
                        and to process your transactions;

                        to provide related customer service and care, including responding to your questions,
                        complaints, or comments and sending surveys (with your consent) and processing survey responses

                        to provide you with information, products, or services that you have requested;

                        with your consent, to provide you with information, products, or services that we otherwise
                        believe will interest you, including special opportunities from us and our Partners.

                        to tailor content, recommendations, and advertisements we and third parties display to you, both
                        on the Services and elsewhere online;

                        for internal business purposes, such as to improve our Services; to administer and process
                        contests, sweepstakes, and promotions;

                        to contact you with administrative communications and, in our discretion, changes to our Privacy
                        Policy, Terms of Use, or any of our other policies;

                        to comply with regulatory and legal obligations; and – for purposes as disclosed at the time you
                        provide your information, with your consent, and as further described in this Privacy Policy.

                        scandodi reserves the right to utilize the User Content, exclusive of confidential or
                        proprietary data, for marketing or promotional purposes.

                        Cookies/Tracking

                        In addition, we use information collected online through cookies, web beacons and other
                        automated means for purposes such as (i) customizing your visits to our websites and apps, (ii)
                        delivering content (including advertising) tailored to our your’ interests and the way you
                        browse our websites and apps, and (iii) managing our business. We may supplement data we collect
                        through automated means with information about you with content that may be of interest to you.

                        Most browsers are initially set up to accept cookies. You can reset your browser to refuse all
                        cookies or to indicate when a cookie is being sent; however, if you reject cookies, you will not
                        be able to sign in to the Services or take full advantage of our Services.

                        You can find more information about cookies and how they work, what cookies have been set on
                        your computer or mobile device and how to manage and delete them

                        Information Sharing Practice

                        We will not sell, share, or otherwise distribute your User Information to third parties except
                        as provided in this Privacy Policy. We may disclose your User Information to other scandodi
                        affiliates worldwide that agree to treat it by this Privacy Policy.

                        Service Providers and merchant Partners

                        From time to time, we may enter relationships with third parties who provide services to us (for
                        example, analytics companies, advertisers and ad agencies, data management, and storage services
                        or credit card processing services, sweepstakes or contest prize fulfillment). In those
                        circumstances, we disclose User Information so that such service providers may perform those
                        services. These service providers are only permitted to use your User Information to the extent
                        necessary to enable them to provide their services to us. They are required to follow our
                        express instructions and to comply with appropriate security measures to protect your User
                        Information.

                        We may need to provide your information to any merchants (“Partners”) that you have placed your
                        order using our Services. By submitting your personal data, you agree to this transfer, storing
                        or processing. We will take all steps reasonably necessary to ensure that your data is treated
                        securely and in accordance with this privacy policy.

                        We reserve the right, and you hereby expressly authorize us, to share User Information: (1) in
                        response to subpoenas, court orders, or legal process, or to establish, protect, or exercise our
                        legal rights or defend against legal claims; (2) if we believe it is necessary in order to
                        investigate, prevent, or take action regarding illegal activities, fraud, or situations
                        involving potential threats to the safety of any person or property; (3) if we believe it is
                        necessary to investigate, prevent, or take action regarding significant abuse of the Services
                        infrastructure or the Internet in general (such as voluminous spamming, denial of service
                        attacks, or attempts to compromise the security of information); (4) to protect and defend our
                        legal rights or property, our services or their users, or any other party, and to protect the
                        health and safety of our users or the general public; and (5) to our parent company,
                        subsidiaries, joint ventures, or other companies under common control with us (in which case we
                        will require such entities to honor this Privacy Policy).

                        In the event, we go through a business transition (such as a merger, acquisition by another
                        company, bankruptcy, or sale of all or a portion of our assets, including, without limitation,
                        during any due diligence process), your User Information will likely be among the assets
                        transferred. By providing your User Information, you agree that we may transfer such information
                        in those circumstances without your further consent. We will provide notice before your User
                        Information is transferred and becomes subject to a different Privacy Policy.

                        Opt-Out From Communications

                        We offer you the opportunity to manage your communications with us. Even after subscribing to
                        one or more newsletters and opting into one or more offers to receive marketing and promotional
                        communications from us or our third-party partners, users may elect to modify their preferences
                        by emailing us at info@scandodi.com to unsubscribe. Please be aware that if you wish to remove
                        yourself from a newsletter and other marketing emails from third parties that you consented to
                        through the Services, you must do so by contacting the relevant third-party. Even if you do
                        opt-out of marketing emails, we reserve the right to send you transactional and administrative
                        emails including those related to the Services, service announcements, notices of changes to
                        this Privacy Policy or other Services policies, and to contact you regarding any goods or
                        services you have ordered.

                        Modifying and Deleting Your Personal Data

                        You may access the information we hold about you. If you wish to exercise this right, please
                        contact us using the details in the Contact Us section below. To help protect your privacy and
                        maintain security, we will take steps to verify your identity before granting you access to the
                        information. If you would like to update, correct, modify or delete from our database any
                        Personal Data you previously submitted to us, please let us know by accessing and updating your
                        profile. If you delete certain information, you may not be able to order services in the future
                        without re-submitting such information. We will comply with your request as soon as reasonably
                        practicable. Also, please note that we will maintain Personal Data in our database whenever we
                        are required to do so by law.

                        Please note that we may need to retain certain information for recordkeeping purposes and/or to
                        complete any transactions that you began prior to requesting such change or deletion (for
                        example, when you enter a promotion, you may not be able to modify or delete the Personal Data
                        provided until after the completion of such development). We will retain your Personal Data for
                        the period necessary to fulfill the purposes outlined in this Policy unless a longer retention
                        period is required or permitted by law.

                        Exercising Data Protection Rights

                        In order to exercise your data protection rights, you may contact us as described in the footer
                        below. We take each request seriously. We will comply with your request to the extent required
                        by applicable law. We will not be able to respond to a request if we no longer hold your
                        Personal Data. If you feel that you have not received a satisfactory response from us, you may
                        consult with the data protection authority in your country.

                        For your protection, we may need to verify your identity before responding to your request, such
                        as verifying that the email address from which you send the request matches your email address
                        that we have on file. If we no longer need to process Personal Data about you in order to
                        provide our Services or our Sites, we will not maintain, acquire or process additional
                        information in order to identify you for the purpose of responding to your request.

                        Consent to Transfer

                        We are a global company and have databases in different countries. We may transfer your data to
                        one of our databases outside your country of domicile, potentially including countries that may
                        not require an adequate level of protection for your Personal Data compared with that provided
                        in your country. By using the Services or providing us with any information, you consent to this
                        transfer, processing, and storage of your information in a jurisdiction in which the privacy
                        laws may not be as comprehensive as those in the country where you reside or are a citizen. We
                        will take all steps reasonably necessary to ensure that your data is treated securely and by
                        this Privacy Policy.

                        Retention of Data

                        The Data is kept for the time necessary to provide the service requested by the User, or stated
                        by the purposes outlined in this document, and then you can always request that the Data
                        Controller suspend or remove the data. We collect and process Financial Account Information from
                        you using third party PCI-compliant service providers when you subscribe to the Service.

                        Children

                        The Services are intended for a general audience and are not intended for and may not be used by
                        children under the age of 16. We do not knowingly collect information from children under the
                        age of 16 and we do not target the Services to children under the age of 16. If a parent or
                        guardian becomes aware that his or her child has provided us with information without their
                        consent, he or she should contact us using the details in the Contact Us section below. We will
                        delete such information from our files as soon as reasonably practicable.

                        California Residents – Privacy Rights

                        As stated elsewhere in this Privacy Policy, we do not share Personal Data with third parties for
                        their direct marketing purposes, as defined by California Civil Code Section 1798.83, unless we
                        give you a choice (opt-in or opt-out) before sharing with those third parties.

                        If you are a California resident and you have questions about our practices concerning sharing
                        information with third parties for their direct marketing purposes and your ability to exercise
                        choice, please contact us at info@scandodi.com You must put the statement “Your California
                        Privacy Rights” in the body of your request, as well as your name, street address, city, state,
                        and zip code. In the body of your request, please provide enough information for us to determine
                        if this applies to you. Please note that we will not accept inquiries via the telephone, email,
                        or by facsimile, and we are not responsible for notices that are not labeled or sent properly,
                        or that do not have complete information.

                        Changes

                        We reserve the right to modify this Privacy Policy. Such changes may be posted on this and the
                        Last Updated date below will be updated. You are responsible for reviewing both the then-current
                        Privacy Policy and Terms of Service before using the Services.

                        Data Security

                        We have implemented commercially reasonable security measures to help protect your Personal Data
                        from loss, misuse, or unauthorized access or disclosure; unfortunately, however, no data
                        transmission over the Internet can be guaranteed to be 100% secure. As a result, while we strive
                        to protect your Personal Data, we cannot ensure its security. You use the Services and provide
                        us with information on your initiative and risk. If you have reason to believe that your
                        interaction with us is no longer secure (for example, if you feel that the security of any
                        account you might have with us has been compromised), please immediately notify us of the
                        problem by contacting us using the details in the Contact Us section below.

                        How to Contact Us

                        If you have any questions about this Privacy Policy, please feel free to contact us by email
                        at info@scandodi.com
                    </p>
                </div>
            </div>
        </div>
    </div>

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
