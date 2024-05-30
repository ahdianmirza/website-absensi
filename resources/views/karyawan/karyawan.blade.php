@extends('layouts.dashboard')

@section('container')
    <div class="mx-4 md:mx-14">
        @if (session()->has('success'))
            <div class="flex items-center p-4 my-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <div class="mx-auto w-full px-5 lg:px-10 bg-primary rounded-lg my-6">
            <div class="w-full flex justify-between items-center py-6">
                <h1 class="font-bold text-xl lg:text-2xl text-white text-center">Daftar Karyawan</h1>
                <a href="/karyawan/create"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-3 lg:px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</a>
            </div>

            <div class="flex justify-center items-center">
                <section class="w-full">
                    <div class="w-full">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
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
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if (count($dataKaryawan) > 0)
                                            @foreach ($dataKaryawan as $karyawan)
                                                <tr>
                                                    <th
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                                        {{ $karyawan->name }}
                                                    </th>
                                                    <td
                                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                                        {{ $karyawan->uid }}
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                        {{ $karyawan->jabatan }}
                                                    </td>
                                                    <td
                                                        class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4 space-x-1 flex items-center">
                                                        <a href="/karyawan/{{ $karyawan->id }}/edit"
                                                            class="px-3 py-2 text-sm font-medium text-center rounded-lg focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300">Edit</a>
                                                        <form action="/karyawan/destroy/{{ $karyawan->id }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button
                                                                class="px-3 py-2 text-sm font-medium text-center rounded-lg focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="3"
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-red-500 font-semibold">
                                                    Data tidak ditemukan
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
