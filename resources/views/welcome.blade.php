@extends('layouts.main')

@section('main_title')
{{ $title }}
@endsection

@section('content')
<div class="container">
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('link-to-post', $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection

@section('scripts')
    <script>
        console.log('test')
    </script>
@endsection