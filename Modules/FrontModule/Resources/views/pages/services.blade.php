{{--{{ dd($sliders) }}--}}
@extends('frontmodule::layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('images/config/'.$config['services_cover']) }})">
        <div class="auto-container">
            <h1>خدماتنا</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index_front') }}">الرئيسية</a></li>
                <li>الخدمات</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <!--Services Section-->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="title">{{ $config['second_title_ar'] }}</div>
                <h2>{{ $config['second_desc_ar'] }}</h2>
                <div class="seperater"></div>
            </div>
            <div class="row clearfix">

                @foreach($services as $service)
                    <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div style="width: 368px;height: 300px;" class="inner-box" style="background-image:url({{ url('') }})">
                        <div class="icon-box">
                            <img style="width: 56px;height: 56px" src="{{ url('images/service/'.$service->photo) }}">
                        </div>
                        <h3><a href="{{ route('single_service',str_replace(' ','-',$service->title)) }}">{{ $service->title }}</a></h3>
                        <div class="text">
                            {{ $service->title }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <br/>
            <!--Pagination-->
            <div class="pagination-outer text-center">
                <!--Styled Pagination-->
                @if(request()->has('search'))

                @else
                    {!! $services->links() !!}
                @endif
            <!--End Styled Pagination-->
            </div>
        </div>
    </section>
    <!--End Services Section-->



@endsection
