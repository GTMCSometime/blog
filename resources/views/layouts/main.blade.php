<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог :: Домашняя страница</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
    <style>
        #popup-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: none;
}
#popup {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body>
    <div class="edica-loader"></div>
    <header class="edica-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('post.index') }}"><img src="{{ asset('assets/images/AdminLTELogo.png') }}" alt="Edica"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('post.index') }}">Блог <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category.index') }}">Категории <span class="sr-only">(current)</span></a>
                        </li>
                    @if (Auth::check() && Auth::user()->role !== 0)
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('personal.main.index') }}">Личная страница</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link">{{ auth()->user()->name }}</a>
                        </li>
                    <li class="nav-item">
                    <form class="btn btn-sm btn-outline-danger" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Выйти') }}
                            </x-dropdown-link>
                        </form>
                        </li>
                    @elseif(Auth::check() && Auth::user()->role == 0)
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.index') }}">Панель администратора</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link">{{ auth()->user()->name }}</a>
                        </li>
                        <li class="nav-item">
                    <form class="btn btn-sm btn-outline-danger" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Выйти') }}
                            </x-dropdown-link>
                        </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Вход</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                        </li>
                    @endif
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="edica-footer" data-aos="fade-up">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="mb-0">© All rights reserved. Возможно.</p>
            </div>
        </div>
    </footer>
    <script>
        function login() {
            alert('Необходимо зайти на сайт!')
        }
    </script>
    <script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        const popupOverlay = document.getElementById("popup-overlay");
const popup = document.getElementById("popup");

function showPopup() {
  popupOverlay.style.display = "block";
}
function hidePopup() {
  popupOverlay.style.display = "none";
}
popupOverlay.addEventListener("click", hidePopup);
popup.addEventListener("click", (event) => event.stopPropagation());

    </script>
    <script>
        AOS.init({
            duration: 1000
        });
      </script>
          <script>
        function login() {
            alert('Необходимо зайти на сайт!')
        }
    </script>
</body>

</html>