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
  <!-- Layout Header -->
  <header class="fixed top-0 w-full bg-white shadow-lg shadow-neutral-300/10 z-40">
    <nav class="md:p-6 px-6 md:py-6 py-4 flex items-center justify-between w-full md:px-16">
      <!-- Logo/Home -->
      <a href="{{ route('home') }}" class="flex items-center gap-4">
        <span class="block rounded-full size-7 bg-neutral-300 ring-2 ring-neutral-400"></span>
        <h5>BNN??</h5>
      </a>
      <!-- Sidebar Toggle Button for Mobile -->
      <button type="button" class="lg:hidden flex shrink-0 btn btn-secondary px-2 py-2" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-custom-backdrop-color" data-hs-overlay="#hs-offcanvas-custom-backdrop-color">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
        </svg>
      </button>
      @include('components.links', ['extraClasses' => 'lg:flex hidden'])
    </nav>
  </header>

  <!-- Mobile Sidebar -->
  <div id="hs-offcanvas-custom-backdrop-color" class="hs-overlay hs-overlay-open:translate-x-0 hs-overlay-backdrop-open:bg-neutral-600/50 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-64 w-full p-5 space-y-7 z-50 bg-white border-e" role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-custom-backdrop-color-label">
    <div class="flex flex-col border">
      <h3>Sample lang naman - Ma'am manandeg antok na kooo</h3>
      <!-- Links -->
      <ul class="flex flex-col items-start gap-6">
        <li><a href="#">Announcements</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Officials</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
      <!-- Login and Register Buttons -->
      <div class="flex flex-col items-center gap-4">
        <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
        <button class="btn btn-primary">Register
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Signup Modal -->
  <x-modals.signup-modal />

  <!-- Main Content -->
  <main class="border pt-36 py-24 mx-auto max-w-s-lg">
    {{ $slot }}
  </main>

  <!-- Footer -->
  <footer class="border p-6 md:px-16">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis accusantium soluta commodi ab, praesentium harum ad id rem delectus minus rerum architecto obcaecati minima laboriosam sint ullam voluptates hic non!</p>
  </footer>
</body>

</html>