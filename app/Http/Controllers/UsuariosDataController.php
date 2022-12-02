<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModificarUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UsuariosDataController extends Controller
{

    private $viewUsuarios = 'Usuarios.users_registros';
    private $viewUsuariosEdit = 'Usuarios.users_registros_edit';
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = User::where('user_type','=','3')->get();
        return $this->userAuthorizeAdministratorWithData($this->viewUsuarios, [
            'registros' => $registros,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id','=',$id)->first();
        return $this->userAuthorizeAdministratorWithData($this->viewUsuariosEdit, [
            'registro' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ModificarUserRequest $request, $id)
    {
        try{
            $request->validated();
            $user = User::where('id','=',$id)->first();
            $request->nombres = $request->nombres ? $user->names = $request->nombres : "";
            $request->apellidos = $request->apellidos ? $user->surenames = $request->apellidos : "";
            $request->nombre_de_usuario = $request->nombre_de_usuario ? $user->username = $request->nombre_de_usuario : "";
            $request->email = $request->email ? $user->email = $request->email : "";
            $request->telefono = $request->telefono ? $user->phone = $request->telefono : "";
            $request->fecha_de_nacimiento = $request->fecha_de_nacimiento ? $user->birth_date = $request->fecha_de_nacimiento : "";
            $request->contraseña = $request->contraseña ? $user->password = $request->contraseña : "";
            $user->save();
            return redirect()->to('/gestor/usuarios/user-updated');
        }catch(Exception $e){
            return redirect()->to('/gestor/usuarios/user-updated')->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Activate the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activateUser($id) //We use this to deactivate instead 
    {
        try{
            $user = User::where('id','=',$id)->first();
            $status = $user->active == 0 ? $user->active = 1 : $user->active = 1;
            $user->save();
            return redirect()->to('/gestor/usuarios/users');
        }catch(Exception $e){
            return redirect()->to('/gestor/usuarios/users')->withErrors($e->getMessage());
        }
    }

    /**
     * Deactivate the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivateUser($id) //We use this to deactivate instead 
    {
        try{
            $user = User::where('id','=',$id)->first();
            $status = $user->active == 0 ? $user->actuve = 1 : $user->active = 0;
            $user->save();
            return redirect()->to('/gestor/usuarios/users');
        }catch(Exception $e){
            return redirect()->to('/gestor/usuarios/users')->withErrors($e->getMessage());
        }
    }
}
