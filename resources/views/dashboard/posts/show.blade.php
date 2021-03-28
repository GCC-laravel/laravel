@extends('layouts.dashboard')

@section('page-title')
Post #{{ $post->id }}
@endsection

@section('content')
<div class="flex flex-wrap">
    <div class="w-full p-6">
        <form class="mb-6" action="{{ route('dashboard.posts.update', $post->id) }}" 
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="title">Title</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="title" id="title" value="{{ $post->title }}">
                @error('title')
                <p class="text-red-700 p-2 m-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="body">Body</label>
                <textarea class="border py-2 px-3 text-grey-darkest" name="body" id="body">{{ $post->body }}</textarea>
                @error('body')
                <p class="text-red-700 p-2 m-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="image">Image</label>
              <input class="border py-2 px-3 text-grey-darkest" type="file" name="image" id="image">
              @error('image')
              <p class="text-red-700 p-2 m-2">{{ $message }}</p>
              @enderror
            </div>
            @if($post->image)
            <div>
                <input type="hidden" value="{{ $post->image }}" name="old_image">
                <img class="object-scale-down h-48" src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}">
            </div>
            @endif
            <button class="block bg-teal hover:bg-teal-dark text-blue-600 uppercase text-lg mx-auto p-4 rounded" type="submit">Update Post</button>
          </form>
    </div>
</div>
@endsection