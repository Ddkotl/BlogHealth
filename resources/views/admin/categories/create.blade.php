@extends('admin.layouts.dashbordAdmin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление категории</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Категории</a></li>
              <li class="breadcrumb-item active">Создание категории</li>
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
        
          <form class="col-12" action="{{ route('admin.category.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <input type="text" name="title" class="form-control" placeholder="Введите название категории">
              @error('title')
                <div class="text-danger">
                  Это поле обязательно для заполнения
                </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-block btn-success">Добавить</button>
          </form>
          
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection

