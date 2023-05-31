@extends('master')
@section('content')
    <div class="grid grid-cols-3 px-44 gap-10 my-10">
        <div>
            <img src="{{asset('images/products/'.$product->photopath)}}" alt="" class="w-full h-96 object-cover rounded-lg">
        </div>
        <div class="border-l-2 px-2 col-span-2">
            <h2 class="text-3xl">{{$product->name}}</h2>
            @if ($product->oldprice != '')
            <p class="text-red-700 line-through text-lg">Rs. {{$product->oldprice}}/- </p>   
            @endif
           
            <p class="text-red-700 text-2xl font-bold">{{$product->price}} </p>
            <p>Quality</p>
            <p class="mt-4 flex items-center">
                <span class="bg-gray-200 px-4 py-2 font-bold text-xl">-</span>
                <input class="h-11 w-12 px-0 text-center border-0 bg-gray-100" type="number" value="1" disabled>
                <span class="bg-gray-200 px-4 py-2 font-bold text-xl">+</span>
                <p>In Stock: {{$product->stock}}</p>
            </p>
            <div class="mt-4">
                <a href="" class="bg-indigo-600 text-white px-6 py-2 rounded-lg shadow">Add to Cart</a>
            </div>

        </div>
    </div>
    <div class="px-44 my-10">
        <h2 class="font-bold text-2xl">About this Product</h2>
        <p>{{$product->description}}</p>
    </div>
@endsection