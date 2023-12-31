<div x-data="{ show: false }" @click="show = ! show" @click.away="show = false" class="relative">
    {{ $trigger }}

    <div x-show="show" class="py-2 absolute bg-gray-100 w-full rounded-xl mt-2 z-50 overflow-auto max-h-52"
        style="display: none">
        {{ $slot }}
    </div>
</div>
