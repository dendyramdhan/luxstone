@extends('backoffice.master') 
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Edit Produk</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Produk</h3> 

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"> 
                <i class="fas fa-minus"></i></button>
            </div>
        </div>

        <form role="form" action="{{ url('admin/produk',$Produk->produkid) }}" method="post" enctype="multipart/form-data">
            <div class="card-body">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_prd">Nama Produk :</label>
                            <input type="text" name="nama_prd" class="form-control" autocomplete="off" value="{{ $Produk->nama_prd }}">
                        </div>
                        <div class="form-group">
                            <label>Kategori Produk :</label>
                            <select class="select2" name="kat_prd" multiple="multiple" data-placeholder="Pilih Kategori"style="width: 100%;">
                                @foreach($data as $d)
                                <option @if($Produk->kat_prd == $d->id) selected @endif value="{{$d->id}}"">{{$d->nama_kat_prd}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok :</label>
                            <input type="number" name="stok" class="form-control" autocomplete="off" value="{{ $Produk->stok }}">
                        </div>
                        <div class="form-group">
                            <label for="sat_stok">Satuan Stok :</label>
                            <input type="text" name="sat_stok" class="form-control" autocomplete="off" value="M2" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="warna">Warna :</label>
                            <input type="text" name="warna" class="form-control" autocomplete="off" value="{{ $Produk->warna }}">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga :</label>
                            <input type="text" name="harga" class="form-control" autocomplete="off" value="{{ $Produk->harga }}">
                        </div>
                        <div class="form-group">
                            <label for="sat_harga">Satuan Harga :</label>
                            <input type="text" name="sat_harga" class="form-control" autocomplete="off" value="IDR" readonly>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar Produk :</label>
                            <input type="file" name="gambar[]" class="form-control" multiple> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="desk">Deskripsi Produk :</label>
                        <textarea name="deskripsi" class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 218px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $Produk->harga }}</textarea>
                        </div>    
                    </div>
                </div>
            </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="reset" class="btn btn-default btn-sm">Reset</button>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </div>
        </form>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
@endsection
