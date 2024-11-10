<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Spatie\Permission\Models\Role;

class UserController extends Controller implements HasMiddleware
{
    public static function middleware(): array 
    {
        return [
            new Middleware('permission:Read user',only:['index']),
            new Middleware('permission:Update user',only:['edit']),
        ];
    }
    public function index()
    {
        $users = User::all();
        $formattedUsers = $users->map(function ($user) {
            return [
                'id' => $user->id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'created_at' => $user->created_at,
                'roles' => $user->roles->pluck('name'),  // Extract only permission names
            ];
        });
        return Inertia::render('Users/ListUser',["users" => $formattedUsers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $user = User::findOrFail($id);
        $roles = Role::orderBy("name","DESC")->get();
        $hasRoles = $user->roles->pluck('name');
        // dd($hasRoles);
        $formattedRoles = $roles->map(function ($role) {
            return [
                'id' => $role->id,
                'name' => $role->name,
            ];
        });
        return Inertia::render('Users/EditUser',["user" => $user,"roles" => $formattedRoles,"hasRoles" => $hasRoles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $validator = Validator::make($request->all(),[

            'first_name' => "required|min:3",
            'last_name' => "required|min:3",
            'email' => "required|email|unique:users,email,".$id.",id",
        ]);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save(); 
        $user->syncRoles($request->roles); // ila makhdmatch dirha fost array
        return redirect()->route('user.index')->with("success","Updated successfully !!");;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
