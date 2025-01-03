@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'inline-flex items-center px-1 pt-1 pb-2 border-b-2 border-indigo-400 dark:border-bleu text-sm font-medium leading-5 text-bleu dark:text-bleu focus:outline-none focus:border-bleu transition duration-150 ease-in-out'
        : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-bleu dark:text-gray-400 hover:text-bleu dark:hover:text-bleu  focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>