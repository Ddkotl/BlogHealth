@extends('admin.layouts.dashbordAdmin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменение пользователя</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
              <li class="breadcrumb-item active">{{$user->name}}({{$user->email}})</li>
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
        
          <form class="col-12" action="{{route('admin.user.update', $user->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Введите имя пользователя" value="{{$user->name}}">
              @error('name')
                <div class="text-danger">
                  {{$message}}
                </div>
              @enderror
            </div>
            <div class="form-group ">
              <input type="email" name="email" class="form-control mb-3" placeholder="Введите вашу почту" value="{{$user->email}}">
              @error('email')
                <div class="text-danger">
                  {{$message}}
                </div>
              @enderror
              <div class="form-group">
                <label>Выберете роль пользователя</label>
                <select name="role" class="form-control">
                  @foreach ($roles as $id=>$role)
                    <option value="{{$id}}" {{$id == $user->role ? 'selected' : ''}}>{{$role}}</option>
                  @endforeach
                </select>
                @error('role')
                <div class="text-danger">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <input type="hidden" name="user_id" value="{{$user->id}}">
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

