@extends('backoffice.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Main Banner</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <ol>
                        <button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" >+ Data Baru
                        </button>
                        <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" >Export
                        </button>
                    </ol>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">	
                <table class="table table-hover">
                    <thead>	
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Kilasan</th>
                            <th>Isi</th>
                            <th>Created By</th>
                            <th>Gambar</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody
                        <tr>
                            <td>1</td>
                            <td>sad</td>
                            <td>asdf</td>
                            <td>adfa</td>
                            <td>sdf</td>
                            <td>dsna</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection