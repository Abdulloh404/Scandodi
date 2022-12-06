@extends('header.index')
@section('main-content')
    @include('components.header')
    @include('components.navbar')

    @php $template = json_decode(get_settings('frontend_template')); @endphp

    <div class="container-fluid p-0 mb-4">
        <div class="bg-blog text-white d-flex justify-content-center align-items-center text-center">
            <h1 class="wow fadeInUp" data-wow-delay="0.2s">Our Blog<br>
                Read our tips and tricks for the best burgers
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="card shadow-sm bg-body rounded-3 border-0" style="width: 100%;">
                    <img src="uploads/img-price-1.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text limit-line">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                        <a href="/blog-detail" class="text-info">อ่านเพิ่มเติม <i class="fas fa-chevron-right"></i></a>
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
