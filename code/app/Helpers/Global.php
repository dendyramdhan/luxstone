<?php

use Carbon\Carbon;
use App\User;
use App\Model\User_bo;
use App\Model\Produk;
use App\Model\Blog;
use App\Model\Kontak;


function cek_session()
{
	$data = Session('login');
	if($data){
		return true;
	} else {
		return false;
	}
}

function tglIndo($tgl)
{
    $tgl = new Carbon($tgl);
    setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'en_US.UTF8', 'en_US.UTF-8', 'en_US');
    return $tgl->formatLocalized('%d %B %Y');
}


function GenerateUserID() {
    $data = User_bo::orderby('userid', 'desc')->take(1)->get();
	if ($data->count() > 0) {
		$prev = "USR";
		$id_usr = floatval(substr($data[0]['userid'],4,5)) + 1;
		$id_usr = $prev.str_pad($id_usr, 5, '0', STR_PAD_LEFT);
		return $id_usr;
	} else {
		$id_usr = "USR00001";
		return $id_usr;
	}
}

function GenerateBlogID() {
	$data = Blog::orderby('blogid', 'desc')->take(1)->get();
	if ($data->count() > 0) {
		$prev = "BLG";
		$id_blog = floatval(substr($data[0]['blogid'],4,5)) + 1;
		$id_blog = $prev.str_pad($id_blog, 5, '0', STR_PAD_LEFT);
		return $id_blog;
	} else {
		$id_blog = "BLG00001";
		return $id_blog;
	}
	//dd($id_blog);
}

function GenerateProductID() {
    $data = Produk::orderby('produkid', 'desc')->take(1)->get();
	if ($data->count() > 0) {
		$prev = "PRD";
		$id_prd = floatval(substr($data['produkid'],4,5)) + 1;
		$id_prd = $prev.str_pad($id_prd, 5, '0', STR_PAD_LEFT);
		return $id_prd;
	} else {
		$id_prd = "PRD00001";
		return $id_prd;
	}
}

function GenerateKontakID() {
    $data = Kontak::orderby('kontakid', 'desc')->take(1)->get();
	if ($data->count() > 0) {
		$prev = "KNT";
		$id_kontak = floatval(substr($data[0]['kontakid'],4,5)) + 1;
		$id_kontak = $prev.str_pad($id_kontak, 5, '0', STR_PAD_LEFT);
		return $id_kontak;
	} else {
		$id_kontak = "KNT00001";
		return $id_kontak;
	}
}