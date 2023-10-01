@extends('layout')

@section('content')
<h1>{{$heading}}</h1>

@unless(count($booklists) == 0)
@foreach ($booklists as $booklist)
    <h2>
        <a href="/booklists/{{$booklist['id']}}">{{$booklist['title']}}</a>
    </h2>
    <p>
        {{$booklist['description']}}
    </p>
@endforeach

@else 
<p>No booklists found</p>
@endunless

@endsection