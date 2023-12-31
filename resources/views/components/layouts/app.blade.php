<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Phụ liệu' }}</title>
    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body class="bg-muted-50 dark:bg-muted-900">


    <nav class="shadow dark:shadow-muted-800 border-gray-200">
        <div class="flex flex-wrap items-center justify-between mx-auto px-4 py-1">
            <a id="logo" href="{{ route('home') }}"
                class="text-main-600 dark:text-white flex items-center uppercase text-2xl font-extrabold">
                <img src="{{ asset('img/logo.png') }}" class="w-14" alt="Logo">
            </a>
            <div class="flex md:order-2 gap-2 h-10" id="nav-right">
                @auth
                    <form method="get" action="items.php"
                        class="hidden md:block relative h-full md:w-64 lg:w-72 rounded text-black dark:text-muted-100">
                        <select name="search-type" id="form-search-list"
                            class="absolute left-0 z-20 h-full border-r border-muted-300 dark:border-muted-950 outline-none px-1 text-sm bg-muted-200 dark:bg-muted-700 dark:hover:bg-muted-600">
                            <option value="type">PHỤ LIỆU</option>
                            <option value="ma-hang">MÃ HÀNG</option>
                            <option value="po">PO</option>
                        </select>
                        <input type="text" name="search-value" id="search-input"
                            class="absolute z-10 pl-28 outline-none w-full h-full px-2 py-1.5 bg-muted-200 dark:bg-muted-700 dark:hover:bg-muted-600"
                            placeholder="Tìm kiếm...">
                        <button type="submit"
                            class="absolute right-0 z-20 py-2 px-3 border-l border-muted-300 dark:border-muted-950 dark:bg-muted-700 dark:hover:bg-muted-600 h-full ">
                            <svg class="w-4 h-4" aria-hidden="true" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"></path>
                            </svg>
                        </button>
                    </form>
                    <button type="button" id="mobile-btn"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <a href="{{ route('input') }}"
                        class="hover:-translate-y-0.5 w-10 h-w-10 bg-teal-600 hover:bg-teal-700 dark:bg-muted-500 dark:hover:bg-muted-600 p-2 rounded flex items-center justify-center">
                        <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6 inline-block">
                            <path fill="#FFFFFF"
                                d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                C15.952,9,16,9.447,16,10z" />
                        </svg>
                    </a>

                @endauth


                <div class="flex items-center dark:border-slate-800">
                    <button type="button" id="btn-dark">
                        <span class="dark:hidden">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-6 h-6">
                                <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="fill-sky-400/20 stroke-sky-500">
                                </path>
                                <path
                                    d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836"
                                    class="stroke-sky-500"></path>
                            </svg>
                        </span>
                        <span class="hidden dark:inline">
                            <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z"
                                    class="fill-sky-400/20"></path>
                                <path
                                    d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z"
                                    class="fill-sky-500"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z"
                                    class="fill-sky-500"></path>
                            </svg>
                        </span>
                    </button>

                </div>
            </div>
            @auth
                <div class="items-center justify-between md:flex md:order-1 w-full md:w-auto" id="navbar-search">
                    <div id="mobile-search" class="mt-3 hidden md:hidden">
                        <form method="get" action="items.php"
                            class="relative mx-auto max-w-lg h-10 overflow-hidden rounded">
                            <select name="search-type" id="form-mobile-search-list"
                                class="absolute left-0 z-20 h-full border-r border-muted-300 dark:border-muted-950 outline-none px-1 text-sm bg-muted-200 dark:bg-muted-700 dark:hover:bg-muted-600 text-muted-700 dark:text-muted-300">
                                <option value="type">PHỤ LIỆU</option>
                                <option value="ma-hang">MÃ HÀNG</option>
                                <option value="po">PO</option>
                            </select>
                            <input type="text" name="search-value" id="search-mobile-input"
                                class="absolute z-10 pl-28 outline-none w-full h-full px-2 py-1.5 bg-muted-200 dark:bg-muted-700 dark:hover:bg-muted-600 text-muted-700 dark:text-muted-300"
                                placeholder="Tìm kiếm...">
                            <button type="submit"
                                class="absolute right-0 z-20 py-2 px-3 border-l border-muted-300 dark:border-muted-950 dark:bg-muted-700 dark:hover:bg-muted-600 h-full text-muted-700 dark:text-muted-300">
                                <svg class="w-4 h-4" aria-hidden="true" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <!-- <ul id="main-nav" class="hidden uppercase md:flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-400 md:dark:bg-gray-400 dark:border-gray-700 "> -->
                    <ul id="main-nav"
                        class="flex p-4 items-center gap-4 hidden uppercase flex-col md:flex md:flex-row sm:gap-6 lg:gap-8 text-black dark:text-muted-200 font-semibold">
                        <li>
                            <a href="{{ route('container') }}" class="" aria-current="page">Khoang</a>
                        </li>
                        <li>
                            <a href="het.php" class="">pl
                                hết</a>
                        </li>
                        <li>
                            <a href="can-doi.php" class="">cân
                                đối</a>

                        </li>
                        <li>
                            <a href="cap-phat.php" class="">Cấp phát</a>
                        </li>
                    </ul>

                </div>
            @endauth

        </div>

    </nav>
    {{ $slot }}
    @if (session('message'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)">
            <div x-show="show" id="toast" class="fixed flex items-center bottom-4 right-4 z-50">
                <div id="toast-wrap"
                    class="border border-l-4 flex gap-4 items-center w-full max-w-xs p-2 bg-orange-200 border-orange-400 text-orange-900 rounded-lg shadow-md"
                    style="min-width: 220px">

                    <div class="text-sm font-bold pl-2"> {{ session('message') }}</div>
                    <button id="close-toast-btn block" type="button" x-on:click="show = false"
                        class="ml-auto  bg-orange-50 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:hover:text-white dark:bg-orange-200 dark:hover:bg-orange-300">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif


    @vite('resources/js/app.js')
    @livewireScripts
</body>

</html>
