@extends('admin.layouts.dashbordAdmin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Категория: {{$category->title}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <tbody>
                      <tr>
                        <td>ID</td>
                        <td>{{$category->id}}</td>
                      </tr>
                      <tr>
                        <td>Название</td>
                        <td>{{$category->title}}</td>
                      </tr>  
                      <tr>
                        <td>Дата создания</td>
                        <td>{{$category->created_at}}</td>
                      </tr>
                      <tr>
                        <td>Дата обновления</td>
                        <td>{{$category->updated_at}}</td>
                      </tr>                      
                    </tbody>
                  </table>
                  <div class="col-12 mb-3 mt-3">
                    <a href="{{ route('admin.category.edit',$category)}}" class="btn btn-block btn-warning">Update</a>
                  </div>
                  <div class="col-12 mb-3">
                    <a href="{{ route('admin.category.create')}}" class="btn btn-block btn-danger">Delete</a>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection

