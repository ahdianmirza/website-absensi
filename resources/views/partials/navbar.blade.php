<nav class="w-full h-20 bg-secondary z-50">
    <button data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 mt-4 ms-4"
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15" />
        </svg>
    </button>
    <div class="hidden fixed w-full z-50" id="navbar-default">
        <ul
            class="z-50 font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 mx-4">
            <li>
                <a href="/"
                    class="block py-2 px-3 text-gray-900 {{ Request::is('/') ? 'bg-blue-700 text-white' : 'hover:bg-gray-100' }} rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                    aria-current="page">Kehadiran</a>
            </li>
            <li>
                <a href="/karyawan"
                    class="block py-2 px-3 text-gray-900 {{ Request::is('karyawan*') ? 'bg-blue-700 text-white' : 'hover:bg-gray-100' }} rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Karyawan</a>
            </li>
            <li>
                <a href="/data-kehadiran"
                    class="block py-2 px-3 text-gray-900 rounded {{ Request::is('data-kehadiran') ? 'bg-blue-700 text-white' : 'hover:bg-gray-100' }} md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Data
                    Kehadiran</a>
            </li>
            <li>
                <form action="/logout" method="post"
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent cursor-pointer">
                    @csrf
                    <button type="submit" class="w-full flex">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <div class="hidden mx-auto max-w-md md:max-w-xl h-full md:flex justify-between items-center">
        <a href="/"
            class="md:text-xl text-primary font-semibold hover:bg-slate-50 p-1 lg:p-2 rounded-lg {{ Request::is('/') ? 'bg-slate-50' : '' }}">Kehadiran</a>
        <a href="/karyawan"
            class="md:text-xl text-primary font-semibold hover:bg-slate-50 p-1 lg:p-2 rounded-lg {{ Request::is('karyawan*') ? 'bg-slate-50' : '' }}">Karyawan</a>
        <a href="/data-kehadiran"
            class="md:text-xl text-primary font-semibold hover:bg-slate-50 p-1 lg:p-2 rounded-lg {{ Request::is('data-kehadiran') ? 'bg-slate-50' : '' }}">Data
            Kehadiran</a>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">
                <a class="md:text-xl text-primary font-semibold hover:bg-slate-50 p-1 lg:p-2 rounded-lg">Logout</a>
            </button>
        </form>
    </div>
</nav>
