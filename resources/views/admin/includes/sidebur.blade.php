
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  
  
  <!-- Sidebar -->
    <div class="sidebar">
      <ul class="nav nav-pills nav-sidebar flex-column pt-3" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('admin.main.index')}}" class="nav-link ">
              <i class="ion ion-home"></i>
              <p class="m-2">
                Главная
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.user.index')}}" class="nav-link ">
              <i class="ion ion-person"></i>
              <p class="m-2">
                Пользователи
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{route('admin.post.index')}}" class="nav-link ">
            <i class="ion ion-clipboard"></i>
            <p class="m-2">
              Посты
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin.category.index')}}" class="nav-link ">
            <i class="ion ion-bookmark"></i>
            <p class="m-2">
              Категории
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('admin.tag.index')}}" class="nav-link ">
            <i class="ion ion-pricetags"></i>
            <p class="m-2">
              Тэги
            </p>
          </a>
        </li>
        
      </ul>
    </div>
    <!-- /.sidebar -->
</aside>
