<script>
  $(document).ready(function() {



    var d = new Date();
    var pd = d.setDate(d.getDate()-1);

    $('#datetimepicker1').datetimepicker({
        format: 'DD-MM-Y HH:mm',
        sideBySide: true,
        // minDate: pd
      }


    );

        $('#datetimepicker2').datetimepicker({
            format: 'DD-MM-Y HH:mm',
            sideBySide: true,
            // minDate: pd
          }


        );



  });
</script>
