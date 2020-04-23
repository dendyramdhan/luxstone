<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Model\Kontak;
use Auth; 
use Session;
use DB;
use Response; 

class KontakController extends Controller
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
        $Kontak = Kontak::where('aktif', 1)->paginate();
        return view('backoffice.kontak.index', compact('Kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = Kontak::create([
            'kontakid' => GenerateKontakID(),
            'nama' => $request->get('nama'),
            'email' => $request->get('email'),
            'mobile_1' => $request->get('mobile_1'),
            'mobile_2' => $request->get('mobile_2'),
            'aktif' => 1
            ]);
        if($insert){
            return Redirect('admin/kontak')->with('sukses','Data Berhasil Diinput..!');
        }
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
    public function edit($kontakid)
    {
        $Kontak = Kontak::where('kontakid',$kontakid)->first();
        return view('backoffice.kontak.edit', compact('Kontak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kontakid)
    {
        $update = Kontak::where('kontakid', $kontakid)->update([
            'nama' => $request->get('nama'),
            'email' => $request->get('email'),
            'mobile_1' => $request->get('mobile_1'),
            'mobile_2' => $request->get('mobile_2'),
            'aktif' => 1]);
        return Redirect('admin/kontak')->with('sukses','Data Berhasil Diupdate..!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kontakid)
    {
        //dd($kontakid);
        $delete = Kontak::where('kontakid',$kontakid)->update([
            'aktif' => 0]);
        if($delete){
            return Redirect('admin/kontak')->with('sukses','Data Berhasil Dihapus..!');
        }
        else{
            return Redirect('admin/kontak')->with('error','Data Gagal Dihapus..!');
        }
    }
}
