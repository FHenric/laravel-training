@extends('layout')

@section('content')

        <div class="wrapper">
            <div >
                <h1 class="title">My Articles</h1>
            </div>

            @foreach ($articles as $article)
                <div class='articles'>
                    <a href="{{route('articles.show', $article)}}">
                        <h3 class='title'>{{$article->title}}</h3>
                        <p>{{$article->excerpt}}</p>
                    </a>
                </div>
             
            @endforeach
            
        </div>
    </div>

@endsection