<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @vite(['resources/js/navLink.js'])
</head>

<!-- UNCOMMENT and COMMENT to see the magic: May mga indicator akong nilagay LOGGED IN and OUT -->

<body class="bg-neutral-50">
  <!-- Layout Header -->
  <header class="fixed top-0 w-full bg-white shadow-lg shadow-neutral-300/10 z-40">
    <nav class="md:p-6 px-4 md:py-6 py-4 flex items-center justify-between w-full md:px-16">
      <div class="flex items-center gap-5">
        <!-- FOR LOGGED IN USERS: Sidebar Toggle Button  -->
        <!-- <button type="button" class="flex shrink-0 btn btn-secondary px-2 py-2" aria-haspopup="dialog" aria-expanded="false" aria-controls="main-sidebar" data-hs-overlay="#main-sidebar">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
          </svg>
        </button> -->
        <!-- Logo/Home -->
        <a href="{{ route('home') }}" class="flex items-center gap-4">
          <span class="block rounded-full size-7 bg-neutral-300 ring-2 ring-neutral-400"></span>
          <h5>BNN??</h5>
        </a>
      </div>

      <!-- FOR LOGGED OUT USERS: Sidebar Toggle Button for Mobile -->
      <button type="button" class="lg:hidden flex shrink-0 btn btn-secondary px-2 py-2" aria-haspopup="dialog" aria-expanded="false" aria-controls="main-sidebar" data-hs-overlay="#main-sidebar">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
        </svg>
      </button>

      <!-- FOR LOGGED IN USERS: User Dropdown Button -->
      <!-- <div class="hs-dropdown relative inline-flex">
        <button id="user-dropdown" class="btn btn-secondary flex items-center" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
          Juan Dela Cruz
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="shrink-0 size-4">
            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
          </svg>
        </button>
        <x-modals.user-dropdown />
      </div> -->

      <!-- FOR LOGGED OUT USERS: Navigation Links -->
      <ul class="items-center gap-10 lg:flex hidden">
        <li>
          <a href="{{ route('home') }}#announcements" class="default-nav-link">
            Announcements
          </a>
        </li>
        <li>
          <a href="{{ route('home') }}#services" class="default-nav-link">
            Services
          </a>
        </li>
        <li>
          <a href="{{ route('home') }}#officials" class="default-nav-link">
            Officials
          </a>
        </li>
        <li>
          <a href="{{ route('home') }}#about-us" class="default-nav-link">
            About Us
          </a>
        </li>
        <li>
          <a href="{{ route('home') }}#contact-us" class="default-nav-link">
            Contact Us
          </a>
        </li>
      </ul>

      <!-- FOR LOGGED OUT USERS: Login and Register Buttons -->
      <div class="items-center gap-4 lg:flex hidden">
        <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
        <button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="signup-modal"
          data-hs-overlay="#signup-modal">Register
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </nav>
  </header>

  <!-- Main Sidebar -->
  <div id="main-sidebar" class="hs-overlay hs-overlay-open:translate-x-0 hs-overlay-backdrop-open:bg-neutral-600/50 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-64 w-full p-5 space-y-7 z-50 bg-white border-e" role="dialog" tabindex="-1" aria-labelledby="main-sidebar-label">
    <!-- FOR LOGGED IN USERS: Sidebar Content -->
    <!-- x-resident.logged-in-sidebar /> -->
    <!-- FOR LOGGED OUT USERS: Sidebar Content -->
    <x-resident.logged-out-sidebar />
  </div>

  <!-- Signup Modal -->
  <x-modals.signup-modal />

  <!-- Main Content -->
  <main class="border md:pt-36 py-24 mx-auto max-w-s-lg">
    {{ $slot }}
  </main>

  <!-- Footer -->
  <footer class="border p-6 md:px-16">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis accusantium soluta commodi ab, praesentium harum ad id rem delectus minus rerum architecto obcaecati minima laboriosam sint ullam voluptates hic non!</p>
  </footer>

</body>

</html>