<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Barang;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with('barang')->latest()->get();
        $barang = Barang::all();

        return view('peminjaman.index', compact('peminjaman', 'barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'barang_id' => 'required',
            'jumlah' => 'required|integer|min:1',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
            'status' => 'required',
            'keterangan' => 'nullable',
        ]);

        Peminjaman::create($request->all());

        return back()->with('success', 'Data peminjaman berhasil ditambahkan.');
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'barang_id' => 'required',
            'jumlah' => 'required|integer|min:1',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
            'status' => 'required',
            'keterangan' => 'nullable',
        ]);

        $peminjaman->update($request->all());

        return back()->with('success', 'Data peminjaman berhasil diubah.');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return back()->with('success', 'Data peminjaman berhasil dihapus.');
    }
}