<div class="wrapper-sidebar">
    {{-- Menu Sidebar --}}
    <div class="sidebar-menu">
        {{-- Menu Header --}}
        @include('layouts.partials.sidebar.menu.header')
        {{-- Menu Search --}}
        @include('layouts.partials.sidebar.menu.search')
        {{-- Menu Opcoes --}}
        @include('layouts.partials.sidebar.menu.opcoes')
    </div>
    {{-- Footer Sidebar --}}
    @include('layouts.partials.sidebar.footer')

</div>
