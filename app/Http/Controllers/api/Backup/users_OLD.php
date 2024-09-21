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
        User::create($request->all());
        $this->response['message']='success';
        return response()->json($this->response, 201);
    }

    public function update(Request $request, $id)
    {
        $User = User::find($id);
        if($request->password==''){
            $User->update([
                'name'     => $request->name,
                'email'     => $request->email,
                'role'     => $request->role,
                'gender'     => $request->gender,
                'email'     => $request->email,
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
        $this->response['message']='success';
        return response()->json($this->response, 200);
    }

    public function destroy(User $User)
    {
        $User->delete();
        $this->response['message']='success';
        return response()->json($this->response, 204);
    }


}
