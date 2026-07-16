<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalian = Pengembalian::with('peminjaman.barang')->latest()->get();

        $peminjaman = Peminjaman::where('status', 'Dipinjam')->get();

        return view('pengembalian.index', compact('pengembalian', 'peminjaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'peminjaman_id' => 'required',
            'tanggal_pengembalian' => 'required|date',
            'keterangan' => 'nullable',
        ]);

        Pengembalian::create([
            'peminjaman_id' => $request->peminjaman_id,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'keterangan' => $request->keterangan,
        ]);

        $pinjam = Peminjaman::find($request->peminjaman_id);

        $pinjam->update([
            'status' => 'Dikembalikan'
        ]);

        return back()->with('success', 'Data pengembalian berhasil ditambahkan.');
    }

    public function update(Request $request, Pengembalian $pengembalian)
    {
        $request->validate([
            'tanggal_pengembalian' => 'required|date',
            'keterangan' => 'nullable',
        ]);

        $pengembalian->update([
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'keterangan' => $request->keterangan,
        ]);

        return back()->with('success', 'Data pengembalian berhasil diubah.');
    }

    public function destroy(Pengembalian $pengembalian)
{
    $peminjaman = $pengembalian->peminjaman;

    $pengembalian->delete();

    $peminjaman->update([
        'status' => 'Dipinjam'
    ]);

    return back()->with('success', 'Data pengembalian berhasil dihapus.');
}
}