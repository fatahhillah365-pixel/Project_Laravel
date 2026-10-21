<x-admin.layout>

    @php

    @endphp

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">

        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

            <!-- Card -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

                <!-- Top -->
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

                    <!-- Search -->
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">
                                Search
                            </label>

                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>

                                <input type="text" id="simple-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Search student...">
                            </div>
                        </form>
                    </div>

                    <!-- Button -->
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3">

                        <button type="button"
                            class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">

                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" />
                            </svg>

                            Add Student
                        </button>

                        <!-- Actions -->
                        <div class="flex items-center space-x-3 w-full md:w-auto">

                            <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                type="button">

                                Actions

                                <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div id="actionsDropdown"
                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">

                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Export
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Print
                                        </a>
                                    </li>
                                </ul>

                                <div class="py-1">
                                    <a href="#"
                                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        Delete all
                                    </a>
                                </div>
                            </div>

                            <!-- Filter -->
                            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                type="button">

                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    class="h-4 w-4 mr-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V16a1 1 0 01-.293.707l-2 2A1 1 0 018 18v-6.586L3.293 6.707A1 1 0 013 6V3z"
                                        clip-rule="evenodd" />
                                </svg>

                                Filter

                                <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div id="filterDropdown"
                                class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">

                                <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                    Choose classroom
                                </h6>

                                <ul class="space-y-2 text-sm">

                                    <li class="flex items-center">
                                        <input id="pplg1" type="checkbox"
                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">

                                        <label for="pplg1"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                            11 PPLG 1
                                        </label>
                                    </li>

                                    <li class="flex items-center">
                                        <input id="pplg2" type="checkbox"
                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">

                                        <label for="pplg2"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                            11 PPLG 2
                                        </label>
                                    </li>

                                    <li class="flex items-center">
                                        <input id="pplg3" type="checkbox"
                                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">

                                        <label for="pplg3"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                            11 PPLG 3
                                        </label>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                            
                                <th scope="col" class="px-4 py-3">
                                    NIS
                                </th>

                                <th scope="col" class="px-4 py-3">
                                    Name
                                </th>

                                <th scope="col" class="px-4 py-3">
                                    Classroom
                                </th>

                                <th scope="col" class="px-4 py-3">
                                    Action
                                </th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($students as $student)
                                <tr class="border-b dark:border-gray-700">

                                    <td class="px-4 py-3">
                                        {{ $student['nis'] }}
                                    </td>

                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $student['name'] }}
                                    </th>


                                    <td class="px-4 py-3">
                                        {{ $student['classroom'] }}
                                    </td>

                                    <td class="px-4 py-3">

                                        <button type="button"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-3">
                                            Edit
                                        </button>

                                        <button type="button"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                            Delete
                                        </button>

                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

                <!-- Pagination -->
                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                    aria-label="Table navigation">

                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">

                        Showing

                        <span class="font-semibold text-gray-900 dark:text-white">
                            1-10
                        </span>

                        of

                        <span class="font-semibold text-gray-900 dark:text-white">
                            10
                        </span>

                    </span>

                    <ul class="inline-flex items-stretch -space-x-px">

                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">

                                <span class="sr-only">
                                    Previous
                                </span>

                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">

                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />

                                </svg>

                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                                1
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                2
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                3
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">

                                <span class="sr-only">
                                    Next
                                </span>

                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">

                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />

                                </svg>

                            </a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </section>

</x-admin.layout>
