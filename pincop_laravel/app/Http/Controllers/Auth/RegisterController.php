<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     protected function validator(array $data)
     {
         return Validator::make($data, [
             'name' => [
                 'required',
                 'string',
                 'max:255',
                 function ($attribute, $value, $fail) {
                     if ($value === '') {
                         $fail('El nombre es requerido');
                     } else if (!preg_match('/^[a-zA-ZÀ-ÿ\s]{4,40}$/', $value)) {
                         $fail('El nombre es inválido');
                     }
                 }
             ],
             'email' => [
                 'required',
                 'string',
                 'email',
                 'max:255',
                 'unique:users',
                 function ($attribute, $value, $fail) {
                     if ($value === '') {
                         $fail('El email es requerido');
                     } else if (!preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.(com|es|co|org|net)$/i', $value)) {
                         $fail('El email es inválido');
                     }
                 }
             ],
             'password' => [
                 'required',
                 'string',
                 'min:8',
                 'confirmed',
                 function ($attribute, $value, $fail) {
                     if ($value === '') {
                         $fail('La contraseña es requerida');
                     } else if (!preg_match('/^.{8,12}$/', $value)) {
                         $fail('La contraseña debe tener entre 8 y 12 caracteres');
                     } else if (!preg_match('/[A-Z]/', $value)) {
                         $fail('La contraseña debe contener al menos 1 letra mayúscula');
                     } else if (!preg_match('/\d/', $value)) {
                         $fail('La contraseña debe contener al menos 1 número');
                     } else if (!preg_match('/[^a-zA-Z0-9]/', $value)) {
                         $fail('La contraseña debe contener al menos 1 carácter especial');
                     }
                 }
             ],
         ]);
     }
     
     protected function create(array $data)
     {
         return User::create([
             'name' => $data['name'],
             'email' => $data['email'],
             'password' => Hash::make($data['password']),
         ]);
     }
}
