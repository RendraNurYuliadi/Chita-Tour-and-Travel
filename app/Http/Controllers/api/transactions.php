<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Produk;
use App\Models\Member;
class transactions extends Controller
{
    private $response=[
        'message'=>null,
        'data'=>null
    ];

    public function index()
    {
        $transactions=Transaksi::all();
        return response()->json(['transactions' => $transactions]);
        // return response()->json($transactions,200);
    }

  
  
    
    ////// Pencarian Produk Buat Scan Barcode 
    public function searchByBarcodeProduk($barcode)
    {
        $products = Produk::where('id', $barcode)->first();
        return response()->json(['products' => $products]);
    }

    ////// Pencarian Member Buat Scan
    public function searchByBarcodeMember($barcode)
    {
        $members = Member::where('id', $barcode)->first();
        return response()->json(['members' => $members]);
    }

    

    public function show($query)
    {
        $transactions = Transaksi::where('pembeli', 'like', "%$query%")
        ->get();

        return response()->json(['transactions' => $transactions]);
    }

    public function store(Request $request)
    {
        Transaksi::create($request->all());
        $this->response['message']='success';
        return response()->json($this->response, 201);

    }

    public function update(Request $request, $id)
    {
        $Transaksi = Transaksi::find($id);
        
            $Transaksi->update([
                'pembeli'     => $request->pembeli,
                'produk'   => $request->produk,
                'harga'   => $request->harga,
                'qty'   => $request->qty,
                'member'     => $request->member,
                'diskon'   => $request->diskon,
                'totalharga'   => $request->totalharga,
                'uangbayar'   => $request->uangbayar,
                'tanggal'   => $request->tanggal,
            ]);
        
        $this->response['message']='success';
        return response()->json($this->response, 200);
    }

    public function destroy($id)
    {
        $Transaksi = Transaksi::find($id);
        $Transaksi->delete();  
    }



}
