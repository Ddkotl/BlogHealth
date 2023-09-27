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
              <li class="breadcrumb-item"><a href="{{route('personal.comment.index')}}">Комментарии</a></li>
              <li class="breadcrumb-item active">Редактирование комментария</li>
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
          <form class="col-12" action="{{route('personal.comment.update', $comment->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <textarea  name="message" class="form-control" placeholder="Введите текст комментария" >{{$comment->message}}</textarea>
              @error('message')
                <div class="text-danger">
                  Это поле обязательно для заполнения
                </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-block btn-success">Сохранить</button>
          </form>
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection

