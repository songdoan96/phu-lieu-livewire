<div class="min-h-screen bg-gray-100 dark:bg-muted-800 text-gray-900 flex justify-center">
    <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg overflow-hidden flex justify-center flex-1">
        <div class="w-full lg:w-1/2 xl:w-5/12 p-6 sm:p-12 order-2 dark:bg-muted-700">
            <div>
                <img src="{{ asset('img/logo.png') }}" class="w-32 mx-auto" />
            </div>
            <div class="mt-12 flex flex-col items-center">
                <h1 class="text-2xl font-extrabold uppercase text-muted-700 dark:text-muted-200">
                    Đăng nhập
                </h1>
                <div class="w-full flex-1 mt-8">
                    <form class="mx-auto max-w-xs" wire:submit.prevent="login" method="post">
                        <div class="mb-5">
                            <label for="username" class="block mb-1 font-medium text-gray-900 dark:text-muted-200">Tài
                                khoản</label>
                            <input required wire:model="username" type="username" id="username" name="username"
                                value="{{ $username }}"
                                class="bg-muted-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-muted-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-muted-200 dark:focus:ring-teal-500 dark:focus:border-teal-500">
                            @error('username')
                                <span class="text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-1 font-medium text-gray-900 dark:text-muted-200">Mật
                                khẩu</label>
                            <input required wire:model="password" type="password" id="password" name="password"
                                value="{{ $password }}"
                                class="bg-muted-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-muted-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-muted-200 dark:focus:ring-teal-500 dark:focus:border-teal-500">
                            @error('password')
                                <span class="text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <button name="login-form" type="submit"
                            class="mt-5 tracking-wide font-semibold w-full py-4 rounded-lg bg-teal-500 hover:bg-teal-600 text-muted-700 dark:bg-muted-500 dark:hover:bg-muted-600 dark:text-muted-200 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                            <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                                <path d="M20 8v6M23 11h-6" />
                            </svg>
                            <span class="ml-3">
                                Đăng nhập
                            </span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
        <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
            <img src="{{ asset('img/bg.jpg') }}" class="bg-no-repeat bg-cover bg-center" alt="background">
        </div>
    </div>
</div>
