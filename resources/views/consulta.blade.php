@extends('layout') 

@section('content')

    <section id="content" class="pl-2 pr-2 mt-4">
        <div class="row no-gutters">
            {{-- ComboBox --}}
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">
                <div class="card card-combobox">
                    {{-- Header --}}
                    <header class="card-combobox-header">
                        <h5 class="mb-0"><strong>Ementa</strong></h5>
                    </header>
                    {{-- Formulario --}}
                    <div class="card-body">
                        <form id="formularioEmenta" method="post" class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            @csrf {{-- Combobox --}}
                            <div class="row no-glutters mr-0 ml-0">
                                {{-- Curso --}}
                                <div class="combobox-curso col col-12 col-sm-7 col-md-6 col-xl-4 mt-3 pr-2">
                                    <select class="combobox-select-curso" name="curso" id="cbxCurso"></select>
                                </div>
                                {{-- Grade --}}
                                <div class="combobox-grade col col-12 col-sm-5 col-md-6 col-xl-3 mt-3 pl-2 pr-2">
                                    <select class="combobox-select-grade" name="grade" id="cbxGrade"></select>
                                </div>
                                {{-- Disciplina --}}
                                <div class="combobox-disciplina col col-12 col-sm-12 col-md-12 col-xl-5 mt-3 pl-2">
                                    <select class="combobox-select-disciplina" name="disciplina" id="cbxDisciplina"></select>
                                </div>
                            </div>
                            {{-- Ementa --}}
                            <div class="row no-gutters">
                                <div class="col col-12 col-sm-12 col-md-12 col-xl-12 mt-3 pl-2 pr-2">
                                    <fieldset class="fieldset-ementa mb-3">
                                        <legend class="ementa-legenda">Resultado</legend>

                                        <div class="form-group">
                                            <textarea class="ementa" name="ementa" id="campoEmenta"></textarea>
                                        </div>

                                        {{-- Botoes --}}
                                        <div class="row no-gutters">
                                            <button class="btn btn-warning mr-2" id="btnEditar">Editar</button>
                                            <button class="btn btn-success" id="btnSalvar">Salvar</button>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
