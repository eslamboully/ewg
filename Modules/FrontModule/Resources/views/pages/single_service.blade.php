@extends('frontmodule::layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('images/service/'.$service->cover_photo) }})">
        <div class="auto-container">
            <h1>{{ $service->title }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index_front') }}">الرئيسية</a></li>
                <li><a href="{{ route('services') }}">الخدمات</a></li>
                <li>{{ $service->title }}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <h2>خدمات اخري</h2>
                            <ul class="blog-cat">
                                @foreach($services as $row)
                                    <li class="{{ $row->title == $service->title ? 'active' : '' }}"><a href="{{ route('single_service',str_replace(' ','-',$row->title)) }}">{{ $row->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!--Brochure-->
{{--                        <div class="sidebar-widget brochure-widget">--}}
{{--                            <h2>اخبارنا</h2>--}}
{{--                            <div class="brochure-box">--}}
{{--                                <div class="inner">--}}
{{--                                    <span class="icon fa fa-file-pdf-o"></span>--}}
{{--                                    <div class="text"></div>--}}
{{--                                </div>--}}
{{--                                <a href="#" class="overlay-link"></a>--}}
{{--                            </div>--}}

{{--                            <div class="brochure-box">--}}
{{--                                <div class="inner">--}}
{{--                                    <span class="icon fa fa-file-powerpoint-o"></span>--}}
{{--                                    <div class="text">Project-One .wd</div>--}}
{{--                                </div>--}}
{{--                                <a href="#" class="overlay-link"></a>--}}
{{--                            </div>--}}

{{--                        </div>--}}

                    </aside>
                </div>

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="service-single">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/service-8.jpg" alt="" />
                            </div>
                            <div class="lower-content">
                                {!! $service->description !!}
                            </div>
                        </div>

                        <!--Services Info Tabs-->
{{--                        <div class="Services-info-tabs">--}}
{{--                            <!--Service Tabs-->--}}
{{--                            <div class="service-tabs tabs-box">--}}

{{--                                <!--Tab Btns-->--}}
{{--                                <ul class="tab-btns tab-buttons clearfix">--}}
{{--                                    <li data-tab="#prod-details" class="tab-btn active-btn">Precautions</li>--}}
{{--                                    <li data-tab="#prod-spec" class="tab-btn">Intelligence</li>--}}
{{--                                    <li data-tab="#prod-reviews" class="tab-btn">Specializations</li>--}}
{{--                                </ul>--}}

{{--                                <!--Tabs Container-->--}}
{{--                                <div class="tabs-content">--}}

{{--                                    <!--Tab / Active Tab-->--}}
{{--                                    <div class="tab active-tab" id="prod-details">--}}
{{--                                        <div class="content">--}}
{{--                                            <p>Processing and refining operatons turn crude oil and gas into marktable products. In the case of crude oil, these products include heating oil, gasoline for use in vehicles, jet fuel, and diesel oil. Oil refining processes include dis-catalytic cracking, alkylation, isomerization and hydrotreating.</p>--}}
{{--                                            <p>Again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but seds because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <!--Tab-->--}}
{{--                                    <div class="tab" id="prod-spec">--}}
{{--                                        <div class="content">--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <!--Tab-->--}}
{{--                                    <div class="tab" id="prod-reviews">--}}
{{--                                        <div class="content">--}}
{{--                                            <p>Processing and refining operatons turn crude oil and gas into marktable products. In the case of crude oil, these products include heating oil, gasoline for use in vehicles, jet fuel, and diesel oil. Oil refining processes include dis-catalytic cracking, alkylation, isomerization and hydrotreating.</p>--}}
{{--                                            <p>Again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but seds because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                        <!--End Product Info Tabs-->

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
