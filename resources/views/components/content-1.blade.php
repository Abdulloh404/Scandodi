<link rel="stylesheet" href="../front/css/content-1.css">

<div class="container-fluid">
    <div class="container p-xl-5 p-lg-5 p-md-5 p-4 shadow-lg mt-xl-0 mt-lg-0 mt-md-0 mt-5 mb-5 bg-body wow fadeInUp" data-wow-delay="0.2s">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col my-xl-auto my-lg-auto mb-md-5 mb-3 wow fadeIn" data-wow-delay="0.8s">
                <div class="mb-3">
                    <h1><b>Some numbers that matter</b></h1>
                </div>
                <div class="mb-5">
                    <p>There is a reason why we are the best in the market.</p>
                </div>
                <div class="row g-5">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-globe-asia fa-2x pe-4"></i>
                            <div class="d-flex flex-column">
                                <span class="count h3"><b>70</b></span>
                                <span>Countries</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-tablet-alt fa-2x pe-4"></i>
                            <div class="d-flex flex-column">
                                <span class="h3"><b><span class="count">50</span>M</b></span>
                                <span>Devices</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-language fa-2x pe-4"></i>
                            <div class="d-flex flex-column">
                                <span class="count h3"><b>44</b></span>
                                <span>Languages</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                        <div class="d-flex align-items-center">
                            <i class="far fa-newspaper fa-2x pe-4"></i>
                            <div class="d-flex flex-column">
                                <span class="h3"><b>+<span class="count">5</span>M</b></span>
                                <span>Orders</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-xl-6 col-lg-6 col-md-12 col-12 my-auto">
                                            <div class="wow fadeIn" data-wow-delay="0.6s">
                                                <img src="uploads\img-bg-about.jpg" alt="" width="100%">
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $('.count').each(function() {
                        $(this).prop('Counter', 0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function(now) {
                                $(this).text(Math.ceil(now));
                            }
                        });
                    });
                </script>
