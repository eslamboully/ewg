@extends('frontmodule::layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('images/project/'.$projectsCat->cover_photo) }})">
        <div class="auto-container">
            <h1>{{ $projectsCat->title }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('index_front') }}">الرئيسية</a></li>
                <li>{{ $projectsCat->title }}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Project Page Section-->
    <section class="project-page-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="title">افضل اعمالنا</div>
                <h2>{{ $projectsCat->title }}</h2>
                <div class="seperater"></div>
            </div>
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">

                <!--Filter-->
{{--                <div class="filters text-center clearfix">--}}
{{--                    <ul class="filter-tabs filter-btns clearfix">--}}
{{--                        <li class="active filter" data-role="button" data-filter=".all">All</li>--}}
{{--                        <li class="filter" data-role="button" data-filter=".renovation">Renovation</li>--}}
{{--                        <li class="filter" data-role="button" data-filter=".isolation">Isolation</li>--}}
{{--                        <li class="filter" data-role="button" data-filter=".construction">Construction</li>--}}
{{--                        <li class="filter" data-role="button" data-filter=".architecutre">Architecutre</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

                <div class="filter-list row clearfix">

                    @foreach($projectsCat->portfolio as $project)

                        <div class="project-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <img style="width: 369px;height: 379px" src="{{ url('images/project/'.$project->photo) }}" alt="" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3>{{ $project->title }}</h3>
                                        <div class="see-project">تفاصيل اكثر <span class="fa fa-angle-right"></span></div>
                                    </div>
                                </div>
                                <!--Overlay Two-->
                                <div class="overlay-two">
                                    <div class="overlay-two-inner">
                                        <div class="overlay-two-content">
                                            <h2><a href="{{ route('single_project',str_replace(' ','-',$project->title)) }}">{{ $project->title }}</a></h2>
                                            <div class="text">{!! str_limit(strip_tags ($project->short_desc),50) !!}</div>
                                            <a href="{{ route('single_project',str_replace(' ','-',$project->title)) }}" class="see-more" style="color: red">تفاصيل اكثر <span class="fa fa-angle-left"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!--End Project Page Section-->

    <!--Subscribe Section-->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Form Column-->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <h2>تحتاج المزيد من المعلومات</h2>
                    <div class="text">راسلنا الان او اشترك معنا من هنا</div>
                    <div class="icon-box">
                        <span class="icon flaticon-envelope-1"></span>
                    </div>
                </div>
                <!--Form Column-->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="subscribe-form">
                            <form id="send_form" method="post">
                                <div class="form-group">
                                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />
                                    <input type="email" id="email" name="email" value="" placeholder="ادخل بريدك الالكتروني" required>
                                    <button type="submit" class="theme-btn customer_btn">اشترك</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Subscribe Section-->
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

    </script>
@endpush
