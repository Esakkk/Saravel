<!DOCTYPE <html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saravel | {{$page}}</title>
    {{-- Tailwind --}}
     <script src="https://cdn.tailwindcss.com"></script>
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    {{-- Alpine JS --}}
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>

  @include('partials.navbar')

  <div class="container">
    <div class="justify-center flex">
      @yield('konten')
    </div>
  </div>

</body>
</html>