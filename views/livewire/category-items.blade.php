<div class="max-w-400 mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="absolute top-0 left-100"><br><br><br><br><br><br><br>
            <div class="w-10/10 bg-white shadow-lg rounded-lg p-6">
                <h1 class="text-5xl font-bold mb-4 text-gray-800">
                <svg class="w-10" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"></path>
                    </svg>Categories</h1><br>
                <div class="relative size-32 ...">
                <div class="absolute top-0 left-210 size-16 ...">
                <flux:button variant="primary" x-data="" href="ShowCategory" class="text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:ring-zinc-300 font-medium rounded-lg text-xl px-5 py-2.5 dark:bg-zinc-600 dark:hover:bg-zinc-700 focus:outline-none dark:focus:ring-zinc-800">
                     Category
                    </flux:button></div>
                <div class="absolute top-0 left-245 size-16 ...">
                    <flux:modal.trigger name="showModal">
                    <flux:button variant="primary" x-data="" wire:click="openModal" class="text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:ring-zinc-300 font-medium rounded-lg text-xl px-5 py-2.5 dark:bg-zinc-600 dark:hover:bg-zinc-700 focus:outline-none dark:focus:ring-zinc-800">
                     Add new Category
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
                <input wire:model="s" type="search" id="table-search" class="block pt-2 ps-10 text-xl text-gray-900 border border-gray-300 rounded-lg w-50 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                </div>
                <br>
                </div>
                <div class="relative overflow-x-auto shadow-md lg:rounded-lg">
                <table class="w-full text-xl text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                <th scope="col" class="px-15 py-3">
                    Raw Item
                </th>
                <th scope="col" class="px-15 py-3">
                    Category ID
                </th>
                <th scope="col" class="px-15 py-3">
                    Items
                </th>
                <th scope="col" class="px-15 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-15 py-3">
                    Unit
                </th>
                <th scope="col" class="px-15 py-3">
                    Action
                </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($categories as $cat)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-15 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $cat->good->raw_item ?? 'N/A' }}
                </th>
                <th scope="row" class="px-15 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$cat->id}}
                </th>
                <td class="px-15 py-4">
                    {{$cat->items}}
                </td>
                <td class="px-15 py-4">
                    {{$cat->quantity}}
                </td>
                <td class="px-15 py-4">
                    {{$cat->units}}
                </td>
                <td class="px-15 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
                <br>
                <a href="/ShowGood" class="font-medium text-black text-right rtl:text-left dark:text-black hover:underline"><svg class="w-8" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"></path>
                </svg></a>
            </div>
<div class="max-w-400 mx-auto py-8 px-4 sm:px-6 lg:px-8 flex space-x-6 justify-center">
            <flux:modal name="confirmItemAdd" :show="$errors" focusable class="max-w-400">
            <div><br><br>
                <flux:heading size="xl">{{ __('Add New Item') }}</flux:heading>
            </div><br>
            <label for="goodId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Raw ID</label>
  <select id="goodId" wire:model.defer="category.good_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-zinc-500 focus:border-zinc-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zinc-500 dark:focus:border-zinc-500">
    <option>Select Raw ID</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select><br>
        <flux:input
            wire:model="item"
            :label="__('Item')"
            type="text"
            required
            wire:model.defer="category.items"
            :placeholder="__('Item Name')"
        /><br>
        <flux:input
            wire:model="quantity"
            :label="__('Quantity')"
            type="number"
            required
            wire:model.defer="category.quantity"
            :placeholder="__('Quantity')"
        /><br>
        <label for="units" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Units</label>
  <select id="category.units" wire:model.defer="category.units" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-zinc-500 focus:border-zinc-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zinc-500 dark:focus:border-zinc-500">
    <option>Select Unit</option>
    <option>Gram</option>
    <option>Kilo Gram</option>
    <option>Mili Leter</option>
    <option>Leter</option>
  </select><br>
            <div class="flex justify-end space-x-7 rtl:space-x-reverse">
                <flux:modal.close>
                <a href="/ShowCategory" class="text-white bg-zinc-500 hover:bg-zinc-600 focus:ring-0 focus:ring-zinc-100 font-medium rounded-sm text-sm px-3 py-2.5 dark:bg-zinc-400 dark:hover:bg-zinc-500 focus:outline-none dark:focus:ring-zinc-600">Cancel</a>
                </flux:modal.close>
                <flux:button wire:click=saveItem() >{{ __('Save') }}</flux:button>
            </div>
    </flux:modal>
</div>
        </div>
</div>
