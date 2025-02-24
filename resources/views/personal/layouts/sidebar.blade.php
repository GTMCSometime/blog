<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('personal.main.index') }}" class="nav-link">
            <i class="fa fa-home"></i>
              <p>
                Домой
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
        </ul>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
      </nav>
   