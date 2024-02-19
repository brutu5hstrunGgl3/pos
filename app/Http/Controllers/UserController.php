<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function index(Request $request)
    {   
       $users = DB::table('users')
        ->when($request->input('name'), function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })
        //->select('id', 'name', 'email', 'phone', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'))
        ->orderBy('id', 'desc')
        ->paginate(10);

        return view(' pages.user.index', compact('users'));

       
    }

    public function create()
    {
        return view('pages.user.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'roles' => $request['roles'],
            'phone' => $request['phone'],
           
        ]);
        

        // $data = $request->all();
        // $data['password'] = Hash::make($request->password);
        // \App\Models\User::create($data);
        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }
    public function edit($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('pages.user.edit', compact('user'));
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {

        $validate = $request->validated();
        $user->update($validate);
        return redirect()->route('user.index')->with('success', 'Data anda berhasil di edit');
    }

    public function destroy(User $user)

    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data anda berhasil di hapus');
    }

    
    
}
