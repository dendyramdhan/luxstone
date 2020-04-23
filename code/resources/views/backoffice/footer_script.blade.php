<!-- jQuery -->
<script src="{{asset ('code/backoffice_template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset ('code/backoffice_template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('code/backoffice_template/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset ('code/backoffice_template/dist/js/demo.js')}}"></script>
<!-- AdminLTE for summernote -->
<script src="{{asset ('code/backoffice_template/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset ('code/backoffice_template/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Boostrap 4 -->
<script src="{{asset ('code/backoffice_template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset ('code/backoffice_template/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script>
$(function() {
    // Summernote
    $('.textarea').summernote()

    // Select2
    $('.select2').select2()

    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });
})
</script>