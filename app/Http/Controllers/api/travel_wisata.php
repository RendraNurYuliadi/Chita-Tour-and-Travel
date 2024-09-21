<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata_Travel;
use App\Models\Artikel;

use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;

class travel_wisata extends Controller
{
    private $response=[
        'message'=>null,
        'data'=>null
    ];

    public function index()
    {
        $Wisata_Travel=Wisata_Travel::all();
        return response()->json(['wisata_travels' => $Wisata_Travel]);
        // return response()->json($members,200);
    }

    public function showCombinedData()
    {
        // Mengambil data dari Wisata_Travel
        $wisataData = Wisata_Travel::orderBy('id', 'DESC')->paginate(3);
        $wisataCount = Wisata_Travel::count();
    
        // Mengambil data dari Artikel
        $articleData = Artikel::orderBy('id', 'DESC')->paginate(50);
        $articleCount = Artikel::count();

         // Mengambil data dari Artikel 1 terbaru
         $articleNewData = Artikel::orderBy('id', 'DESC')->paginate(1);
         $articleNewCount = Artikel::count();
    
        // Menggabungkan data
        $data = [
            'TampilData' => $wisataData,
            'count' => $wisataCount,
            'TampilDataArticle' => $articleData,
            'countArticle' => $articleCount,
            'TampilDataArticleNew' => $articleNewData,
            'countArticleNew' => $articleNewCount,
        ];
    
        return view('Trevel Landing Page.index-travel', $data);
    }
    

    public function showAllData()
    {
        $data1['TampilAllData'] = Wisata_Travel::orderBy('id', 'DESC')->paginate(100);
        $data1['count'] = Wisata_Travel::count();
        return view('Trevel Landing Page.package', $data1)->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function showByName($nama_tempat)
    {
        $Wisata_Travel = Wisata_Travel::where('nama_tempat', $nama_tempat)->first();
        if(!$Wisata_Travel) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }
    
        return view('Trevel Landing Page.detail-destination', compact('Wisata_Travel'));
    }

    public function show($query)
    {
        $Wisata_Travel = Wisata_Travel::where('nama_tempat', 'like', "%$query%")
        ->orWhere('lokasi', 'like', "%$query%")
        ->get();

        return response()->json(['wisata_travels' => $Wisata_Travel]);
    }

  
    public function store(Request $request)
    {
        $data = $request->only([
            'nama_tempat', 'lokasi', 'deskripsi', 'kategori', 'biaya_masuk', 
            'jam_buka', 'jam_tutup', 'fasilitas', 'rating', 'ulasan', 
            'website', 'telepon', 'email', 'latitude', 'longitude'
        ]);
    
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/travel_images'), $imageName);
            $data['img'] = 'images/travel_images/' . $imageName;
        }
    
        $Travels = Wisata_Travel::create($data);
        $Travels->img = asset($Travels->img);
    
        // Kirim notifikasi ke semua subscriber
        $subscribers = Subscriber::all();
        foreach ($subscribers as $subscriber) {
            Mail::send('emails.notification_subs_update', $data, function ($message) use ($subscriber) {
                $message->to($subscriber->email)
                        ->subject('Notifikasi Destinasi Baru di Nusa Travel');
            });
        }
    
        $this->response['message'] = 'Tertambah Bossku!';
        return response()->json($Travels, 201);
    }
    

  

    public function update(Request $request, $id)
    {
        $Travels = Wisata_Travel::find($id);
        
            $Travels->update([
                'nama_tempat'     => $request->nama_tempat,
                'lokasi'   => $request->lokasi,
                'deskripsi'   => $request->deskripsi,
                'kategori'     => $request->kategori,
                'biaya_masuk'     => $request->biaya_masuk,
                'jam_buka'   => $request->jam_buka,
                'jam_tutup'     => $request->jam_tutup,
                'fasilitas'     => $request->fasilitas,
                'rating'     => $request->rating,
                'ulasan'     => $request->ulasan,
                'website'     => $request->website,
                'telepon'     => $request->telepon,
                'email'     => $request->email,
                'latitude'     => $request->latitude,
                'longitude'     => $request->longitude,
            ]);
        
        $this->response['message']='success';
        return response()->json($this->response, 200);
    }

    public function destroy($id)
    {
        $Wisata_Travel = Wisata_Travel::find($id);
    
        // Hapus file gambar yang terkait
        if (!empty($Wisata_Travel->img) && file_exists(public_path($Wisata_Travel->img))) {
            unlink(public_path($Wisata_Travel->img));
        }
    
        // Hapus record dari database
        $Wisata_Travel->delete();  
    
        // Jika perlu, tambahkan response atau redirect
        return response()->json(['message' => 'Wisata dan gambar terkait berhasil dihapus'], 200);
    }


 




   




    






}
