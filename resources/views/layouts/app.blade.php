<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @section('additionalMeta')
  <meta property="og:image" content="{{ config('app.url') }}/posts/{{ $post->id }}/ogp.png">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:image" content="{{ config('app.url') }}/posts/{{ $post->id }}/ogp.png">
  @endsection

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <!-- ↓変更 -->
  <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">

  <!-- Scripts -->
  <!-- ↓変更 -->
  <script src="{{ secure_asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header>

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>
</body>

</html>