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
        <div class="mx-auto px-5 lg:px-10 w-full bg-primary rounded-lg my-6">
            <div class="flex items-center space-x-2 pt-6">
                <a href="/karyawan"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <span class="text-white">
                        <svg width="24" height="24" viewBox="0 0 24 24" class="stroke-current" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22Z"
                                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.26 15.53L9.74001 12L13.26 8.46997" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
                <h1 class="font-bold text-xl lg:text-2xl text-white">Edit Karyawan</h1>
            </div>

            <div class="flex justify-center items-center py-6">
                <form class="w-full" name="formKaryawan" action="/karyawan/{{ $editKaryawan->id }}/update" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-white">Nama</label>
                        <input type="text" id="name" name="name" value="{{ $editKaryawan->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan nama" autofocus required>
                    </div>
                    <div class="mb-5">
                        <label for="uid" class="block mb-2 text-sm font-medium text-white dark:text-white">UID</label>
                        <input type="text" id="uid" name="uid" value="{{ $editKaryawan->uid }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan UID" required>
                    </div>
                    <div class="mb-5">
                        <label for="jabatan"
                            class="block mb-2 text-sm font-medium text-white dark:text-white">Jabatan</label>
                        <input type="text" id="jabatan" name="jabatan" value="{{ $editKaryawan->jabatan }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan jabatan" required>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
