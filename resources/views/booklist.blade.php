@extends('layout')

@section('content')


<a href="index.html" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i>Back
</a>
<div class="mx-4">
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <div class="flex flex-col items-center justify-center text-center">
        <h3 class="text-2xl mb-2">{{$booklist->title ?? ""}}</h3>
    </div>
    {{-- <ul>
        <li>{{$booklist->author ?? ""}}</li>
        <li>{{$booklist->title ?? ""}}</li>
    </div> --}}
</div>
</div>

@endsection