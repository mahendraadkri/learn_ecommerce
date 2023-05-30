@extends('master')
@section('content')
    

<h2 class="font-bold text-4xl text-center my-5">Our Products</h2>

<div class="grid grid-cols-4 gap-10 px-24 mb-10">

    @foreach($products as $product)
    <div class="bg-gray-100 rounded-lg shadow-lg relative">
        <img src="{{asset('images/products/'.$product->photopath)}}" alt="" class="w-full h-72 object-cover rounded-t-lg">
        <div class="p-2">
            <p class="font-bold text-2xl">{{$product->name}}</p>
            <p class="font-bold text-2xl"><span class="line-through text-gray-500 text-xl">1500/-</span> Rs. {{$product->price}}/-</p>
        </div>
        <p class="absolute top-1 right-1 bg-blue-600 text-white rounded-lg px-4 py-1">20% off</p>
    </div>
    @endforeach
    
</div>
    
@endsection