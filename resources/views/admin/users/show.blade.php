@extends('admin.layouts.dashbordAdmin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Подьзователь: {{$user->name}}</h1>
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
                        <td>{{$user->id}}</td>
                      </tr>
                      <tr>
                        <td>Имя</td>
                        <td>{{$user->name}}</td>
                      </tr>  
                      <tr>
                        <td>Дата создания</td>
                        <td>{{$user->created_at}}</td>
                      </tr>
                      <tr>
                        <td>Дата обновления</td>
                        <td>{{$user->updated_at}}</td>
                      </tr>                      
                    </tbody>
                  </table>
                  <div class="col-12 mb-3 mt-3">
                    <a href="{{ route('admin.user.edit',$user)}}" class="btn btn-block btn-warning">Изменить</a>
                  </div>
                  <div class="col-12 mb-3">
                    <form action="{{route('admin.user.delete',$user->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-block btn-danger">
                          Удалить
                      </button>
                    </form>                          
                  </div>
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

