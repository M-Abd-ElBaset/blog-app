@props(['name', 'type' => 'text'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <textarea type="text" class="border border-gray-200 rounded w-full" name="{{ $name }}" id="{{ $name }}">
        {{ $slot ?? old($name) }}
    </textarea>
    <x-form.error name="{{ $name }}" />
</x-form.field>
