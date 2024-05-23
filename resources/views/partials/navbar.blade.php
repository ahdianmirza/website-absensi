<nav class="w-full h-20 bg-secondary">
    <div class="mx-auto max-w-xl h-full flex justify-between items-center">
        <a href="/"
            class="text-xl text-primary font-semibold hover:bg-slate-50 p-2 rounded-lg {{ Request::is('/') ? 'bg-slate-50' : '' }}">Kehadiran</a>
        <a href="/karyawan"
            class="text-xl text-primary font-semibold hover:bg-slate-50 p-2 rounded-lg {{ Request::is('karyawan*') ? 'bg-slate-50' : '' }}">Karyawan</a>
        <a href="/data-kehadiran"
            class="text-xl text-primary font-semibold hover:bg-slate-50 p-2 rounded-lg {{ Request::is('data-kehadiran') ? 'bg-slate-50' : '' }}">Data
            Kehadiran</a>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">
                <a class="text-xl text-primary font-semibold hover:bg-slate-50 p-2 rounded-lg">Logout</a>
            </button>
        </form>
    </div>
</nav>
