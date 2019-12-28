@extends('frontmodule::layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('/images/blog/'.$blog->cover_photo) }})">
        <div class="auto-container">
            <h1>{{ $blog->title }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index_front') }}">الرئيسية</a></li>
                <li><a href="{{ route('blogs') }}">الاخبار</a></li>
                <li>{{ $blog->title }}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="inner-box">

                            <div class="title-box">
                                <h2>{{ $blog->title }}</h2>
                                <ul class="post-info">
                                    <li>{{ $blog->created_at->format('d M') }}</li>
                                    <li> بواسطة  {{ $blog->admin->name }} </li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <div class="text">
                                    {!! $blog->description !!}
                                </div>

                                <!--post-share-options-->
                                <div class="post-share-options clearfix">
                                    <div class="pull-left">
                                        <ul class="social-icon-three">
                                            <div class="addthis_inline_share_toolbox"></div>
                                        </ul>
                                    </div>
                                    <div class="pull-right posts">
                                        <ul>
                                            @if($prevBlog !== null)
                                                <li class="prev"><a href="{{ route('single_blog',str_replace(' ','-',$prevBlog->title)) }}"><span class="fa fa-angle-double-left"></span>&nbsp; السابق</a></li>
                                            @endif
                                            @if($nextBlog !== null)
                                                <li><a href="{{ route('single_blog',str_replace(' ','-',$nextBlog->title)) }}">التالي &nbsp;<span class="fa fa-angle-double-right"></span></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">


                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h2>اخر الاخبار</h2>
                            </div>
                            <div class="widget-content">
                                @foreach($blogs as $row)
                                    <article class="post">
                                        <figure class="post-thumb"><a href="{{ route('single_blog',str_replace(' ','-',$blog->title)) }}"><img src="{{ url('images/blog/'.$row->photo) }}" alt=""></a></figure>
                                        <div class="text"><a href="{{ route('single_blog',str_replace(' ','-',$blog->title)) }}">{{ $row->title }}</a></div>
                                        <div class="post-info">{{ $row->created_at->diffForHumans() }}</div>
                                    </article>
                                @endforeach
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>

{{--    <section class="construction-section">--}}
{{--        <div class="auto-container">--}}
{{--            <div class="row clearfix">--}}
{{--                <!--Content Column-->--}}
{{--                <div class="content-column col-lg-6 col-md-12 col-sm-12">--}}
{{--                    <div class="inner-column">--}}
{{--                        <h2>Great Construction Company</h2>--}}
{{--                        <div class="text">If you have any construction and renovation work need, simply call our 24 hour emergecny number.</div>--}}
{{--                        <div class="number">01865 524 8503 <span>Or</span></div>--}}
{{--                        <a href="#" class="theme-btn btn-style-four">Contact Us</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section> --}}
@endsection
