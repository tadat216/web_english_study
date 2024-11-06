﻿
@{
    Layout = "";
}

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="~/Content/client/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Xin chào, @User.Identity.Name</a>

        </div>

    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/trang-chu" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Trang chủ khách hàng
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="~/Admin/News" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Tin tức
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="~/Admin/Orders" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Quản lý đơn hàng
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="~/Admin/InsertProduct/Index" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm sản phẩm từ file Excel</p>
                        </a>
                    </li>

                </ul>
            </li>
            @*<li class="nav-item">
                    <a href="~/Admin/Order/SaleReport" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Thống kê báo cáo
                        </p>
                    </a>
                </li>*@
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Thống kê báo cáo
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="~/Admin/Statistics/InstockProductStatistics" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thống kê sản phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="~/Admin/Statistics/IncomeStatisticsIndex" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thống kê doanh thu (tháng/năm)</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="~/Admin/Statistics/FromToIncomeStatisticsIndex" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thống kê doanh thu theo ngày</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="~/Admin/Statistics/ProductQuantityStatisticsIndex" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sản phẩm bán được</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Quản lý sản phẩm
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="~/Admin/ProductCategories" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh mục sản phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="~/Admin/Products" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sản phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="~/Admin/Colors" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Màu sắc</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="~/Admin/Sizes" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kích thước</p>
                        </a>
                    </li>
                </ul>
            </li>
            @if (this.User.IsInRole("Admin"))
            {


                <li class="nav-item">
                    <a href="~/Admin/Role" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Danh sách quyền
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="~/Admin/Account" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Danh sách tài khoản
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="~/Admin/Parameters" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Danh sách tham số
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="~/Admin/BackupAndRestore" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Sao lưu/Phục hồi
                        </p>
                    </a>
                </li>
            }
            <li class="nav-item">
                @if (User.Identity.IsAuthenticated)
                {
                    <div>
                        @using (Html.BeginForm("LogOff", "Account", FormMethod.Post, new { id = "logoutForm" }))
                        {
                            @Html.AntiForgeryToken()
                            <button type="submit" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Đăng xuất</p>
                            </button>
                        }
                    </div>
                }
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->

@if (Request.IsAuthenticated)
{
    <div style="display:none;">
        @using (Html.BeginForm("LogOff", "Account", FormMethod.Post, new { @id = "logOffForm" }))
        {
            @Html.AntiForgeryToken();
        }
    </div>
}