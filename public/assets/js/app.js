/* Variaveis Globais */
var dados, i;

$(function() {

    backgroundPartiground();
    barraLateral();
    botaoNavbarPrincipal();
    customScrollbar();
    removerMensagemAlerta();
    charts();

    clickEffect();

    $('#dashboard, #consulta, #cadastro, #grade, #secretaria').on('click', function() {
        requestPage($(this).attr('id'));

        removerPaginaSelecionada();

        adicionarSelecaoPagina($(this));

        if (larguraJanela() <= 767.98) {
            /* Ocultando Menu */
            $('.wrapper-sidebar').toggleClass('ocultarSidebar');

            /* Removendo Overlay */
            $('#sidebar-overlay').remove();
        }
    });


});

/*
 * ============================================================================
 *     Funções Genericas
 * ============================================================================
 */

function backgroundPartiground() {

    if (window.location.pathname == '/registrar' || window.location.pathname == '/login') {

        $('body').css("background", "linear-gradient(90deg, #f5a942 0%, #fe5a0b 100%)");

        $('#particles').particleground({

            minSpeedX: 0.1,
            maxSpeedX: 0.7,

            minSpeedY: 0.1,
            maxSpeedY: 0.7,

            directionX: 'center', // 'center', 'left' or 'right'. 'center' = dots bounce off edges

            directionY: 'center', // 'center', 'up' or 'down'. 'center' = dots bounce off edges
            // How many particles will be generated: one particle every n pixels
            density: 10000,

            dotColor: '#fff',

            lineColor: '#fff',

            particleRadius: 7, // Dot size

            lineWidth: 1,

            curvedLines: false,

            proximity: 100, // How close two dots need to be before they join

            parallax: false,

            parallaxMultiplier: 5, // The lower the number, the more extreme the parallax effect

            onInit: function() {},

            onDestroy: function() {}

        });
    }

}

function removerMensagemAlerta() {
    $('.alert-danger, .alert-success').fadeOut(5000, "linear");
}

function removerPaginaSelecionada() {
    /* Removendo classe Botao */
    $('.sidebar-opcao .sidebar-menu-link').find('.btn-active')
        .removeClass('btn-active');

    /* Removendo Classe Icone */
    $('.sidebar-opcao .sidebar-menu-link').find('.icon-active')
        .removeClass('icon-active');

    /* Removendo Objeto Icone do Dom */
    $('.sidebar-opcao .sidebar-menu-link').find('.sidebar-menu-text > i')
        .remove();
}

function adicionarSelecaoPagina(elemento) {
    /* Adicionando classe Botao e Icone no DOM */
    $(elemento).find('.sidebar-menu-text')
        .addClass('btn-active')
        .append('<i class="fas fa-chevron-circle-right text-white"></i>');

    /* Adicionando Classe Icone */
    $(elemento).find('.sidebar-menu-icon')
        .addClass('icon-active');
}

function visualizarConsole(elemento) {
    console.log(elemento);
}

function clickEffect() {
    $('.sidebar-menu-item > a, button').rippleEffect();
}

function larguraJanela() {
    return $(window).width();
}

function serializacao(elemento) {
    return $(elemento).serialize();
}

function bloquearElemento(elemento) {
    $(elemento).attr('disabled', true);
}

function desbloquearElemento(elemento) {
    $(elemento).removeAttr('disabled');
}

function removerElementos(elemento) {
    $(elemento).empty();
}

function inserirDados(elemento, data) {
    $(elemento).html(data);
}

function requestWebServer(formulario, type, pathname, callback) {

    var url = ('http://localhost:8000/api/' + pathname);
    var parametros = serializacao(formulario);

    $.ajax({
        type: type,
        url: url,
        data: parametros,
        success: callback,
        error: function(jqXHR, textStatus, errorThrown) {

            Swal.fire({
                icon: 'error',
                title: 'Ops! Ocorreu um erro',
                text: "Error: " + jqXHR.status + " " + errorThrown,
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
            });
        }
    });
}

function requestPage(page) {

    var url = 'http://127.0.0.1:8000/';

    if ((page == 'dashboard') || (page == 'homeBreadcrumb')) {
        url += 'dashboard #breadcrumb, #cards, #progressBar, #charts';
        $('main').load(url, function() { charts(); });
    } else if (page == 'consulta') {
        url += 'consulta #breadcrumb, #content';
        $('main').load(url, function() { ComboboxController(); });
    } else if (page == 'cadastro' || page == 'grade' || page == 'secretaria') {
        url += page + ' #breadcrumb, #content';
        $('main').load(url);
    }
}

function mensagenCurta(icone, mensagem) {

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        onOpen: function(toast) {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    Toast.fire({
        icon: icone,
        title: mensagem
    });
}

/*
 * ============================================================================
 *     Layout
 * ============================================================================
 */

/* Controler Visualização da Sidebar */

function barraLateral() {
    $(window).resize(function() {

        if ((larguraJanela() >= 768)) {

            /* Sidebar: Alterando Css e Removendo Classe */
            $('.wrapper-sidebar')
                .css({ "margin-left": "0" })
                .removeClass('ocultarSidebar');

            /* Removendo Overlay */
            $('#sidebar-overlay').remove();


        } else {
            $('.wrapper-sidebar').css({ 'margin-left': '-15.625rem' });
        }

    });
}

/* Scroll Personalizado */

function customScrollbar() {
    if (window.location.pathname == '/dashboard') {
        $('.sidebar-menu, #dropdown-menu-notificacao, #dropdown-menu-configuracao').mCustomScrollbar();
    }
}

/* Click Botão Principal Navbar */

function botaoNavbarPrincipal() {
    $('#navbar-toggler').on('click', function() {
        $('.wrapper-sidebar').toggleClass('ocultarSidebar');
        overlay();
        removerSidebarOverlay();
    });
}

/* Proteção de Tela */

function overlay() {
    if ($('#sidebar-overlay').length == 0) {
        $('.wrapper').after('<div id="sidebar-overlay"/>');
    } else {
        $('#sidebar-overlay').remove();
    }
}

/* Remover Sidebar e Overlay  ao Clicar na Protecão Tela */

function removerSidebarOverlay() {
    $('#sidebar-overlay').on('click', function() {
        $('.wrapper-sidebar').toggleClass('ocultarSidebar');
        $(this).remove();
    });
}

/*
 * ============================================================================
 *     Dashboard
 * ============================================================================
 */

/* Dados dos Graficos Pie e Line */

function charts() {

    if (window.location.pathname == '/dashboard') {
        'use strict';

        var brandPrimary = 'rgba(51, 179, 90, 1)';

        var LINECHARTEXMPLE = $('#lineChartExample'),
            PIECHARTEXMPLE = $('#pieChartExample');

        var lineChartExample = new Chart(LINECHARTEXMPLE, {
            type: 'line',
            data: {
                labels: ["Janeiro", "Fevereiro", "Maço", "Abril", "Maio", "Junho", "Julho"],
                datasets: [{
                        label: "Data Set One",
                        fill: true,
                        lineTension: 0.3,
                        backgroundColor: "rgba(51, 179, 90, 0.38)",
                        borderColor: brandPrimary,
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        borderWidth: 1,
                        pointBorderColor: brandPrimary,
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: brandPrimary,
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 1,
                        pointHitRadius: 10,
                        data: [50, 20, 40, 31, 32, 22, 10],
                        spanGaps: false
                    },
                    {
                        label: "Data Set Two",
                        fill: true,
                        lineTension: 0.3,
                        backgroundColor: "rgba(75,192,192,0.4)",
                        borderColor: "rgba(75,192,192,1)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        borderWidth: 1,
                        pointBorderColor: "rgba(75,192,192,1)",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(75,192,192,1)",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 1,
                        pointHitRadius: 10,
                        data: [65, 59, 30, 81, 56, 55, 40],
                        spanGaps: false
                    }
                ]
            }
        });

        var pieChartExample = new Chart(PIECHARTEXMPLE, {
            type: 'doughnut',
            data: {
                labels: [
                    "Primeiro",
                    "Segundo",
                    "Terceiro"
                ],
                datasets: [{
                    data: [250, 150, 300],
                    borderWidth: [1, 1, 1],
                    backgroundColor: [
                        brandPrimary,
                        "rgba(75,192,192,1)",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        brandPrimary,
                        "rgba(75,192,192,1)",
                        "#FFCE56"
                    ]
                }]
            }
        });

        pieChartExample = {
            responsive: true
        };
    }

}

/*
 * ============================================================================
 *     Consulta 
 * ============================================================================
 */

function ComboboxController() {

    /* Home Page */
    $('#homeBreadcrumb').on('click', function() {
        requestPage($(this).attr('id'));
    });

    /* Bloquear Elementos */
    bloquearElemento(
        '#cbxCurso, #cbxGrade, #cbxDisciplina, #campoEmenta, #btnEditar, #btnSalvar'
    );

    /* Requisição Combobox Curso */
    requestWebServer('#formularioEmenta', 'POST', 'cursos', cursos);

    /* Requisição Combobox Grade */
    $('#cbxCurso').on('click', function() {
        requestWebServer('#formularioEmenta', 'POST', 'grades', grades);
    });

    /* Requisição Combobox Disciplina */
    $('#cbxGrade').on('click', function() {
        requestWebServer('#formularioEmenta', 'POST', 'disciplinas', disciplinas);
    });

    /* Requisição Combobox Ementa */
    $('#cbxDisciplina').on('click', function() {
        requestWebServer('#formularioEmenta', 'POST', 'ementa', ementa);
        bloquearElemento('#campoEmenta');
    });

    /* Botão Editar */
    $('#btnEditar').click(btnEditar);

    /* Botão Salvar */
    $('#formularioEmenta').submit(function(e) {
        btnSalvar(e);
    });

}

function processamentoCombobox(bloqueio, remover, elemento, data) {
    bloquearElemento(bloqueio);
    removerElementos(remover);
    $('#campoEmenta').val('');
    inserirDados(elemento, data);
    desbloquearElemento(elemento);
}

function gerarOptionCurso() {

    var optionCurso;

    for (i = 0; i < dados.length; i++) {
        optionCurso += '<option value="' + dados[i].id + '">' +
            dados[i].curso +
            '</option>';
    }

    return optionCurso.replace('undefined', '');
}

function gerarOptionGrade() {

    var optionGrade;

    for (i = 0; i < dados.length; i++) {
        optionGrade += '<option value="' + dados[i].id + '">' +
            dados[i].id + ' - ' +
            dados[i].ano + ' - ' +
            dados[i].semestre + 'S' +
            '</option>';
    }

    return optionGrade.replace('undefined', '');
}

function gerarOptionDisciplina() {

    var optionDisciplina;

    for (i = 0; i < dados.length; i++) {
        optionDisciplina += '<option value="' + dados[i].id + '">' +
            dados[i].disciplina +
            '</option>';
    }

    return optionDisciplina.replace('undefined', '');
}

function options(data, opcao) {

    dados = data['data'];

    switch (opcao) {
        case 'curso':
            {
                return gerarOptionCurso();
            }
        case 'grade':
            {
                return gerarOptionGrade();
            }
        case 'disciplina':
            {
                return gerarOptionDisciplina();
            }
    }
}

function cursos(data) {
    processamentoCombobox(
        '#cbxCurso, #cbxGrade, #cbxDisciplina, #campoEmenta, #btnEditar, #btnSalvar',
        '#cbxCurso, #cbxGrade, #cbxDisciplina',
        '#cbxCurso',
        options(data, 'curso')
    );
}

function grades(data) {
    processamentoCombobox(
        '#cbxGrade, #cbxDisciplina, #campoEmenta, #btnEditar, #btnSalvar',
        '#cbxGrade, #cbxDisciplina',
        '#cbxGrade',
        options(data, 'grade')
    );
}

function disciplinas(data) {
    processamentoCombobox(
        '#campoEmenta, #btnEditar, #btnSalvar',
        '#cbxDisciplina',
        '#cbxDisciplina',
        options(data, 'disciplina')
    );

}

function ementa(data) {
    desbloquearElemento('#btnEditar, #btnSalvar');
    $('#campoEmenta').val(data['data'][0].ementa);
}

function btnEditar(e) {
    e.preventDefault();

    if ($('#campoEmenta')[0].hasAttribute('disabled')) {

        dados = $('#campoEmenta').val();

        Swal.fire({
            title: 'Você tem Certeza?',
            text: 'Deseja editar Ementa!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim'
        }).then(function(result) {
            if (result.value) {
                desbloquearElemento('#campoEmenta');
            }
        });

    } else {
        mensagenCurta('info', 'Ementa Desbloqueada!');
    }
}

function btnSalvar(e) {
    e.preventDefault();

    if ($('#campoEmenta')[0].hasAttribute('disabled')) {
        mensagenCurta('info', 'Ementa Bloqueada!');
    } else if ($('#campoEmenta').val() == dados) {
        mensagenCurta('warning', 'Ementa Não foi Alterada!');
    } else if (($('#campoEmenta').val() != dados) && !($('#campoEmenta')[0].hasAttribute('disabled'))) {

        Swal.fire({
            title: 'Você tem Certeza?',
            text: "Deseja Salvar a Ementa!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim'
        }).then(function(result) {
            if (result.value) {
                requestWebServer('#formularioEmenta', 'PUT', 'ementa', function() {
                    ComboboxController();
                    Swal.fire({
                        icon: 'success',
                        title: 'Salvo com Sucesso',
                        showConfirmButton: false,
                        timer: 1500
                    });
                });
            }
        });

    }
}

/*
 * ============================================================================
 *     Funções
 * ============================================================================
 */