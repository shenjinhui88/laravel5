@extends('app')
@section('content')
    <h1>Articles</h1>
    <hr>
    @foreach($articles as $article)
    <h2><a href="{{url('articles',$article->id)}}">{{$article->title}}</a></h2>
    <aeticle>
        <div class="body">
            {{$article->content}}
        </div>
    </aeticle>
        <time>
            {{$article->published_at}}
        </time>
    @endforeach

    <a href="{{url('/articles/create')}}" class="btn btn-primary form-control"> 发表文章</a>
@stop