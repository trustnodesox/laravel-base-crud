@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>
            <div class="links">
                <a href="{{route('comics.index')}}">Comics</a>
            </div>
        </div>
    </div>
@endsection
