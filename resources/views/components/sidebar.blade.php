<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">PERPUSTAKAAN PSU</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">KOPERASI UPS</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"> <i class="fas fa-fire"></i><span>Home</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('home') }}">Berita & Albums</a>
                    </li>

                </ul>
            </li>

            @if(auth()->user()->roles == 'ADMIN')
                <li class="nav-item dropdown ">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="{{ route('user.index') }}">User List</a>
                        </li>

                    </ul>
                </li>
            @endif
            @if(auth()->user()->roles == 'ADMIN')
                <li class="nav-item dropdown ">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Stock Buku</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="{{ route('product.index') }}">Tambah Buku</a>
                        </li>
                    </ul>
            @endif

            @if(auth()->user()->roles == 'STAFF')
                <li class="nav-item dropdown ">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Stock Buku</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="{{ route('product.index') }}">Tambah Buku</a>
                        </li>
                    </ul>
            @endif

            @if(auth()->user()->roles == 'ADMIN')
                <li class="nav-item dropdown ">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Pengunjung</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="">Daftar Tamu</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown ">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Peminjam Buku</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="">Anggota peminjam</a>
                        </li>
                    </ul>
                <li class="nav-item dropdown ">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Pengembalian
                            Buku</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="">Pengembalian</a>
                        </li>
            @endif
            @if(auth()->user()->roles == 'USER')
                <ul class="sidebar-menu">
                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Peminjaman
                                Buku</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="nav-link" href="">Peminjaman buku</a>
                            </li>
            @endif

    </aside>



</div>
