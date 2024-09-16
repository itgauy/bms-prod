<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-50">
  <header class="fixed top-0 w-full bg-white shadow-lg shadow-neutral-100/80 z-50">
    <nav class="p-6 flex items-center justify-between w-full lg:px-36 md:px-16">
      <a href="{{ route('home') }}" class="text-neutral-700">Home</a>
      <div class="flex items-center gap-4">
        <a href="{{ route('login') }}" class="text-neutral-700">Login</a>
        <a href="{{ route('register') }}" class="text-neutral-700">Register</a>
      </div>
    </nav>
  </header>

  <main class="border pt-28 py-24 mx-auto max-w-s-lg">
    {{ $slot }}
  </main>
</body>

</html>