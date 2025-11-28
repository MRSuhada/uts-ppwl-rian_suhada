<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                {{-- SVG logo biarkan seperti bawaan Sneat --}}
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        {{-- Dashboard --}}
        <li class="menu-item {{ request()->is('/') || request()->path() == '' ? 'active' : '' }}">
            <a href="{{ url('/') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>


        {{-- MASTER --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master</span>
        </li>

        {{-- Master Data (dropdown) --}}
        <li class="menu-item
      {{ request()->routeIs('category.*') || request()->routeIs('products.*') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="Master Data">Master Data</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('category.*') ? 'active' : '' }}">
                    <a href="{{ route('category.index') }}" class="menu-link">
                        <div data-i18n="Kategori">Kategori</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('products.*') ? 'active' : '' }}">
                    <a href="{{ route('products.index') }}" class="menu-link">
                        <div data-i18n="Produk">Produk</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- TRANSAKSI --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Transaksi</span>
        </li>

        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Daftar Pesanan">Daftar Pesanan</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-credit-card"></i>
                <div data-i18n="Pembayaran">Pembayaran</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div data-i18n="Daftar Pembayaran">Daftar Pembayaran</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div data-i18n="Verifikasi Pembayaran">Verifikasi Pembayaran</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>