@if (session('success'))
	@if(App::getLocale() == 'ar')
    <script>
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: "{{ session('success') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>
    @else
  <script>
        new Noty({
            type: 'success',
            layout: 'topLeft',
            text: "{{ session('success') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>
    @endif
@endif
