@extends('header.index')
@section('main-content')
    @include('components.header')
    @include('components.navbar')

    @php $template = json_decode(get_settings('frontend_template')); @endphp

    <div class="container mt-5 pt-5">
        <div class="row blog-content">
            <div class="col-xl-8 col-lg-8 col-md-8 col-12" id="blog1">
                <div class="head-blog">
                    <h4>ขั้นตอนและเอกสารสำหรับการนำเข้าสินค้าร้านขายของชำ</h4>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="head-blog-whoPost">
                            <div class="user">
                                <img src="./assets/img/united-kingdom (1).png" alt="">
                                <span>จระเข้มันหลั่งน้ำตาเวลากินเหยื่อ เป็นธรรมชาติเหลือเชื่อ</span>
                            </div>
                            <div class="post-date">
                                <span class="text-muted">13 May 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tags">
                    <a href="#">#123</a>
                    <a href="#">#12asdd3</a>
                    <a href="#">#12aaaaaaaaaaa3</a>
                </div>
                <div class="img-blogHead">
                    <img src="./assets/img/img-content6-1.png" alt="">
                </div>
                <div class="blog-detail">
                    <p>
                        <b>
                            เจ้าของธุรกิจร้านชำหลายเจ้าเริ่มนำเข้าสินค้าเข้ามาขายจากต่างประเทศ
                            เพื่อสร้างเอกลักษณ์และแตกต่าง
                            ของร้าน แต่หากไม่ได้ทำขั้นตอนให้ถูกต้อง
                            ก็อาจทำให้ต้นทุนสินค้าที่นำเข้ามาเอามาใช้เป็นค่าใช้จ่ายของธุรกิจไม่ได้
                            มาทำความเข้าใจขั้นตอนการนำเข้าสินค้าและเอกสารที่ต้องนำมาบันทึกบัญชีได้ในบทความนี้
                        </b>
                    </p>
                    <p>ธุรกิจร้านขายของชำเป็นธุรกิจที่อยู่คู่กับชีวิตเรามาตั้งแต่จำความได้ จุดเด่นของธุรกิจร้านขายของชำ
                        คือ มีสินค้าที่หลากหลาย บางร้านมีสินค้าตั้งแต่ไม้จิ้มฟันยันเรือรบ
                        (โอย..เรือรบนี่ก็เกินเบอร์ไปหน่อย ฮ่าๆ) ซึ่งทำให้มัดใจลูกค้ามาจากรุ่นสู่รุ่น
                        แม้ว่าในละแวกบ้านมีซูเปอร์มาร์เก็ตมาเปิดมากมาย แต่ถ้าร้านชำร้านไหนเลือกของเข้าร้านเก่งๆ
                        มีสินค้าใหม่ๆ เพิ่มช่องทางการขายใหม่ๆ และแตกต่างจากท้องตลาดมากเท่าไร
                        ร้านนั้นก็ยังครองใจลูกค้าได้อยู่ดี

                        <br>

                        แล้วเจ้าของร้านชำจะหาสินค้าแปลกๆ ใหม่ๆ มาจากไหน
                        นี่เป็นอีกเรื่องที่เจ้าของร้านชำต้องทำการบ้านอย่างหนัก
                        ด้วยลำพังการซื้อของจากในเมืองไทยมาขายให้คนไทยด้วยกันเองอาจจะไม่ดึงดูดลูกค้าอีกต่อไปแล้ว ฉะนั้น
                        เจ้าของร้านชำหลายเจ้าก็อยากจะนำเข้าสินค้าจากต่างประเทศ แต่ติดปัญหาตรงที่ว่า
                        เราจะเริ่มต้นนำเข้าสินค้ายังไงดีนะ

                        <br>

                        ในวันนี้ถ้าใครกำลังเจอปัญหานี้อยู่ เดี๋ยว Axcount
                        จะพาไปแนะนำขั้นตอนการนำเข้าสินค้าและเอกสารที่เกี่ยวข้องกันค่ะ
                    </p>
                </div>
            </div>
            <!--<div class="col-xl-8 col-lg-8 col-md-12 col-12" id="blog2" style="display: none;">
                    <div class="head-blog">
                        <h4>ขั้นตอนและเอกสารสำหรับการนำเข้าสินค้าร้านขายของชำ</h4>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                            <div class="head-blog-whoPost">
                                <div class="user">
                                    <img src="./assets/img/pun1.jpg" alt="">
                                    <span>จระเข้มันหลั่งน้ำตาเวลากินเหยื่อ เป็นธรรมชาติเหลือเชื่อ</span>
                                </div>
                                <div class="post-date">
                                    <span class="text-muted">13 May 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tags">
                        <a href="#">#123</a>
                        <a href="#">#12asdd3</a>
                        <a href="#">#12aaaaaaaaaaa3</a>
                    </div>
                    <div class="img-blogHead">
                        <img src="./assets/img/image40.png" alt="">
                    </div>
                    <div class="blog-detail">
                        <p>
                            <b>
                                เจ้าของธุรกิจร้านชำหลายเจ้าเริ่มนำเข้าสินค้าเข้ามาขายจากต่างประเทศ เพื่อสร้างเอกลักษณ์และแตกต่าง
                                ของร้าน แต่หากไม่ได้ทำขั้นตอนให้ถูกต้อง ก็อาจทำให้ต้นทุนสินค้าที่นำเข้ามาเอามาใช้เป็นค่าใช้จ่ายของธุรกิจไม่ได้ มาทำความเข้าใจขั้นตอนการนำเข้าสินค้าและเอกสารที่ต้องนำมาบันทึกบัญชีได้ในบทความนี้
                            </b>
                        </p>
                        <p>ธุรกิจร้านขายของชำเป็นธุรกิจที่อยู่คู่กับชีวิตเรามาตั้งแต่จำความได้ จุดเด่นของธุรกิจร้านขายของชำ คือ มีสินค้าที่หลากหลาย บางร้านมีสินค้าตั้งแต่ไม้จิ้มฟันยันเรือรบ (โอย..เรือรบนี่ก็เกินเบอร์ไปหน่อย ฮ่าๆ) ซึ่งทำให้มัดใจลูกค้ามาจากรุ่นสู่รุ่น แม้ว่าในละแวกบ้านมีซูเปอร์มาร์เก็ตมาเปิดมากมาย แต่ถ้าร้านชำร้านไหนเลือกของเข้าร้านเก่งๆ มีสินค้าใหม่ๆ เพิ่มช่องทางการขายใหม่ๆ และแตกต่างจากท้องตลาดมากเท่าไร ร้านนั้นก็ยังครองใจลูกค้าได้อยู่ดี

                            <br>

                            แล้วเจ้าของร้านชำจะหาสินค้าแปลกๆ ใหม่ๆ มาจากไหน นี่เป็นอีกเรื่องที่เจ้าของร้านชำต้องทำการบ้านอย่างหนัก ด้วยลำพังการซื้อของจากในเมืองไทยมาขายให้คนไทยด้วยกันเองอาจจะไม่ดึงดูดลูกค้าอีกต่อไปแล้ว ฉะนั้น เจ้าของร้านชำหลายเจ้าก็อยากจะนำเข้าสินค้าจากต่างประเทศ แต่ติดปัญหาตรงที่ว่า เราจะเริ่มต้นนำเข้าสินค้ายังไงดีนะ

                            <br>

                            ในวันนี้ถ้าใครกำลังเจอปัญหานี้อยู่ เดี๋ยว Axcount จะพาไปแนะนำขั้นตอนการนำเข้าสินค้าและเอกสารที่เกี่ยวข้องกันค่ะ
                        </p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-12" id="blog3" style="display: none;">
                    <div class="head-blog">
                        <h4>ขั้นตอนและเอกสารสำหรับการนำเข้าสินค้าร้านขายของชำ</h4>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                            <div class="head-blog-whoPost">
                                <div class="user">
                                    <img src="./assets/img/nara5.jpg" alt="">
                                    <span>จระเข้มันหลั่งน้ำตาเวลากินเหยื่อ เป็นธรรมชาติเหลือเชื่อ</span>
                                </div>
                                <div class="post-date">
                                    <span class="text-muted">13 May 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tags">
                        <a href="#">#123</a>
                        <a href="#">#12asdd3</a>
                        <a href="#">#12aaaaaaaaaaa3</a>
                    </div>
                    <div class="img-blogHead">
                        <img src="./assets/img/image39.png" alt="">
                    </div>
                    <div class="blog-detail">
                        <p>
                            <b>
                                เจ้าของธุรกิจร้านชำหลายเจ้าเริ่มนำเข้าสินค้าเข้ามาขายจากต่างประเทศ เพื่อสร้างเอกลักษณ์และแตกต่าง
                                ของร้าน แต่หากไม่ได้ทำขั้นตอนให้ถูกต้อง ก็อาจทำให้ต้นทุนสินค้าที่นำเข้ามาเอามาใช้เป็นค่าใช้จ่ายของธุรกิจไม่ได้ มาทำความเข้าใจขั้นตอนการนำเข้าสินค้าและเอกสารที่ต้องนำมาบันทึกบัญชีได้ในบทความนี้
                            </b>
                        </p>
                        <p>ธุรกิจร้านขายของชำเป็นธุรกิจที่อยู่คู่กับชีวิตเรามาตั้งแต่จำความได้ จุดเด่นของธุรกิจร้านขายของชำ คือ มีสินค้าที่หลากหลาย บางร้านมีสินค้าตั้งแต่ไม้จิ้มฟันยันเรือรบ (โอย..เรือรบนี่ก็เกินเบอร์ไปหน่อย ฮ่าๆ) ซึ่งทำให้มัดใจลูกค้ามาจากรุ่นสู่รุ่น แม้ว่าในละแวกบ้านมีซูเปอร์มาร์เก็ตมาเปิดมากมาย แต่ถ้าร้านชำร้านไหนเลือกของเข้าร้านเก่งๆ มีสินค้าใหม่ๆ เพิ่มช่องทางการขายใหม่ๆ และแตกต่างจากท้องตลาดมากเท่าไร ร้านนั้นก็ยังครองใจลูกค้าได้อยู่ดี

                            <br>

                            แล้วเจ้าของร้านชำจะหาสินค้าแปลกๆ ใหม่ๆ มาจากไหน นี่เป็นอีกเรื่องที่เจ้าของร้านชำต้องทำการบ้านอย่างหนัก ด้วยลำพังการซื้อของจากในเมืองไทยมาขายให้คนไทยด้วยกันเองอาจจะไม่ดึงดูดลูกค้าอีกต่อไปแล้ว ฉะนั้น เจ้าของร้านชำหลายเจ้าก็อยากจะนำเข้าสินค้าจากต่างประเทศ แต่ติดปัญหาตรงที่ว่า เราจะเริ่มต้นนำเข้าสินค้ายังไงดีนะ

                            <br>

                            ในวันนี้ถ้าใครกำลังเจอปัญหานี้อยู่ เดี๋ยว Axcount จะพาไปแนะนำขั้นตอนการนำเข้าสินค้าและเอกสารที่เกี่ยวข้องกันค่ะ
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                    <h4>หัวข้อยอดนิยม</h4>
                    <hr class="mt-2 mb-2">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-4 col-6">
                            <div class="hot-blog" id="btn-blog1">
                                <img src="./assets/img/img-content6-1.png" alt="">
                                <span class="text-muted">22 September 2022</span>
                                <p class="limit-line">จัดการสต็อกและต้นทุนร้านขายของชำด้วยรายงานสินค้าคงเหลือ</p>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-4 col-6">
                            <div class="hot-blog" id="btn-blog2">
                                <img src="./assets/img/image40.png" alt="">
                                <span class="text-muted">23 September 2022</span>
                                <p class="limit-line">ขั้นตอนและเอกสารสำหรับการนำเข้าสินค้าร้านขายของชำ</p>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-4 col-6">
                            <div class="hot-blog" id="btn-blog3">
                                <img src="./assets/img/image39.png" alt="">
                                <span class="text-muted">24 September 2022</span>
                                <p class="limit-line">ตั้งราคาสินค้าร้านขายของชำอย่างไร ให้ได้กำไรเยอะ</p>
                            </div>
                        </div>
                    </div>
                </div>-->
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="row">
                    <h4>หัวข้อยอดนิยม</h4>
                    <hr class="mt-2 mb-2">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="hot-blog" id="btn-blog1">
                            <img src="uploads/img-price-1.png" alt="#">
                            <span class="text-muted">22 September 2022</span>
                            <p class="limit-line">จัดการสต็อกและต้นทุนร้านขายของชำด้วยรายงานสินค้าคงเหลือ</p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="hot-blog" id="btn-blog2">
                            <img src="uploads/img-price-2.png" alt="">
                            <span class="text-muted">23 September 2022</span>
                            <p class="limit-line">ขั้นตอนและเอกสารสำหรับการนำเข้าสินค้าร้านขายของชำ</p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="hot-blog" id="btn-blog3">
                            <img src="uploads/img-price-3.png" alt="">
                            <span class="text-muted">24 September 2022</span>
                            <p class="limit-line">ตั้งราคาสินค้าร้านขายของชำอย่างไร ให้ได้กำไรเยอะ</p>
                        </div>
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
