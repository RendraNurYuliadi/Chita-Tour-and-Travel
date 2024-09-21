<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Travel;
class travel_place extends Controller
{
    private $response=[
        'message'=>null,
        'data'=>null
    ];

    public function index()
    {
        $Travels=Travel::all();
        return response()->json(['Travels' => $Travels]);
        // return response()->json($users,200);
    }

    public function show($query)
    {
        $Travels = Travel::where('Nama_Tempat', 'like', "%$query%")
        ->get();

        return response()->json(['Travels' => $Travels]);
    }

 
  
    public function store(Request $request)
    {
        $data = $request->only(['Nama_Tempat', 'Lokasi', 'Deskripsi', 'Kategori', 'Biaya_Masuk', 'Jam_Buka', 'Jam_Tutup', 'Fasilitas', 'Rating', 'Ulasan', 'Website', 'Telepon', 'Email', 'Latitude', 'Longitude']);

        // Simpan file gambar jika ada
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/travel_images'), $imageName);
            $data['img'] = 'images/travel_images/' . $imageName; // Simpan path relatif gambar
        }
        
    $Travels = Travel::create($data);

    // Ubah path gambar menjadi URL
    $Travels->img = asset($Travels->img);
    $this->response['message']='Tertambah Bossku!';
    return response()->json($Travels, 201);
    }
  
  

    public function update(Request $request, $id)
    {
        $Travels = Travel::findOrFail($id);
        
        $data = $request->only(['Nama_Tempat', 'Lokasi', 'Deskripsi', 'Kategori', 'Biaya_Masuk', 'Jam_Buka', 'Jam_Tutup', 'Fasilitas', 'Rating', 'Ulasan', 'Website', 'Telepon', 'Email', 'Latitude', 'Longitude']);
        $Travels->update($data);

    
    $this->response['message']='success';
    return response()->json($this->response, 200);
    }

    public function destroy(Travel $Travel)
    {
        $Travel->delete();
        $this->response['message']='Terhapus Bossku!';
        return response()->json($this->response, 204);
    }

}
