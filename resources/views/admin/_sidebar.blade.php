<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="{{ route('admin_home') }}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('assets')}}/admin/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>

    </a>
    <li class="nav-item">

        <a href="{{route('admin_login')}}" class="nav-link">

            <i class="far fa-fw fa-window-maximize"></i>
            <span>Giriş</span>
        </a>

    </li>
    <li class="nav-item">

        <a href="{{route('admin_category')}}" class="nav-link">

        <i class="far fa-fw fa-window-maximize"></i>
            <span>Kategori</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Rezervasyon</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-fw fa-table"></i>
            <span>Oteller</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options</h6>
                <a class="collapse-item" href="simple-tables.html">Villas</a>
                <a class="collapse-item" href="datatables.html">Otel1</a>
                <a class="collapse-item" href="datatables.html">Otel2</a>
            </div>
        </div>
    </li>

</ul>
<!-- Sidebar -->
