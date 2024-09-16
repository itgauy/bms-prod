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
  <header class="fixed top-0 w-full bg-white shadow-lg shadow-neutral-300/10 z-50">
    <nav class="p-6 flex items-center justify-between w-full md:px-16">
      <!-- Logo/Home -->
      <a href="{{ route('home') }}" class="flex items-center gap-4">
        <span class="block rounded-full size-7 bg-neutral-300 ring-2 ring-neutral-400"></span>
        <h5>BNN??</h5>
      </a>
      <!-- Links -->
      <ul class="hidden lg:flex items-center gap-10">
        <li><a href="#">Announcements</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Officials</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
      <!-- Login and Register Buttons -->
      <div class="flex items-center gap-4">
        <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-primary">Register
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </nav>
  </header>

  <main class="border pt-36 py-24 mx-auto max-w-s-lg">
    {{ $slot }}
  </main>
</body>

</html>