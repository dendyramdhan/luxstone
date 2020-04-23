@extends('backoffice.master')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Kontak</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Create Kontak</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Kategori</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>

        <form role="form" action="{{ url('admin/kategori',$Kat_produk->id) }}" method="post"enctype="multipart/form-data">
            <div class="card-body">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="form-group">
                    <label for="nama_ktg">Nama Kategori:</label>
                    <input type="text" name="nama_ktg" class="form-control" value="{{ $Kat_produk->nama_kat_prd }}">
                </div>
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <select name="ket" class="form-control" id="ket">
                        <option value="Marmer" @if($Kat_produk->keterangan == 'Marmer') selected @endif>Marmer</option>
                        <option value="Granit" @if($Kat_produk->keterangan == 'Granit') selected @endif>Granit</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="reset" class="btn btn-default btn-sm6">Reset</button>
                <button type="submit" class="btn btn-primary btn-sm6">Simpan</button>
            </div>
        </form>
        <!-- /.card-footer-->

    </div>
    <!-- /.card -->

</section>
@endsection