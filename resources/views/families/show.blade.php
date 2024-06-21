@extends('home')
@section('content')
    <div class="container mx-auto py-6 px-4">
        <h1 class="text-center text-2xl font-bold">Silsilah Keluarga {{$name}}</h1>
        <div>

            <form class="max-w-full py-4 mx-auto space-y-4">
                <label for="relation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Filter</label>
                <select id="relation" name="relation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Pilih Relasi</option>
                    <option value="ortu">Orang Tua</option>
                    <option value="anak">Anak</option>
                    <option value="cucu">Cucu</option>
                    <option value="paman">Paman/ Bibi</option>
                    <option value="sepupu">Sepupu</option>
                </select>
                <select id="gender" name="gender"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <input type="text" id="name" name="name" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama" required />
<button type="submit" class="bg-blue-700 text-white px-4 py-3 rounded-lg w-full">Cari</button>
            </form>
        </div>
        <div>

            <h2 class="text-xl font-bold pb-4 text-center">Daftar Keluarga {{$name}}</h2>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Relasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Kelamin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($families as $d)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$d->name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$d->relation}}
                            </td>
                            <td class="px-6 py-4">
                                {{$d->gender}}
                            </td>
                            <td class="px-6 py-4 space-y-2 lg:space-y-0">
                                <a href="/edit" class="bg-yellow-400 px-4 py-2 rounded-lg text-white block text-center lg:inline-block">Edit</a>
                                <a href="/delete" onclick="confirm('Apakah anda yakin menghapus data ini?')" class="bg-red-500 px-4 py-2 rounded-lg text-white block text-center lg:inline-block">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                <a href="/create" class="bg-blue-700 text-white px-4 py-3 rounded-lg">Tambah Anggota Keluarga</a>
            </div>
        </div>
    </div>
@endsection
