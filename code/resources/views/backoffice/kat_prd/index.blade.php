@extends('backoffice.master')

@section('content')
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
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Kategori</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <ol>
                        <a href="{{url('admin/kategori/create')}}" type="button" class="btn btn-info btn-sm pull-right">+ Data Baru
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
            @if($Kat_produk->count()>0)
            <div class="table-responsive">	
                <table class="table table-hover">
                    <thead>	
                        <tr>
                            <th>No.</th>
                            <th>Nama Kategroi</th>
                            <th>Keterangan</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($Kat_produk as $kp)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $kp->nama_kat_prd }}</td>
                            <td>{{ $kp->keterangan }}</td>
                            <td>
                                <a href="{{ url('admin/kategori', $kp->id) }}" class="btn btn-warning btn-sm pull-right">Edit</a>
                                <form width="100px" action="{{ url('admin/kategori', $kp->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger btn-sm pull-right">Delete</button> 
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="card-body">
                <h2>No Data Kategori...</h2>
            </div>
             @endif
        </div>
    </div>
</section>
@endsection