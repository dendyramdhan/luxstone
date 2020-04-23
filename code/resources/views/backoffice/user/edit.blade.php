@extends('backoffice.master')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data User</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Edit User</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data User</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>

        <form role="form" action="{{ url('admin/pengguna',$User->userid) }}" method="post" enctype="multipart/form-data">
            <div class="card-body">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" name="name" class="form-control" value="{{ $User->name }}">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" class="form-control" value="{{ $User->username }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ $User->email }}">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" value="{{ $User->password }}">
                </div>
                <div class="form-group">
                    <label for="level">Level User</label>
                    <select name="level" class="form-control" id="level">
                    <option value="root" @if($User->level_user == 'root') selected @endif>Root</option>
                    <option value="admin" @if($User->level_user == 'admin') selected @endif>Admin</option>
                    <option value="blogger" @if($User->level_user == 'blogger') selected @endif>Blogger</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="picture">Picture:</label>
                    <input type="file" name="picture" class="form-control">
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
