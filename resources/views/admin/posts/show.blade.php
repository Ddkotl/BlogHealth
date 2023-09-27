@extends('admin.layouts.dashbordAdmin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Пост: {{$post->title}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Посты</a></li>
              <li class="breadcrumb-item active">{{$post->title}}</li>
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
                        <td>{{$post->id}}</td>
                      </tr>
                      <tr>
                        <td>Название</td>
                        <td>{{$post->title}}</td>
                      </tr>  
                      <tr>
                        <td>Контент</td>
                        <td>{{$post->content}}</td>
                      </tr> 
                      <tr>
                        <td>Категория</td>
                        <td></td>
                      </tr> 
                      <tr>
                        <td>Тэги</td>
                        <td></td>
                      </tr> 
                      <tr>
                        <td>Дата создания</td>
                        <td>{{$post->created_at}}</td>
                      </tr>
                      <tr>
                        <td>Дата обновления</td>
                        <td>{{$post->updated_at}}</td>
                      </tr>                      
                    </tbody>
                  </table>
                  <div class="col-12 mb-3 mt-3">
                    <a href="{{ route('admin.post.edit',$post)}}" class="btn btn-block btn-warning">Изменить</a>
                  </div>
                  <div class="col-12 mb-3">
                    <form action="{{route('admin.post.delete',$post->id)}}" method="POST">
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

