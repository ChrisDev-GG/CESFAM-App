<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModificarAdminRequest;
use App\Http\Requests\RegistroAdminRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AdminsDataController extends Controller
{
    private $viewAdmin = 'Usuarios.admin_registros';
    private $viewAdminCreate = 'Usuarios.admin_registros_create';
    private $viewAdminEdit = 'Usuarios.admin_registros_edit';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = User::where('user_type','!=','3')->get();
        return $this->userAuthorizeAdministratorWithData($this->viewAdmin, [
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
        return $this->userAuthorizeAdministrator($this->viewAdminCreate);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroAdminRequest $request)
    {
        $request->validated();
        $user = User::create([
            'names' => $request->nombres,
            'surenames' => $request->apellidos,
            'username' => $request->nombre_de_usuario,
            'password' => $request->contraseña,
            'confirmation_password' => $request->confirmar_contraseña,
            'email' => $request->email ?? "",
            'phone' => $request->telefono ?? "",
            'birth_date' => $request->fecha_de_nacimiento,
            'user_type' => 2,
        ]);
        return redirect('/gestor/usuarios/admin-created');
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
        return $this->userAuthorizeAdministratorWithData($this->viewAdminEdit, [
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
    public function update(ModificarAdminRequest $request, $id)
    {
        $request->validated();
        $user = User::where('id', '=', $id)->first();
        $request->nombres = $request->nombres ? $user->names = $request->nombres : "";
        $request->apellidos = $request->apellidos ? $user->surenames = $request->apellidos : "";
        $request->email = $request->email ? $user->email = $request->email : "";
        $request->nombre_de_usuario = $request->nombre_de_usuario ? $user->username = $request->nombre_de_usuario : "";
        $request->constraseña = $request->contraseña ? $user->password = $request->contraseña : "";
        $request->telefono = $request->telefono ? $user->phone = $request->telefono : "";
        $request->fecha_de_nacimiento = $request->fecha_de_nacimiento ? $user->birth_date = $request->fecha_de_nacimiento : "";
        $user->save();
        return redirect('/gestor/usuarios/admin-updated');
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

    public function activateUser($id) //We use this to deactivate instead 
    {
        try{
            $user = User::where('id','=',$id)->first();
            $active = $user->active == 0 ? $user->active = 1 : $user->active = 1;
            $user->save();
            return redirect()->to('/gestor/usuarios/admins');
        }catch(Exception $e){
            return redirect()->to('/gestor/usuarios/admins')->withErrors($e->getMessage());
        }
    }

    /**
     * Dectivate the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivateUser($id) //We use this to deactivate instead 
    {
        try{
            $user = User::where('id','=',$id)->first();
            $active = $user->active == 1 ? $user->active = 0 : $user->active = 1;
            $user->save();
            return redirect()->to('/gestor/usuarios/admins');
        }catch(Exception $e){
            return redirect()->to('/gestor/usuarios/admins')->withErrors($e->getMessage());
        }
    }
}
