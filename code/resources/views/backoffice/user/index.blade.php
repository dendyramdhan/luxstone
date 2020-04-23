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
                <h1>Data User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <ol>
                        <a href="{{url('admin/pengguna/create')}}" type="button" class="btn btn-info btn-sm pull-right">+ Data Baru
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
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Level User</th>
                            <th>Picture</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($User as $u)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->username }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->password }}</td>
                            <td>{{ $u->level_user }}</td>
                            <td>{{ $u->picture }}</td>
                            <td>
                                <a href="{{ url('admin/pengguna', $u->userid) }}" class="btn btn-warning btn-sm pull-right">Edit</a>
                                <form width="100px" action="{{ url('admin/pengguna', $u->userid) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger btn-sm pull-right">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection