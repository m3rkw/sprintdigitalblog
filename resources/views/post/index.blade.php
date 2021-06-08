<a href="/post/{{ $post->id }}/edit">Edit post</a>
<br>
<form action="/post/{{ $post->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete post</button>
</form>
<br>
{{ $post->title }}
<br>
{{ $post->content }}

{{-- @foreach ($post->comments as $comment)
    {{ $comment }}
    {{ $comment->author }}
    {{ $comment->comment }}
    {{ $comment->updated_at }}
@endforeach --}}