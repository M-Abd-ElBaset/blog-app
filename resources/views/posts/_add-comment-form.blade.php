@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf
            <header class="flex items-center">
                <img src="/images/english.jpg" width="40" height="40" class="flex-shrink-0 rounded-full">
                <h2 class="ml-5">Want to participate?</h2>
            </header>
            <div class="mt-2">
                <textarea rows="6" class="mt-10 w-full focus:outline-none focus:ring text-sm" name="body"
                    placeholder="Quick, think of something to say!" required></textarea>
                <x-form.error name="body" />
            </div>
            <div class="flex justify-end mt-6 pt-6 border-t border-grey-100">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/login" class="hover:underline">Login</a> or <a href="/register" class="hover:underline">Register</a> to
        leave a comment!
    </p>
@endauth
