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
                <h1>Data Blog</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <ol>
                        <a href="{{url('admin/dblog/create')}}" type="button" class="btn btn-info btn-sm pull-right">+ Data Baru
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
            @if($Blog->count()>0)
            <div class="table-responsive">	 
                <table class="table table-hover">
                    <thead>	
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Kilasan</th>
                            <th>Isi</th>
                            <th>Highlight</th>
                            <th>Created By</th>
                            <th>Gambar</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($Blog as $b) 
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ substr(strip_tags($b->title),0,20) }}</td>
                            <td>{{ substr(strip_tags($b->kilasan),0,20) }}</td>
                            <td>{{ substr(strip_tags($b->isi),0,20) }}</td>
                            <td>{{ substr(strip_tags($b->highlight),0,20) }}</td>
                            <td>{{ $b->created_by }}</td>
                            <td>{{ $b->gambar }}</td>
                            <td>
                                <a href="{{ url('admin/dblog', $b->blogid) }}" class="btn btn-warning btn-sm pull-right">Edit</a>
                                <form width="100px" action="{{ url('admin/dblog', $b->blogid) }}" method="post">
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
                <h2>No Data Blog...</h2>
            </div>
             @endif
        </div>
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
            @php if (1 < $Blog->currentpage()){ @endphp
                <li class="page-item"><a href="{{ $Blog->previousPageUrl() }}" class="page-link">« prev</a></li>
                @php } @endphp
                <li class="page-item"><a href="{{ $Blog->currentpage() }}" class="page-link">{{ $Blog->currentpage() }}</a></li>
                @php if ($Blog->currentpage() < $Blog->lastPage()){ @endphp
                <li class="page-item"><a href="{{ $Blog->nextPageUrl() }}" class="page-link">next »</a></li>
                @php } @endphp
            </ul>
        </div>
    </div>
</section>
@endsection