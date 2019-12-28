@extends('commonmodule::layouts.master')

@section('title')
  {{trans('portfoliomodule::portfolio.pagetitle')}}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  @endsection

@section('content-header')
<section class="content-header">
  <h1> {{trans('portfoliomodule::portfolio.pagetitle')}} </h1>

</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">تعديل الصور</h3>
                    {{-- Add New --}}
{{--                    <a href="{{url('admin-panel/portfoliomodule/project/create')}}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{trans('portfoliomodule::portfolio.addnew')}}</a>--}}
                    <form action="{{ route('photo.special.add') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="portfolio_id" value="{{ $photos->id }}">
                                <input type="file" name="photo" class="col-md-6">
                                <button class="col-md-2 btn btn-success">اضف</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="myTable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                          <th>###</th>
                          <th>{{trans('portfoliomodule::portfolio.photo')}}</th>
                          <th>العمليات</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($photos->portfolio_photo as $index=>$photo)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td><img width="100" height="100" src='{{asset("images/project/".$photo->photo) }}'/></td>
                                <td><a href="{{ route('project.delete.photo',$photo->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection

@section('javascript')

    @include('commonmodule::includes.swal')
    <!-- DataTables -->
    <script src="{{asset('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
@endsection
