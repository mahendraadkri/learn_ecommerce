@extends('layouts.app')
@section('content')
@include('layouts.message')
<h2 class="font-bold text-4xl text-blue-700">Edit Gallery</h2>
<hr class="h-1 bg-blue-200">

<form action="{{route('gallery.update',$gallery->id)}}" method="POST" class="mt-5" enctype="multipart/form-data" >
    @csrf
    <input type="text" placeholder="Title" name="title" class="w-full rounded-lg border border-b-2 border-gray-300 " value="{{$gallery->title}}">
    @error('title')
    <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
    @enderror
        
    <p>Current Picture</p>
    <img class="w-90" src="{{asset('images/gallery/',$gallery->photopath)}}" alt="">
    <input type="file" placeholder="photopath" name="photopath" class="w-full rounded-lg border-gray-300 my-2">
    @error('photopath')
    <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
    @enderror

    <div class="flex">
        <input type="submit" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg" value="Edit">
        <a href="{{route('gallery.index')}}" class="bg-red-600 text-white px-10 py-2 mx-2 rounded-lg">Exit</a>
    </div>
</form>

@endsection