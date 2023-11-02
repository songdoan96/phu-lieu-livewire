<div class="container mx-auto p-4">
    <form id="form-add-customer" method="POST" wire:submit="order"
          class="bg-muted-200 dark:bg-muted-500 max-w-lg mx-auto px-6 py-4 shadow-lg rounded-md">
        @csrf
        <h2 class="text-muted-700 dark:text-muted-200 text-center text-2xl font-bold uppercase mb-5">Xuất kho</h2>
        <div class="flex flex-wrap items-center mb-2">
            <label for="customer"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Khách
                hàng:</label>
            <input disabled type="text" id="customer" name="customer" wire:model='customer'
                   class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="style"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Mã
                hàng:</label>
            <input disabled type="text" id="style" name="style" wire:model='style'
                   class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="type"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Loại:</label>
            <input disabled type="text" id="type" name="type" wire:model='type'
                   class="uppercase w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="model"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Model:</label>
            <input disabled type="text" id="model" name="model" wire:model='model'
                   class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="item"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Item:</label>
            <input disabled type="text" id="item" name="item" wire:model='item'
                   class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="color"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Màu:</label>
            <input disabled type="text" id="color" name="color" wire:model='color'
                   class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="size"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Size:</label>
            <input disabled type="text" id="size" name="size" wire:model='size'
                   class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="po"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">PO:</label>
            <input disabled type="text" id="po" name="po" wire:model='po'
                   class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="unit"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Đơn
                vị:</label>
            <input disabled type="text" id="unit" name="unit" wire:model='unit'
                   class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('unit')
            <span class="text-red-500 mt-1 w-full md:w-3/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="container"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Khoang:</label>
            <input required type="text" id="container" name="container" wire:model='container'
                   class="uppercase w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
        </div>

        <div class="flex flex-wrap items-center mb-2">
            <label for="qty"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Số
                lượng:</label>
            <input type="hidden" name="inventory" wire:model='inventory'>

            <input required type="number" step="0.01" min="0.01" max="{{ $inventory }}" id="qty"
                   name="qty" wire:model='qty'
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            <span class="text-red-500 text-sm font-semibold pl-1">Tối đa
                {{ $inventory . $unit }}</span>

            @error('qty')
            <span class="text-red-500 mt-1 w-full md:w-3/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="date"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Ngày
                xuất:</label>
            <input required type="date" id="date" name="date" wire:model='date'
                   class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('date')
            <span class="text-red-500 mt-1 w-full md:w-3/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        {{-- <div class="flex flex-wrap items-center mb-2">
            <label for="number_group"
                class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Tổ:</label>
            <input required type="number" min="0" id="number_group" name="number_group"
                wire:model='number_group'
                class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
        </div> --}}
        <div class="flex flex-wrap items-center mb-2">
            <label for="user_id"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Người
                nhận</label>
            <select id="user_id" name="user_name" required wire:model='user_name'
                    class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
                <option value="">Người nhận</option>
                <?php
                $users = \App\Models\User::where('is_admin',0)->get();
                foreach ($users as $user) { ?>
                <option value="{{ $user->name }}">{{ $user->name }}</option>
                <?php }  ?>
            </select>
            @error('user_name')
            <span class="text-red-500 mt-1 w-full md:w-3/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <?php

        ?>
        <div class="flex flex-wrap items-center mb-2">
            <label for="note"
                   class="w-full mb-2 md:mb-0 md:w-1/4 block font-medium text-muted-700 dark:text-muted-300">Ghi
                chú:</label>
            <input type="text" id="note" name="note" wire:model='note'
                   class="w-full md:w-3/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
        </div>

        <input required type="hidden" id="id" name="id" class="hidden">
        <div class="flex gap-2 justify-end mt-4">
            <button type="submit" name="order-item"
                    class="flex uppercase px-5 py-2.5 text-sm font-medium text-center text-muted-50 bg-teal-600 hover:bg-teal-700 dark:bg-muted-700 dark:hover:bg-muted-800 dark:text-muted-200 rounded-lg focus:ring-4">
                XUẤT
            </button>
        </div>
    </form>
</div>
