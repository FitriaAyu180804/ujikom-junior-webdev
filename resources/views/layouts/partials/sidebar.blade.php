<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item text-blask">
            <a class="nav-link collapsed  @if(Route::currentRouteName() == 'dashboard') active @endif" href="{{ route('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed @if(Route::currentRouteName() == 'pegawai.index') active @endif "  href="{{ route('pegawai.index')}}">
                <i class="fas fa-users fa-fw"></i><span>Pegawai</span><i></i>
            </a>


        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout')}}">
                <i class="fas fa-sign-out-alt"></i>
                <span>Sign Out</span>
            </a>
        </li><!-- End Login Page Nav -->

    </ul>


</aside><!-- End Sidebar-->

<style>
    /* CSS untuk menyesuaikan tautan yang aktif */
    #sidebar .nav-link.active {
        background-color: #EEF7FF; /* Warna latar belakang tautan aktif */
        color: blue; /* Warna teks tautan aktif */
    }
    #sidebar .nav-link.active i {
            color: blue; /* Warna ikon tautan aktif */
        }
</style>
