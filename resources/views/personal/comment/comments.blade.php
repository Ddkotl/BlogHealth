@extends('personal.layouts.dashbordAdmin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Комментарии</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Главная</a></li>
              <li class="breadcrumb-item active">Комментарии</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Название</th>
                      <th>Категории</th>
                      <th>Тэги</th>
                      <th>Просмотр</th>
                      <th>Удалить</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                      <td>{{$comment->message}}</td>
                      <td>{{$comment->user_id}}</td>
                      <td>{{$comment->post_id}}</td>
                      <td>
                        <div >
                          <a href="{{ route('personal.comment.edit',$comment->id)}}" class="btn btn-block btn-warning">Изменить</a>
                        </div>
                      </td>
                      <td>
                        <div >
                          <form action="{{route('personal.comment.delete',$comment->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-block btn-danger">
                                Удалить
                            </button>
                          </form>                          
                        </div>
                      </td>
                    </tr>                        
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection

