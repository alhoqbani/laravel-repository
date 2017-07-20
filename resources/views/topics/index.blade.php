@foreach($topics as $topic)
    <h2>{{$topic->title}}</h2>

    @foreach($topic->posts as $post)
        <p>{{$post->body}} - <strong>{{$post->user->name}}</strong></p>
    @endforeach

@endforeach