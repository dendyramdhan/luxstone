<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Model\User_bo;
use Auth;
use Session;
use DB;
use Response;
 

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('cek_login');
    }

    public function index()
    {

        $User = User_bo::all();
        return view('backoffice.user.index', ['User'=>$User]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        if($request->file('picture')) {
            $pic = $request->file('picture');
            $etc  = $pic->getClientOriginalExtension();
            $fileName = GenerateUserID().'.'.$etc;
            $upload = $pic->storeAs('public/users', $fileName);
        }

        else {
            $fileName = NULL;
        }
        $User = User_bo::create([
        'userid' => GenerateUserID(),
        'name' => $request->get('name'),
        'username' => $request->get('username'),
        'email' => $request->get('email'),
        'password' => bcrypt($request->get('password')),
        'level_user' => $request->get('level'),
        'picture' => $fileName,
        'del_stat' => 0]);
        return Redirect('admin/pengguna')->with('sukses','Data Berhasil Diinput..!');
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
    public function edit($userid)
    {
        $User = User_bo::where('userid',$userid)->first();
        return view('backoffice.user.edit', compact('User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userid)
    {
        if($request->file('picture')) {
            $pic = $request->file('picture');
            $etc  = $pic->getClientOriginalExtension();
            $fileName = GenerateUserID().'.'.$etc; 
            //dd($fileName);
            $upload = $pic->storeAs('public/users',$fileName);

            if($upload){
                $User = User_bo::where('userid', $userid)->update([
                'name' => $request->get('name'),
                'username' => $request->get('username'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'level_user' => $request->get('level'),
                'picture' => $fileName,
                'del_stat' => 0]);
            }
        }
        else{
            $User = User_bo::where('userid', $userid)->update([
            'name' => $request->get('name'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'level_user' => $request->get('level'),
            'del_stat' => 0]);
        }
        return Redirect('admin/pengguna')->with('sukses','Data Berhasil Diupdate..!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userid)
    {
        $delete = User_bo::where('userid',$userid)->delete();
        if($delete){
        return Redirect('admin/pengguna')->with('sukses','Data Berhasil Dihapus..!');
        }
    }
}
