<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('personal.main.index') }}" class="nav-link">
            <i class="fa fa-home"></i>
              <p>
                Личный кабинет
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{ route('personal.liked.index') }}" class="nav-link">
            <i class="far fa-heart"></i>
              <p>
                Понравившиеся посты
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('personal.comment.index') }}" class="nav-link">
            <i class="far fa-comments"></i>
              <p>
                Комментарии
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('post.index') }}" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
                Блог
              </p>
            </a>
          </li>
        </ul>
      </nav>
   