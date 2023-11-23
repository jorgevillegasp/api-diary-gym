<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Resources\V1\UserResource;

class UserController extends Controller
{

    public function index()
    {
        return UserResource::collection(User::latest()->paginate());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $userData = $request->all(); // Obtener todos los datos del request

        // Aquí deberías validar y guardar el usuario en tu base de datos
        $user = User::create($userData);

        // Devolver una respuesta indicando el éxito y, posiblemente, el nuevo recurso creado
        return response()->json([
            'message' => 'Usuario creado con éxito',
            'data' => new UserResource($user) // Opcional: devolver el nuevo usuario creado
        ], 201); // Código 201 para indicar que se creó un recurso nuevo
    }


    public function show(User $user)
    {
        //Le mandamos el recurso encontrado a mi clase
        // Resource que se encarga de modificar
        // el como van a ir estructurado los datos
        return new UserResource($user);
    }


    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        //hay que hacer eliminacion logica
        //queda pendiente, por pruebas

        // response()->json
        $user->delete();
        return response()->json([
            'message' => 'Se elimino el registro con exito'
        ],204);
    }
}
