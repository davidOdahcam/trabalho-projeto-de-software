<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-flat" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fa fa-home"></i>
                    <p>Início</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('aircroft.index') }}" class="nav-link {{ activeMenu('aeronaves*') }}">
                    <i class="fas fa-plane nav-icon"></i>
                    <p>Aeronaves</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('airline.index') }}" class="nav-link {{ activeMenu('companhias-aereas*') }}">
                    <i class="far fa-building nav-icon"></i>
                    <p>Companhias aéreas</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('airport.index') }}" class="nav-link {{ activeMenu('aeroportos*') }}">
                    <i class="fas fa-plane-arrival nav-icon"></i>
                    <p>Aeroportos</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('booking.index') }}" class="nav-link {{ activeMenu('reservas*') }}">
                    <i class="fas fa-suitcase-rolling nav-icon"></i>
                    <p>Reservas</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('country.index') }}" class="nav-link {{ activeMenu('paises*') }}">
                    <i class="fas fa-globe-americas nav-icon"></i>
                    <p>Países</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('equipment.index') }}" class="nav-link {{ activeMenu('equipamentos*') }}">
                    <i class="fas fa-tools nav-icon"></i>
                    <p>Equipamentos</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('flight.index') }}" class="nav-link {{ activeMenu('voos*') }}">
                    <i class="fas fa-plane-departure nav-icon"></i>
                    <p>Voos</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('passenger.index') }}" class="nav-link {{ activeMenu('passageiros*') }}">
                    <i class="fas fa-user-friends nav-icon"></i>
                    <p>Passageiros</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('route.index') }}" class="nav-link {{ activeMenu('rotas-de-voo*') }}">
                    <i class="fas fa-map-marked-alt nav-icon"></i>
                    <p>Rotas de voo</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('state.index') }}" class="nav-link {{ activeMenu('unidades-federais*') }}">
                    <i class="fas fa-map-marker-alt nav-icon"></i>
                    <p>Unidades federais</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
