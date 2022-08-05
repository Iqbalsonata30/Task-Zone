<x-guest-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    <x-navbar page-active="{{ $title }}" />
    <x-article tag="{{ $data->tag }}" date="{{ $data->created_at }}" title="{{ $data->title }}"
        contain="{{ $data->contain }}" />
</x-guest-layout>
