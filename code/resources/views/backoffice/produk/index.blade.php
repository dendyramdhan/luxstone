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
                <h1>Data Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <ol>
                        <a href="{{url('admin/produk/create')}}" type="button" class="btn btn-info btn-sm pull-right">+
                            Data Baru
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
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Produk</th>
                            <th>Kategori Produk</th>
                            <th>Stok</th>
                            <th>Satuan Stok</th>
                            <th>Warna</th>
                            <th>Harga</th>
                            <th>Satuan Harga</th>
                            <th>Deskripsi</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($Produk as $p)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $p->nama_prd }}</td>
                            <td>{{ $p['get_katprd']['nama_kat_prd'] }}</td>
                            <td>{{ $p->stok }}</td>
                            <td>{{ $p->stok_satuan }}</td>
                            <td>{{ $p->warna }}</td>
                            <td>{{ $p->harga }}</td>
                            <td>{{ $p->sat_harga }}</td>
                            <td>{{ strip_tags($p->deskripsi) }}</td>
                            <td>
                                <a href="{{ url('admin/produk', $p->produkid) }}"
                                    class="btn btn-warning btn-sm pull-right">Edit</a>
                                <form width="100px" action="{{ url('admin/produk', $p->produkid) }}" method="post">
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
        </div>
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
            @php if (1 < $Produk->currentpage()){ @endphp
                <li class="page-item"><a href="{{ $Produk->previousPageUrl() }}" class="page-link">« prev</a></li>
                @php } @endphp
                <li class="page-item"><a href="{{ $Produk->currentpage() }}" class="page-link">{{ $Produk->currentpage() }}</a></li>
                @php if ($Produk->currentpage() < $Produk->lastPage()){ @endphp
                <li class="page-item"><a href="{{ $Produk->nextPageUrl() }}" class="page-link">next »</a></li>
                @php } @endphp
            </ul>
        </div>
    </div>
</section>
@endsection