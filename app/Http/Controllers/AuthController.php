<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        try {
            $user = User::where('name', $request->name)->first();
            
            if(!$user){
                return response()->json(['status' => 404, 'error' => 'Este usuario no existe']);
            }

            $credentials = $request->only('name', 'password');
            if (Auth::attempt($credentials)) {
                // Successful authentication
                return response()->json(['status' => 200, 'success' => 'Autenticacion exitosa']);
            }
            return response()->json(['status' => 401, 'error' => 'Las credenciales no son correctas']);

        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'error' => $e->getMessage()]);
        }
    }

    public function registro(Request $request){
        return view('auth.register');
    }

    public function form(Request $request){

       $user = new User;

       $user->name = $request->usuario;
       $user->password = Hash::make($request->password);
       $user->save();
     

       return 'registrado';
    }

    public function validar(){
        return Auth::user();
    }
}
