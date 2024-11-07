@extends('layouts.admin.layout')

@section('title', 'Roles')

@section('navbar')
<ul class="navbar-nav">
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Roles</a>
    </li>
</ul>
@endsection

@section('content')
<section class="content mt-2" style="background-color: #F4F6F9;">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @if (session('alert'))
    <div class="alert alert-warning">
        {{ session('alert') }}
    </div>
    @endif
    <!-- Default box -->
    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">Danh sách quyền</h3>

            <div class="card-tools">
                <a href="/admin/role/create" class="btn btn-primary">Thêm quyền</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Ngày tạo</th>
                        <th>Ngày thay đổi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 0;
                    @endphp
                    @foreach ($roles as $role)
                    @php
                    $i++;
                    @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->created_at }}</td>
                        <td>{{ $role->updated_at }}</td>
                        <td>
                            <a href="{{ route('roles.edit_get', $role->id) }}">Edit</a>
                        </td>
                    </tr>
                    @endforeach

                   
                </tbody>
            </table>
            
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection