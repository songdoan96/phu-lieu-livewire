<div class="container mx-auto p-4">

    <form id="form-add-customer" method="POST" wire:submit.prevent="add"
          class="bg-muted-200 dark:bg-muted-600 max-w-xl mx-auto p-4 shadow-lg rounded-md">
        @csrf
        <h2 class="text-muted-700 dark:text-muted-200 text-center text-2xl font-bold uppercase mb-5">nhập kho</h2>

        <div class="flex flex-wrap items-center mb-2">
            <label for="customer"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Khách
                hàng:</label>
            <input required type="text" id="customer" wire:model="customer" name="customer"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('customer')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="style"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Mã
                hàng:</label>
            <input required type="text" id="style" wire:model="style" name="style"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('style')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="type"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Loại:</label>
            <input required type="text" id="type" wire:model="type" name="type"
                   class="uppercase w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('type')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="container"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Khoang:</label>
            <input required type="text" id="container" wire:model="container" name="container"
                   class="uppercase w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('container')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-wrap items-center mb-2">
            <label for="model"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Model:</label>
            <input type="text" id="model" wire:model="model" name="model"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('model')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="item"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Item:</label>
            <input type="text" id="item" wire:model="item" name="item"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('item')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="color"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Màu:</label>
            <input type="text" id="color" wire:model="color" name="color"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('color')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="params"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Thông
                số:</label>
            <input type="text" maxlength="10" id="params" wire:model="params" name="params"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('params')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="size"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Size:</label>
            <input type="text" id="size" wire:model="size" name="size"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('size')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="po"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">PO:</label>
            <input type="text" maxlength="20" id="po" wire:model="po" name="po"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('po')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="unit"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Đơn
                vị:</label>
            <input maxlength="10" required type="text" id="unit" wire:model="unit" name="unit"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('unit')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="qty"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Số
                lượng:</label>
            <input required type="number" step="0.01" min="1" id="qty" wire:model="qty"
                   name="qty"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('qty')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="date"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Ngày
                nhập:</label>
            <input required type="date" id="date" wire:model="date" name="date"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('date')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap items-center mb-2">
            <label for="note"
                   class="w-full mb-2 md:mb-0 md:w-2/4 block font-medium text-muted-700 dark:text-muted-300">Ghi
                chú:</label>
            <input type="text" id="note" wire:model="note" name="note"
                   class="w-full md:w-2/4 rounded bg-gray-50 focus:outline-muted-400 dark:focus:outline-muted-700 text-gray-900 text-sm block p-2 dark:bg-muted-700 dark:text-muted-300">
            @error('note')
            <span class="text-red-500 mt-1 w-full md:w-2/4 ml-auto">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex gap-2 justify-end mt-4">
            <button type="submit" name="add-item"
                    class="flex uppercase px-5 py-2.5 text-sm font-medium text-center text-muted-50 bg-teal-600 hover:bg-teal-700 dark:bg-muted-700 dark:hover:bg-muted-800 dark:text-muted-200 rounded-lg">
                NHẬP kho
            </button>
        </div>

    </form>
</div>
