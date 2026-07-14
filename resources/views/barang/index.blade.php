<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-gray-800">
                Data Barang
            </h2>

            <button
                onclick="openTambahModal()"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow">
                + Tambah Barang
            </button>
        </div>
    </x-slot>

    <div class="py-8">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">

                <table class="min-w-full">

                    <thead class="bg-blue-600 text-white">

                        <tr>

                            <th class="px-6 py-3 text-left">Kode</th>

                            <th class="px-6 py-3 text-left">Nama Barang</th>

                            <th class="px-6 py-3 text-left">Ruangan</th>

                            <th class="px-6 py-3 text-center">Jumlah</th>

                            <th class="px-6 py-3 text-center">Kondisi</th>

                            <th class="px-6 py-3 text-left">Keterangan</th>

                            <th class="px-6 py-3 text-center">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($barang as $item)

                        <tr class="border-b hover:bg-gray-50">

                            <td class="px-6 py-4">
                                {{ $item->kode_barang }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $item->nama_barang }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $item->ruangan->nama_ruangan }}
                            </td>

                            <td class="px-6 py-4 text-center">
                                {{ $item->jumlah }}
                            </td>

                            <td class="px-6 py-4 text-center">

                                @if($item->kondisi == 'Baik')

                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                                        Baik
                                    </span>

                                @elseif($item->kondisi == 'Rusak Ringan')

                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                                        Rusak Ringan
                                    </span>

                                @else

                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">
                                        Rusak Berat
                                    </span>

                                @endif

                            </td>

                            <td class="px-6 py-4">
                                {{ $item->keterangan }}
                            </td>

                            <td class="px-6 py-4 text-center">

                                <button
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded">
                                    Edit
                                </button>

                                <button
                                    class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                                    Hapus
                                </button>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="7"
                                class="text-center py-8 text-gray-500">

                                Belum ada data barang.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>
<!-- Modal Tambah Barang -->
    <div id="tambahModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">

        <div class="bg-white rounded-lg p-6 w-96">

            <h2 class="text-xl font-bold mb-4">
                Tambah Barang
            </h2>

            <form>
                <input 
                    type="text"
                    placeholder="Kode Barang"
                    class="border w-full p-2 mb-3 rounded">

                <input 
                    type="text"
                    placeholder="Nama Barang"
                    class="border w-full p-2 mb-3 rounded">

                <button
                    type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded">
                    Simpan
                </button>

            </form>

        </div>

    </div>
<script>
    function openTambahModal(){
        document.getElementById('tambahModal').classList.remove('hidden');
    }
</script>
</x-app-layout>