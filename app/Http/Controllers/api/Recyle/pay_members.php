<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tagihan_Member;

class pay_members extends Controller
{
    private $response=[
        'message'=>null,
        'data'=>null
    ];

    public function index()
    {
        $pay_members=Tagihan_Member::all();
        return response()->json(['pay_members' => $pay_members]);
        // return response()->json($members,200);
    }

    

    public function show($query)
    {
        $pay_members = Tagihan_Member::where('nama_lengkap', 'like', "%$query%")
        ->orWhere('tipe', 'like', "%$query%")
        ->get();

        return response()->json(['pay_members' => $pay_members]);
    }

    public function store(Request $request)
    {
        Tagihan_Member::create($request->all());
        $this->response['message']='success';
        return response()->json($this->response, 201);

    }
}
