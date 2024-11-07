@extends('layouts.admin.layout')

@section('title', 'Edit Role')

@section('navbar')
<ul class="navbar-nav">
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/role" class="nav-link">Roles</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Edit</a>
    </li>
</ul>
@endsection
@section('content')
<section class="content mt-2">

    <!-- Default box -->
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('roles.edit_post') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $role->id }}">
                <div class="form-group">
                    <label for="name">Tên Role</label>
                    <input type="text" class="form-control" id="name" name="name" required value="{{ $role->name }}">
                </div>
                <button type="submit" class="btn btn-primary">Sửa Role</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
@endsection