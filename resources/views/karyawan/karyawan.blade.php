@extends('layouts.dashboard')

@section('container')
    <div class="mx-[93px]">
        <div class="mx-auto px-12 w-1/2 bg-primary rounded-lg my-6">
            <div class="w-full flex justify-between items-center py-6">
                <h1 class="font-bold text-2xl text-white text-center">Daftar Karyawan</h1>
                <a href="/karyawan/create"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</a>
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
                                        </tr>
                                    </thead>

                                    <tbody>
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
                                            </tr>
                                        @endforeach
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
