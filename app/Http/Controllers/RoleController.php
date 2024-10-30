<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::get();
        $formattedRoles = $roles->map(function ($role) {
            return [
                'id' => $role->id,
                'name' => $role->name,
                'permissions' => $role->permissions->pluck('name'),  // Extract only permission names
            ];
        });
    
        return Inertia::render('Roles/ListeRole', [
            'roles' => $formattedRoles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::orderBy('name', 'ASC')->get();
        return Inertia::render('Roles/CreateRole',['permissions' => $permissions]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:roles|min:3'
        ]);
        if($validator->passes()){
            $role = Role::create([
                'name'=> $request->name,
            ]);
            if(!empty($request->permissions)){
                foreach($request->permissions as $value){
                    $role->givePermissionTo($value);
                }
            }
            return redirect()->route('role.index');
        }else{
            return redirect()->route('role.create')->withInput()->withErrors($validator);
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
        $role = Role::findOrFail($id);
        $hasPermission= $role->permissions->pluck('name')->toArray();
        $permissions = Permission::orderBy('name', 'ASC')->get();
        return Inertia::render('Roles/EditRole',['hasPermissions'=>$hasPermission,'permissions' =>$permissions,'role'=>$role]); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = Role::findOrFail($id); 
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:roles,name,'.$id.'|min:3'
        ]);
        if($validator->passes()){
            $role->name = $request->name;
            $role->save();
            if(!empty($request->permissions)){
                $role->syncPermissions($request->permissions);
            }else{
                $role->syncPermissions([]);
            }
            return redirect()->route('role.index');
        }else{
            return redirect()->route('role.edit',$id)->withInput()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Role::where('id', $id)->delete();
        return redirect()->route('role.index');
    }
}
