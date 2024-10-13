<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Sentinel;
use Activation;

class UserController extends Controller
{
    // Crear un nuevo usuario
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'birthdate' => 'nullable|date',
            'role_id' => 'required|integer|exists:roles,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Crear el usuario
        $item = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'birthdate' => $request->birthdate,
            'role_id' => $request->role_id,
        ]);

        $user = Sentinel::findById($item->id);
        $activation = Activation::create($user);
        Activation::complete($user, $activation->code);

        /* Extras */
        $role = Sentinel::findRoleById($request->role_id);
        $role->users()->attach($item);

        return response()->json($item, 201);
    }

    // Leer todos los usuarios
    public function index()
    {
        return response()->json(User::all());
    }

    // Leer un solo usuario
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user);
    }

    // Actualizar usuario
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Definir las reglas de validación
        $rules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:6',
            'birthdate' => 'nullable|date',
            'role_id' => 'required|integer|exists:roles,id',
        ];

        // Validación para PATCH: solo se requiere que los campos que se envían estén presentes
        if ($request->isMethod('patch')) {
            foreach ($rules as $field => $rule) {
                $rules[$field] = 'sometimes|' . $rule;
            }
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Actualizar el usuario
        $user->first_name = $request->first_name ?? $user->first_name;
        $user->last_name = $request->last_name ?? $user->last_name;
        $user->email = $request->email ?? $user->email;
        if ($request->has('password') && !empty($request->input('password'))) {
            $user->password = $request->input('password');
        }
        $user->birthdate = $request->birthdate ?? $user->birthdate;
        $user->role_id = $request->role_id ?? $user->role_id;

        $user->save();

        return response()->json($user);
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }
}
