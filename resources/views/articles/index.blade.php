@extends('layout')

@section('content')

        <div class="wrapper">
            <div >
                <h1 class="title">My Articles</h1>
            </div>

            @forelse ($articles as $article)
                <div class='articles'>
                    <a href="{{ $article->path() }}">
                        <h3 class='title'>{{$article->title}}</h3>
                        <p>{{$article->excerpt}}</p>
                    </a>
                </div>
             @empty
                 <p>Nenhum artigo com essa tag foi encontrado. <a href="{{route('articles.index')}}">Volte para a página principal</a></p>
            
            @endforelse
            
        </div>
    </div>

@endsection