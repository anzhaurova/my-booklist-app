@extends('layout')

@section('content')
<div class="mba:grid mba:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"></div>

@unless(count($booklists) == 0)
@foreach ($booklists as $booklist)
<div class="flex">
    <h2>
        <a href="/booklists/{{$booklist['id']}}">{{$booklist->title}}</a>
    </h2>
    <div class="text-lg mt-4">
        {{$booklist->description}}
    </div>
</div>
    
@endforeach

@else 
<p>No booklists found</p>
@endunless
</div>
@endsection