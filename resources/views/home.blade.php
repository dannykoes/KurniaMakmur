@include('template.head')
@include('template.sidebar')
@include('template.header')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <router-view></router-view>
    </div>
</div>
<!--end page wrapper -->

@include('template.footer')