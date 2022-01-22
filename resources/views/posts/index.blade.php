<x-layout>
    @include('posts._header')


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-posts-grid :posts="$posts"/>
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif

    </main>

</x-layout>




{{-- <x-layout>
    <h1>My posts</h1>
    <?php foreach ($posts as $post) : ?>
    <article>
        <a href="../posts/{{ $post->id }}">
            <h1>
                {{ $post->title; }}
            </h1>
        </a>
        By <a href="../authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="../categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        <div>
            {{ $post->excerpt }}...
            <br>
            <a href="/posts/{{ $post->id }}">Read More</a>
        </div>
    </article>
    <?php endforeach; ?>
</x-layout> --}}
