<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();

        return Inertia::render('Permissions/ListePermission',['permissions'=>$permissions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Permissions/CreatePermission');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:permissions|max:20'
        ]);
        if($validator->passes()){
            Permission::create([
                'name'=> $request->name,
            ]);
            return redirect()->route('Permissions');
        }else{
            return redirect()->route('permission.create')->withInput()->withErrors($validator);
        }

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
        $permission = Permission::findOrFail($id);
        return Inertia::render('Permissions/EditPermission',['permission' => $permission]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:permissions,name,'.$id.'|max:20'
        ]);
        if($validator->passes()){
            Permission::where('id',$id)->update([
                'name'=> $request->name,
                'created_at' =>now()
            ]);
            return redirect()->route('Permissions');
        }else{
            return redirect()->route('permission.update')->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Permission::where('id',$id)->delete();
        return redirect()->route('Permissions');
    }
}
