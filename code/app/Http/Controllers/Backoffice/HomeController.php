<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User_bo;
use Hash;
use Session;
use Illuminate\Support\Facades\Redirect;
use Response;

class HomeController extends Controller
{
    
    public function index()
    {
        if(cek_session())
        {
            return view('backoffice.dashboard');
        }else{
            return view('backoffice.login');
        }
    }
    
    public function login()
    {
        return view('backoffice.login');
    }

    public function do_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = User_bo::where('email', $email)
                ->where('del_stat', false)->first();
        //dd($data);
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('username',$data->username);
                Session::put('email',$data->email);
                Session::put('level',$data->level_user);
                Session::put('picture',$data->picture);
                Session::put('login',TRUE);
                return redirect('admin');
            }
            else{
                return redirect('admin')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('admin')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('admin')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
}
