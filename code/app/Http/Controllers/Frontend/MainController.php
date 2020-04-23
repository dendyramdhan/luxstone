<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Kat_produk;
use App\Model\Produk;
use App\Model\Blog;

class MainController extends Controller
{
    public function home()
    {
        $dt_prds = Produk::with('pic_produk')
        ->where('del_stat', 0)
        ->get()->random(8);
        $blogs = Blog::where('del_stat', 0)->take(5)->get();
        //dd($dt_prds);
        return view('frontend.home', compact('dt_prds', 'blogs'));
    }

    public function kategori()
    {
        $all_kat = Kat_produk::all();
        $all_prd = Produk::all();
        $dt_prd = Produk::paginate(9);
        $all_warna = $all_prd->keyby('warna');
        $all_warna = $all_warna->values()->all();
        // search count warna //
        foreach($all_warna as $key => $v)
        {
            $warna = $v['warna'];
            $q_where[$key] = Produk::where('warna', $warna);
            $count[$key] = $q_where[$key]->count();
            //dd($count[$key]); 
        }

        //dd($all_warna);
        return view('frontend.kategori', compact('all_kat', 'dt_prd', 'all_warna', 'count'));
    }

    public function product_detail($prdid)
    {
        //dd($prdid);
        $slide_prd = Produk::with('pic_produk')->get()->random(7);//dd($slide_prd);
        $data = Produk::with('pic_produk')->where('produkid', $prdid)->first();
        return view('frontend.product_detail', compact('data', 'slide_prd'));
    }

    public function kontak()
    {
        return view('frontend.kontak');
    }

    public function blog()
    {
        $blog = Blog::where('del_stat', 0)->get();
        return view('frontend.blog', compact('blog'));
    }

    public function single_blog($id)
    {
        $blog = Blog::where('del_stat', 0)->where('blogid', $id)->first();
        return view('frontend.single_blog', compact('blog'));
    }

    public function tentang_kami()
    {
        return view('frontend.tentang_kami');
    }
}

