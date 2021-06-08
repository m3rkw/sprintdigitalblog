<h1>Create a post</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="/post" method="POST">
    @csrf
    <h3>Your Name</h3>
    <input name="author" type="text">
    <h3>Title</h3>
    <input name="title" type="text">
    <h3>Blog post</h3>
    <textarea name="content"></textarea>
    <button type="submit">Submit post</button>
</form>