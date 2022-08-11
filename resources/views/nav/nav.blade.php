<div class="row mt-2">
    <div class="col-md-12 d-flex align-items-center justify-content-between">
        {{-- Navbar icons --}}
        <div class="d-flex gap-2">
            <button class="btn btn-dropdown btn-nav-search"><i class="fas fa-search"></i></button>
            <button class="btn btn-dropdown btn-nav-chart" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fas fa-chart-bar"></i></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Indicadores de proceso</a></li>
                <li><a class="dropdown-item" href="#">Indicadores de tiempo natural</a></li>
                <li><a class="dropdown-item" href="#">Indicadores de tiempo laboral</a></li>
                <li><a class="dropdown-item" href="#">Indicadores por departamento</a></li>
            </ul>

            <button type="button" class="btn btn-dropdown btn-nav-travelExpenses"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-book"></i></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Solicitud de víaticos</a></li>
                <li><a class="dropdown-item" href="#">Solicitud de extension de víaticos</a></li>
                <li><a class="dropdown-item" href="#">Comprobración de víaticos</a></li>
            </ul>
            <button class="btn btn-dropdown btn-nav-transparencyReport"><i class="fas fa-glasses"></i></button>
            <button class="btn btn-dropdown btn-nav-settings"><i class="fas fa-cog"></i></button>
            {{-- Logout button --}}
            <button class="btn btn-nav-logout"><i class="fas fa-sign-out-alt"></i></button>
        </div>

        <img style="background: transparent;" src="{{ asset('img/mangolineal.png') }}" width="30%" />
    </div>
</div>
