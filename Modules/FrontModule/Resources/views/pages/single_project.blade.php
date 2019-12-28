@extends('frontmodule::layouts.app')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ url('images/project/'.$project->cover_photo) }})">
    <div class="auto-container">
        <h1>{{ $project->title }}</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('index_front') }}">الرئيسية</a></li>
            <li><a href="{{ route('projects') }}">المشروعات</a></li>
            <li>{{ $project->title }}</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Projects Single Section-->
<section class="project-single-section">
    <div class="auto-container">
        <div class="upper-section">
            <div class="row clearfix">

                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image">
                        <img style="width: 570px;height: 273px" src="{{ url('images/project/'.$project->photo) }}" alt="" />
                    </div>
                </div>

                <!--Info Column-->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2><span class="theme_color">معلومات</span> المشروع</h2>
                        {!! $project->short_desc !!}
                    </div>
                </div>

                <!--Info Column-->
            </div>

            <!--Lower Section-->
            <div class="lower-section">
                <div class="row clearfix">

                    <!--Content Column-->
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h1>وصف المشروع</h1>
                            <div class="text">
                                {!! $project->description !!}
                            </div>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" style="width: 770px;height: 400px">
                                    @foreach($project->portfolio_photo as $row)

                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <img class="d-block w-100" src="{{ asset('images/project/'.$row->photo) }}" alt="Third slide">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--Contact Column-->
                    <div class="contact-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column" style="background-image:url({{ url('assets/front/images/background/pattern-1.png') }})">
                            <div class="title">اتصال سريع</div>
                            <h2>{{ $config['helper_title_ar'] }}</h2>
                            <div class="text">{{ $config['helper_desc_ar'] }}</div>
                            <a href="###" class="theme-btn contact-btn btn_send" data-toggle="modal" data-target="#exampleModal">اسأل عن المشروع</a>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</section>
<!--End Projects Single Section-->


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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اسأل عن مشاريعنا</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
{{--                    <span aria-hidden="true">&times;</span>--}}
                </button>
            </div>
            <form id="send_booking" method="post">
            <div class="modal-body">

                    <div class="form-group">
                        <input type="hidden" name="_token2" id="_token2" value="{{ csrf_token() }}" />
                        <label>الاسم</label>
                        <input type="text" class="col-md-12 form-control" id="name2" name="name2" placeholder="ادخل اسمك" required>
                    </div>
                    <div class="form-group">
                        <label>رقم الهاتف</label>
                        <input type="text" class="col-md-12 form-control" id="phone2" name="phone2" value="" placeholder="رقم الهاتف الخاص بك" required>
                    </div>
                    <div class="form-group">
                        <label>الرسالة</label>
                        <textarea class="col-md-12 form-control" id="message2" name="message2" style="height: 150px" placeholder="اكتب تفاصيل الاستفسار واسم المشروع المراد الاستفسار عنه" required></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="myClose" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="submit" id="mySendBooking" class="btn btn-primary">ارسال الاستفسار</button>
            </div>
            </form>
        </div>
    </div>
</div>

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


        $('#mySendBooking').on('click',function (e) {
            e.preventDefault();
            var name = $('#name2').val();
            var _token = $('#_token2').val();
            var phone = $('#phone2').val();
            var message = $('#message2').val();
            $.ajax({
                'method': 'post',
                'data': {_token: _token, name: name, phone: phone, message: message},
                'url': '{{ route('booking_create') }}',
                success: function (data) {
                    $('#send_booking').trigger("reset");
                    if (data.email === null) {

                        swal("خطأ", "اكمل كل البيانات لأرسال الاستفسار", "warning", {button: "{{__('commonmodule::swal.btn')}}",});
                    } else {
                        swal("{{__('commonmodule::swal.good')}}", "تم ارسال استفسارك بنجاح", "success", {button: "{{__('commonmodule::swal.btn')}}",});
                    }

                },
            });
        });

    </script>
@endpush
