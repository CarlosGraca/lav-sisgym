
<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

<!-- file imput -->
<script src="{{ asset('/js/fileinput.js')}}"></script>


<!-- jvectormap -->
<script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- ChartJS 1.0.1 -->
<script src="{{ asset('/plugins/chartjs/Chart.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/bootstrap-filestyle.min.js') }}"></script>

<script src="{{ asset('/js/m_script.js')}}"></script>


<script src="{{ asset('/js/loadRemoteContent.js') }}" type="text/javascript"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    var AdminLTEOptions = {
      //Enable sidebar expand on hover effect for sidebar mini
      //This option is forced to true if both the fixed layout and sidebar mini
      //are used together
      sidebarExpandOnHover: true,
      //BoxRefresh Plugin
      enableBoxRefresh: true,
      //Bootstrap.js tooltip
      enableBSToppltip: true
    };


     // with plugin options
      $("#image").fileinput({'showUpload':false,'showRemove':false });
      $(":file").filestyle({input: false, icon: false, buttonName: "btn-primary",buttonText: "Select Image"});
      $(function () {
          $("#table-membros").DataTable();
      });

      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
</script>
