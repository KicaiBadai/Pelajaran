@extends('layout')

@section('content')
    <div class="container">
        <h1>{{__('messages.posts.editpost')  }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.update', $post->id) }}" 
            method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">{{__('messages.posts.title')  }}</label>
                <input type="text" class="form-control" id="title" 
                    name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="content">{{__('messages.posts.content')  }}</label></label>
                <textarea class="form-control" id="content" name="content">
                    {{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection