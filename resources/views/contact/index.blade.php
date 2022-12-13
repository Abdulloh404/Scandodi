@extends('header.index')
@section('main-content')
    @include('components.header')
    @include('components.navbar')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <!--Pattern HTML-->
                <div id="pattern" class="pattern">
                    <div class="map">
                        <a href="https://maps.google.com/maps?q=Pittsburgh,+PA&hl=en&sll=40.697488,-73.979681&sspn=0.667391,1.447449&oq=Pittsburgh&hnear=Pittsburgh,+Allegheny,+Pennsylvania&t=m&z=12"
                            class="btn map-link"></a>
                    </div>
                </div>
                <!--End Pattern HTML-->
            </div>
        </div>
        <br>
        <div class="row pt-xl-0 pt-lg-0 pt-md-0 pt-5 mt-xl-0 mt-lg-0 mt-md-0 mt-5">
            <div class="col-xl-2 col-lg-2 col-md-12 col-12"></div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-12 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center text-dark">ติดต่อเรา</h1>

                <form action="{{ route('insert.comment') }}" method="POST" enctype="multipart/form-data"
                    class="contact-form form-control-submit">
                    <div class="row">
                        @csrf
                        <div class=" from-group  col-xl-6 col-lg-6 col-md-6 col-12" required>
                            <input type="text" name="name" placeholder="Name">
                        </div>
                        <div class=" from-group  col-xl-6 col-lg-6 col-md-6 col-12">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <input type="text" name="company" placeholder="Company" required>
                        </div>
                        <div class=" from-group  col-xl-6 col-lg-6 col-md-6 col-12" required>
                            <input type="tel" name="phone" placeholder="Tell" pattern="[0]{1}[0-9]{9}">
                        </div>
                        <div class=" from-group  col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class=" from-group  d-grid">
                                <input type="text" placeholder="Business" name="Business">
                                <textarea name="Comment" id="" cols="5" rows="10" class="my-3" placeholder="Comment" required></textarea>
                            </div>
                            <div class="d-flex justify-content-center mt-3 mb-5">
                                <button class="btn-send" type="submit">Sent</button>
                                {{-- Sweet alert submit --}}
                                @include('sweetalert::alert')
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12 col-12"></div>
        </div>
    </div>
    @include('components.footer')
@endsection
@section('js')
