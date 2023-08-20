@props(['comment'])
<x-panel class="bg-gray-50">
    <article class="flex space-x-4">
        <div>
            <img src="/images/english.jpg" width="200" height="200" class="flex-shrink-0 rounded-xl">
        </div>

        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->name }}</h3>
                <p class="text-xs">
                    Posted
                    <time>{{ $comment->created_at->diffForHumans() }}</time>
                </p>
            </header>
            <p>{{ $comment->body }}</p>
        </div>
    </article>
</x-panel>
