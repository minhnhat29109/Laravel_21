<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>

{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script>
    window.onload = function() {
        CKEDITOR.replace( 'editor-task' );
    };
</script>