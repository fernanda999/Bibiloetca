<?php

namespace App\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('seguridad.index');
    }

    public function authenticated(Request $request, $user)//user es un instancia nuetro modelo usuario y crea public
    {
        $roles =$user->roles()->get();//where('estado',1)->get();
            if($roles->isNotEmpty()){
                $user->setSession($roles->toArray());
            } else {
                $this->guard()->logout();
                 $request->session()->invalidate();
                 return redirect('seguridad/login')->withErrors(['error'=> 'Este usuario no tiene un rol activo']);
            }
    }

    public function username()
    {
    return 'usuario';
    }
    // valido en config auth en provieders
}




