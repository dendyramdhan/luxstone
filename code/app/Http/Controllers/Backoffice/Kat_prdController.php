<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Model\Kat_produk;
use Auth;
use Session;
use DB;
use Response;

class Kat_prdController extends Controller
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
        $Kat_produk = Kat_produk::all();
        return view('backoffice.kat_prd.index', ['Kat_produk'=>$Kat_produk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.kat_prd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = Kat_produk::create([
            'nama_kat_prd' => $request->get('nama_ktg'),
            'keterangan' => $request->get('ket')]);
        if($store){
            return Redirect('admin/kategori')->with('sukses','Data Berhasil Diinput..!');
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
    public function edit($id)
    {
        $Kat_produk = Kat_produk::where('id',$id)->first();
        return view('backoffice.kat_prd.edit', compact('Kat_produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Kat_produk::where('id', $id)->update([
            'nama_kat_prd' => $request->get('nama_ktg'),
            'keterangan' => $request->get('ket')]);
        if($update){
            return Redirect('admin/kategori')->with('sukses','Data Berhasil Diinput..!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Kat_produk::where('id',$id)->delete();
        if($delete){
            return Redirect('admin/kategori')->with('sukses','Data Berhasil Dihapus..!');
        }
        else{
            return Redirect('admin/kategori')->with('error','Data Gagal Dihapus..!');
        }
    }
}
