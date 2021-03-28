@foreach($posts as $post)
<div>
 <p><b>{{ $post->title }}</b></p>
 <p> {{ $post->body }}</p>
</div>
<hr>
@endforeach