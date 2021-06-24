@include('admin.layout.partials.header.index')
@include('admin.layout.partials.navigation')
@include('admin.layout.partials.session')

<h1 class='text-center text-white'>@yield('title', setting('site_name'))</h1>
<div id="app" class="m-auto p-auto">

    @yield('content')
</div>
@include('admin.layout.partials.footer')