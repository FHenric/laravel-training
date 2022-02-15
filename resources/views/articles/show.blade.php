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
                        <p class='content block'>{{$article->body}}</p>
                    </div>
            </div>
        </div>
    </div>
@endsection