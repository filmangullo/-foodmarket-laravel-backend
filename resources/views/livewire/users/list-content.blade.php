<div>

    <div class="flex flex-col">
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                <div class="flex justify-between">
                    <div class="p-4">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search" wire:model="search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items">
                        </div>
                    </div>
                    <div class="p-4">
                        <a href="{{ route('users.create') }}" class="py-2 bg-sky-600 hover:bg-sky-900 text-white px-2.5 rounded-md">+ User Create</a>
                    </div>
                </div>
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    #
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Email
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Role
                                </th>
                                <th scope="col" class="p-4">
                                    <span class="sr-only">Action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @forelse ($users as $key => $user)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                <td class="w-4 p-4">
                                    {{ $key+1 }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $user->name }}</td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                    {{ $user->email }}</td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $user->role }}</td>
                                <td
                                    class="flex justify-between px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="#" class="text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="5"
                                    class="px-6 py-4 text-sm font-medium text-center text-gray-900 whitespace-nowrap">No
                                    matching data</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>

</div>
