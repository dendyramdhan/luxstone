<?php 

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Model\Banner;
use Validator;
use Session;
use Response;

class BannerController extends Controller
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
        $Banner = Banner::all();
        return view('backoffice.banner.index', ['Banner'=>$Banner]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        $delete = Banner::where('id',$id)->delete();
        if($delete){
            return Redirect('admin/banner')->with('sukses','Data Berhasil Dihapus..!');
        }
        else{
            return Redirect('admin/banner')->with('error','Data Gagal Dihapus..!');
        }
    }

    public function logo(Request $request)
    {
        //dd($request);
        if($request->file('logo'))
        {
            $pic = $request->file('logo');
            $etc  = $pic->getClientOriginalExtension();
            $fileName = 'logo.'.$etc;
            $upload = $pic->storeAs('public/logo', $fileName);
            $insert = Banner::create([
                'nama' => $request['jenis'],
                'gambar' => $fileName,
                'jenis' => $request['jenis']
            ]);
            return Redirect('/admin/banner')->with('sukses','Data Berhasil Diinput..!');
        }else{
            return Redirect('/admin/banner')->with('error','Data Gagal Diinput..!');
        }
    }
    
    public function iklan(Request $request)
    {
        //dd($request);
        if($request->file('iklan'))
        {
            $pic = $request->file('iklan');
            $etc  = $pic->getClientOriginalExtension();
            $fileName = 'iklan.'.$etc;
            $upload = $pic->storeAs('public/iklan', $fileName);
            $insert = Banner::create([
                'nama' => $request['jenis'],
                'gambar' => $fileName,
                'jenis' => $request['jenis']
            ]);
            return Redirect('/admin/banner')->with('sukses','Data Berhasil Diinput..!');
        }else{
            return Redirect('/admin/banner')->with('error','Data Gagal Diinput..!');
        }
    }
    
    public function paralax_1(Request $request)
    {
        //dd($request);
        if($request->file('paralax1'))
        {
            $pic = $request->file('paralax1');
            $etc  = $pic->getClientOriginalExtension();
            $fileName = 'paralax1.'.$etc;
            $upload = $pic->storeAs('public/paralax', $fileName);
            $insert = Banner::create([
                'nama' => $request['jenis'],
                'gambar' => $fileName,
                'jenis' => $request['jenis']
            ]);
            return Redirect('/admin/banner')->with('sukses','Data Berhasil Diinput..!');
        }else{
            return Redirect('/admin/banner')->with('error','Data Gagal Diinput..!');
        }
    }
    
    public function paralax_2(Request $request)
    {
        //dd($request);
        if($request->file('paralax2'))
        {
            $pic = $request->file('paralax2');
            $etc  = $pic->getClientOriginalExtension();
            $fileName = 'paralax2.'.$etc;
            $upload = $pic->storeAs('public/paralax', $fileName);
            $insert = Banner::create([
                'nama' => $request['jenis'],
                'gambar' => $fileName,
                'jenis' => $request['jenis']
            ]);
            return Redirect('/admin/banner')->with('sukses','Data Berhasil Diinput..!');
        }else{
            return Redirect('/admin/banner')->with('error','Data Gagal Diinput..!');
        }
    }

    //public function main_banner(Request $request)
    //{
        // getting all of the post data
    //  $files = $request->file('main');
      // Making counting of uploaded images
    //  $file_count = count($files);
      // start count how many uploaded
    //  $uploadcount = 0;

    //  foreach ($files as $file) {
    //    $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
    //    $validator = Validator::make(array('file'=> $file), $rules);
    //    if($validator->passes()){
    //      $destinationPath = 'public/main_banner'; // upload folder in public directory
    //      $filename = $file->getClientOriginalName();
    //      $upload_success = $file->move($destinationPath, $filename);
    //      $uploadcount ++;
//
    //      // save into database
    //      $extension = $file->getClientOriginalExtension();
    //      $entry = new Banner();
    //      $entry->mime = $file->getClientMimeType();
    //      $entry->original_filename = $filename;
    //      $entry->filename = $file->getFilename().'.'.$extension;
    //      $entry->save();
    //    }
    //  }
    //}

    public function main_banner(Request $request){
        //dd($request->file('main1'));
        //foreach ($request->file('main') as $key => $value) {
        //if($request->file('main')[$key])
        //{
        if($request->file('main1')){
            $pic = $request->file('main1');
            $etc  = $pic->getClientOriginalExtension();
            $fileName = 'main1.'.$etc;
            $upload = $pic->storeAs('public/main_banner', $fileName);
            $insert = Banner::create([
                'nama' => $request['jenis'],
                'gambar' => $fileName,
                'jenis' => $request['jenis']
            ]);

            if($request->file('main2')){
                $pic = $request->file('main2');
                $etc  = $pic->getClientOriginalExtension();
                $fileName = 'main2.'.$etc;
                $upload = $pic->storeAs('public/main_banner', $fileName);
                $insert = Banner::create([
                    'nama' => $request['jenis'],
                    'gambar' => $fileName,
                    'jenis' => $request['jenis']
                ]);

                if($request->file('main3')){
                    $pic = $request->file('main3');
                    $etc  = $pic->getClientOriginalExtension();
                    $fileName = 'main3.'.$etc;
                    $upload = $pic->storeAs('public/main_banner', $fileName);
                    $insert = Banner::create([
                        'nama' => $request['jenis'],
                        'gambar' => $fileName,
                        'jenis' => $request['jenis']
                    ]);
                }
            }
        }
        return Redirect('/admin/banner')->with('sukses','Data Berhasil Diinput..!');
    }

    public function banner(Request $request)
    {
        //dd($request);
        if($request->file('banner'))
        {
            $pic = $request->file('banner');
            $etc  = $pic->getClientOriginalExtension();
            $fileName = 'banner.'.$etc;
            $upload = $pic->storeAs('public/banner', $fileName);
            $insert = Banner::create([
                'nama' => $request['jenis'],
                'gambar' => $fileName,
                'jenis' => $request['jenis']
            ]);
            return Redirect('/admin/banner')->with('sukses','Data Berhasil Diinput..!');
        }else{
            return Redirect('/admin/banner')->with('error','Data Gagal Diinput..!');
        }
    }
}
