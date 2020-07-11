<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if($user){
                return view('user.edit')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        
        // Si el usuario autentificado existe
        if($user){
            $validate = null;

            // Si el email es igual al del usuario logeado
            if(Auth::user()->email === $request['email']) {
                $validate = $request->validate([
                    'name' => 'required:max:255',
                    'email' => 'required:max:255|email',
                    'password' => 'required|min:8',
                ]);
            } else {
                $validate = $request->validate([
                    'name' => 'required:max:255',
                    'email' => 'required:max:255|email|unique:users',
                    'password' => 'required|min:8',
                ]);
            }

            // Si la validacion funciona
            if($validate) {
                
                $user->name = $request['name'];
                $user->email = $request['email'];
                $user->password = $request['password'];
                $user->save();

                // Redireccionamos al home
                return redirect('/');
            } else {
                return readirect()->back();
            }

        } else {
            return redirect()->back();
        }
    }

    public function deleteUser($id)
    {
        $user_id = User::find(Auth::user()->id);
        $posts = Post::where('user_id', '=', $id)->delete();
        Auth::logout();        
        $user_id->delete();
        
        return redirect('/');
    }
    public function showNotifications($id)
    {
        $user = User::find($id);
        return view('notifications.notification', ['notifications'=> $user->notifications]);
    }
}
