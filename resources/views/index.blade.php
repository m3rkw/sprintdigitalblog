<a href="/post/create">Create Post</a>
<br>
@if (session()->has('message'))
    {{ session()->get('message') }}
@endif
<br><br>
@foreach ($posts as $post)
    <p>
        Posted by {{ $post->author }} on {{ date('F j, Y, g:i a', strtotime($post->updated_at)) }}
    </p>
    <a href="/post/{{ $post->id }}"><p>{{ $post->title }}</p></a>
    <p>{{ $post->content }}</p>
    <br>
@endforeach

