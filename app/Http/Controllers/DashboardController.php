<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ruangan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRuangan = Ruangan::count();
        $totalBarang = Barang::count();

        $barangBaik = Barang::where('kondisi', 'Baik')->count();
        $rusakRingan = Barang::where('kondisi', 'Rusak Ringan')->count();
        $rusakBerat = Barang::where('kondisi', 'Rusak Berat')->count();

        return view('dashboard', compact(
            'totalRuangan',
            'totalBarang',
            'barangBaik',
            'rusakRingan',
            'rusakBerat'
        ));
    }
}