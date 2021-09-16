@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Our Blog</h1>
                        <p>Enjoy our post. Click to a post to read.</p>
                    </div>
                    <div class="col-4">
                        <p>Create new post</p>
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
                </div>
                @forelse($posts as $post)
                    <ul>
                        <li>
                            <a href="./blog/{{$post->id}}">{{ucfirst($post->title)}}</a>
                        </li>
                    </ul>
                @empty
                    <p class="text-warning">No blog posts available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection