<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;

class articles extends Controller
{
    private $response=[
        'message'=>null,
        'data'=>null
    ];

    public function index()
    {
        $Artikel=Artikel::all();
        return response()->json(['Artikels' => $Artikel]);
        // return response()->json($members,200);
    }


    public function showByName($title)
    {
        
        $Artikel = Artikel::where('title', $title)->first();
        if(!$Artikel) {
            return response()->json(['message' => 'Wisata tidak ditemukan'], 404);
        }

        return view('Trevel Landing Page.detail-about_article', compact('Artikel'));
    }

    public function showCombinedData()
    {

        // Mengambil data dari Artikel
        $articleData = Artikel::orderBy('id', 'DESC')->paginate(50);
        $articleCount = Artikel::count();

         // Mengambil data dari Artikel 1 terbaru
         $articleNewData = Artikel::orderBy('id', 'DESC')->paginate(1);
         $articleNewCount = Artikel::count();
    
        // Menggabungkan data
        $data = [

            'TampilDataArticle' => $articleData,
            'countArticle' => $articleCount,
            'TampilDataArticleNew' => $articleNewData,
            'countArticleNew' => $articleNewCount,
        ];
    
        return view('Trevel Landing Page.detail-about_article', $data);
    }
    
    // public function showByName($nama_tempat)
    // {
    //     $Wisata_Travel = Wisata_Travel::where('nama_tempat', $nama_tempat)->first();
    //     if(!$Wisata_Travel) {
    //         return response()->json(['message' => 'Produk tidak ditemukan'], 404);
    //     }
    
    //     return view('Trevel Landing Page.detail-destination', compact('Wisata_Travel'));
    // }
    // public function showAllData()
    // {
    //     $data1['TampilAllData'] = Artikel::orderBy('id', 'DESC')->paginate(100);
    //     $data1['count'] = Artikel::count();
    //     return view('Trevel Landing Page.package', $data1)->with('i', (request()->input('page', 1) - 1) * 5);
    // }



    public function show($query)
    {
        $Artikel = Artikel::where('title', 'like', "%$query%")
        ->orWhere('author', 'like', "%$query%")
        ->get();

        return response()->json(['Artikels' => $Artikel]);
    }


    public function store(Request $request)
{
    $data = $request->only([
        'title', 'content0', 'content1', 'content2', 'content3', 'content4', 'content5', 'author', 'created_date'
    ]);

    if ($request->hasFile('img0')) {
        $file = $request->file('img0');
        $imageName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/article_images'), $imageName);
        $data['img0'] = 'images/article_images/' . $imageName;
    }

    if ($request->hasFile('img1')) {
        $file = $request->file('img1');
        $imageName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/article_images'), $imageName);
        $data['img1'] = 'images/article_images/' . $imageName;
    }

    if ($request->hasFile('img2')) {
        $file = $request->file('img2');
        $imageName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/article_images'), $imageName);
        $data['img2'] = 'images/article_images/' . $imageName;
    }

    if ($request->hasFile('img3')) {
        $file = $request->file('img3');
        $imageName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/article_images'), $imageName);
        $data['img3'] = 'images/article_images/' . $imageName;
    }

    if ($request->hasFile('img4')) {
        $file = $request->file('img4');
        $imageName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/article_images'), $imageName);
        $data['img4'] = 'images/article_images/' . $imageName;
    }

    if ($request->hasFile('img5')) {
        $file = $request->file('img5');
        $imageName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/article_images'), $imageName);
        $data['img5'] = 'images/article_images/' . $imageName;
    }

    $Artikels = Artikel::create($data);
    $Artikels->img = asset($Artikels->img);

    // Kirim notifikasi ke semua subscriber
    $subscribers = Subscriber::all();
    foreach ($subscribers as $subscriber) {
        Mail::send('emails.notification_article_update', $data, function ($message) use ($subscriber) {
            $message->to($subscriber->email)
                    ->subject('Notifikasi Destinasi Baru di Nusa Travel');
        });
    }

    $this->response['message'] = 'Tertambah Bossku!';
    return response()->json($Artikels, 201);
}


  

    public function update(Request $request, $id)
    {
        $Artikels = Artikel::find($id);
        
            $Artikels->update([
                'title'     => $request->title,
                'content0'   => $request->content0,
                'content1'   => $request->content1,
                'content2'     => $request->content2,
                'content3'     => $request->content3,
                'content4'   => $request->content4,
                'content5'     => $request->content5,
                'author'     => $request->author,
                'created_date'     => $request->created_date,
            ]);
        
        $this->response['message']='success';
        return response()->json($this->response, 200);
    }

    public function destroy($id)
    {
        $Artikel = Artikel::find($id);
        
        // Hapus file gambar yang terkait
        $imageFields = ['img0', 'img1', 'img2', 'img3', 'img4', 'img5'];
    
        foreach ($imageFields as $field) {
            if (!empty($Artikel->$field) && file_exists(public_path($Artikel->$field))) {
                unlink(public_path($Artikel->$field));
            }
        }
    
        // Hapus record dari database
        $Artikel->delete();  
    
        // Jika perlu, tambahkan response atau redirect
        return response()->json(['message' => 'Artikel dan gambar terkait berhasil dihapus'], 200);
    }
    

}
