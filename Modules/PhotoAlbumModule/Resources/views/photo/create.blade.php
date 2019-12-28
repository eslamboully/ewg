@extends('commonmodule::layouts.master')
@section('title') {{__('photoalbummodule::photocateg.Photopage')}}
@endsection

@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('assets/admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('content-header')
<section class="content-header">
    <h1> {{__('photoalbummodule::photocateg.Photopage')}} </h1>

</section>
@endsection

@section('content')
    @if ($categories->count() == 0)
        <section class="content">
            <br/>
            <h3 class="alert alert-danger">{{__('portfoliomodule::portfolio.fill')}}</h3>
            <br/>
            <a href="{{url('admin-panel/photos/photocategory')}}" class="btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i> {{__('portfoliomodule::portfolio.fillnow')}}</a>
        </section>
    @else
<section class="content">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{__('photoalbummodule::photocateg.Photopage')}}</h3>
        </div>


        @if (count($errors) > 0) @foreach ($errors->all() as $item)
        <p class="alert alert-danger">{{$item}}</p>
        @endforeach @endif
        <!-- /.box-header -->
        <form class="form-horizontal" action="{{url('admin-panel/photos/photo')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="box-body">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            @foreach($activeLang as $lang)
                            <li @if($loop->first) class="active" @endif >
                                <a href="#{{ $lang->display_lang }}" data-toggle="tab">{{ $lang->display_lang }}</a>
                            </li>
                            @endforeach
                        </ul>

                        <div class="tab-content">
                            @foreach($activeLang as $lang)

                            <div class="tab-pane @if($loop->first) active @endif" id="{{ $lang->display_lang }}">
                                <div class="form-group">
                                    {{-- title --}}
                                    <label class="control-label col-sm-2" for="title">{{__('photoalbummodule::photocateg.title')}} ({{ $lang->display_lang }}):</label>
                                    <div class="col-sm-8">
                                        <input data-validation="length alphanumeric" data-validation-length="min4" type="text" autocomplete="off" class="form-control"
                                            name="{{$lang->lang}}[title]" @if ($loop->first)
                                        required @endif data-validation="alphanumeric">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->

                    <div class="form-group">
                        {{-- Upload photo --}}
                        <label class="control-label col-sm-2" for="img"> {{trans('blog::blog.photo')}} </label>
                        <div class="col-sm-8">
                            <input type="file" autocomplete="off" class="" name="photo">
                        </div>
                    </div>


                    {{-- Select Type --}}
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="category">{{__('photoalbummodule::photocateg.categ')}}:</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="photo_categ_id" data-placeholder="Choose category">
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="box-footer">
                <a href="{{url('admin-panel/photos/photo')}}" type="button" class="btn btn-default">{{__('photoalbummodule::photocateg.cancel')}} &nbsp; <i class="fa fa-remove" aria-hidden="true"></i> </a>
                <button type="submit" class="btn btn-primary pull-right">{{__('photoalbummodule::photocateg.submit')}} &nbsp; <i class="fa fa-save"></i></button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
</section>
    @endif
@endsection