<x-admin.layout>

    <div class="p-4">
        @foreach ($about as $item)
                <h1 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    {{ $item['title'] }}
                </h1>

                <p class="mb-2 text-gray-600 dark:text-gray-300">
                    Nama : {{ $item['nama'] }}
                </p>

                <p class="mb-2 text-gray-600 dark:text-gray-300">
                    Kelas : {{ $item['kelas'] }}
                </p>

                <p class="text-gray-600 dark:text-gray-300">
                    Repository :
                    <a href="{{ $item['repositori'] }}"
                       target="_blank"
                       class="text-blue-600 hover:underline">
                        GitHub
                    </a>
                </p>
        @endforeach
    </div>

</x-admin.layout>
