<link rel="stylesheet" href="../front/css/footer.css">
<footer>
    <div class="container-fluid bg-color py-3">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-12 d-flex justify-content-center align-items-center mb-2">
                <div class="img-container">
                    <img src="../front/images/logo.png" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-5 ms-md-0 ms-auto">
                <div class="second-container text-xl-start text-lg-start text-md-start text-center">
                    <h5>
                        PRODUCT
                    </h5>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="/about">ABOUT</a></li>
                        <li><a href="/blog">BLOG</a></li>
                        <li><a href="/price">PRICING</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-5 me-md-0 me-auto">
                <div class="third-container text-xl-start text-lg-start text-md-start text-center">
                    <h5>
                        COMPANY
                    </h5>
                    <ul>
                        <li><a href="/contact">CONTACT</a></li>
                        <li><a href="/policy">PRIVACY & TERMS</a></li>
                        <li><a href="/login">LOGIN</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="fourth-container text-center">
                    <h6>
                        Stay informed about special offers
                    </h6>
                    <span>
                        Subscribe to the newsleter
                    </span>
                    <form action="{{ route('newsleter.insert') }}" method="POST" enctype="multipart/form-data"
                        class="my-4">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email"
                                required>
                            <button type="submit" class="form-control-submit btn btn-outline-light">Send</button>
                            {{-- Sweet alert submit --}}
                            @include('sweetalert::alert')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
