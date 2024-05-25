@extends('layouts.dashboard')

@section('container')
    <div class="mx-[93px]">
        <div class=" mx-auto w-full px-10 bg-primary rounded-lg my-6">
            <h1 class="font-bold text-2xl text-white text-center py-4">Data Kehadiran</h1>

            {{-- Searching --}}
            <form class="mb-8" method="get" action="/data-kehadiran">
                <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Cari</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search" name="search" value="{{ request('search') }}"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari berdasarkan nama">
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Cari</button>
                </div>
            </form>

            <div class="flex justify-between mb-4">
                <div class="flex items-center flex-wrap gap-2">
                    <h3 class="font-semibold text-white">Sortir : </h3>
                    <form action="/data-kehadiran" method="get">
                        <button name="sort" value="asc"
                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Terlama</button>
                        <button name="sort" value="desc"
                            class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Terbaru</button>
                    </form>
                </div>
                <div>
                    <a href="{{ url('/data-kehadiran/export') }}"
                        class="px-4 py-2 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Export
                    </a>
                </div>
            </div>

            <div class="flex justify-center items-center">
                <section class="w-full">
                    <div class="w-full">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full shadow-lg rounded ">
                            <div class="w-full h-[400px] overflow-x-auto overflow-y-scroll rounded-t">
                                <table class="items-center bg-transparent w-full border-collapse overflow-y-auto">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 bg-slate-50 text-slate-500 align-middle border border-solid border-slate-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left sticky top-0 border-b-1">
                                                Nama
                                            </th>
                                            <th
                                                class="px-6 bg-slate-50 text-slate-500 align-middle border border-solid border-slate-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left sticky top-0 border-b-1">
                                                UID
                                            </th>
                                            <th
                                                class="px-6 bg-slate-50 text-slate-500 align-middle border border-solid border-slate-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left sticky top-0 border-b-1">
                                                Jabatan
                                            </th>
                                            <th
                                                class="px-6 bg-slate-50 text-slate-500 align-middle border border-solid border-slate-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left sticky top-0 border-b-1">
                                                Waktu Absen
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if (count($dataKehadiran) > 0)
                                            @foreach ($dataKehadiran as $kehadiran)
                                                <tr>
                                                    <th
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                                        {{ $kehadiran->name }}
                                                    </th>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                                        {{ $kehadiran->uid }}
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                        {{ $kehadiran->jabatan }}
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                        {{ date('m-d-Y H:i', strtotime($kehadiran->created_at)) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4"
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-red-500 font-semibold">
                                                    Data tidak ditemukan
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="my-4">
                            {{ $dataKehadiran->links('pagination::tailwind') }}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
