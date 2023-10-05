@extends('layout')

@section('content')
@include('partials._list')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless(count($booklists) == 0)

@foreach ($booklists as $booklist)
<div class="bg-gray-50 border border-gray-400 rounded p-6">
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href="show.html">{{$booklist->title}}</a>
            </h3>
            <div class="text-xl  mb-4">{{$booklist->description}}</div>
        </div>
    </div>
</div>
{{-- <div class="flex">
    <h2>
        <a href="/booklists/{{$booklist['id']}}">{{$booklist->title}}</a>
    </h2>
    <div class="text-lg mt-4">
        {{$booklist->description}}
    </div>
</div> --}}
    
@endforeach

@else 
<p>No booklists found</p>
@endunless
</div>
@endsection