<!DOCTYPE html>
<html>

<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/argon.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
</html>
<body class="container-xxl shadow-lg p-0 bg-white rounded">

    <nav class="p-3">
        <div class="navbar mb-3 pr-0 pl-0">
            <a class="navbar-brand" href="">
                <img src="{{asset('image/logo.png')}}" alt="" style="height: 136px" class="logo">
            </a>
            <div class="navbar p-0">
                <ul class="nav">
                    <li class="nav-item">
                        @guest
                            <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#login">Авторизация</button>
                            <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#reg">Регистрация</button>
                                @include('modal')
                                @yield('login')
                                @yield('reg')
                        @else
                            <h3>
                                <a class="" data-bs-toggle="modal" data-bs-target="#prof" href="">{{$user -> name}}</a>
                            </h3>
                            <div class="modal fade" id="prof" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="{{ route('logout') }}" class="m-3">
                                            @csrf
                                            <button type="submit">Выход</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </li>
                </ul>

            </div>
        </div>

        <ul class="nav justify-content-between pl-0">
            <li class="nav-item">
                <a class="nav-link" href="#pizza">Пиццы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#custom">Сделать свою пиццу</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#snacks">Закуски</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#drink">Напитки</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Акции</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-info" href="#">Корзина</a>
            </li>
        </ul>
    </nav>
    @yield('main')
    <div class="footer-dark bg-dark p-3">
        <div class="d-flex justify-content-between w-25">
            <a href="" class="text-white">FAQ</a>
            <a href="" class="text-white">Меню</a>
            <a href="" class="text-white">Контакты</a>
        </div>
        <hr>
    </div>





<script src="js/argon.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
