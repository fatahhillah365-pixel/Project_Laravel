<x-admin.layout>
    <section class="p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Classroom</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400">Kelola data kelas</p>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="py-3 px-6">NO</th>
                                <th class="py-3 px-6">NAME</th>
                                <th class="py-3 px-6">MAJOR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classrooms as $classroom)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="py-4 px-6">{{ $loop->iteration }}</td>
                                    <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $classroom->name }}</td>
                                    <td class="py-4 px-6">{{ $classroom->major }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-admin.layout>
