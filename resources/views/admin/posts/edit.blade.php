@extends('layouts/admin')

@section('content')
    <main class="container">
        <form action="{{route('admin.posts.update', $post)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="text-center mt-4">
                <h1>Modifica il post</h1>
            </div>

            <div class="mt-5">
                <div class="mb-4">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title', $post->title)}}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="content">Contenuto</label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" cols="30" rows="10">{{old('content', $post->content)}}</textarea>
                    @error('content')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="btn-container d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </form>
    </main>
@endsection