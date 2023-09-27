@extends('admin.layouts.dashbordAdmin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление поста</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Посты</a></li>
              <li class="breadcrumb-item active">Добавление поста</li>
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
        
          <form class="col-12" action="{{ route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="text" name="title" class="form-control" placeholder="Введите название поста" value="{{old('title')}}">
              @error('title')
                <div class="text-danger">
                  {{$message}}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <textarea name="content" id="summernote" >{{old('content')}}</textarea>
              @error('content')
              <div class="text-danger">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Добавить главное изображение</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="main_image">
                  <label class="custom-file-label">Выбрать файл</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Загрузка</span>
                </div>
              </div>
              @error('main_image')
              <div class="text-danger">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Добавить превью</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="preview_image">
                  <label class="custom-file-label">Выбрать файл</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Загрузка</span>
                </div>
              </div>
              @error('preview_image')
              <div class="text-danger">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label>Выберете категорию</label>
              <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                  <option value="{{$category->id}}" {{$category->id == old('category_id') ? 'selected' : ''}}>{{$category->title}}</option>
                @endforeach
              </select>
              @error('category_id')
              <div class="text-danger">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label>Выберите тэги</label>
              <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите тэги" style="width: 100%;">
                @foreach ($tags as $tag)
                  <option {{is_array(old('tag_ids')) && in_array($tag->id,old('tag_ids')) ? ' selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>                  
                @endforeach
              </select>
              @error('tag_ids')
              <div class="text-danger">
                {{$message}}
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

