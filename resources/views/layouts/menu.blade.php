<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-flat" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fa fa-home"></i>
                    <p>Home</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fa fa-edit"></i>
                    <p>
                        Cadastros
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('aircroft.index') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Aeronaves</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('airline.index') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Companhias aéreas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('airport.index') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Aeroportos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('booking.index') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Reservas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('country.index') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Países</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('equipment.index') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Equipamentos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('flight.index') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Voos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('passenger.index') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Passageiros</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('route.index') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Rotas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('state.index') }}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Unidades federais</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
