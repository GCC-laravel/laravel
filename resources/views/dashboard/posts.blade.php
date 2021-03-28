@extends('layouts.dashboard')
@section('page-title')
Posts
@endsection
@section('content')
<div class="flex flex-wrap">
    <div class="w-full p-6">

@foreach($posts as $post)
<div class="block p-5 mx-3">
    <p><a href="{{ route('dashboard.posts.show', $post->id) }}">{{ $post->id . ' - ' . $post->title }}</a></p>
    <hr>
</div>

 @endforeach
 {{ $posts->links() }}
    </div>
</div>
@endsection