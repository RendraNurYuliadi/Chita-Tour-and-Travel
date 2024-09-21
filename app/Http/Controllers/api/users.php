<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class users extends Controller
{
    private $response=[
        'message'=>null,
        'data'=>null
    ];

    public function index()
    {
        $users=User::all();
        return response()->json(['users' => $users]);
        // return response()->json($users,200);
    }

    public function show($query)
    {
        $users = User::where('name', 'like', "%$query%")
        ->get();

        return response()->json(['users' => $users]);
    }

 
  
    public function store(Request $request)
    {
    $data = $request->only(['name', 'email', 'password', 'role', 'gender', 'username']);

    // Simpan file gambar jika ada
    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/user_images'), $imageName);
        $data['img'] = 'images/user_images/' . $imageName; // Simpan path relatif gambar
    }
    
    $user = User::create($data);

    // Ubah path gambar menjadi URL
    $user->img = asset($user->img);
    $this->response['message']='Tertambah Bossku!';
    return response()->json($user, 201);
    }
  
  

    public function update(Request $request, $id)
    {
        $User = User::find($id);
        if($request->password==''){
            $User->update([
                'name'     => $request->name,
                'email'     => $request->email,
                'password'   => $request->password,
                'role'     => $request->role,
                'gender'     => $request->gender,
                'username'     => $request->username,
            ]);
        }
        else{
            $User->update([
                'name'     => $request->name,
                'email'     => $request->email,
                'password'   => $request->password,
                'role'     => $request->role,
                'gender'     => $request->gender,
                'username'     => $request->username,
            ]);
        }
        $this->response['message']='Teredit Bossku!';
        return response()->json($this->response, 200);
    }

    public function destroy($id)
    {
        $User = User::find($id);
    
        // Hapus file gambar yang terkait
        if (!empty($User->img) && file_exists(public_path($User->img))) {
            unlink(public_path($User->img));
        }
    
        // Hapus record dari database
        $User->delete();  
    
        // Jika perlu, tambahkan response atau redirect
        return response()->json(['message' => 'Wisata dan gambar terkait berhasil dihapus'], 200);
    }


}
