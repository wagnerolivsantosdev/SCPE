<!DOCTYPE html>
<html lang="pt-br">
    {{-- Head --}} 
    @include('layouts.partials.head')

    <body>
        {{-- Header --}} 
        @include('layouts.partials.header') 

        {{-- Corpo Principal --}}
        <div class="wrapper">

            {{-- Barra Lateral --}} 
            @include('layouts.partials.sidebar.sidebar') 

            {{-- Main Content --}}
            <div class="wrapper-content">

                <main class="container-fluid">

                    {{-- Breadcrumb --}} 
                    @include('layouts.partials.breadcrumb') 
                    
                    {{-- Conteudo --}} 
                    @yield('content')

                </main>

                {{-- Footer Pagina --}} 
                @include('layouts.partials.footer')

            </div>
        </div>

        {{-- SCRIPTS --}} 
        @include('layouts.partials.scripts')

    </body>
</html>
