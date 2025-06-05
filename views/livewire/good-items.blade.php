<div class="max-w-400 mx-auto py-8 px-4 sm:px-6 lg:px-8 flex space-x-6 justify-center">
<div class="absolute top-0 left-100"><br><br>
    <div class="w-10/10 bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-5xl font-bold mb-4 text-gray-800">
        <svg class="w-10" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"></path>                
        </svg>Goods</h1><br>
            <div class="relative size-32 ...">
                <div class="absolute top-0 left-220 size-16 ...">
                <flux:button variant="primary" x-data="" href="ShowCategory" class="text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:ring-zinc-300 font-medium rounded-lg text-xl px-5 py-2.5 dark:bg-zinc-600 dark:hover:bg-zinc-700 focus:outline-none dark:focus:ring-zinc-800">
                     Category
                    </flux:button></div>
                <div class="absolute top-0 left-255 size-16 ...">
                    <flux:modal.trigger name="showModal">
                    <flux:button variant="primary" x-data="" wire:click="openModal" class="text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:ring-zinc-300 font-medium rounded-lg text-xl px-5 py-2.5 dark:bg-zinc-600 dark:hover:bg-zinc-700 focus:outline-none dark:focus:ring-zinc-800">
                     Add new Raw Item
                    </flux:button>
                    </flux:modal.trigger>
                </div>
                </div>
                <div>
                <input wire:model.debounce.300ms="q" type="search" placeholder="Search" class="block pt-3 ps-5 text-xl text-gray-900 border border-gray-300 rounded-lg w-50 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <br><br>
                <div class="relative overflow-x-auto shadow-md lg:rounded-lg">
                <table class="w-full text-xl text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                <th scope="col" class="px-30 py-3">
                    ID
                </th>
                <th scope="col" class="px-30 py-3">
                    Raw Types
                </th>
                <th scope="col" class="px-30 py-3">
                    Raw Items
                </th>
                <th scope="col" class="px-30 py-3">
                    Action
                </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($goods as $good)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-30 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$good->id}}
                </th>
                <td class="px-30 py-4">
                    {{$good->raw_type}}
                </td>
                <td class="px-30 py-4">
                    {{$good->raw_item}}
                </td>
                <td class="px-30 py-4">
                    <a href="#" class="font-medium text-zinc-600 dark:text-zinc-500 hover:underline">Edit</a>
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
    <div class="max-w-400 mx-auto py-8 px-4 sm:px-6 lg:px-8 flex space-x-6 justify-center"><br><br>
            <flux:modal wire:model="showModal" name="showModal" :show="$errors" focusable class="max-w-400 mx-auto py-8 px-4 lg:px-6 lg:px-8 flex space-x-6 justify-center">
            <form wire:submit.prevent="saveGood" class="flex flex-col gap-6 max-w-400 mx-auto py-8 px-4 lg:px-6 lg:px-8 flex space-x-6 justify-center">
            <div>
                <flux:heading size="xl">{{ __('Add New Raw Item') }}</flux:heading>
            </div>
        <flux:input
            :label="__('Raw Type')"
            type="text"
            required
            wire:model.defer="newGood.raw_type"
            :placeholder="__('Raw Type')"
        />
        <flux:input
            :label="__('Raw Item')"
            type="text"
            required
            wire:model.defer="newGood.raw_item"
            :placeholder="__('Raw Item')"
        />
            <div class="flex justify-end space-x-7 rtl:space-x-reverse">
                <flux:modal.close>
                <a href="/ShowGood" class="text-white bg-zinc-500 hover:bg-zinc-600 focus:ring-0 focus:ring-zinc-100 font-medium rounded-sm text-sm px-3 py-2.5 dark:bg-zinc-400 dark:hover:bg-zinc-500 focus:outline-none dark:focus:ring-zinc-600">Cancel</a>
                </flux:modal.close>
                <flux:button type="submit" >{{ __('Save') }}</flux:button>
            </div>
</form>
    </flux:modal>
</div>
</div>
