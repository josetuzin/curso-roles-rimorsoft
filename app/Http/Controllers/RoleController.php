<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(5);
        return view('roles.index', compact('roles'));
    }


    public function create()
    {
        return view('roles.create');
    }


    public function store(Request $request)
    {
        $role = Role::create($request->all());
        return redirect()->route('roles.edit', $role->id)
            ->with('info', 'Rol guardado con éxito');
    }


    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $roles = Role::get();

        return view('roles.edit', compact('role', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());

        // el usuario tiene roles y lo sincroniza con los 
        // que vienen en el $request
        $role->roles()->sync($request->get('roles'));

        return redirect()->route('roles.edit', $role->id)
            ->with('info', 'Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return back()->with('info', 'Usuario eliminado con éxito');
    }
}
