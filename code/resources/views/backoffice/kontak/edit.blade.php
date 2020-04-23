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
                    <li class="breadcrumb-item">Edit Kontak</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Kontak</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <form role="form" action="{{ url('admin/kontak',$Kontak->kontakid) }}" method="post" enctype="multipart/form-data">
            <div class="card-body">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" class="form-control" value="{{ $Kontak->nama }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ $Kontak->email }}">
                </div>
                <div class="form-group">
                    <label for="mobile_1">Mobile 1:</label>
                    <input type="text" name="mobile_1" class="form-control" value="{{ $Kontak->mobile_1 }}">
                </div>
                <div class="form-group">
                    <label for="mobile_2">Mobile 2:</label>
                    <input type="text" name="mobile_2" class="form-control" value="{{ $Kontak->mobile_2 }}">
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
