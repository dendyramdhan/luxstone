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
                <h1>Data Kontak</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <ol>
                        <a href="{{url('admin/kontak/create')}}" type="button" class="btn btn-info btn-sm pull-right">+ Data Baru
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
            @if($Kontak->count()>0)
            <div class="table-responsive">	
                <table class="table table-hover">
                    <thead>	
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Mobile 1</th>
                            <th>Mobile 2</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($Kontak as $k)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $k->nama }}</td>
                            <td>{{ $k->email }}</td>
                            <td>{{ $k->mobile_1 }}</td>
                            <td>{{ $k->mobile_2 }}</td>
                            <td>
                                <a href="{{ url('admin/kontak', $k->kontakid) }}" class="btn btn-warning btn-sm pull-right">Edit</a>
                                <form width="100px" action="{{ url('admin/kontak', $k->kontakid) }}" method="post">
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
                <h2>No Data Kontak...</h2>
            </div>
             @endif
        </div>
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
            @php if (1 < $Kontak->currentpage()){ @endphp
                <li class="page-item"><a href="{{ $Kontak->previousPageUrl() }}" class="page-link">« prev</a></li>
                @php } @endphp
                <li class="page-item"><a href="{{ $Kontak->currentpage() }}" class="page-link">{{ $Kontak->currentpage() }}</a></li>
                @php if ($Kontak->currentpage() < $Kontak->lastPage()){ @endphp
                <li class="page-item"><a href="{{ $Kontak->nextPageUrl() }}" class="page-link">next »</a></li>
                @php } @endphp
            </ul>
        </div>
    </div>
</section>
@endsection