<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $config['title_ar'] }} | {{ isset($title) ? $title : 'title' }} </title>

    <!-- Stylesheets -->
    <link href="{{ url('assets/front') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('assets/front') }}/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ url('assets/front') }}/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{ url('assets/front') }}/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{ url('assets/front') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('assets/front') }}/css/responsive.css" rel="stylesheet">
    <link href="{{ url('assets/front') }}/css/custom.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="{{ url('assets/front') }}/css/color-switcher-design.css" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{{ url('assets/front') }}/css/color-themes/red.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ url('assets/front') }}/images/logo.png" type="image/x-icon">
    <link rel="icon" href="{{ url('assets/front') }}/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ url('assets/front') }}/js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper rtl">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header / Header Style Two-->
    <header class="main-header header-style-two">

        <!-- Header Top Two-->
        <div class="header-top-two">
            <div class="auto-container">
                <div class="clearfix">

                    <!--Top Right-->
                    <div class="top-right clearfix">
                        <ul class="links clearfix">
                            <li>اهلا بكم فى مجموعة الاتقان الهندسية</li>
                            <li><span class="theme_color">ساعات العمل :</span>{{ $config['work_hour_ar'] }}</li>
                        </ul>
                        <ul class="social-icons">
                            <li>
                                <a href="{{ $config['fb_link'] }}">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $config['tw_link'] }}">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $config['youtube'] }}">
                                    <span class="fa fa-youtube"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('https://wa.me/'.$config['whatsapp']) }}">
                                    <span class="fa fa-whatsapp"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Main Box -->
        <div class="main-box">
            <div class="auto-container">
                <div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('index_front') }}">
                                <img style="width: 181px;height: 120px" src="{{ url('images/config/'.$config['logo']) }}" alt="..."></a></div>
                    </div>

                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation see_current clearfix">
                                    <li class=""><a href="{{ route('index_front') }}">الرئيسية</a></li>
                                    <li class="{{ active('aboutus') }}"><a href="{{ route('about_us') }}">من نحن</a></li>
                                    <li class="{{ active('services') }}"><a href="{{ route('services') }}">الخدمات</a></li>
                                    <li class="{{ active('projects') }} dropdown"><a href="{{ route('projects') }}">المشروعات</a>
                                        <ul>
                                            <li><a href="{{ route('projects') }}">الكل</a></li>
                                            @foreach($projectsCategories as $cat)
                                            <li><a href="{{ route('projects_cat',$cat->id) }}">{{ $cat->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ active('blogs') }}"><a href="{{ route('blogs') }}">أخر الأخبار</a></li>
                                    <li class="{{ active('contactus') }}"><a href="{{ route('contact') }}">تواصل معنا</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">

                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer" >
                                            <div class="form-container" style="width: 135px">
                                                <form method="get" action="{{ route('services') }}">
                                                    <div class="form-group">
                                                        <input type="search" name="search" value="" placeholder="ابحث هنا" required>
                                                        <button type="submit" class="search-btn">
                                                            <span class="fa fa-search"></span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Nav Outer End-->
                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{ route('index_front') }}" class="img-responsive">
                        <img style="width: 110px;height: 50px" src="{{ url('images/config/'.$config['small_logo']) }}" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu  navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{ route('index_front') }}">الرئيسية</a></li>
                                <li><a href="{{ route('about_us') }} ">من نحن</a></li>
                                <li><a href="{{ route('services') }}">الخدمات</a></li>
                                <li class="dropdown"><a href="{{ route('projects') }}">المشروعات</a>
                                    <ul>
                                        <li><a href="{{ route('projects') }}">الكل</a></li>
                                        @foreach($projectsCategories as $cat)
                                            <li><a href="{{ route('projects_cat',$cat->id) }}">{{ $cat->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('blogs') }}">أخر الأخبار</a></li>
                                <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Main Header -->

    @yield('content')

    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url({{ url('assets/front/images/main-slider/01.jpg') }})">

        <div class="auto-container">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="{{ route('index_front') }}">
                                            <img style="width: 181px;height: 120px" src="{{ url('images/config/'.$config['logo']) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        {{ substr($config['about_ar'],0,210) }}
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2>تواصل معنا</h2>
                                    <ul class="list-style-one">
                                        <li>
                                            <span class="icon fa fa-envelope"></span>
                                            {{ $config['address_ar'] }}
                                        </li>
                                        <li>
                                            <span class="icon fa fa-phone"></span>
                                            {{ $config['email'] }}
                                        </li>
                                        <li>
                                            <span class="icon fa fa-clock-o"></span>
                                            {{ $config['phone'] }}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->

                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget news-widget">
                                        <h2>أخر الأخبار</h2>

                                        <!--News Widget Block-->
                                        @foreach($blogss as $row)
                                            <div class="news-widget-block">
                                            <div class="widget-inner">
                                                <div class="image">
                                                    <img style="width: 70px;height:70px;border-radius: 30px" src="{{ url('images/blog/'.$row->photo) }}" alt="" />
                                                </div>
                                                <h3>
                                                    <a href="{{ route('single_blog',str_replace(' ','-',$row->title)) }}">
                                                        {{ $row->title }}
                                                    </a>
                                                </h3>
                                                <div class="post-date">{{ $row->created_at->diffForHumans() }}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-12 col-sm-12">
                                <div class="footer-widget map-widget">
                                    <h2>فروعنا</h2>
                                    <div class="image">
                                        <img src="{{ url('assets/front') }}/images/resource/map.png" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="copyright">
                            حقوق النشر © 2019 لمجموعة الاتقان الهندسية روعة التصميم ودقة الاختيار
                        </div>
                    </div>
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <ul class="footer-nav">
                            <li><a href="{{ route('index_front') }}">الرئيسية</a></li>
                            <li><a href="{{ route('about_us') }}">من نحن</a></li>
                            <li><a href="{{ route('services') }}">الخدمات</a></li>
                            <li><a href="{{ route('projects') }}">المشاريع</a></li>
                            <li><a href="{{ route('blogs') }}">أخر الأخبار</a></li>
                            <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->

    <div {{ request()->segment(1) == 'contactus' ? 'hidden' : '' }} class="scroll-to-top scroll-to-target " data-target="html"><span class="fa fa-long-arrow-up"></span></div>


<script src="{{ url('assets/front') }}/js/jquery.js"></script>
<!--Revolution Slider-->
<script src="{{ url('assets/front') }}/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ url('assets/front') }}/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ url('assets/front') }}/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ url('assets/front') }}/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ url('assets/front') }}/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ url('assets/front') }}/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ url('assets/front') }}/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ url('assets/front') }}/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ url('assets/front') }}/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ url('assets/front') }}/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ url('assets/front') }}/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{ url('assets/front') }}/js/main-slider-script.js"></script>

<script src="{{ url('assets/front') }}/js/popper.min.js"></script>
<script src="{{ url('assets/front') }}/js/bootstrap.min.js"></script>
<script src="{{ url('assets/front') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ url('assets/front') }}/js/jquery.fancybox.js"></script>
<script src="{{ url('assets/front') }}/js/appear.js"></script>
<script src="{{ url('assets/front') }}/js/owl.js"></script>
<script src="{{ url('assets/front') }}/js/wow.js"></script>
<script src="{{ url('assets/front') }}/js/jquery-ui.js"></script>
<script src="{{ url('assets/front') }}/js/script.js"></script>
<script src="{{ url('assets/front') }}/js/color-settings.js"></script>
@stack('js')
<script>
    if (!$('.see_current li').hasClass('current')){
        $('.see_current li:first').addClass('current');
    }

</script>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ca0d0f36252b454"></script>
</body>
</html>
