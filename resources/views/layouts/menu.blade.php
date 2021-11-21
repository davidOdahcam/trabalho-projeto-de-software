<div class="sidebar bg-first">
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
                <a href="{{ route('admin.aircraft.index') }}" class="nav-link {{ activeMenu('admin/aeronaves*') }}">
                    <i class="fas fa-plane nav-icon"></i>
                    <p>Aeronaves</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.airline.index') }}" class="nav-link {{ activeMenu('admin/companhias-aereas*') }}">
                    <i class="far fa-building nav-icon"></i>
                    <p>Companhias aéreas</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.airport.index') }}" class="nav-link {{ activeMenu('admin/aeroportos*') }}">
                    <i class="fas fa-plane-arrival nav-icon"></i>
                    <p>Aeroportos</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.booking.index') }}" class="nav-link {{ activeMenu('admin/reservas*') }}">
                    <i class="fas fa-suitcase-rolling nav-icon"></i>
                    <p>Reservas</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.country.index') }}" class="nav-link {{ activeMenu('admin/paises*') }}">
                    <i class="fas fa-globe-americas nav-icon"></i>
                    <p>Países</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.equipment.index') }}" class="nav-link {{ activeMenu('admin/equipamentos*') }}">
                    <i class="fas fa-tools nav-icon"></i>
                    <p>Equipamentos</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.flight.index') }}" class="nav-link {{ activeMenu('admin/voos*') }}">
                    <i class="fas fa-plane-departure nav-icon"></i>
                    <p>Voos</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.passenger.index') }}" class="nav-link {{ activeMenu('admin/passageiros*') }}">
                    <i class="fas fa-user-friends nav-icon"></i>
                    <p>Passageiros</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.route.index') }}" class="nav-link {{ activeMenu('admin/rotas-de-voo*') }}">
                    <i class="fas fa-map-marked-alt nav-icon"></i>
                    <p>Rotas de voo</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.state.index') }}" class="nav-link {{ activeMenu('admin/unidades-federais*') }}">
                    <i class="fas fa-map-marker-alt nav-icon"></i>
                    <p>Unidades federais</p>
                </a>
            </li>

            {{-- RELATÓRIOS --}}
            <li class="nav-item {{ activeMenu('admin/relatorios*', true) }}">
                <a href="#" class="nav-link {{ activeMenu('admin/relatorios*') }}">
                    <i class="fas fa-folder nav-icon"></i>
                    <p>
                        Relatórios
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.report.airline_by_country') }}" class="nav-link {{ activeMenu('admin/relatorios/companhias-por-paises*') }}">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Companhias por países</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.report.bookings_passengers_300') }}" class="nav-link {{ activeMenu('admin/relatorios/reservas-de-passageiros*') }}">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Reservas de passageiros</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.report.not_jet') }}" class="nav-link">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Equipamentos diferentes de jato com capacidade até 100 passageiros</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.report.equipments') }}" class="nav-link {{ activeMenu('admin/relatorios/equipamentos*') }}">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Equipamentos</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.report.passengers') }}" class="nav-link {{ activeMenu('admin/relatorios/passageiros*') }}">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Passageiros</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.report.flights_city') }}" class="nav-link {{ activeMenu('admin/relatorios/voos-por-cidade*') }}">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Voos por cidade</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.report.carrying_capacity') }}" class="nav-link {{ activeMenu('admin/relatorios/capacidade-de-transporte*') }}">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Capacidade de transporte</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.report.average_age') }}" class="nav-link {{ activeMenu('admin/relatorios/media-de-idade*') }}">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Média de idade</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.report.flights_by_route') }}" class="nav-link {{ activeMenu('admin/relatorios/voos-por-rota*') }}">
                            <i class="fas fa-file nav-icon"></i>
                            <p>Voos por rota</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
