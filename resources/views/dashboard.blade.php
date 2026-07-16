<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Total Ruangan -->
                <div class="bg-blue-600 text-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold">
                        Total Ruangan
                    </h3>

                    <p class="text-4xl font-bold mt-4">
                        {{ $totalRuangan }}
                    </p>
                </div>

                <!-- Total Barang -->
                <div class="bg-green-600 text-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold">
                        Total Barang
                    </h3>

                    <p class="text-4xl font-bold mt-4">
                        {{ $totalBarang }}
                    </p>
                </div>

                <!-- Barang Baik -->
                <div class="bg-emerald-500 text-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold">
                        Barang Baik
                    </h3>

                    <p class="text-4xl font-bold mt-4">
                        {{ $barangBaik }}
                    </p>
                </div>

                <!-- Rusak Ringan -->
                <div class="bg-yellow-500 text-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold">
                        Rusak Ringan
                    </h3>

                    <p class="text-4xl font-bold mt-4">
                        {{ $rusakRingan }}
                    </p>
                </div>

                <!-- Rusak Berat -->
                <div class="bg-red-600 text-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold">
                        Rusak Berat
                    </h3>

                    <p class="text-4xl font-bold mt-4">
                        {{ $rusakBerat }}
                    </p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>