@extends('commonmodule::layouts.master')

@section('title')
  {{__('productmodule::product.pagetitle')}}
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
 @endsection

@section('content-header')
  <section class="content-header">
    <h1>
      {{__('productmodule::product.pagetitle')}}
    </h1>
  </section>
@endsection

@section('content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">{{__('productmodule::product.pagetitle')}}</h3>
          {{-- Add New --}}
          <a href="{{url('admin-panel/product/create')}}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; {{__('productmodule::product.addnew')}}</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="productIndex" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>{{__('productmodule::product.id')}}</th>
                <th>{{__('productmodule::product.product')}}</th>
                <th>{{__('productmodule::product.photo')}}</th>
                <th>{{__('productmodule::product.operation')}}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $item)
              <tr>
                <td> {{$item->id}} </td>

                <td> {{$item->title}} </td>

                <td>
                  @if ($item->photo)
                    <img src="{{asset('images/products/thumb/' . $item->photo)}}">
                  @else
                    <p>No Photo</p>
                  @endif
                </td>

                <td> {{-- Edit --}}
                  @role('admin|superadmin')
                  <a title="Edit" href="{{url('admin-panel/product/' . $item->id . '/edit')}}" type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  @endrole
                  {{-- Delete --}}
                  @role('superadmin')
                  <form class="inline" action="{{url('admin-panel/product/' . $item->id)}}" method="POST">
                    {{ method_field('DELETE') }} {!! csrf_field() !!}
                    <button title="Delete" type="submit" onclick="return confirm('Are you sure, You want to delete this Data?')" type="button"
                      class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form>
                  @endrole
                </td>
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

  <script>
      $(document).ready(function () {
          $('#productIndex').DataTable({
              'paging'      : true,
              'lengthChange': true,
              'searching'   : true,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false,
              'language': {!! yajra_lang() !!}
          });
      })

  </script>

@endsection
