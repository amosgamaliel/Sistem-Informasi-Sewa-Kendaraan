<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Transaksi;

class TambahTransaksiController extends Controller
{
    public function indexKendaraan()
    {

        $kendaraan = Kendaraan::latest();
        if (request('search')) {
            $kendaraan->where('nama', 'like', '%' . request('search') . '%');
        }

        return view('transaksi.pilih-kendaraan', [
            'kendaraan' => $kendaraan->paginate(9),
            'title' => 'Collection',
        ]);
    }

    public function showKendaraan(Kendaraan $kendaraan)
    {
        // $main = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $dengan_sopir = $kendaraan->harga + 50000;
        $sopir_bbm = $kendaraan->harga + 100000;

        // $orderDetails = OrderDetail::where('kendaraan_id', $kendaraan->id)->first();
        return view('transaksi.detail-kendaraan', [
            'kendaraan' => $kendaraan,
            'title' => 'Details ' . $kendaraan->name,
            'status' => null,
            'dengan_sopir' => $dengan_sopir,
            'sopir_bbm' => $sopir_bbm,
            'orderDetails' => null,
        ]);
    }

    public function createOrder(CreateOrderRequest $request){
        $validated = $request->validated();
        $transaksi = Transaksi::create($validated);

        return redirect()->route('transaksi.index')->with('success', 'Berhasil menambahkan pesanan');
    }
}
