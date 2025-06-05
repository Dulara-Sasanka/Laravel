<div class="max-w-400 mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="absolute top-0 left-80"><br><br><br><br><br><br><br>
            <div class="w-9/10 bg-white shadow-lg rounded-lg p-6">
                <h1 class="text-5xl font-bold mb-4 text-gray-800">
                <svg class="w-10" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"></path>
                </svg>Suppliers</h1><br>
                <div class="relative size-32 ...">
                <div class="absolute top-0 left-270 size-16 ...">
                    <flux:modal.trigger name="showModal">
                    <flux:button variant="primary" x-data="" wire:click="$set('showModal', true)" class="text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:ring-zinc-300 font-medium rounded-lg text-xl px-5 py-2.5 dark:bg-zinc-600 dark:hover:bg-zinc-700 focus:outline-none dark:focus:ring-zinc-800">
                     Add new Supplier
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
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    First Name 
                </th>
                <th scope="col" class="px-6 py-3">
                    Last Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Contact Number 1
                </th>
                <th scope="col" class="px-6 py-3">
                    Contact Number 2
                </th> <th scope="col" class="px-6 py-3">
                    Products ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Payment Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($suppliers as $supplier)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$supplier->id}}
                </th>
                <td class="px-6 py-4">
                    {{$supplier->first_Name}}
                </td>
                <td class="px-6 py-4">
                    {{$supplier->last_Name}}
                </td>
                <td class="px-6 py-4">
                    {{$supplier->email}}
                </td>
                <td class="px-6 py-4">
                    {{$supplier->address}}
                </td>
                <td class="px-6 py-4">
                    {{$supplier->mobile1}}
                </td>
                <td class="px-6 py-4">
                    {{$supplier->mobile2}}
                </td>
                <td class="px-6 py-4">
                    {{$supplier->I_id}}
                </td>
                <td class="px-6 py-4">
                    {{$supplier->payment_Type}}
                </td>
                <td class="px-6 py-4">
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
            <div class="max-w-400 mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="max-w-400 mx-auto py-8 px-4 sm:px-6 lg:px-8 flex space-x-6 justify-center">
            <flux:modal wire:model="showModal" name="showModal" :show="$errors" focusable class="max-w-400 mx-auto py-8 px-4 lg:px-6 lg:px-8 flex space-x-6 justify-center">
                <nav class=" bg-gray-600  fixed w-full z-20 top-0 start-0 border-b border-gray-200 border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div>
                <flux:heading size="xl" class="text-white flex space-x-6 justify-center">{{ __('Add New Supplier') }}</flux:heading>
            </div>
        </div>
        </nav><br><br>
        <form wire:submit.prevent="saveSupplier" class="flex flex-col gap-6 max-w-400 mx-auto py-8 px-4 lg:px-6 lg:px-8 flex space-x-6 justify-center"><br><br><br>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">First name</label>
            <input type="text" id="first_name" wire:model="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="John" required />
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Last name</label>
            <input type="text" id="last_name" wire:model="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Doe" required />
        </div>
        <div>
            <label for="email" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="email" required />
        </div>  
                <div>
            <label for="address" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Address</label>
            <input type="text" id="address" wire:model="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Yanthampalawa,Kurunegala" required />
        </div>
       <div>
            <label for="mobile1" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Phone number 01</label>
            <input type="tel" id="mobile1" wire:model="mobile1" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
        </div>
        <div>
            <label for="mobile2" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Phone number 02</label>
            <input type="text" id="mobile2" wire:model="mobile2" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="876-54-123" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
        </div>
        <div>
        <label for="product_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Select an option</label>
  <select id="product_name" wire:model="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500">
    <option selected>Choose a Product</option>
    <option value="US">United States</option>
    <option value="CA">Canada</option>
    <option value="FR">France</option>
    <option value="DE">Germany</option>
  </select>
</div>
        <div> 
<label for="payment_Type" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Select a Payment Type</label>
  <select id="product_name" wire:model="payment_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500">
    <option value="CA">Cash</option>
    <option value="CR">Card</option>
    <option value="BO">Both</option>
  </select>
</div> 
</div>
            <div class="flex justify-end space-x-7 rtl:space-x-reverse">
                <flux:modal.close>
                <flux:button variant="primary" x-data="" href="ShowSupplier" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xl px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                     Cancel
                    </flux:button>
                </flux:modal.close>
                <flux:button variant="primary" wire:click="saveSupplier()" class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-xl px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800" >{{ __('Save') }}</flux:button>
            </div>
            </form>
           </flux:modal>
           </div>
</div>

