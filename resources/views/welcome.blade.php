@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($posts as $post)

                        <div class="d-flex align-items-center mt-5">
                            <h1>{{ $post->title }}</h1>
                        </div>
                        <p>{{ $post->desc }}</p>
                        <h2>Blogtype: <span>{{ $post->blogtype->title }}</span></h2>
                        <h2>Created By <span>{{ $post->user->name }}</span></h2>

                @endforeach
            </div>
        </div>
    </div>
@endsection

