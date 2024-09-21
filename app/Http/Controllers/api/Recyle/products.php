<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Produk;

class products extends Controller
{
    private $response=[
        'message'=>null,
        'data'=>null
    ];

    public function index()
    {
        $produck=Produk::all();
        return response()->json(['products' => $produck]);
        // return response()->json($products,200);
    }


  

    public function show($query)
    {
        $products = Produk::where('nama', 'like', "%$query%")
        ->get();

        return response()->json(['products' => $products]);
    }

    // public function store(Request $request)
    // {
    //   //  Produk::create($request->all());
    //   //  $this->response['message']='success';
    //   //  return response()->json($this->response, 201);


    //   $data = $request->only(['nama', 'tipe', 'status', 'deskripsi', 'harga', 'diskon', 'harga2', 'stok']);

    //   // Simpan file gambar jika ada
    //   if ($request->hasFile('img')) {
    //       $file = $request->file('img');
    //       $imageName = time() . '.' . $file->getClientOriginalExtension();
    //       $file->move(public_path('images'), $imageName);
    //       $data['img'] = $imageName;
    //   }
    //           // Produk::create($data);

    //           return response()->json( Produk::create($data), 201);

    // }
    public function store(Request $request)
{
    $data = $request->only(['nama', 'tipe', 'status', 'deskripsi', 'harga', 'diskon', 'harga2', 'stok', 'tglakhirdiskon']);

    // Simpan file gambar jika ada
    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/produk_images'), $imageName);
        $data['img'] = 'images/produk_images/' . $imageName; // Simpan path relatif gambar
    }
    
    $produk = Produk::create($data);

    // Ubah path gambar menjadi URL
    $produk->img = asset($produk->img);

    return response()->json($produk, 201);
}

    // public function update(Request $request, $id)
    // {
    //     $Produk = Produk::find($id);      
    //         $Produk->update([
    //             'nama'     => $request->nama,
    //             'tipe'     => $request->tipe,
    //             'status'     => $request->status,
    //             'deskripsi'     => $request->deskripsi,
    //             'harga'     => $request->harga,
    //             'diskon'     => $request->diskon,
    //             'harga2'     => $request->harga2,
    //             'stok'     => $request->stok
    //         ]);
        
    //     $this->response['message']='success';
    //     return response()->json($this->response, 200);
    // }



    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        
        $data = $request->only(['nama', 'tipe', 'status', 'deskripsi', 'harga', 'diskon', 'harga2', 'stok', 'tglakhirdiskon']);
    
        // Jika ada file gambar yang diunggah, simpan gambar baru
        if ($request->hasFile('img')) {
            // Hapus gambar lama jika ada
            if ($produk->img) {
                unlink(public_path($produk->img));
            }
            $file = $request->file('img');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $imageName);
            $data['img'] = 'images/' . $imageName; // Simpan path relatif gambar
        }
        
        $produk->update($data);
    
        // Ubah path gambar menjadi URL
        $produk->img = asset($produk->img);
    
        return response()->json($produk, 200);
    }
    





    public function update_Stok(Request $request, $id)
    {
        $Produk = Produk::find($id);      
            $Produk->update([
                
                'stok'     => $request->stok
            ]);
        
        $this->response['message']='success';
        return response()->json($this->response, 200);
    }


    public function update_Status(Request $request, $id)
    {
        $Produk = Produk::find($id);      
            $Produk->update([
                
                'status'     => $request->status
            ]);
        
        $this->response['message']='success';
        return response()->json($this->response, 200);
    }



    

    public function destroy($id)
    {
        $Produk = Produk::find($id);
        $Produk->delete();      
    }




    public function truncateProduk()
    {
        // Hapus semua data produk dari tabel
        Produk::truncate();

        // Kirim respons jika berhasil
        return response()->json(['message' => 'Semua data produk berhasil dihapus.'], 200);
    }
  
  
  
  
  
  
  
    public function showData()
    {
        $data1['TampilMenu'] = Produk::orderBy('id', 'DESC')->paginate(3);
        $data1['count'] = Produk::count();
        return view('Fs-ID', $data1)->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function showAllData()
    {
        $data1['TampilMenu'] = Produk::orderBy('id', 'DESC')->paginate(100);
        $data1['count'] = Produk::count();
        return view('Fs-ID-All-Product', $data1)->with('i', (request()->input('page', 1) - 1) * 5);
    }

   
 


    public function KategoriData(Request $request)
    {

        $search = $request->query("search");

        $TampilBaju = Produk::query();
        $TampilCelana = Produk::query();
        $TampilKosmetik = Produk::query();
        $TampilAksesoris = Produk::query();
        $TampilTas = Produk::query();

        if (!empty($search)) {
            $TampilBaju->where(function ($query) use ($search) {
                $query->where("nama", "like", "%" . $search . "%");
            });
        }

        if (!empty($search)) {
            $TampilCelana->where(function ($query) use ($search) {
                $query->where("nama", "like", "%" . $search . "%");
            });
        }

        if (!empty($search)) {
            $TampilKosmetik->where(function ($query) use ($search) {
                $query->where("nama", "like", "%" . $search . "%");
            });
        }

        if (!empty($search)) {
            $TampilAksesoris->where(function ($query) use ($search) {
                $query->where("nama", "like", "%" . $search . "%");
            });
        }

        if (!empty($search)) {
            $TampilTas->where(function ($query) use ($search) {
                $query->where("nama", "like", "%" . $search . "%");
            });
        }





        $TampilBaju = Produk::where('tipe', 'like', 'Baju')
        ->paginate(100);


        $TampilCelana = Produk::where('tipe', 'like', 'Celana')
        ->paginate(100);


        $TampilKosmetik = Produk::where('tipe', 'like', 'Kosmetik')
        ->paginate(100);


        $TampilAksesoris = Produk::where('tipe', 'like', 'Aksesoris')
        ->paginate(100);

        $TampilTas = Produk::where('tipe', 'like', 'Tas')
        ->paginate(100);

        return view('Fs-ID-kategori', compact('TampilBaju', 'TampilCelana', 'TampilKosmetik', 'TampilAksesoris', 'TampilTas', 'search'));
    }


  
  
      public function showByName($nama)
    {
        $produk = Produk::where('nama', $nama)->first();
        if(!$produk) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }
    
        return view('Fs-ID-Detail', compact('produk'));
    }
  
  
  
  
      public function tampilProdukDiskon()
    {
        $produkDiskon = Produk::where('diskon', '>', 0)->get();
        return view('Fs-ID-Diskon', ['TampilMenu' => $produkDiskon]);
    }
  
  
  
  
      // Method untuk pencarian produk berdasarkan nama
      public function searchProducts(Request $request)
      {
          $keyword = $request->input('searchKeyword');
  
          // Lakukan pencarian berdasarkan nama produk
          $TampilMenu = Produk::where('nama', 'like', '%' . $keyword . '%')->get();
  
         // Tampilkan hasil pencarian pada view Fs-ID-All-Product, dan arahkan ke bagian shop
          return view('Fs-ID-All-Product', compact('TampilMenu'))->with('scrollToShop', true);
      }
 
  
  
  
  
  
  
  


}
