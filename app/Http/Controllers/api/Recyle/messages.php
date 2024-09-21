<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class messages extends Controller
{
    private $response=[
        'message'=>null,
        'data'=>null
    ];

    public function index()
    {
        $messages=Message::all();
        return response()->json(['messages' => $messages]);
        // return response()->json($messages,200);
    }

    public function show($query)
    {
    }

    public function store(Request $request)
    {
        Message::create($request->all());
        $this->response['message']='success';
        return response()->json($this->response, 201);
    }

    public function update(Request $request, $id)
    {
        $Message = Message::find($id);      
            $Message->update([
                'pengirim'     => $request->pengirim,
                'penerima'     => $request->penerima,
                'pesan'     => $request->pesan,
                'jawaban'     => $request->jawaban,
                'waktu'     => $request->waktu,
                
            ]);
        
        $this->response['message']='success';
        return response()->json($this->response, 200);
    }

    public function destroy($id)
    {
        $Message = Message::find($id);
        $Message->delete();      
    }
}
