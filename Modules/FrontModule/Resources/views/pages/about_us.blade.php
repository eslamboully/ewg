{{--{{ dd($sliders) }}--}}
@extends('frontmodule::layouts.app')

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('images/config/'.$config['about_us_cover']) }})">
        <div class="auto-container">
            <h1>من نحن</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index_front') }}">الرئيسية</a></li>
                <li>من نحن</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">من نحن</div>
                            <h2>{{ $config['first_title_ar'] }}</h2>
                        </div>
                        <div class="bold-text">{{ $config['first_desc_ar'] }}</div>
                        <div class="text">
                            {{ $config['about_ar'] }}
                        </div>
                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img style="width: 470px;height: 470px" src="{{ url('images/config/'.$config['about']) }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Section-->

    <!--Video Section-->
    <section class="video-section" style="background-image:url({{ url('assets/front/images/background/05.jpg') }})">
        <div class="auto-container">
            <a href="{{ $config['video'] }}" class="lightbox-image play-icon">
                <span class="flaticon-play-button-5"></span>
            </a>
            <div class="title">وضعت بعناية</div>
            <h2>{{ $config['video_title_ar'] }}</h2>
            <div class="text">
                {{ $config['video_desc_ar'] }}
            </div>
        </div>
    </section>
    <!--End Video Section-->

    <!--Reason Section-->
    <section class="reason-section">
        <div class="auto-container">
            <div class="row clearfix">


                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="image">
                        <img style="width: 370px;height:480px" src="{{ url('images/config/'.$config['why_us_photo']) }}" alt="" />
                    </div>
                </div>

                <!--Content Column-->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">ما السبب؟</div>
                            <h2>{{ $config['why_us_title_ar'] }}</h2>
                        </div>
                        <div class="text">
                            {!! $config['why_us_desc_ar'] !!}
                        </div>
                        <div class="row clearfix">
                            @foreach($why_us as $row)
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <ul class="reason-list">
                                    <li>
                                        <img style="width: 50px;height: 50px" src="{{ url('images/why_us/'.$row->photo) }}">
                                         {{ $row->title }}
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Reason Section-->

    <!--About Section-->
{{--    <section class="about-section-two">--}}
{{--        <div class="auto-container">--}}
{{--            <div class="row clearfix">--}}

                <!--Content Column-->
{{--                <div class="content-column col-lg-6 col-md-12 col-sm-12">--}}
{{--                    <div class="inner-column">--}}
{{--                        <div class="sec-title">--}}
{{--                            <div class="title">من نحن</div>--}}
{{--                            <h2>هنالك العديد من الأنواع المتوفرة لنصوص لوريم</h2>--}}
{{--                        </div>--}}
{{--                        <div class="text">--}}
{{--                            هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات.--}}
{{--                        </div>--}}

{{--                        <div class="row clearfix">--}}
{{--                            <div class="col-lg-6 col-md-6 col-sm-12">--}}
{{--                                <ul class="reason-list-two">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon fa fa-briefcase"></span>--}}
{{--                                        خبراء ومحترفين--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-sm-12">--}}
{{--                                <ul class="reason-list-two">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon flaticon-diamond-1"></span>--}}
{{--                                        النهج المهني--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-sm-12">--}}
{{--                                <ul class="reason-list-two">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon fa fa-bank"></span>--}}
{{--                                        جودة عالية العمل--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 col-md-6 col-sm-12">--}}
{{--                                <ul class="reason-list-two">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon flaticon-victory-sign"></span>--}}
{{--                                        ضمان الرضا--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

                <!--Blocks Column-->
{{--                <div class="blocks-column col-lg-6 col-md-12 col-sm-12">--}}
{{--                    <div class="inner-column">--}}

{{--                        <div class="row clearfix">--}}

{{--                            <!--About Block-->--}}
{{--                            <div class="about-block col-lg-6 col-md-6 col-sm-12">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="image">--}}
{{--                                        <a href="about.html"><img src="{{ url('assets/front/images/services/02.jpg') }}" alt="" /></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="lower-content">--}}
{{--                                        <h3><a href="about.html">اعمال بناء</a></h3>--}}
{{--                                        <div class="text">--}}
{{--                                            هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية .--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!--About Block-->--}}
{{--                            <div class="about-block col-lg-6 col-md-6 col-sm-12">--}}
{{--                                <div class="inner-box">--}}
{{--                                    <div class="image">--}}
{{--                                        <a href="about.html"><img src="{{ url('assets/front/images/services/03.jpg') }}" alt="" /></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="lower-content">--}}
{{--                                        <h3><a href="about.html">تجديد</a></h3>--}}
{{--                                        <div class="text">--}}
{{--                                            هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية .--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--End About Section-->

    <!--Fluid Section One-->
{{--    <section class="fluid-section-one">--}}
{{--        <div class="outer-container clearfix">--}}

{{--            <!--Image Column-->--}}
{{--            <div class="image-column" style="background-image:url({{ url('assets/front/images/background/04.jpg') }});">--}}
{{--                <figure class="image-box">--}}
{{--                    <img src="{{ url('assets/front/images/background/04.jpg') }}" alt="">--}}
{{--                </figure>--}}
{{--            </div>--}}

{{--            <!--Content Column-->--}}
{{--            <div class="content-column">--}}
{{--                <div class="inner-column">--}}
{{--                    <div class="title">نحن جاهزون للمساعدة</div>--}}
{{--                    <h2>{{ $config['helper_title_ar'] }}</h2>--}}
{{--                    <div class="text">--}}
{{--                        {{ $config['helper_desc_ar'] }}--}}
{{--                    </div>--}}

{{--                    <!-- Consult Form -->--}}
{{--                    <div class="consult-form">--}}

{{--                        <!--Contact Form-->--}}
{{--                        <form method="post" action="####">--}}
{{--                            <div class="row clearfix">--}}

{{--                                <div class="column col-lg-6 col-md-6 col-sm-12">--}}

{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" name="name" placeholder="الأسم" required>--}}
{{--                                    </div>--}}

{{--                                    <!--Form Group-->--}}
{{--                                    <div class="form-group">--}}
{{--                                        <select class="custom-select-box">--}}
{{--                                            <option>فئة المشروعات</option>--}}
{{--                                            <option>الفئة الأولى</option>--}}
{{--                                            <option>الفئة الثانية</option>--}}
{{--                                            <option>الفئة الثالثة</option>--}}
{{--                                            <option>الفئة الرابعة</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" name="text" placeholder="تقدير الميزانية" required>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="column col-lg-6 col-md-6 col-sm-12">--}}

{{--                                    <div class="form-group">--}}
{{--                                        <input type="email" name="email" placeholder="البريد الالكترونى" required>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group">--}}
{{--                                        <textarea name="message" placeholder="الرسالة ( إن وجد )"></textarea>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">--}}
{{--                                    <button class="theme-btn btn-style-three" type="submit" name="submit-form">تأكيد الطلب</button>--}}
{{--                                    <div class="btn-detail">--}}
{{--                                        <span class="fa fa-arrow-circle-right"></span> سيتم الحفاظ على التفاصيل الخاصة بك في سرية--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </form>--}}

{{--                    </div>--}}
{{--                    <!--End Consult Form -->--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
    <!--End Fluid Section One-->


@endsection
