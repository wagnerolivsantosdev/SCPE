<header>
    {{-- Barra Navegação Superior --}}
    <nav class="navbar navbar-dark navbar-expand-md fixed-top">
        <div class="container-fluid">
            <a href="{{ route('dashboard') }}" class="navbar-brand">SCPE</a>
            <button id="navbar-toggler" class="navbar-toggler text-lowercase text-justify border rounded-circle">
                <i class="fas fa-bars"></i>
            </button>
            {{-- Menu Top Navigation Bar --}}
            <div class="nav-bottom">
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    {{-- Botão Notificação --}}
                    <li class="nav-item dropdown nav-notificacao">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <span class="badge">3</span>
                            <i class="fas fa-bell"></i>
                            <span class="d-none d-md-inline-block">Notificação</span>
                        </a>
                        {{-- Itens Notificação --}}
                        <div class="dropdown-menu dropdown-primary">
                            <a class="dropdown-item" href="#">
                                <div class="row container-fluid">
                                    {{-- Icone --}}
                                    <div class="col-2 align-middle">
                                        <i class="fas fa-check-square text-success"></i>
                                    </div>
                                    {{-- Mensagem --}}
                                    <div class="col-10 align-middle text-truncate">
                                        <span>Loren ipsum dolor</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="row container-fluid">
                                    {{-- Icone --}}
                                    <div class="col-2 align-middle">
                                        <i class="fas fa-exclamation-triangle text-warning"></i>
                                    </div>
                                    {{-- Mensagem --}}
                                    <div class="col-10 align-middle text-truncate">
                                        <span>Loren ipsum dolor</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="row container-fluid">
                                    {{-- Icone --}}
                                    <div class="col-2 align-middle">
                                        <i class="fas fa-exclamation-circle text-danger"></i>
                                    </div>
                                    {{-- Mensagem --}}
                                    <div class="col-10 align-middle text-truncate">
                                        <span>Loren ipsum dolor</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    {{-- Botão Suporte --}}
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="fas fa-comments"></i>
                            <span class="d-none d-sm-inline-block">Suporte</span>
                        </a>
                    </li>
                    {{-- Botão Usuario --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <span class="d-none d-sm-inline-block">
                                {{-- Imagem Usuario --}}
                                <img class="nav-user-img" src="{{ asset('assets/img/user.jpg') }}" />
                                Aparecido Freitas
                            </span>
                        </a>
                        {{-- Dropdown Usuario --}}
                        <div class="dropdown-menu dropdown-menu-right userDropdown">
                            <a class="dropdown-item" href="#">
                                <div class="row m-0">
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

                            <a class="dropdown-item" href="#">
                                <div class="row m-0">
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

                            <hr class="mt-1 mb-1" />

                            <a href="{{ route('logout') }}" class="dropdown-item" href="#">
                                <div class="row m-0">
                                    {{-- Icone --}}
                                    <div class="col-2 align-middle">
                                        <i class="dropdown-icon fa fa-power-off text-danger"></i>
                                    </div>
                                    {{-- Mensagem --}}
                                    <div class="col-10 align-middle text-truncate">
                                        <span>Sair</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
