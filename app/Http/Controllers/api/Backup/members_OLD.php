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
        Member::create($request->all());
        $this->response['message']='success';
        return response()->json($this->response, 201);

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
