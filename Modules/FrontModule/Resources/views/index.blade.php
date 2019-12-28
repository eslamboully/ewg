@extends('frontmodule::layouts.app')

@section('content')
    <!--Main Slider-->
    @include('frontmodule::pages.slide')
    <!--End Main Slider-->
    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">{{ $config['first_title_ar'] }}</div>
                            <h2>{{ $config['first_desc_ar'] }}</h2>
                        </div>
{{--                        <div class="bold-text">36 سنة من الخبرة</div>--}}
                        <div class="text">
                            {{ $config['about_ar'] }}
                        </div>
                        <a href="{{ route('about_us') }}" class="theme-btn btn-style-one" style="color: white">رؤية المزيد</a>
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

    <!--Fun Facts Section-->
    <div class="fact-counter-section" style="background-image:url({{ url('assets/front/images/main-slider/02.jpg') }});">
        <div class="fact-counter">
            <div class="auto-container">
                <div class="row clearfix">

                    @foreach($acheives as $acheive)
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="count-outer count-box">
                                <img style="width:70px;height: 70px" src="{{ url('images/acheives/'.$acheive->icon) }}">
                                <br/>
                                <br/>
                                <span class="count-text" data-speed="3500" data-stop="{{ $acheive->number }}">0</span>
                                <h4 class="counter-title">{{ $acheive->title }}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--End Fun Facts Section-->

    <!--Services Section Two-->
    <section class="services-section-two">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="title">{{ $config['second_title_ar'] }}</div>
                <h2>{{ $config['second_desc_ar'] }}</h2>
                <div class="seperater"></div>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">

                @foreach($services as $service)
                    <div class="services-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ url('images/service/'.$service->photo) }}" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <div class="text">
                                            {{ $service->title }}
                                            {!! substr($service->description,0,120) !!}
                                        </div>
                                        <a href="{{ route('single_service',str_replace(' ','-',$service->title)) }}" class="read-more">
                                            رؤية المزيد
                                            <span class="fa fa-angle-double-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="icon-box">
                                <span class="icon flaticon-sketch"></span>
                            </div>
                            <h3><a href="{{ route('single_service',str_replace(' ','-',$service->title)) }}">{{ $service->title }}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Services Section Two-->

    <!--Project Section-->
    <section class="project-section" style="background-image:url({{ url('assets/front/images/background/03.jpg') }})">
        <div class="auto-container">

            <!--Porfolio Tabs-->
            <div class="project-tab">
                <!--Sec Title-->
                <div class="sec-title light">
                    <div class="clearfix">
                        <div class="pull-left">
                            <div class="title">{{ $config['third_title_ar'] }}</div>
                            <h2>{{ $config['third_desc_ar'] }}</h2>
                        </div>
                        <div class="tab-btns-box pull-right">
                            <!--Tabs Header-->
                            <div class="tabs-header">
                                <ul class="product-tab-btns clearfix">
                                    <li class="p-tab-btn active-btn" data-tab="#p-tab-1">الكل</li>
                                    @foreach($projectsCategories as $index=>$row)
{{--                                    <li class="p-tab-btn project_category" data-num="{{ $index+2 }}" data-id="{{ $row->id }}" data-tab="#p-tab-2">{{ $row->title }}</li>--}}
                                    <li class="p-tab-btn" data-href="{{ route('projects_cat',$row->id) }}" onclick="window.open(this.getAttribute('data-href'),'_self'); return false;">{{ $row->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Tabs Content-->
                <div class="p-tabs-content">

                    <!--Portfolio Tab / Active Tab-->
                    <div class="p-tab active-tab" id="p-tab-1">
                        <div class="project-carousel owl-theme owl-carousel">

                            @foreach($all_projects as $row)
                                <div class="project-block">
                                    <div class="inner-box">
                                    <div class="image">
                                        <img style="width: 270px;height: 379px" src="{{ url('images/project/'.$row->photo) }}" alt="" />
                                        <div class="overlay-box">
                                            <div class="content">
                                                <h3>
                                                    {{ $row->title }}
                                                </h3>
                                                <div class="see-project">
                                                    رؤية المشروع
                                                    <span class="fa fa-angle-right"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Overlay Two-->
                                        <div class="overlay-two">
                                            <div class="overlay-two-inner">
                                                <div class="overlay-two-content">
                                                    <h2>
                                                        <a href="{{ route('single_project',str_replace(' ','-',$row->title)) }}">
                                                            {{ $row->title }}
                                                        </a>
                                                    </h2>
                                                    <div class="text">
                                                        {!! strip_tags(str_limit($row->short_desc,100)) !!}
                                                    </div>
                                                    <a href="{{ route('single_project',str_replace(' ','-',$row->title)) }}" class="see-more" style="color: red">رؤية المشروع <span class="fa fa-angle-left"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

{{--                    @foreach($projectsCategories as $index=>$indo)--}}
{{--                            <div class="p-tab" id="p-tab-{{ $index+2 }}">--}}
{{--                                <div class="project-carousel owl-theme owl-carousel">--}}
{{--                                    @foreach($indo->portfolio as $row)--}}
{{--                                        <!--Project Block-->--}}
{{--                                        <div class="project-block">--}}
{{--                                        <div class="inner-box">--}}
{{--                                            <div class="image">--}}
{{--                                                <img style="width: 270px;height: 379px" src="{{ url('images/project/'.$row->photo) }}" alt="" />--}}
{{--                                                <div class="overlay-box">--}}
{{--                                                    <div class="content">--}}
{{--                                                        <h3>--}}
{{--                                                            {{ $row->title }}--}}
{{--                                                        </h3>--}}
{{--                                                        <div class="see-project">--}}
{{--                                                            رؤية المشروع--}}
{{--                                                            <span class="fa fa-angle-right"></span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--Overlay Two-->--}}
{{--                                                <div class="overlay-two">--}}
{{--                                                    <div class="overlay-two-inner">--}}
{{--                                                        <div class="overlay-two-content">--}}
{{--                                                            <h2>--}}
{{--                                                                <a href="{{ route('single_project',str_replace(' ','-',$row->title)) }}">--}}
{{--                                                                    {{ $row->title }}--}}
{{--                                                                </a>--}}
{{--                                                            </h2>--}}
{{--                                                            <div class="text">--}}
{{--                                                                {!! substr($row->description,0,100) !!}--}}
{{--                                                            </div>--}}
{{--                                                            <a href="{{ route('single_project',str_replace(' ','-',$row->title)) }}" class="see-more">رؤية المشروع <span class="fa fa-angle-right"></span></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                    @endforeach--}}


{{--                            <div class="p-tab" id="p-tab-2">--}}
{{--                                <div class="project_push">--}}

{{--                                </div>--}}


{{--                            </div>--}}

                </div>
            </div>
        </div>
    </section>

    <!--Subscribe Section Two-->
    <section class="subscribe-section-two">
        <div class="auto-container">
            <div class="inner-container">
                <h2><span>الاشتراك</span> النشرة الإخبارية</h2>
                <!--Newsletter Form-->
                <div class="newsletter-form">
                    <form id="send_form" method="post" action="{{ route('subscribers.store') }}">
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <input type="email" id="email" name="email" value="" placeholder="ادخل بريدك الالكترونى" required>
                            <button type="submit" class="theme-btn customer_btn">اشتراك</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Subscribe Section Two-->

    <!--Team Section Two-->
    <section class="team-section-two">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="title">{{ $config['fourth_title_ar'] }}</div>
                <h2>{{ $config['fourth_desc_ar'] }}</h2>
                <div class="seperater"></div>
            </div>
            <div class="row clearfix">

                @foreach($teams as $team)
                <div class="team-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image">
                            <img style="width: 151px;height: 180px" src="{{ url('images/team/'.$team->photo) }}" alt="">
                        </div>
                        <div class="lower-content" >
                            <h3><a href="####" style="color: red">{{ $team->name }}</a></h3>
                            <div class="designation">{{ $team->job_title }}</div>
                            <ul class="social-navs">
                                <li><a href="{{ $team->twitter }}"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="{{ $team->facebook }}"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="{{ $team->youtube }}"><span class="fa fa-youtube"></span></a></li>
                                <li><a href="{{ $team->instagram }}"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Team Section Two-->

    <!--Testimonial Section-->
    <section class="testimonial-section" style="background-image:url({{ url('assets/front/images/main-slider/02.jpg') }})">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title light">
                <div class="title">{{ $config['fifth_title_ar'] }}</div>
                <h2>{{ $config['fifth_desc_ar'] }}</h2>
            </div>
            <div class="two-item-carousel owl-carousel owl-theme">

                @foreach($testimonials as $person)
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image"><img style="width: 103px;height:103px;" src="{{ url('images/testimonials/'.$person->photo) }}" alt="" /></div>
                            <div class="content">
                                <h3>{{ $person->name }}</h3>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="text">
                                    {!! substr($person->quote,0,440) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--End Testimonial Section-->

    <!--News Section-->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="title">{{ $config['sixth_title_ar'] }}</div>
                <h2>{{ $config['sixth_desc_ar'] }}</h2>
                <div class="seperater"></div>
            </div>
            <div class="row clearfix">

                @foreach($blogs as $blog)
                    <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="images/blog.jpg" data-fancybox="images" data-caption="" class="option-box link"><span class="icon fa fa-camera"></span></a>
                            <a href="{{ route('single_blog',str_replace(' ','-',$blog->title)) }}"><img style="width:370px;height: 262.27px" src="{{ url('images/blog/'.$blog->photo) }}" alt="" /></a>
                            <ul class="post-info">
                                <li>{{ $blog->created_at->diffForHumans() }}</li>
                                <li>بواسطة {{ $blog->admin->name }}</li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3>
                                <a href="{{ route('single_blog',str_replace(' ','-',$blog->title)) }}">
                                    {{ $blog->title }}
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--End News Section-->
    <div style="position:relative;text-align:right;height:408px;width:1360px;">
    <div style="overflow:hidden;background:none!important;height:408px;width:1360px;">
    <iframe style="position:relative; top:-60px; border:none;" src="https://www.google.com/maps/d/u/0/embed?mid=1DcyvJoQARcnjtgM47G-eCsVY32Xmzk03&ie=UTF8&t=&z=14&iwloc=B&output=embed" width="1360" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" ></iframe>    <!--Sponsors Section-->
    </div>
    </div>

    @include('commonmodule::includes.swal')
@endsection
@push('js')
    <script>
        $('.customer_btn').on('click',function (e) {
            e.preventDefault();
            var email = $('#email').val();
            var _token = $('#_token').val();
            $.ajax({
                'method':'post',
                'data':{_token:_token,email:email},
                'url':'{{ route('subscribers_create') }}',
                success:function (data) {
                    $('#send_form').trigger("reset");
                    if (data.email === null){
                        swal("خطأ", "انت مشترك معنا بالفعل", "warning", { button: "{{__('commonmodule::swal.btn')}}", });
                    }else{
                        swal("{{__('commonmodule::swal.good')}}", "تم الاشتراك معنا بنجاح", "success", { button: "{{__('commonmodule::swal.btn')}}", });
                    }

                },
                //error: function(XMLHttpRequest, textStatus, errorThrown){
                //    alert("Status: " + textStatus); alert("Error: " + errorThrown);
                //}
            });
        });


        {{--$('.project_category').on('click',function (e) {--}}
        {{--    e.preventDefault();--}}
        {{--    var project_category = $(this).data('id');--}}
        {{--    //var project_tab = $(this).data('num');--}}

        {{--    //$('.project_push').parent().attr('id','p-tab-'+project_tab);--}}
        {{--    $('.project_push').html();--}}
        {{--    $.ajax({--}}
        {{--        'url' : '{{ route('front.project.get') }}',--}}
        {{--        'type':'get',--}}
        {{--        'data': {project_category:project_category},--}}
        {{--        success: function (data) {--}}
        {{--            data.projects.forEach(function (row) {--}}
        {{--                $('.project_push').append(`--}}
        {{--                    <div class="project-block col-lg-3 col-md-6 col-sm-12">--}}
        {{--                                <div class="inner-box">--}}
        {{--                                    <div class="image">--}}
        {{--                                        <img style="width: 369px;height: 379px" src="http://localhost/idea/public/images/project/"+${row.photo} alt="">--}}
        {{--                                        <div class="overlay-box">--}}
        {{--                                            <div class="content">--}}
        {{--                                                <h3>${row.title}</h3>--}}
        {{--                                                <div class="see-project">تفاصيل اكثر <span class="fa fa-angle-right"></span></div>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="overlay-two">--}}
        {{--                                            <div class="overlay-two-inner">--}}
        {{--                                                <div class="overlay-two-content">--}}
        {{--                                                <h2><a href="http://localhost/idea/public/projects/%D8%A7%D9%84%D8%A7%D8%AA%D9%82%D8%A7%D9%86-10">الاتقان 10</a></h2>--}}
        {{--                                                <div class="text">المشروع&nbsp; : وحدات سكنية--}}

        {{--                                        العنوان&nbsp; :&amp;nbs...</div>--}}
        {{--                                                <a href="http://localhost/idea/public/projects/%D8%A7%D9%84%D8%A7%D8%AA%D9%82%D8%A7%D9%86-10" class="see-more" style="color: red">تفاصيل اكثر <span class="fa fa-angle-left"></span></a>--}}
        {{--                                                </div>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                        </div>--}}
        {{--                                        </div>--}}
        {{--                                        </div>--}}
        {{--                `);--}}

        {{--            });--}}
        {{--        }--}}
        {{--    });--}}
        {{--});--}}
    </script>
@endpush

