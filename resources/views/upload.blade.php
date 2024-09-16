<x-app-layout title="Upload File">
    <x-slot name="heading">
        Orders
    </x-slot>

    <form class="max-w-sm mx-auto" method="post" enctype="multipart/form-data" action="/checkout">
        @csrf

        <div class="mb-5">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                <input type="text" id="name" name="name"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
        <div class="mb-5">
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">phone</label>
                <input type="text" id="phone" name="phone"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
        <div class="mb-5">
            <div>
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Address</label>
                <input type="text" id="address" name="address"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
        <div class="mb-5">
            <div>
                <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 ">qty</label>
                <input type="number" id="qty" name="qty"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>



        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>



</x-app-layout>
