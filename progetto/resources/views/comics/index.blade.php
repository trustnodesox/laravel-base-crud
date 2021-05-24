@extends('layouts.app')
@section('content')
@foreach ($comics as $comic)
<div class="card">
  <h4>{{$comic->title}}</h4>
  <div class="img">
    <img src="{{$comic->thumb}}" alt="">
  </div>
  <p>{{$comic->series}}</p>
   <a href="{{route('comics.show', ['comic' => $comic->id])}}">More Infos!</a>
</div>
@endforeach
<a href="{{route('comics.create')}}">Add one</a>
@endsection
