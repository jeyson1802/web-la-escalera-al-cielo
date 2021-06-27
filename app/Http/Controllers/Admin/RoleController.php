<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function __construct(){
        $this->middleware("can:admin.roles.index")->only('index');
        $this->middleware("can:admin.roles.create")->only('create','store');
        $this->middleware("can:admin.roles.edit")->only('edit', 'update');
        $this->middleware("can:admin.roles.destroy")->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(12);
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'permissions'=>'required',
        ]);

        $role =Role::create($request->all());

        $role->permissions()->attach($request->input('permissions'));

        return redirect()->route('admin.roles.index')->with('info','Rol creado con éxito.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('permissions','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
       
        $request->validate([
            'name'=>'required',
            'permissions'=>'required',
        ]);
        $role->fill($request->input());
        $role->save();
        $role->permissions()->sync($request->input('permissions'));
        return back()->with('info','Rol actualizado con éxito.');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        
        $role->delete();

        return redirect()->route('admin.roles.index')->with('info','Rol eliminado con éxito.');
    }
}
