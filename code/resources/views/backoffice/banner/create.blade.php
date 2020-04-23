@extends('backoffice.master') 
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data Banner</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Create Banner</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <!-- Default box row 1 -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form role="form" action="{{ url('admin/logo') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="jenis" value="logo">
                    <div class="card-header">
                        <h3 class="card-title">Logo</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" name="logo" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
                    </div>
                </form>
                <!-- /.card-footer-->

            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <form role="form" action="{{ url('admin/iklan') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="jenis" value="iklan">
                    <div class="card-header">
                        <h3 class="card-title">Iklan</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <input type="file" name="iklan" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
                    </div>
                </form>
                <!-- /.card-footer-->

            </div>
        </div>
    </div>
    <!-- /.card -->

    <!-- Default box row 2-->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form role="form" action="{{ url('admin/paralax_1') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="jenis" value="paralax1">
                    <div class="card-header">
                        <h3 class="card-title">Paralax 1</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" name="paralax1" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
                    </div>
                </form>
                <!-- /.card-footer-->

            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <form role="form" action="{{ url('admin/paralax_2') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="jenis" value="paralax2">
                    <div class="card-header">
                        <h3 class="card-title">Paralax 2</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" name="paralax2" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
                    </div>
                </form>
                <!-- /.card-footer-->

            </div>
        </div>
    </div>

    <!-- Default box row 3 -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form role="form" action="{{ url('admin/main_banner') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="jenis" value="main banner">
                <div class="card-header">
                    <h3 class="card-title">Main Banner</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="file" name="main1" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="main2" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="main3" class="form-control">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
                </div>
                </form>
                <!-- /.card-footer-->

            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <form role="form" action="{{ url('admin/banner') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="jenis" value="banner">
                <div class="card-header">
                    <h3 class="card-title">Banner</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <input type="file" name="banner" class="form-control">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
                </div>
                </form>
                <!-- /.card-footer-->
                
            </div>
        </div>
    </div>


</section>
@endsection