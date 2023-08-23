<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-xl mx-auto">
            <x-panel>
                <h1 class="font-bold text-center text-xl">Register!</h1>
                <form action="/register" method="post" class="mt-10">
                    @csrf
                    <x-form.input name="name" />
                    <x-form.input name="username" />
                    <x-form.input name="email" type="email" autocomplete="username" />
                    <x-form.input name="pasword" type="pasword" autocomplete="new-password" />
                    <x-form.button>Submit</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
