<x-layout>
    <section class="py-8 max-w-md mx-auto space-y-6">
        <h1 class="text-lg font-bold mb-4">Publish New Post</h1>
        <x-panel>
            <form action="/admin/posts" method="post" class="mt-4" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="thumbnail" type="file" />
                <x-form.textarea name="excerpt" />
                <x-form.textarea name="body" />

                <x-form.field>
                    <x-form.label name="category_id" />
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="category_id">
                        @foreach (App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category_id" />
                </x-form.field>
                <x-form.button>Publish</x-form.button>
        </x-panel>
    </section>
</x-layout>
