<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Produk;
use App\Model\Gmbr_produk;
use Auth;
use Session;
use DB;
use Response;

class ProductController extends Controller
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
        $Produk = Produk::with('pic_produk')
                ->with('get_katprd')
                ->where('del_stat', 0)
                ->paginate();
        return view('backoffice.produk.index', compact('Produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=DB::table('kat_produks')->get();
        return view('backoffice.produk.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)  
    {
        $prdid = GenerateProductID();
        $Produk = Produk::create([
            'produkid' => $prdid,
            'nama_prd' => $request->get('nama_prd'),
            'kat_prd' => $request->get('kat_prd'),
            'stok' => $request->get('stok'),
            'stok_satuan' => $request->get('sat_stok'),
            'warna' => $request->get('warna'),
            'deskripsi' => $request->get('deskripsi'),
            'harga' => $request->get('harga'),
            'sat_harga' => $request->get('sat_harga'),
            'del_stat' => 0
        ]);
        if($request->file('gambar')) {
            $pic = $request->file('gambar');
            foreach ($pic as $key => $val) {
                $no = $key+1;
                $etc = $val->getClientOriginalExtension(); 
                $fileName = $prdid."_".$no.'.'.$etc; 
                $upload = $val->storeAs('public/produk',$fileName);
                Gmbr_produk::create([
                    'id_produk'=> $prdid,
                    'gambar'   => $fileName
                ]);
            }   
            //dd($fileName);
        } 
        else {
            $fileName = NULL;
        }
        if($Produk){
            return Redirect('admin/produk')->with('sukses','Data Berhasil Diinput..!');
        }
        /**$this->validate($request, [
        'gambar'=>'required',
        ]);

        if($request->hasFile('gambar'))
        {
            $allowedfileExtension=['jpg','png']; 
            $files = $request->file('gambar');
            //dd($files);
            foreach($files as $file)
            {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                //dd($check);
                if($check)
                {
                    dd($request);
                    $items= Gmbr_produk::create($request->all());
                    foreach ($request->photos as $photo) 
                    {
                        $filename = $photo->store('gambar');
                        Produk::create([
                        'produkid' => GenerateBlogID(),
                        'nama_prd' => $request->get('nama_prd'),
                        'kat_prd' => $request->get('kat_prd'),
                        'stok' => $request->get('stok'),
                        'stok_satuan' => $request->get('sat_stok'),
                        'warna' => $request->get('warna'),
                        'deskripsi' => $request->get('deskripsi'),
                        'harga' => $request->get('harga'),
                        'sat_harga' => $request->get('sat_harga'),
                        'gambar' => $fileName,
                        'del_stat' => 0
                        ]);
                    }
                    return Redirect('/admin/banner')->with('sukses','Data Berhasil Diinput..!');
                }else{
                    return Redirect('/admin/banner')->with('error','Data Gagal Diinput..!');
                }
            }
        }*/
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
    public function edit($produkid)
    {
        $data = DB::table('kat_produks')->get(); 
        $Produk = Produk::where('produkid',$produkid)->first();
        return view('backoffice.produk.edit', compact('Produk','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $produkid)
    {
        $prdid = GenerateProductID();
        $Produk = Produk::where('produkid', $produkid)->update([
            'nama_prd' => $request->get('nama_prd'),
            'kat_prd' => $request->get('kat_prd'),
            'stok' => $request->get('stok'),
            'stok_satuan' => $request->get('sat_stok'),
            'warna' => $request->get('warna'),
            'deskripsi' => $request->get('deskripsi'),
            'harga' => $request->get('harga'),
            'sat_harga' => $request->get('sat_harga'),
            'del_stat' => 0
        ]);
        if($request->file('gambar')) {
            $pic = $request->file('gambar');
            foreach ($pic as $key => $val) {
                $no = $key+1;
                $etc = $val->getClientOriginalExtension(); 
                $fileName = $prdid."_".$no.'.'.$etc; 
                $upload = $val->storeAs('public/produk',$fileName);
                Gmbr_produk::create([
                    'id_produk'=> $prdid,
                    'gambar'   => $fileName
                ]);
            }   
            //dd($fileName);
        } 
        else {
            $fileName = NULL;
        }
        if($Produk){
            return Redirect('admin/produk')->with('sukses','Data Berhasil Diedit..!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($produkid)
    {
        $delete = Produk::where('produkid',$produkid)->update([
            'del_stat' => 1]);
        if($delete){
            return Redirect('admin/produk')->with('sukses','Data Berhasil Dihapus..!');
        }
        else{
            return Redirect('admin/produk')->with('error','Data Gagal Dihapus..!');
        }
    }
}
