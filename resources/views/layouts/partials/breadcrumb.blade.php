<section id="breadcrumb" class="pl-2 pr-2 content-breadcrumb">
    <div class="container-fluid content-breadcrumb-header">
        {{-- Titulo --}}
        <header class="breadcrumb-header-title">
            <h2 class="text-capitalize">
                <strong>{{$pagina}}</strong>
            </h2>
        </header>
        {{-- Path --}}
        <ul class="list-unstyled breadcrumb-path">
            {{-- Item --}}
            <li class="breadcrumb-path-item">
                <a id="homeBreadcrumb" class="breadcrumb-path-link">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            {{-- Item --}}
            <li class="breadcrumb-path-item">
                <a id="pageBreadcrumb" class="breadcrumb-path-link text-capitalize">
                    {{$pagina}}
                </a>
            </li>
        </ul>
    </div>
</section>
