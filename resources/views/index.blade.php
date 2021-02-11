@extends('kavo')


@section('main')
    <main style="">
        <div id="carouselExampleControls" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active img-block">
                    <img src="image/1.png" class="d-block w-100 img-responsive" alt="...">
                </div>
                <div class="carousel-item img-block">
                    <img src="image/1.png" class="d-block w-100 img-responsive" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    
        <h2 id="pizza" class="mt-4 pl-3 pr-3">Пиццы</h2>
    
        <div class="row pl-3 pr-3">
            @foreach($products as $product)
            @if ($product->category == 'pizza')
            <div class="col-sm col-md-3 mb-4">
                <div class="card m-0 shadow-lg  bg-white rounded" >
    
                    <img src="image/pizza.png" class="ml-3 mt-3 mr-3" alt="...">
    
                    <div class="card-body">
                        <h4 class="card-title text-warning font-weight-bold">{{$product->name}}</h4>
                        <p class="card-text text-warning">{{$product->description}}</p>
                        <form action="{{route('basketAdd', $product)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-info">Выбрать</button>
                            <span class="text-danger">от {{$product->cost}}</span>
                        </form>
    
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    
        <div class="container-fluid mt-3">
            <form class="p-0 shadow-lg bg-white rounded row pb-3" action="{{route('test')}}" method="POST">
                @csrf
                <h2 class="ml-1 mb-4 mt-2" id="custom">Пицца Кастомс</h2>
                <div class="col d-flex justify-content-between">
                    <div></div>
                    <div class="card border-0">
                        <img src="image/custom.png" width="" alt="">
                        <div class="card-body bg-light mt-3 pb-2">
                            <b class="">
                                Ваша пицца содержит:
                            </b>
                            <div class="d-flex justify-content-between mt-3">
                                <div>
                                    kavo
                                </div>
                                <div>
                                    132
                                </div>
                                
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div>
                                    <input type="submit" class="btn btn-info" placeholder="Выбрать">
                                </div>
                                <div>
                                    <span class="text-end"><h6 class="">Итог:</h6><h6>123</h6></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div></div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end mb-3">
                        <input type="radio" class="btn-check" name="dough" id="option1" autocomplete="off" checked value="Тонкое тесто">
                        <label class="btn btn-outline-info w-50" for="option1">Тонкое тесто</label>
                        <input type="radio" class="btn-check" name="dough" id="option2" autocomplete="off" value="Традиционное тесто">
                        <label class="btn btn-outline-info w-50" for="option2">Традиционное тесто</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="radio" class="btn-check" name="size" id="option1.1" autocomplete="off" checked value="25">
                        <label class="btn btn-outline-info w-25 pt-1 pb-1" for="option1.1">25 см</label>
                        <input type="radio" class="btn-check" name="size" id="option2.1" autocomplete="off" value="35">
                        <label class="btn btn-outline-info w-25 pt-1 pb-1" for="option2.1">35 см</label>
                        <input type="radio" class="btn-check" name="size" id="option3.1" autocomplete="off" value="40">
                        <label class="btn btn-outline-info w-25 pt-1 pb-1" for="option3.1">40 см</label>
                    </div>
                </div>
            </form>
        </div>
        <h2 id="snacks" class="mt-4 pl-3 pr-3">Закуски</h2>
        <div class="row pl-3 pr-3">
            @foreach($products as $product)
            @if ($product->category == 'snacks')
            <div class="col-sm col-md-3 mb-4">
                <div class="card m-0 shadow-lg bg-white rounded" >
    
                    <img src="image/snack.png" class="ml-3 mt-3 mr-3" alt="...">
    
                    <div class="card-body p-3">
                        <h4 class="card-title text-warning font-weight-bold">{{$product->name}}</h4>
                        <div class="d-flex justify-content-between mb-3">
                            <input type="radio" class="btn-check" name="size" id="s" autocomplete="off" checked>
                            <label class="btn btn-outline-info p-0 mr-0" style="width: 33%" for="s">Малая</label>
                            <input type="radio" class="btn-check" name="size" id="m" autocomplete="off">
                            <label class="btn btn-outline-info p-0 mr-0" style="width: 33%" for="m">Среднея</label>
                            <input type="radio" class="btn-check" name="size" id="l" autocomplete="off">
                            <label class="btn btn-outline-info p-0 mr-0" style="width: 33%" for="l">Большая</label>
                        </div>
                        <a href="" class="btn btn-info">Выбрать</a> <span class="text-danger">от {{$product->cost}}</span>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <h2 id="drink" class="mt-4 pl-3 pr-3">Напитки</h2>
        <div class="row pl-3 pr-3">
            @foreach($products as $product)
            @if ($product->category == 'snacks')
            <div class="col-sm col-md-3 mb-4">
                <div class="card m-0 shadow-lg bg-white rounded" >
    
                    <img src="image/snack.png" class="ml-3 mt-3 mr-3" alt="...">
    
                    <div class="card-body p-3">
                        <h4 class="card-title text-warning font-weight-bold">{{$product->name}}</h4>
                        <div class="d-flex justify-content-between mb-3">
                            <input type="radio" class="btn-check" name="size" id="s" autocomplete="off" checked>
                            <label class="btn btn-outline-info p-0 mr-0" style="width: 33%" for="s">Малая</label>
                            <input type="radio" class="btn-check" name="size" id="m" autocomplete="off">
                            <label class="btn btn-outline-info p-0 mr-0" style="width: 33%" for="m">Среднея</label>
                            <input type="radio" class="btn-check" name="size" id="l" autocomplete="off">
                            <label class="btn btn-outline-info p-0 mr-0" style="width: 33%" for="l">Большая</label>
                        </div>
                        <a href="" class="btn btn-info">Выбрать</a> <span class="text-danger">от {{$product->cost}}</span>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </main>
@endsection
