<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-gray-800">
                Data Peminjaman
            </h2>

            <button
                onclick="openTambahModal()"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow">
                + Tambah Peminjaman
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

                            <th class="px-6 py-3">No</th>

                            <th class="px-6 py-3 text-left">
                                Peminjam
                            </th>

                            <th class="px-6 py-3 text-left">
                                Barang
                            </th>

                            <th class="px-6 py-3 text-center">
                                Jumlah
                            </th>

                            <th class="px-6 py-3 text-center">
                                Tgl Pinjam
                            </th>

                            <th class="px-6 py-3 text-center">
                                Status
                            </th>

                            <th class="px-6 py-3 text-center">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($peminjaman as $item)

                        <tr class="border-b hover:bg-gray-50">

                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $item->nama_peminjam }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $item->barang->nama_barang }}
                            </td>

                            <td class="px-6 py-4 text-center">
                                {{ $item->jumlah }}
                            </td>

                            <td class="px-6 py-4 text-center">
                                {{ $item->tanggal_pinjam }}
                            </td>

                            <td class="px-6 py-4 text-center">

                                @if($item->status == 'Dipinjam')

                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                                        Dipinjam
                                    </span>

                                @else

                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                                        Dikembalikan
                                    </span>

                                @endif

                            </td>

                            <td class="px-6 py-4">

    <div class="flex justify-center gap-2">

        <button
            onclick="openEditModal(
                {{ $item->id }},
                '{{ $item->nama_peminjam }}',
                {{ $item->barang_id }},
                {{ $item->jumlah }},
                '{{ $item->tanggal_pinjam }}',
                '{{ $item->tanggal_kembali }}',
                '{{ $item->status }}',
                '{{ $item->keterangan }}'
            )"
            class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded">
            Edit
        </button>


        <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST">

            @csrf
            @method('DELETE')

            <button
                onclick="return confirm('Yakin ingin menghapus data ini?')"
                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                Hapus
            </button>

        </form>

    </div>

</td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="7" class="text-center py-8 text-gray-500">
                                Belum ada data peminjaman.
                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- Modal Tambah -->
    <div id="tambahModal"
         class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">

        <div class="bg-white rounded-xl w-full max-w-lg p-6">

            <h2 class="text-xl font-bold mb-5">
                Tambah Peminjaman
            </h2>

            <form action="{{ route('peminjaman.store') }}" method="POST">

                @csrf

                <div class="mb-4">
                    <label class="block mb-2">Nama Peminjam</label>

                    <input
                        type="text"
                        name="nama_peminjam"
                        class="w-full border rounded-lg px-4 py-2"
                        required>
                </div>

                <div class="mb-4">
                    <label class="block mb-2">Barang</label>

                    <select
                        name="barang_id"
                        class="w-full border rounded-lg px-4 py-2"
                        required>

                        <option value="">-- Pilih Barang --</option>

                        @foreach($barang as $b)

                            <option value="{{ $b->id }}">
                                {{ $b->nama_barang }}
                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <label class="block mb-2">
                            Jumlah
                        </label>

                        <input
                            type="number"
                            name="jumlah"
                            class="w-full border rounded-lg px-4 py-2"
                            required>
                    </div>

                    <div>
                        <label class="block mb-2">
                            Status
                        </label>

                        <select
                            name="status"
                            class="w-full border rounded-lg px-4 py-2">

                            <option value="Dipinjam">
                                Dipinjam
                            </option>

                            <option value="Dikembalikan">
                                Dikembalikan
                            </option>

                        </select>

                    </div>

                </div>

                                <div class="grid grid-cols-2 gap-4 mt-4">

                    <div>
                        <label class="block mb-2">
                            Tanggal Pinjam
                        </label>

                        <input
                            type="date"
                            name="tanggal_pinjam"
                            class="w-full border rounded-lg px-4 py-2"
                            required>
                    </div>

                    <div>
                        <label class="block mb-2">
                            Tanggal Kembali
                        </label>

                        <input
                            type="date"
                            name="tanggal_kembali"
                            class="w-full border rounded-lg px-4 py-2">
                    </div>

                </div>

                <div class="mt-4">

                    <label class="block mb-2">
                        Keterangan
                    </label>

                    <textarea
                        name="keterangan"
                        rows="3"
                        class="w-full border rounded-lg px-4 py-2"></textarea>

                </div>

                <div class="flex justify-end gap-3 mt-6">

                    <button
                        type="button"
                        onclick="closeTambahModal()"
                        class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">

                        Batal

                    </button>

                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">

                        Simpan

                    </button>

                </div>

            </form>

        </div>

    </div>

    <script>

        function openTambahModal() {
            document.getElementById('tambahModal').classList.remove('hidden');
            document.getElementById('tambahModal').classList.add('flex');
        }

        function closeTambahModal() {
            document.getElementById('tambahModal').classList.add('hidden');
            document.getElementById('tambahModal').classList.remove('flex');
        }

        <!-- Modal Edit -->
<div id="editModal"
     class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">

    <div class="bg-white rounded-xl w-full max-w-lg p-6">

        <h2 class="text-xl font-bold mb-5">
            Edit Peminjaman
        </h2>


        <form id="editForm" method="POST">

            @csrf
            @method('PUT')


            <div class="mb-4">

                <label class="block mb-2">
                    Nama Peminjam
                </label>

                <input
                    id="edit_nama_peminjam"
                    type="text"
                    name="nama_peminjam"
                    class="w-full border rounded-lg px-4 py-2"
                    required>

            </div>


            <div class="mb-4">

                <label class="block mb-2">
                    Barang
                </label>

                <select
                    id="edit_barang_id"
                    name="barang_id"
                    class="w-full border rounded-lg px-4 py-2">

                    @foreach($barang as $b)

                    <option value="{{ $b->id }}">
                        {{ $b->nama_barang }}
                    </option>

                    @endforeach

                </select>

            </div>


            <div class="mb-4">

                <label class="block mb-2">
                    Jumlah
                </label>

                <input
                    id="edit_jumlah"
                    type="number"
                    name="jumlah"
                    class="w-full border rounded-lg px-4 py-2"
                    required>

            </div>


            <div class="mb-4">

                <label class="block mb-2">
                    Status
                </label>

                <select
                    id="edit_status"
                    name="status"
                    class="w-full border rounded-lg px-4 py-2">

                    <option value="Dipinjam">
                        Dipinjam
                    </option>

                    <option value="Dikembalikan">
                        Dikembalikan
                    </option>

                </select>

            </div>


            <div class="flex justify-end gap-3">

                <button
                    type="button"
                    onclick="closeEditModal()"
                    class="bg-gray-500 text-white px-5 py-2 rounded-lg">

                    Batal

                </button>


                <button
                    type="submit"
                    class="bg-blue-600 text-white px-5 py-2 rounded-lg">

                    Update

                </button>

            </div>


        </form>


    </div>

</div>

    </script>

</x-app-layout>