<div class="sidebar-footer">

    <div class="row m-0 align-items-center sidebar-footer-items">

        {{-- Notificacao --}}
        <div class="col text-center sidebar-footer-notificacao">
            {{-- Botao --}}
            <a href="#" data-toggle="dropdown" class="footer-notificacao-link">
                <i class="sidebar-footer-icon fa fa-bell"></i>
                <span class="badge badge-warning notification">3</span>
            </a>
            {{-- Dropdown Botao --}}
            <div id="dropdown-menu-notificacao" class="dropdown-menu notifications">
                <div class="pl-1 pr-2">
                    {{-- Header --}}
                    <div class="text-center notifications-header">
                        Notificações
                    </div>
                    {{-- Linha Divisao --}}
                    <div class="dropdown-divider"></div>
                    {{-- Item Dropdown --}}
                    <a class="dropdown-item" href="#">
                        <div class="notification-content">
                            <div class="icone">
                                <i class="fas fa-check text-success border border-success"></i>
                            </div>
                            <div class="content">
                                <div class="notification-detail text-truncate">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. In totam explicabo</div>
                                <div class="notification-time">
                                    6 minutes
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="dropdown-item" href="#">
                        <div class="notification-content">
                            <div class="icone">
                                <i class="fas fa-exclamation text-info border border-info"></i>
                            </div>
                            <div class="content">
                                <div class="notification-detail text-truncate">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. In totam explicabo</div>
                                <div class="notification-time">
                                    45 minutes
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="dropdown-item" href="#">
                        <div class="notification-content">
                            <div class="icone">
                                <i class="fas fa-exclamation-triangle text-warning border border-warning"></i>
                            </div>
                            <div class="content">
                                <div class="notification-detail text-truncate">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. In totam explicabo</div>
                                <div class="notification-time">
                                    1 dia
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>
        </div>

        {{-- Suporte --}}
        <div class="col text-center sidebar-footer-suporte">
            <a href="#" class="footer-suporte-link">
                <i class="sidebar-footer-icon far fa-comments"></i>
            </a>
        </div>
        {{-- Perfil --}}
        <div class="col text-center sidebar-footer-configuracao">
            <a href="#" data-toggle="dropdown" class="footer-configuracao-link">
                <i class="sidebar-footer-icon fa fa-cog"></i>
            </a>
            <div class="row m-0 dropdown-menu">
                <a class="dropdown-item">
                    <div class="row container m-0 sidebar-footer-font">
                        {{-- Icone --}}
                        <div class="col-2 align-middle">
                            <i class="dropdown-icon fas fa-user"></i>
                        </div>
                        {{-- Mensagem --}}
                        <div class="col-10 align-middle text-truncate">
                            <span>Perfil</span>
                        </div>
                    </div>
                </a>
                <a class="dropdown-item mt-3">
                    <div class="row container m-0 sidebar-footer-font">
                        {{-- Icone --}}
                        <div class="col-2 align-middle">
                            <i class="dropdown-icon fas fa-cog"></i>
                        </div>
                        {{-- Mensagem --}}
                        <div class="col-10 align-middle text-truncate">
                            <span>Configuração</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        {{-- Logout --}}
        <div class="col text-center siderbar-footer-logout">
            <a href="{{ route('logout') }}" class="footer-logout-link">
                <i class="sidebar-footer-icon fa fa-power-off"></i>
            </a>
        </div>
    </div>

</div>
