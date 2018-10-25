<script type="text/javascript">
  $(document).ready(function(){
    $('input[type="file"]').change(function(e){
      var fileName = e.target.files[0].name;

      type = $(this).attr('id');

      if(type == 'doc')
        $('#file_name').text(fileName);
      else if(type == 'imgInp')
        $('#image_name').text(fileName);
    });
  });
</script>
