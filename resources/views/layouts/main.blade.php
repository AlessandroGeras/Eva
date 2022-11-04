{{--Layout principal--}}

<?php date_default_timezone_set('America/Sao_Paulo'); ?>

<html>

<head>
  <title>@yield("title")</title>

  <x-layouts.head />
</head>

<body class="bg-gray-200 dark:bg-gray-900">

  <!--Ativação do Toastr vindo de qualquer controller-->
  @if(session('msg'))
  <script>
    message("<?php echo session('msg') ?>")
  </script>
  @endif

  <navbar>
    <div class="h-24 dark:bg-gray-900">
      <x-navbar.navbar_logo />

      <x-navbar.navbar_panel />

      <x-navbar.navbar_menu />
    </div>
  </navbar>

  <main>
    @yield("corpo")
  </main>

  <x-navbar.footer />

</body>

</html>