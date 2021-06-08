<h1>Update post</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="/post/{{ $post->id }}" method="POST">
    @csrf
    @method('PATCH')
    <h3>Your Name</h3>
    <input name="author" disabled value="{{ $post->author }}" type="text">
    <h3>Title</h3>
    <input name="title" value="{{ $post->title }}" type="text">
    <h3>Blog post</h3>
    <textarea name="content">{{ $post->content }}</textarea>
    <button type="submit">Submit post</button>
</form>