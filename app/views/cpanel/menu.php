<div class="col-md-2">
        <!-- Menu -->
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
        <a href="<?php echo BASE_URL ?>/login/dashboard" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Perfume</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="<?php echo BASE_URL ?>/login/dashboard" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Trang chủ</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Danh mục sản phẩm</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?php echo BASE_URL ?>/product" class="menu-link">
                <div data-i18n="Without menu">Thêm</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo BASE_URL ?>/product/list_category" class="menu-link">
                <div data-i18n="Without navbar">Liệt kê</div>
                </a>
            </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Danh mục bài viết</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?php echo BASE_URL ?>/post" class="menu-link">
                <div data-i18n="Without menu">Thêm</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo BASE_URL ?>/post/list_category" class="menu-link">
                <div data-i18n="Without navbar">Liệt kê</div>
                </a>
            </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Account Settings">Sản phẩm</div>
            </a>
            <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?php echo BASE_URL ?>/product/add_product" class="menu-link">
                <div data-i18n="Account">Thêm</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo BASE_URL ?>/product/list_product" class="menu-link">
                <div data-i18n="Notifications">Liệt kê</div>
                </a>
            </li>
            </ul>
        </li>


        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Account Settings">Bài viết</div>
            </a>
            <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?php echo BASE_URL ?>/post/add_post" class="menu-link">
                <div data-i18n="Account">Thêm</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo BASE_URL ?>/post/list_post" class="menu-link">
                <div data-i18n="Notifications">Liệt kê</div>
                </a>
            </li>
            </ul>
        </li>
        <!-- User interface -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-box"></i>
            <div data-i18n="User interface">Đơn hàng</div>
            </a>
            <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?php echo BASE_URL ?>/order/add_order" class="menu-link">
                <div data-i18n="Accordion">Thêm</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo BASE_URL ?>/order" class="menu-link">
                <div data-i18n="Alerts">Liệt kê</div>
                </a>
            </li>
            </ul>
        </li>
        </ul>
    </aside>
    <!-- / Menu -->
</div>