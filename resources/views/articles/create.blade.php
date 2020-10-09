@extends ('layout')

@section('content')
    <div id="wrapper">
    
        <div id="page" class="container">
            <h1>New Article</h1>
            <form method="POST" action="/articles">
            @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" type="text"  name="title" id="title" value="{{ old('title') }}">
                        
                        @if ($errors->has('title'))
                        <p>{{ $errors->first('title') }}</p>
                        @endif

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>

                        @if ($errors->has('excerpt'))
                        <p>{{ $errors->first('excerpt') }}</p>
                        @endif

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea" name="body" id="body">{{ old('body') }}</textarea>

                        @if ($errors->has('body'))
                        <p>{{ $errors->first('body') }}</p>
                        @endif

                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection