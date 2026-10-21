@php
    $isActive = request()->is(ltrim($href, '/'));
@endphp

<li>
    <a href="{{ $href }}"
        @class([
            'flex items-center p-2 text-base font-medium rounded-lg transition duration-75 group',
            'text-gray-900 dark:bg-gray-700 dark:text-white' => $isActive,
            'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' => !$isActive,
        ])>

        <svg
            aria-hidden="true"
            class="w-6 h-6 transition duration-75"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
        >
            {!! $icon !!}
        </svg>

        <span class="ml-3">{{ $label }}</span>
    </a>
</li>
