{{--{{ dd($sliders) }}--}}
@extends('frontmodule::layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('/images/config/'.$config['blogs_cover']) }})">
        <div class="auto-container">
            <h1>أخر الأخبار</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index_front') }}">الرئيسية</a></li>
                <li>المدونة</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Blog Page Section-->
    <section class="blog-page-section">
        <div class="auto-container">
            <div class="row clearfix">

                @foreach($blogs as $blog)
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html">
                                <img style="width:370px;height: 262.27px" src="{{ url('images/blog/'.$blog->photo) }}" alt="" />
                            </a>
                            <div class="post-date"><span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d')}}</span> {{ \Carbon\Carbon::parse($blog->created_at)->format('M')}}</div>
                        </div>
                        <div class="lower-content">
                            <h3>
                                <a href="{{ route('single_blog',str_replace(' ','-',$blog->title)) }}">
                                    {{ $blog->title }}
                                </a>
                            </h3>
                            <ul class="post-meta">
{{--                                <li>24 اعجاب</li>--}}
                                <li>{{ $blog->created_at->diffForHumans() }}</li>
                                <li>بواسطة {{ $blog->admin->name }} </li>
                            </ul>
{{--                            <div class="text">--}}
{{--                                {!! substr($blog->description,0,150) !!}--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!--Pagination-->
            <div class="pagination-outer text-center">
                <!--Styled Pagination-->

                    {!! $blogs->links() !!}

                <!--End Styled Pagination-->
            </div>

        </div>
    </section>
    <!--End Blog Page Section-->

@endsection
