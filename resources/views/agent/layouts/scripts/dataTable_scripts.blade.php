<script src="{{ URL::asset('js/datatables.min.js') }}"></script>
<script src="{{ URL::asset('js/dataTables.responsive.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#table').DataTable({
      responsive:true
    });
  });
</script>
