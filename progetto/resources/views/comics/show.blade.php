@extends('layouts.app')
@section('content')
<div class="card">
  <h4>{{$comic->title}}</h4>
  <div class="img">
    <img src="{{$comic->thumb}}" alt="">
  </div>
  <p>{{$comic->series}}</p>
  <p>{{$comic->description}}</p>
  <p>{{$comic->type}}</p>
  <p>{{$comic->sale_date}}</p>
  <p>{{$comic->price}}</p>
   <a href="{{route('comics.show', ['comic' => $comic->id])}}">More Infos!</a>
</div>
@endsection
