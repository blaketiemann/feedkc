<style>
    .custom-toast-position {
        marigin: 100px;
    }
</style>

@if(Session::has('toasts'))
	<!-- Messenger http://github.hubspot.com/messenger/ -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<script type="text/javascript">

		toastr.options = {
		    progressBar: true,
			newestOnTop: true,
		};

		@foreach(Session::get('toasts') as $toast)
			toastr["{{ $toast['level'] }}"]("{{ $toast['message'] }}","{{ $toast['title'] }}");
		@endforeach
	</script>
@endif
