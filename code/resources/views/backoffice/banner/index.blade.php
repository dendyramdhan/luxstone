@extends('backoffice.master')
 
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error') }}
            </div>
        @endif

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Banner</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <ol>
                        <a href="{{url('admin/banner/create')}}" type="button" class="btn btn-info btn-sm pull-right">+ Data Baru
                        </a>
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
            @if($Banner->count()>0)
            <div class="table-responsive">	
                <table class="table table-hover">
                    <thead>	
                        <tr>
                            <th>No.</th>
                            <th>Nama Banner</th>
                            <th>Gambar</th>
                            <th>Jenis</th>
                            <th>Deskripsi</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($Banner as $ban)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $ban->nama }}</td>
                            <td>{{ $ban->gambar }}</td>
                            <td>{{ $ban->jenis }}</td>
                            <td>{{ $ban->deskripsi }}</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="card-body">
                <h2>No Data Banner...</h2>
            </div>
             @endif
        </div>
    </div>
</section>
@endsection