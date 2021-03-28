@extends('layouts.main')

@section('content')
<div class="container">
    @if($post)
    <div class="row">
        <div class="col-sm-6">
            <b>{{ $post->title }}</b>
            <hr>
            <p>{{ $post->body }}</p>
        </div>
    </div>
    @else
        No post available
    @endif
</div>
@endsection