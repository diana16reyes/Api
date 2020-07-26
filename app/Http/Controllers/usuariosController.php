<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use DB;



class usuariosController extends Controller
{
    public function show(){

        $usuarios = Usuarios::all();

        return response()->json($usuarios, 201);

    }


    public function showRelations(){

        $usuarios = DB::select('SELECT usu.`usuario_id`,usu.foto, usu.`name`, usu.`apellidop`,usu.`genero`,usu.`email`,mar.marca_id, mar.name AS marca,model.modelo_id,model.año
        FROM usuarios AS usu
        INNER JOIN marcas AS mar ON mar.marca_id = usu.`marca_id`
        INNER JOIN modelos AS model ON model.modelo_id = mar.modelo_id
        ORDER BY usu.name ASC');

        return response()->json($usuarios, 201);


    }

    public function showById($usuario_id){//criterio de busqueda


        $usuarios = DB::select('SELECT usu.`usuario_id`,usu.foto, usu.`name`, usu.`apellidop`,usu.`genero`,usu.`email`,mar.marca_id, mar.name AS marca,model.modelo_id,model.año
        FROM usuarios AS usu
        INNER JOIN marcas AS mar ON mar.marca_id = usu.`marca_id`
        INNER JOIN modelos AS model ON model.modelo_id = mar.modelo_id
        WHERE usu.`usuario_id` =?',[$usuario_id],
        'ORDER BY usu.`name` ASC');

        return response()->json($usuarios, 201);

    }


    //Alta
    public function store(Request $request){

        $newUser = Usuarios::create($request->all());

        return response()->json([$newUser,"mensaje" => "Usuario creado"], 201);

    }

    //modificacion

    public function upDate(Request $request, $usuario_id){


        $updateUser = Usuarios::find($usuario_id);
        $updateUser->update($request->all());

        return response()->json([$updateUser,"mensaje" => "Usuario actualizado"], 200);

    }


    public function delete($usuario_id){//criterio de busqueda

        $deleteUser = Usuarios::find($usuario_id)->delete();

        return response()->json(["mensaje" => "Usuario eliminado temporalmente"], 201);

    }

    public function restore($usuario_id){

        $restoreUser = Usuarios::withTrashed()->find($usuario_id)->restore();

        return response()->json([$restoreUser,"mensaje" => "Usuario restablecido"], 201);


    }
}

