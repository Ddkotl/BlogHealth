@extends('admin.layouts.dashbordAdmin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Тэги</h1>
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
          <div class="col-12 mb-3">
            <a href="{{ route('admin.tag.create')}}" class="btn btn-block btn-primary">Добавить новуый тэг</a>
          </div>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Дата создания</th>
                        <th>Дата обновления</th>
                        <th>Просмотр</th>
                        <th>Редактировать</th>
                        <th>Удалить</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($tags as $tag)
                      <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->title}}</td>
                        <td>{{$tag->created_at}}</td>
                        <td>{{$tag->updated_at}}</td>
                        <td>
                          <div >
                            <a href="{{route('admin.tag.show',$tag->id)}}" class="btn btn-block btn-info">Просмотреть</i></a>
                          </div>
                        </td>
                        <td>
                          <div >
                            <a href="{{ route('admin.tag.edit',$tag->id)}}" class="btn btn-block btn-warning">Изменить</a>
                          </div>
                        </td>
                        <td>
                          <div >
                            <form action="{{route('admin.tag.delete',$tag->id)}}" method="POST">
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
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection

