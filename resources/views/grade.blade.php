@extends('layout')

@section('content')

    <section id="content" class="pl-2 pr-2 mt-4">

        <div class="row no-gutters">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                <div class="card card-combobox">
                    <header class="card-combobox-header">
                        <h5 class="mb-0"><strong>Grade</strong></h5>
                    </header>
                    <div class="card-body">
                        <div class="row no-glutters mr-0 ml-0 mb-3">
                            {{-- Curso --}}
                            <div class="combobox-grade-curso col col-12 col-sm-12 col-md-12 col-xl-5 mt-3 pr-2">
                                <select class="combobox-select-grade-curso" name="curso" id="cbxGradeCurso"></select>
                            </div>

                            {{-- Ano --}}
                            <div class="combobox-grade-ano col col-12 col-sm-5 col-md-5 col-xl-3 mt-3 pr-2">
                                <select class="combobox-select-grade-ano" name="ano" id="cbxGradeAno"></select>
                            </div>

                            {{-- Semestre --}}
                            <div class="combobox-grade-semestre col col-12 col-sm-7 col-md-7 col-xl-4 mt-3 pr-2">
                                <select class="combobox-select-grade-semestre" name="semestre"
                                    id="cbxGradeSemestre"></select>
                            </div>

                        </div>

                        {{-- Segunda-Feira --}}
                        <div id="segunda" class="inbox-mensagens box-grade-horario m-2 mb-4">
                            <p class="mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <strong>Segunda-Feira</strong>
                            </p>
                            <h4 class="grade-tituloMateria mb-3">
                                <b class="tituloMateria1"></b>
                            </h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>19:20 às 20:10
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor1"></span></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>20:10 às 21:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor1"></span></h5>
                                    </div>
                                </div>
                            </div>

                            <h4 class="grade-tituloMateria mb-3">
                                <b class="tituloMateria2"></b>
                            </h4>

                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>21:10 às 22:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor2"></span></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>22:00 às 22:50
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor2"></span></h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Terça-Feira --}}
                        <div id="terca" class="inbox-mensagens box-grade-horario m-2 mb-4">
                            <p class="mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <strong>Terça-Feira</strong>
                            </p>
                            <h4 class="grade-tituloMateria mb-3">
                                <b class="tituloMateria1"></b>
                            </h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>19:20 às 20:10
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor1"></span></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>20:10 às 21:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor1"></span></h5>
                                    </div>
                                </div>
                            </div>

                            <h4 class="grade-tituloMateria mb-3">
                                <b class="tituloMateria2"></b>
                            </h4>

                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>21:10 às 22:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor2"></span></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>22:00 às 22:50
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor2"></span></h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Quarta-Feira --}}
                        <div id="quarta" class="inbox-mensagens box-grade-horario m-2 mb-4">
                            <p class="mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <strong>Quarta-Feira</strong>
                            </p>
                            <h4 class="grade-tituloMateria mb-3">
                                <b class="tituloMateria1"></b>
                            </h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>19:20 às 20:10
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor1"></span></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>20:10 às 21:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor1"></span></h5>
                                    </div>
                                </div>
                            </div>

                            <h4 class="grade-tituloMateria mb-3">
                                <b class="tituloMateria2"></b>
                            </h4>

                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>21:10 às 22:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor2"></span></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>22:00 às 22:50
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor2"></span></h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Quinta-Feira --}}
                        <div id="quinta" class="inbox-mensagens box-grade-horario m-2 mb-4">
                            <p class="mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <strong>Quinta-Feira</strong>
                            </p>
                            <h4 class="grade-tituloMateria mb-3">
                                <b class="tituloMateria1"></b>
                            </h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>19:20 às
                                            20:10</h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor1"></span></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>20:10 às
                                            21:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor1"></span></h5>
                                    </div>
                                </div>
                            </div>

                            <h4 class="grade-tituloMateria mb-3">
                                <b class="tituloMateria2"></b>
                            </h4>

                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>21:10 às
                                            22:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor2"></span></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>22:00 às
                                            22:50
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor2"></span></h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Sexta-Feira --}}
                        <div id="sexta" class="inbox-mensagens box-grade-horario m-2 mb-4">
                            <p class="mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <strong>Sexta-Feira</strong>
                            </p>
                            <h4 class="grade-tituloMateria mb-3">
                                <b class="tituloMateria1"></b>
                            </h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>19:20 às
                                            20:10</h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor1"></span></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>20:10 às
                                            21:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3"><span
                                                class="grade-nome-professor1"></span></h5>
                                    </div>
                                </div>
                            </div>

                            <h4 class="grade-tituloMateria mb-3">
                                <b class="tituloMateria2"></b>
                            </h4>

                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>21:10 às
                                            22:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor2"></span></h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>22:00 às
                                            22:50
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• <span
                                                class="grade-nome-professor2"></span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
