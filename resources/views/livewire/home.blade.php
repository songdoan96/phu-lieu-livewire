<div id="home" class="overflow-hidden" x-data="{ showModalDelete: false, id: null }">
    <div class="px-2 py-4 md:p-4" id="items">
        <h2 id="item-title" class="text-center font-bold text-xl md:text-2xl dark:text-muted-200 mb-4 text-teal-600">QUẢN
            LÝ XUẤT NHẬP TỒN</h2>
        <div id="table" class="w-full">
            <div class="border-muted-200 dark:border-muted-700 border rounded-md overflow-hidden shadow-lg">
                <div class="min-w-full align-middle relative overflow-x-auto">
                    <table class=" divide-muted-200 dark:divide-muted-700 min-w-full table-fixed divide-y text-center">
                        <thead>
                        <tr>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Ngày</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Khoang</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Khách hàng</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Mã hàng</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Model</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Loại</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Item</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Màu</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Thông số</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Size</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Đơn vị</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                PO</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Nhập</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Xuất</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                                Ghi chú</th>
                            <th
                                class="text-muted-700 dark:text-muted-400 font-bold text-xs uppercase border-muted-200 dark:border-muted-700 last:border-e-none dark:bg-muted-800 border-r bg-white px-1 py-4">
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-muted-200 dark:divide-muted-700 dark:bg-muted-800 divide-y bg-muted-50">
                        @foreach ($items as $item)
                            <tr id="{{ $item->id }}"
                                class="hover:bg-muted-100 dark:hover:bg-muted-900 transition-colors duration-200">
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    {{ $item->date }}</td>
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    <a href="items.php?khoang=KA08">{{ $item->container }}</a>
                                </td>
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    {{ $item->customer }}</td>
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    <a href="items.php?ma-hang=312532">{{ $item->style }}</a>
                                </td>
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    {{ $item->model }}</td>
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    <a
                                        href="items.php?ma-hang=312532&amp;type=BAR CODE&amp;color=BLACK&amp;size=2XL&amp;params=">{{ $item->type }}</a>
                                </td>
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    {{ $item->item }}</td>
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    {{ $item->color }}</td>
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    {{ $item->params }}</td>
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    {{ $item->size }}</td>
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    {{ $item->unit }}</td>
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    {{ $item->po }}</td>
                                @if ($item->order_id)
                                    <td class="text-sm border-r dark:border-muted-700 whitespace-nowrap">
                                        <a class="no-underline flex justify-center text-green-600 dark:text-green-300 transition hover:scale-125"
                                           href="{{ route('input', ['id' => $item->order_id]) }}">
                                            <svg fill="none" height="16" stroke="currentColor"
                                                 stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                 viewBox="0 0 24 24" width="16">
                                                <path
                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                </path>
                                            </svg>
                                        </a>
                                    </td>
                                    <td
                                        class="text-sm border-r dark:border-muted-700  dark:text-white bg-red-700 text-red-200 whitespace-nowrap px-2">
                                        <a href="{{ route('output', $item->order_id) }}">{{ $item->qty }}</a>
                                    </td>
                                @else
                                    <td
                                        class="text-sm border-r dark:border-muted-700 dark:text-muted-200 bg-green-700 text-green-200 whitespace-nowrap">
                                        <a href="{{ route('input', ['id' => $item->id]) }}"><?= $item->qty ?></a>
                                    </td>
                                    <td class="text-sm border-r dark:border-muted-700">
                                        <a class="no-underline flex justify-center text-red-600 dark:text-red-300 transition hover:scale-125"
                                           href="{{ route('output', $item->id) }}">
                                            <svg fill="none" height="16" stroke="currentColor"
                                                 stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                 viewBox="0 0 24 24" width="16">
                                                <path
                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                </path>
                                            </svg>
                                        </a>
                                    </td>
                                @endif
                                <td
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1">
                                    {{ $item->note }}</td>
                                <td title="790"
                                    class="text-sm border-r dark:border-muted-700 text-muted-700 dark:text-muted-200 py-2 px-1 whitespace-nowrap">
                                    <div class="flex gap-1 justify-center items-center px-2">
                                        <button type="button" title="Xóa phụ liệu"
                                                x-on:click="showModalDelete=true,id={{ $item->id }}"
                                                data-id="{{ $item->id }}"
                                                class="btn-show-modal w-5 transform hover:text-red-500 transition hover:scale-110">
                                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>

                                    </div>

                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div x-show="showModalDelete" id="modal"
         class="fixed hidden top-0 left-0 right-0 z-50 p-4 overflow-hidden md:inset-0 h-screen bg-black/80 justify-center items-center"
         :class="{ 'flex': showModalDelete, 'hidden': !showModalDelete }">
        <div class="relative w-full max-w-md max-h-screen mx-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="p-6 text-center">
                    <svg class="mx-auto mb-4 text-red-400 w-12 h-12 " aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Xóa phụ liệu?</h3>
                    <button type="button" id="btn-confirm-delete" wire:click='deleteItem(id)'
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Xóa
                    </button>
                    <button type="button" id="btn-close-modal" x-on:click="showModalDelete=false"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Hủy</button>
                </div>
            </div>
        </div>
    </div>
</div>
