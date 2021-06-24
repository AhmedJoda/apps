@include('admin.layout.partials.header.index')
@include('admin.layout.partials.navigation')
@include('admin.layout.partials.session')
<div id="app">
    @yield('content')
</div>
@include('admin.layout.partials.footer')