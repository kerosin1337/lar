@extends('kavo')


@section('main')
<div style="">
    <hr class="m-0 mb-3">
    <h2 class="mt-4 pl-3 pr-3">Корзина</h2>
    @foreach ($order->products as $product)
    <div class="card">
        <div class="row g-0">
            <div class="col-md-2">
              <img src="{{asset('image/pizza.png')}}" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
    </div>
    @endforeach
</div>
@endsection

