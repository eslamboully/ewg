{{--{{ dd($sliders) }}--}}
@extends('frontmodule::layouts.app')

@section('content')
    <!--Page Title-->
        <section class="page-title" style="background-image:url({{ url('images/config/'.$config['contact_cover']) }})">
            <div class="auto-container">
                <h1>تواصل معنا</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('index_front') }}">الرئيسية</a></li>
                    <li>تواصل معنا</li>
                </ul>
            </div>
        </section>
    <!--End Page Title-->


    <!--Contact Form Section-->
    <section class="contact-form-section">
        <div class="auto-container">
            <!--Title Box-->
            <div class="title-box">
                <div class="title">اكتب رسالة</div>
                <h2>{{ $config['helper_title_ar'] }}</h2>
                <div class="text">
                    {{ $config['helper_desc_ar'] }}
                </div>
            </div>

            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" id="send_form">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />

                    <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input type="text" id="name" name="name" value="" placeholder="اسمك" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input type="email" id="email" name="email" value="" placeholder="بريدك الالكترونى" required>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <input type="text" id="phone" name="phone" value="" placeholder="رقم الهاتف" required>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <textarea id="message" name="message" placeholder="رسالتك"></textarea>
                        </div>

                        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="theme-btn message-btn customer_btn" style="color: white">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Contact Form-->

        </div>
    </section>
    <!--End Contact Form Section-->

    <!--Contact Page Info Section-->
    <div class="contact-page-info-section">

        <div class="auto-container">
            <div class="row clearfix">

                <!--Info Column-->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">تواصل معنا</div>
                            <h2>ابقى على تواصل</h2>
                        </div>
                        <div class="text">
                            {{ $config['helper_many_ar'] }}
                        </div>
                        <ul class="list-style-two">
                            <li>
                                <span class="icon fa fa-phone"></span>
                                اتصل بنا {{ $config['phone'] }}
                            </li>
                            <li>
                                <span class="icon fa fa-envelope"></span>
                                {{ $config['email'] }}
                            </li>
                            <li>
                                <span class="icon fa fa-map-marker"></span>
                                {{ $config['work_hour_ar'] }}</li>
                            <li>
                                <span class="icon fa fa-clock-o"></span>
                                {!! $config['address_ar'] !!}
                            </li>
                        </ul>
                        <ul class="social-icon-two">
                            <li class="follow">تابعنا : </li>
                            <li>
                                <a href="{{ $config['fb_link'] }}">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $config['tw_link'] }}">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('https://wa.me/'.$config['whatsapp']) }}">
                                    <span class="fa fa-whatsapp"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $config['youtube'] }}">
                                    <span class="fa fa-youtube"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Map Column-->
                <div class="map-column col-lg-6 col-md-12 col-sm-12 mapouter">
                    <div class="gmap_canvas">
                        <iframe style="position:relative; top:-60px; border:none;" src="https://www.google.com/maps/d/u/0/embed?mid=1DcyvJoQARcnjtgM47G-eCsVY32Xmzk03&ie=UTF8&t=&z=14&iwloc=B&output=embed" width="570" height="520" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" ></iframe>    <!--Sponsors Section-->

                        <a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">page wordpress embedgooglemap.net</a>
                    </div>
                    <style>
                        .mapouter{position:relative;text-align:right;height:520px;width:570px;}
                        .gmap_canvas {overflow:hidden;background:none!important;height:520px;width:570px;}
                    </style>
                </div>

            </div>
        </div>
    </div>

    <a href="{{ url('https://wa.me/'.$config['whatsapp']) }}" class="scroll-to-top scroll-to-target" data-target="html" style="display: block;">
        <span class="fa fa-whatsapp"></span>
    </a>

    <!-- End Contact Page Info Section -->
    @include('commonmodule::includes.swal')
@endsection
@push('js')
    <script>
        $('.customer_btn').on('click',function (e) {
            e.preventDefault();
            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var message = $('#message').val();
            var _token = $('#_token').val();
            $.ajax({
                'method':'post',
                'data':{_token:_token,name:name,phone:phone,email:email,message:message},
                'url':'{{ route('send_message') }}',
                success:function (data) {
                    $('#send_form').trigger("reset");
                    swal("{{__('commonmodule::swal.good')}}", "{{__('commonmodule::swal.send')}}", "success", { button: "{{__('commonmodule::swal.btn')}}", });

                },
                //error: function(XMLHttpRequest, textStatus, errorThrown){
                //    alert("Status: " + textStatus); alert("Error: " + errorThrown);
                //}
            });
        })
    </script>
@endpush
@push('css')
    <style>
        .modal {
            display:    none;
            position:   fixed;
            z-index:    1000;
            top:        0;
            left:       0;
            height:     100%;
            width:      100%;
            background: rgba( 255, 255, 255, .8 )
            url('http://i.stack.imgur.com/FhHRx.gif')
            50% 50%
            no-repeat;
        }

        /* When the body has the loading class, we turn
           the scrollbar off with overflow:hidden */
        body.loading .modal {
            overflow: hidden;
        }

        /* Anytime the body has the loading class, our
           modal element will be visible */
        body.loading .modal {
            display: block;
        }
    </style>
@endpush
