<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class members extends Controller
{
    private $response=[
        'message'=>null,
        'data'=>null
    ];

    public function index()
    {
        $members=Member::all();
        return response()->json(['members' => $members]);
        // return response()->json($members,200);
    }

    

    public function show($query)
    {
        $members = Member::where('nama_lengkap', 'like', "%$query%")
        ->orWhere('alamat', 'like', "%$query%")
        ->get();

        return response()->json(['members' => $members]);
    }

  
  
  
  
  
       public function store(Request $request)
{
    $data = $request->only(['nama_lengkap', 'tgl_lahir', 'alamat', 'no_telepon', 'tipe', 'status', 'tgl_expired']);

    // Simpan file gambar jika ada
    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/member_images'), $imageName);
        $data['img'] = 'images/member_images/' . $imageName; // Simpan path relatif gambar
    }
    
    $members = Member::create($data);

    // Ubah path gambar menjadi URL
    $members->img = asset($members->img);

    return response()->json($members, 201);
}

  

    public function update(Request $request, $id)
    {
        $Member = Member::find($id);
        
            $Member->update([
                'nama_lengkap'     => $request->nama_lengkap,
                'tgl_lahir'   => $request->tgl_lahir,
                'alamat'   => $request->alamat,
                'no_telepon'   => $request->no_telepon,
                'tipe'     => $request->tipe,
                'status'   => $request->status,
                'tgl_expired'     => $request->tgl_expired,
            ]);
        
        $this->response['message']='success';
        return response()->json($this->response, 200);
    }

    public function destroy($id)
    {
        $Member = Member::find($id);
        $Member->delete();  
    }


    public function truncate()
    {
        Member::truncate();
        $this->response['message'] = 'All records in tbl_member have been deleted.';
        return response()->json($this->response, 200);
    }


}
