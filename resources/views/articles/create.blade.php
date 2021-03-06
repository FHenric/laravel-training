@extends('layout')

@section('content')

        <div id="wrapper">
            <div >
                <h1 class="title">Create an article</h1>

                <form method="POST" action="/articles">
                    @csrf
                    <div class="field">
                        <label class='label' for="title">Title</label>

                        <div class="control">
                            <input 
                            type="text" 
                            class='input @error('title') is-danger @enderror' 
                            name="title" 
                            id="title"
                            value="{{old('title')}}"
                            >
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
                            >{{old('excerpt')}}</textarea>
                            @error ('excerpt')
                                <p class="help is-danger">{{$errors->first('excerpt')}}</p>   
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
                            >{{old('body')}}</textarea>
                            @error ('body')
                                <p class="help is-danger">{{$errors->first('body')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">

                        <label class='label' for="tags">Tags</label>

                        <div class="select is-multiple control">
                            <select name="tags[]" multiple>
                                @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                            @error ('tags')
                                <p class="help is-danger">{{$message}}</p>
                            @enderror
                        </div>
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