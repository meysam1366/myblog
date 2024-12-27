@include('panel.layouts.header', ['title_page' => 'My Blog - Dashboard Panel Admin'])
@include('panel.layouts.sidebar')

<!-- Start Main Content -->
<div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
    @yield('content')
</div>
<!-- End Main Content -->

@include('panel.layouts.footer')
