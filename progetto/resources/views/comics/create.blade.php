@extends('layouts.app')
@section('content')
<form class="" action="{{route('comics.store')}}" method="post">
  @csrf
  @method('POST')
  <input type="text" name="" value="">
  <input type="text" name="" value="">
  <input type="text" name="" value="">
  <input type="text" name="" value="">
  <input type="text" name="" value="">
  <input type="text" name="" value="">
  <input type="submit" name="" value="">
</form>
@endsection
