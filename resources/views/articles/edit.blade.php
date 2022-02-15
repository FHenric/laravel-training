@extends('layout')

@section('content')

        <div id="wrapper">
            <div >
                <h1 class="title">Update article</h1>

                <form method="POST" action="/articles/{{$article->id}}">
                    {{-- csrf é necessário para POST por encriptar o código e permitir que a ação seja feita sem retornar um '419 error' --}}
                    @csrf
                    {{-- para fazer um update ao invez de colocar o PUT no method do form, o imput é inserido através do blade --}}
                    @method('PUT')

                    <div class="field">
                        <label class='label' for="title">Title</label>

                        <div class="control">
                            <input 
                            type="text" 
                            class='input @error('title') is-danger @enderror' 
                            name="title" 
                            id="title" 
                            value='{{$article->title}}' 
                            required/>
                            @error ('title')
                                <p class="help is-danger">{{$errors->first('title')}}</p>    
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class='label' for="excerpt">Excerpt</label>

                        <div class="control">
                            <textarea 
                            class="textarea @error('excerpt') is-danger @enderror" 
                            name="excerpt" 
                            id="excerpt" 
                            required
                            >{{$article->body}}</textarea>

                            @error ('excerpt')
                                <p class="help is-danger">{{$errors->first('title')}}</p>    
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class='label' for="body">Body</label>

                        <div class="control">
                            <textarea 
                            class="textarea @error('body') is-danger @enderror" 
                            name="body" 
                            id="body" 
                            required
                            >{{$article->body}}</textarea>
                        </div>

                        @error ('body')
                            <p class="help is-danger">{{$errors->first('title')}}</p>    
                         @enderror
                    </div>

                    <div class="field is-grounded">
                        <div class="control">
                            <button type="submit" class='button is-link'>Submit</button>
                        </div>
                    </div>

                </form>
            </div>
            
        </div>
    </div>

@endsection