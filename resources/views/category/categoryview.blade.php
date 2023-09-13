@extends('layouts/mynav')

@section('content')
<div class="container">

    @foreach ($categories as $category)
        <div class="card">
            <div class="card-header">
            {{$category["blog_category"]}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$category["title"]}}</h5>
                <p class="card-text">{{$category["description"]}}</p>
                <p class="card-text">{{$category["more"]}}</p>
                <a href="#" class="btn btn-primary">detail</a>
            </div>
        </div>
        <br>
    @endforeach

</div>
@endsection