<?php

namespace App\Http\Controllers\Backoffice; 

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Model\Blog;
use Auth;
use Session;
use DB;
use Response;

class BlogController extends Controller
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
        $Blog = Blog::where('del_stat', 0)->paginate();
        return view('backoffice.blog.index', compact('Blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.blog.create');
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
        if($request->file('gambar')) {
            $pic = $request->file('gambar');
            $etc  = $pic->getClientOriginalExtension();
            $fileName = GenerateBlogID().'.'.$etc; 
            //dd($fileName);
            $upload = $pic->storeAs('public/blogs',$fileName);
        } 
        else {
            $fileName = NULL;
        }
        //dd(GenerateBlogID());
        $Blog = Blog::create([
            'blogid' => GenerateBlogID(),
            'title' => $request->get('title'),
            'kilasan' => $request->get('kilasan'),
            'isi' => $request->get('isi'),
            'highlight' => $request->get('high'),
            'created_by' => $request->get('created'),
            'gambar' => $fileName,
            'del_stat' => 0
        ]);
        if($Blog){
            return Redirect('admin/dblog')->with('sukses','Data Berhasil Diinput..!');
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
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($blogid)
    {
        $Blog = Blog::where('blogid',$blogid)->first();
        return view('backoffice.blog.edit', compact('Blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blogid)
    {
        //dd($request);
        if($request->file('gambar')) {
            $pic = $request->file('gambar');
            $etc  = $pic->getClientOriginalExtension();
            $fileName = GenerateBlogID().'.'.$etc; 
            //dd($fileName);
            $upload = $pic->storeAs('public/blogs',$fileName);

            if($upload){
            $Blog = Blog::where('blogid', $blogid)->update([
            'title' => $request->get('title'),
            'kilasan' => $request->get('kilasan'),
            'isi' => $request->get('isi'),
            'highlight' => $request->get('high'),
            'created_by' => $request->get('created'),
            'gambar' => $fileName,
            'del_stat' => 0 ]);
            }
        } 
        else {
            $Blog = Blog::where('blogid', $blogid)->update([
            'title' => $request->get('title'),
            'kilasan' => $request->get('kilasan'),
            'isi' => $request->get('isi'),
            'highlight' => $request->get('high'),
            'created_by' => $request->get('created'),
            'del_stat' => 0 ]);
        }
        return Redirect('admin/dblog')->with('sukses','Data Berhasil Diupdate..!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogid)
    {
        //dd($blogid);
        $delete = Blog::where('blogid',$blogid)->update([
            'del_stat' => 1]);
        if($delete){
            return Redirect('admin/dblog')->with('sukses','Data Berhasil Dihapus..!');
        }
        else{
            return Redirect('admin/dblog')->with('error','Data Gagal Dihapus..!');
        }
        
    }
}
