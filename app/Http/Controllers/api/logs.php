<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LogActivity;

class logs extends Controller
{
    private $response=[
        'message'=>null,
        'data'=>null
    ];

    public function index()
    {
        $logs=LogActivity::all();
        return response()->json(['logs' => $logs]);
        // return response()->json($logs,200);
    }

    public function show($query)
    {
        $logs = LogActivity::where('email', 'like', "%$query%")
        ->get();

        return response()->json(['logs' => $logs]);
    }

    public function store(Request $request)
    {
        LogActivity::create($request->all());
        $this->response['message']='success';
        return response()->json($this->response, 201);
    }

    public function update(Request $request, $id)
    {
        $LogActivity = LogActivity::find($id);      
            $LogActivity->update([
                'nama'     => $request->nama,
                'tipe'     => $request->tipe,
                'status'     => $request->status,
                
            ]);
        
        $this->response['message']='success';
        return response()->json($this->response, 200);
    }

    public function destroy($id)
    {
        $LogActivity = LogActivity::find($id);
        $LogActivity->delete();      
    }
}
