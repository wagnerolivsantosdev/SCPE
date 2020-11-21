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
                        {{-- Segunda-Feira --}}
                        <div class="inbox-mensagens box-grade-horario m-2 mb-4">
                            <p class="mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <strong>Segunda-Feira</strong>
                            </p>
                            <h4 class="grade-tituloMateria mb-3">
                                <b>ROBÓTICA E AUTOMAÇÃO</b>
                            </h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>19:20 às 20:10
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• GILSON TORRES DIAS</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>20:10 às 21:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• GILSON TORRES DIAS</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>21:10 às 22:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• GILSON TORRES DIAS</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>22:00 às 22:50
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• GILSON TORRES DIAS</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Terça-Feira --}}
                        <div class="inbox-mensagens box-grade-horario m-2 mb-4">
                            <p class="mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <strong>Terça-Feira</strong>
                            </p>
                            <h4 class="grade-tituloMateria mb-3">
                                <b>INTELIGÊNCIA ARTIFICIAL E COMPUTACIONAL</b>
                            </h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>19:20 às 20:10
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• OSWALDO ORTIZ FERNANDES JUNIOR</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>20:10 às 21:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• OSWALDO ORTIZ FERNANDES JUNIOR</h5>
                                    </div>
                                </div>
                            </div>

                            <h4 class="grade-tituloMateria mb-3">
                                <b>PROJETO E ANÁLISE DE ALGORITMOS</b>
                            </h4>

                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>21:10 às 22:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• IVAN CARLOS ALCANTARA DE OLIVEIRA</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>22:00 às 22:50
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• IVAN CARLOS ALCANTARA DE OLIVEIRA</h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Quarta-Feira --}}
                        <div class="inbox-mensagens box-grade-horario m-2 mb-4">
                            <p class="mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <strong>Quarta-Feira</strong>
                            </p>
                            <h4 class="grade-tituloMateria mb-3">PROJETO E ANÁLISE DE ALGORITMOS</h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>19:20 às 20:10
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• IVAN CARLOS ALCANTARA DE OLIVEIRA</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>20:10 às 21:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• IVAN CARLOS ALCANTARA DE OLIVEIRA</h5>
                                    </div>
                                </div>
                            </div>

                            <h4 class="grade-tituloMateria mb-3">TÓPICOS ESPECIAIS EM COMPUTAÇÃO II</h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>21:10 às 22:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• IVAN CARLOS ALCANTARA DE OLIVEIRA</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>22:00 às 22:50
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• IVAN CARLOS ALCANTARA DE OLIVEIRA</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Quinta-Feira --}}
                        <div class="inbox-mensagens box-grade-horario m-2 mb-4">
                            <p class="mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <strong>Quinta-Feira</strong>
                            </p>
                            <h4 class="grade-tituloMateria mb-3">COMPUTAÇÃO GRÁFICA E PROCESSAMENTO DE IMAGEM</h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>19:20 às 20:10
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• ANDREA ZOTOVICI</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>20:10 às 21:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• ANDREA ZOTOVICI</h5>
                                    </div>
                                </div>
                            </div>

                            <h4 class="grade-tituloMateria mb-3">INTELIGÊNCIA ARTIFICIAL E COMPUTACIONAL</h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>21:10 às 22:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• OSWALDO ORTIZ FERNANDES JUNIOR</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>22:00 às 22:50
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• OSWALDO ORTIZ FERNANDES JUNIOR</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Sexta-Feira --}}
                        <div class="inbox-mensagens box-grade-horario m-2 mb-4">
                            <p class="mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                <strong>Sexta-Feira</strong>
                            </p>
                            <h4 class="grade-tituloMateria mb-3">PROGRAMAÇÃO DE DISPOSITIVOS MÓVEIS</h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>19:20 às 20:10
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• ANDREA ZOTOVICI</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>20:10 às 21:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• ANDREA ZOTOVICI</h5>
                                    </div>
                                </div>
                            </div>

                            <h4 class="grade-tituloMateria mb-3">COMPUTAÇÃO GRÁFICA E PROCESSAMENTO DE IMAGEM</h4>
                            <div class="container-fluid">
                                <div class="row no-gutters">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>21:10 às 22:00
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• ANDREA ZOTOVICI</h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <h4 class="grade-horario mt-3 mb-3"><i class="far fa-clock mr-2"></i>22:00 às 22:50
                                        </h4>
                                        <h5 class="grade-professional mt-3 mb-3"><strong>Professor (a)</strong></h5>
                                        <h5 class="grade-nome-professor mt-3 mb-3">• ANDREA ZOTOVICI</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
