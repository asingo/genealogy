@extends('home')
@section('content')
    <div class="container mx-auto py-6 px-4">
        <h1 class="text-center text-2xl font-bold">Tambah Keluarga</h1>
        <div>

            <form class="max-w-full py-4 mx-auto space-y-4" method="post" action="{{route('addParent')}}">
                @csrf
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Nama*</label>
                <input type="text" id="name" name="name" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />

                <label for="relation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Jenis Kelamin*</label>
                <select id="gender" name="gender" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <label for="relation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Relasi*</label>
                <select id="relation" name="relation" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Relasi</option>
                    <option value="Orang Tua">Orang Tua</option>
                </select>
                <div class="pt-5 flex space-x-2">
                    <a href="/" class="bg-gray-400 text-white px-4 py-3 rounded-lg">Kembali</a>
                    <button onclick="confirm('Apakah anda yakin untuk tambah keluarga?')" class="bg-blue-700 text-white px-4 py-3 rounded-lg">Tambah Keluarga</button>
                </div>
            </form>
        </div>


    </div>
@endsection
