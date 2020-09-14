@extends('layout') 

@section('content') 
    {{-- Card --}}
    <section id="cards" class="mt-4">
        <div class="row no-gutters">
            <!-- Curso -->
            <div class="col col-12 col-sm-6 col-md-6 col-xl-3 mb-4 mb-xl-0 pl-2 pr-2">
                <div class="card card-admin">
                    <div class="card-admin-header">
                        <i class="card-admin-icon fas fa-info-circle mr-3 z-depth-2 background-curso-icon"></i>
                        <div class="card-admin-info">
                            <p class="card-admin-title text-uppercase">cursos</p>
                            <h4><strong>190</strong></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- Barra Progresso --}}
                        <div class="progress mb-3 card-progress">
                            <div class="background-curso-progress progress-bar progress-bar-striped progress-bar-animated"></div>
                        </div>

                        {{-- Card Texto --}}
                        <p class="card-text"><strong>Ativos: </strong>35 (25%)</p>
                    </div>
                </div>
            </div>

            <!-- Grade -->
            <div class="col col-12 col-sm-6 col-md-6 col-xl-3 mb-4 mb-xl-0 pl-2 pr-2">
                <div class="card card-admin">
                    <div class="card-admin-header">
                        <i class="card-admin-icon fas fa-info-circle mr-3 z-depth-2 background-grade-icon"></i>
                        <div class="card-admin-info">
                            <p class="card-admin-title text-uppercase">grades</p>
                            <h4><strong>30</strong></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="progress mb-3 card-progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated background-grade-progress"></div>
                        </div>
                        <p class="card-text"><strong>Ativas: </strong>10 (33%)</p>
                    </div>
                </div>
            </div>

            <!-- Disciplina -->
            <div class="col col-12 col-sm-6 col-md-6 col-xl-3 mb-4 mb-xl-0 pl-2 pr-2">
                <div class="card card-admin">
                    <div class="card-admin-header">
                        <i class="card-admin-icon fas fa-info-circle mr-3 z-depth-2 background-disciplina-icon"></i>
                        <div class="card-admin-info">
                            <p class="card-admin-title text-uppercase">disciplinas</p>
                            <h4><strong>500</strong></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="progress mb-3 card-progress">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated background-disciplina-progress"></div>
                        </div>
                        <p class="card-text"><strong>Ativas: </strong>423&nbsp;(75%)</p>
                    </div>
                </div>
            </div>

            <!-- Ementa -->
            <div class="col col-12 col-sm-6 col-md-6 col-xl-3 mb-4 mb-xl-0 pl-2 pr-2">
                <div class="card card-admin">
                    <div class="card-admin-header">
                        <i class="card-admin-icon fas fa-info-circle mr-3 z-depth-2 background-ementa-icon"></i>
                        <div class="card-admin-info">
                            <p class="card-admin-title text-uppercase">ementas</p>
                            <h4><strong>100</strong></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="progress mb-3 card-progress">
                            <div class="background-ementa-progress progress-bar bg-danger progress-bar-striped progress-bar-animated"></div>
                        </div>
                        <p class="card-text"><strong>Ativas: </strong>50 (50%)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Progress Bar --}}
    <section id="progressBar" class="pl-2 pr-2 mt-4">
        <p class="mb-1 pl-1"><strong>Processo Total</strong></p>
        <div class="progress border rounded border-primary">
            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width: 50%;">50%</div>
        </div>
    </section>

    {{-- Charts --}}
    <section id="charts" class="pl-2 pr-2 mt-4">
        <div class="row no-gutters">
            <!-- Pie -->
            <div class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4 pl-2 pr-2">
                <div class="card card-charts">
                    {{-- Header --}}
                    <header class="card-charts-header">
                        <h5 class="mb-0"><strong>Pie Chart</strong></h5>
                    </header>

                    {{-- Grafico --}}
                    <div class="card-body text-center">
                        <canvas id="pieChartExample" height="200px"></canvas>
                    </div>
                </div>
            </div>

            <!-- Line -->
            <div class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4 pl-2 pr-2">
                <div class="card card-charts">
                    {{-- Header --}}
                    <header class="card-charts-header">
                        <h5 class="mb-0"><strong>Line Chart</strong></h5>
                    </header>

                    {{-- Grafico --}}
                    <div class="card-body card-body-cascade text-center">
                        <canvas id="lineChartExample" height="200px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
