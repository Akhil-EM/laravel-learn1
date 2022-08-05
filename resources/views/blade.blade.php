@extends('common.header')

    <h3 class="text-center">example of blade syntax</h3>
    {{-- store css and images in public folder  --}}
    <img src="/images/pizza.png" width="300">
    @if ($availability)
       <p>pizza is available now</p>
    @else
      <p>this pizza is not available now.</p>
    @endif
    <br>
    <h4>pizzas avialable now</h4>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                @foreach ($pizzas as $pizza)
                  <div class="card mb-2">
                    <div class="card-body">
                        <p>name {{$pizza["name"]}} - price {{ $pizza["price"] }} rupees only</p>
                    </div>
                  </div>
                @endforeach
            </div>
            <div class="col-4"></div>
        </div>
    </div>
   
@extends('common.footer')