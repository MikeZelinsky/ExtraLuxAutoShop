@section('header')
    <header>
<div class=" bg-dark d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 shadow-sm ">

    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{route('main')}}" class="nav-link px-2 text-white">Главная</a></li>
                <li><a href="{{route('getInformationAboutCar')}}" class="nav-link px-2 text-white">О нас</a></li>
                <li><a href="{{route('addCar')}}" class="nav-link px-2 text-white">Продать Авто</a></li>
                <li><a href="{{route('getMyCars')}}" class="nav-link px-2 text-white">Мои Авто</a></li>
                <li><a href="{{route('editMyCar')}}" class="nav-link px-2 text-white">Редактировать Авто</a></li>
                <li><a href="{{route('getRequestsForMyCar')}}" class="nav-link px-2 text-white">Заявки на Мои Авто</a></li>
                <li><a href="{{route('login')}}" class="nav-link px-2 text-white">Login</a></li>
                <li><a href="{{route('register')}}" class="nav-link px-2 text-white">Register</a></li>

            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Поиск..." aria-label="Search">
            </form>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="">
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    </header>

@show
