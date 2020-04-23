@extends('backoffice.master') 
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Blog</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Create Blog</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Blog</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <form role="form" action="{{ url('admin/dblog') }}" method="post" enctype="multipart/form-data">
            <div class="card-body">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" _produk class="form-control">
                </div>
                <div class="form-group">
                    <label for="kilasan">Kilasan:</label>
                    <input type="text" name="kilasan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="high">Highlight:</label>
                    <input type="text" name="high" class="form-control">
                </div>
                <div class="form-group">
                    <label for="isi">Isi:</label>
                    <textarea name="isi" class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 218px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                <div class="form-group">
                    <label for="created">Created By:</label>
                    <input type="text" name="created" class="form-control">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar:</label>
                    <input type="file" name="gambar" class="form-control">
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