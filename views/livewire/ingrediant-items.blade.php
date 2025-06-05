<div class="max-w-400 mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="absolute top-0 left-90"><br><br><br><br><br><br><br>
            <div class="w-10/10 bg-white shadow-lg rounded-lg p-6">
                <h1 class="text-5xl font-bold mb-4 text-gray-800">
                <svg class="w-10" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3"></path>
                </svg>Ingrediants</h1><br>
                <div class="relative size-32 ...">
                <div class="absolute top-0 left-270 size-16 ...">
                    <flux:modal.trigger name="showModal">
                    <flux:button variant="primary" x-data="" wire:click="$set('showModal', true)" class="text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:ring-zinc-300 font-medium rounded-lg text-xl px-5 py-2.5 dark:bg-zinc-600 dark:hover:bg-zinc-700 focus:outline-none dark:focus:ring-zinc-800">
                     Add new Ingrediant
                    </flux:button>
                    </flux:modal.trigger>
                </div>
                </div>
                <div class="pb-4 bg-white dark:bg-gray-900">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                </div>
                <input type="search" id="table-search" class="block pt-2 ps-10 text-xl text-gray-900 border border-gray-300 rounded-lg w-50 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                </div>
                <br>
                </div>
                <div class="relative overflow-x-auto shadow-md lg:rounded-lg">
                <table class="w-full text-xl text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                <th rowspan="2" scope="col" class="px-6 py-3">
                    Product ID
                </th>
                <th rowspan="2" scope="col" class="px-6 py-3">
                    Ingrediant ID 
                </th>
                <th colspan="10" scope="col" class="px-6 py-3 text-center">
                    Ingrediants
                </th>
                <th rowspan="2" scope="col" class="px-6 py-3">
                    Action
                </th>
                <tr>
                    <th scope="col" class="px-6 py-3">1st</th>
                    <th scope="col" class="px-6 py-3">2nd</th>
                    <th scope="col" class="px-6 py-3">3rd</th>
                    <th scope="col" class="px-6 py-3">4th</th>
                    <th scope="col" class="px-6 py-3">5th</th>
                    <th scope="col" class="px-6 py-3">6th</th>
                    <th scope="col" class="px-6 py-3">7th</th>
                    <th scope="col" class="px-6 py-3">8th</th>
                    <th scope="col" class="px-6 py-3">9th</th>
                    <th scope="col" class="px-6 py-3">10th</th>
                    </tr>
                </tr>
                </thead>
                <tbody>
                    @foreach($ingrediants as $ing)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$ing->pro_id}}
                </th>
                <td class="px-6 py-4">
                    {{$ing->id}}
                <td class="px-6 py-4">
                    {{$ing->a}}
                </td>
                <td class="px-6 py-4">
                    {{$ing->b}}
                </td>
                <td class="px-6 py-4">
                    {{$ing->c}}  
                </td>
                <td class="px-6 py-4">
                    {{$ing->d}} 
                </td>
                <td class="px-6 py-4">
                    {{$ing->e}} 
                </td>
                <td class="px-6 py-4">
                    {{$ing->f}}  
                </td>
                <td class="px-6 py-4">
                   {{$ing->g}} 
                </td>
                <td class="px-6 py-4">
                    {{$ing->h}} 
                </td>
                <td class="px-6 py-4">
                    {{$ing->i}} 
                </td>
                <td class="px-6 py-4">
                     {{$ing->j}}
                </td>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                </div>
                <br>
                <a href="/ShowProduct" class="font-medium text-black text-right rtl:text-left dark:text-black hover:underline"><svg class="w-8" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"></path>
                </svg></a>
            </div>
        </div>