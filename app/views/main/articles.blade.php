@extends('main.layout')

@section('content')

    <div class="col-md-12">
        <h1>{{$pageName}}</h1>
    </div>
    <ul>
    @foreach ($articles as $key=>$article)
        <li><a href="/laravel/task1/public/index.php/article/{{$key}}">{{ $article['title'] }}</a></li>
    @endforeach
    </ul>
@stop