@extends('layout')

@section('content')

    <div>
        <div >
            <div class='wrapper'>
                <!-- Se eu lançar um script na requisição da url como o $name, a requisição vai sair como texto, evitando acessar coisas através do url -->
                    <div>
                        <h2 class='title block'>{{$article->title}}</h2>
                    </div>

                    <div>
                        <h5 class='block'>{{$article->body}}</h5>
                    </div>

                    <p>
                        @foreach ($article->tags as $tag)
                            <a href="{{route('articles.index', ['tag' => $tag->name])}}">{{$tag->name}}</a>
                        @endforeach
                    </p>
            </div>
        </div>
    </div>
@endsection