<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
    </div>
</footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('js/jquery.mousewheel.js')}}"></script>
<script src="{{asset('js/raphael.min.js')}}"></script>
<script src="{{asset('js/jquery.mapael.min.js')}}"></script>
<script src="{{asset('js/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('js/dashboard2.js')}}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#title' ) )
        .then( editor => {
            console.log( editor );
        } ),
        ClassicEditor
    .create( document.querySelector( '#desc' ) )
        .then( editor => {
            console.log( editor );
        } ),
        ClassicEditor
            .create( document.querySelector( '#keyword' ) )
            .then( editor => {
                console.log( editor );
            } ),
        ClassicEditor
            .create( document.querySelector( '#desc1' ) )
            .then( editor => {
                console.log( editor );
            } )
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</body>
</html>
