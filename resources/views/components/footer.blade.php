<link rel="stylesheet" href="../front/css/footer.css">
<footer>
    <div class="container-fluid bg-color py-3">
        <div class="row">
            <div class="col-lg-4 col-12 d-flex justify-content-center align-items-center">
                <div class="img-container">
                    <img src="../front/images/logo.png" alt="">
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="second-container">
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
            <div class="col-lg-2 col-md-3 col-6">
                <div class="third-container">
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
                    <form action="{{ route('alert') }}" method="POST" enctype="multipart/form-data" class="my-4">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                            <button type="submit" class="form-control-submit btn btn-outline-light">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
