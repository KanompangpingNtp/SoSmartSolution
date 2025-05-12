<!-- Sidebar -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <i class='bx bxs-data' style="font-size: 30px;"></i>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2" style="font-size: 21px;">ระบบจัดการข้อมูล</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <ul class="menu-inner py-1">

        <li class="menu-header small text-uppercase"><span class="menu-header-text">จัดการข้อมูล</span></li>

        <li class="menu-item {{ request()->is('admin/services/web*') ||
            request()->is('admin/services/video*') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                 <i class='menu-icon tf-icons bx bx-folder' ></i>
                <div data-i18n="User interface">จัดการบริการ</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('admin/services/web') ? 'active' : '' }}">
                    <a href="{{route('AdminServicesPage')}}" class="menu-link">
                        <div>จัดการบริการเว็บไซต์</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('admin/services/video') ? 'active' : '' }}">
                    <a href="{{route('AdminServiceVideoPage')}}" class="menu-link">
                        <div>จัดการบริการวิดิทัศน์</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('admin/promotions*') ? 'active' : '' }}">
            <a href="{{route('AdminPromotionsPage')}}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-folder' ></i>
                <div data-i18n="Analytics">จัดการโปรโมชั่น</div>
            </a>
        </li>

    </ul>
</aside>
<!-- / Sidebar -->
