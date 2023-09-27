
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  
  
  <!-- Sidebar -->
    <div class="sidebar">
      <ul class="nav nav-pills nav-sidebar flex-column pt-3" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('personal.main.index')}}" class="nav-link ">
              <i class="ion ion-home"></i>
              <p class="m-2">
                Главная
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('personal.like.index')}}" class="nav-link ">
              <i class="ion ion-happy"></i>
              <p class="m-2">
                Понравившиеся посты
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{route('personal.comment.index')}}" class="nav-link ">
            <i class="ion ion-chatbubble"></i>
            <p class="m-2">
              Комментарии
            </p>
          </a>
        </li>
        
      </ul>
    </div>
    <!-- /.sidebar -->
</aside>
