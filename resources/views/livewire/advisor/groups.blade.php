<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tailwind CSS Sidebar UI </title>
        <script src="https://cdn.tailwindcss.com/"></script>
    </head>
    <body>
    @if($isOpen)
        @include('livewire.advisor.create-group')
    @endif
    <div class="flex">
        <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">

            <div class="flex flex-col justify-between mt-6">
                <aside>
                    <ul>
                        <li>
                            <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-md " href="/dashboard">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>

                                <span class="mx-4 font-medium">Dashboard</span>
                            </a>
                        </li>


                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"><path d="M21.698 10.658l2.302 1.342-12.002 7-11.998-7 2.301-1.342 9.697 5.658 9.7-5.658zm-9.7 10.657l-9.697-5.658-2.301 1.343 11.998 7 12.002-7-2.302-1.342-9.7 5.657zm0-19l8.032 4.685-8.032 4.685-8.029-4.685 8.029-4.685zm0-2.315l-11.998 7 11.998 7 12.002-7-12.002-7z"/></svg>

                                <span class="mx-4 font-medium">Group</span>
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                <span class="mx-4 font-medium">Settings</span>
                            </a>
                        </li>
                    </ul>

                </aside>


            </div>
        </div>
        <div class="w-full h-full p-4 m-8 overflow-y-auto">
            <h1 class="text-5xl font-semibold">Create Group</h1><br>
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                     role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <button wire:click="create()" type="button" class="flex sm:inline-flex justify-center items-center bg-green-500 hover:bg-green-600 active:bg-green-700 focus-visible:ring ring-green-300 text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Create
            </button><br><br>
            <div class="grid grid-cols-7">
                <div class="col-end-7 col-span-2"><input type="text" class="bg-green-50 border-indigo-500/100 rounded" placeholder="Search..." wire:model="searchTerm"></div>
            </div>




            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-b bg-gray-800 boder-gray-900">
                                <tr>
                                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                        #
                                    </th>
                                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                        Group Name
                                    </th>
                                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                        Section
                                    </th>
                                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                        Year
                                    </th>
                                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                        Course
                                    </th>
                                    <th scope="col" class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($groups as $group)
                                    <tr class="bg-gray-50 border-b border-gray-200">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">{{ $group->id }}</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                            {{ $group->name }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                            {{ $group->section }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                            {{ $group->year }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                            {{ $group->course }}
                                        </td>
                                        <td class="border px-4 py-2">
                                            <button wire:click="edit({{ $group->id }})" class="flex sm:inline-flex justify-center items-center bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus-visible:ring ring-blue-300 text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2 cursor-pointer ">
                                                Edit
                                            </button>
                                            <button wire:click="delete({{ $group->id }})" class="flex sm:inline-flex justify-center items-center bg-gradient-to-tr from-pink-500 to-red-400 hover:from-pink-600 hover:to-red-500 active:from-pink-700 active:to-red-600 focus-visible:ring ring-pink-300 text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2 cursor-pointer">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td>Data not found</td>
                                        </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>

                        {{$groups->links()}}
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
</div>
