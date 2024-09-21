<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;

class subscribers extends Controller
{
    private $response=[
        'message'=>null,
        'data'=>null
    ];

    public function index()
    {
        $subscribers=Subscriber::all();
        return response()->json(['subscribers' => $subscribers]);
        // return response()->json($subscribers,200);
    }

    public function show($query)
    {
        $subscribers = Subscriber::where('email', 'like', "%$query%")
        ->get();

        return response()->json(['subscribers' => $subscribers]);
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'email' => 'required|email|unique:tb_subscribers,email',
        ]);
    
        // Simpan data subscriber
        Subscriber::create($request->all());
    
        // Set response message
        $this->response['message'] = 'Success';
    
        // Mengarahkan ke view dengan pesan
        return view('emails.notification-subscribers', [
            'message' => 'Terima kasih telah berlangganan. Kami akan mengirimkan informasi terbaru ke email Anda.'
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $Subscriber = Subscriber::find($id);      
            $Subscriber->update([
                'email'     => $request->email
                
            ]);
        
        $this->response['message']='success';
        return response()->json($this->response, 200);
    }

    public function destroy($id)
    {
        $Subscriber = Subscriber::find($id);
        $Subscriber->delete();      
    }
}
