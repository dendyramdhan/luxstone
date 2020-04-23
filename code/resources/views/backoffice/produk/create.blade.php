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
                    <li class="breadcrumb-item">Create Produk</li>
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
        <h3 class="card-title">Tambah Data Produk</h3>
    </div>
    <form role="form" action="{{ url('admin/produk') }}" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama_prd">Nama Produk :</label> 
                        <input type="text" name="nama_prd" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Kategori Produk :</label>
                        <select class="select2" id="kat_prd" name="kat_prd" multiple="multiple" data-placeholder="Pilih Kategori"style="width: 100%;" required>
                            @foreach($data as $d)
                            <option value="{{$d->id}}">{{$d->nama_kat_prd}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok :</label>
                        <input type="number" name="stok" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="sat_stok">Satuan Stok :</label>
                        <input type="text" name="sat_stok" class="form-control" autocomplete="off" value="M2" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="warna">Warna :</label>
                        <input type="text" name="warna" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga :</label>
                        <input type="text" name="harga" class="form-control" autocomplete="off">
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
                        style="width: 100%; height: 218px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>    
                </div>
            </div>
            
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                <button type="submit" class="btn btn-primary btn-sm" value="Upload">Simpan</button>
            </div>
            
        </div>
    </form>
    <!-- /.card-footer-->
    </div>
</div>
<!-- /.card -->

</section>
<script src="{{asset ('code/backoffice_template/plugins/jquery/jquery.js')}}"></script>
<script type="text/javascript">
  $("#kat_prd").select2({
    placeholder:'--Pilih Kategori--',
    allowClear:true
  });
</script>
@endsection