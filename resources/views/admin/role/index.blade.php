
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

                    </tr>
                </thead>
                <tbody>
                <!-- if (Model != null && Model.Any())
                    {
                    var i = 1;
                    foreach (var item in Model)
                    {
                    <tr>
                        <td>i</td>
                        <td>item.Name</td>

                    </tr>
                    ++i;
                    }
                    }
                    else
                    {
                    <tr>
                        <td colspan="4">Không có bản ghi nào!!!</td>
                    </tr>
                    } -->
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



