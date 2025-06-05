<div class="max-w-400 mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="absolute top-0 left-90"><br><br><br><br><br><br><br>
            <div class="w-10/10 bg-white shadow-lg rounded-lg p-6">
                <h1 class="text-5xl font-bold mb-4 text-gray-800">
                <svg class="w-10" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z"></path>
                    </svg>Products</h1><br>
                <div class="relative size-32 ...">
                <div class="absolute top-0 left-240 size-16 ...">
                <flux:button variant="primary" x-data="" href="ShowIngrediant" class="text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:ring-zinc-300 font-medium rounded-lg text-xl px-5 py-2.5 dark:bg-zinc-600 dark:hover:bg-zinc-700 focus:outline-none dark:focus:ring-zinc-800">
                     Ingrediant
                    </flux:button></div>
                <div class="absolute top-0 left-275 size-16 ...">
                    <flux:modal.trigger name="showModal">
                    <flux:button variant="primary" x-data="" wire:click="openModal" class="text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:ring-zinc-300 font-medium rounded-lg text-xl px-5 py-2.5 dark:bg-zinc-600 dark:hover:bg-zinc-700 focus:outline-none dark:focus:ring-zinc-800">
                     Add new Product
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
                <th scope="col" class="px-12 py-3">
                   ID
                </th>
                <th scope="col" class="px-12 py-3">
                    Food Type 
                </th>
                <th scope="col" class="px-12 py-3">
                    Main Category
                </th>
                <th scope="col" class="px-12 py-3">
                    Sub Category
                </th>
                <th scope="col" class="px-12 py-3">
                    Potion
                </th>
                <th scope="col" class="px-12 py-3">
                    Recipe Time
                </th>
                <th scope="col" class="px-12 py-3">
                    Action
                </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $pro)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-12 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$pro->id}}
                </th>
                <td class="px-12 py-4">
                    {{$pro->foodtype}}
                </td>
                <td class="px-12 py-4">
                    {{$pro->maincategory}}
                </td>
                <td class="px-12 py-4">
                    {{$pro->subcategory}}
                </td>
                <td class="px-12 py-4">
                    {{$pro->potion}}
                </td>
                <td class="px-12 py-4">
                    {{$pro->recipetime}}
                </td>
                <td class="px-12 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                </div>
                <br>
                <a href="/" class="font-medium text-black text-right rtl:text-left dark:text-black hover:underline"><svg class="w-8" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"></path>
                </svg></a>
            </div>
        </div>