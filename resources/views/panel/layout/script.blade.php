@if (session('success'))
<script>
    $.toast({
      heading: 'SUCCESS',
      text: "{{ session('success') }}",
      showHideTransition: 'slide',
      icon: 'success',
      loaderBg: '#f96868',
      position: 'top-right'
    });
</script>
@endif


@if(session('error'))
<script>
    $.toast({
      heading: 'ERROR',
      text: "{{ session('error') }}",
      showHideTransition: 'slide',
      icon: 'error',
      loaderBg: '#f2a654',
      position: 'top-right'
    });
</script>
@endif
