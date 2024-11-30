<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ env('APP_NAME') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @vite(['resources/js/navLink.js'])
</head>

<!-- UNCOMMENT and COMMENT to see the magic: May mga indicator akong nilagay LOGGED IN and OUT -->

<body>
  <!-- Layout Header -->
  <header class="fixed top-0 w-full bg-white shadow-lg shadow-blue-100/10 z-40">
    <nav class="md:p-6 px-4 md:py-6 py-4 flex items-center justify-between w-full md:px-16">
      <div class="flex items-center gap-5">
        @auth
          <button type="button" class="flex shrink-0 btn btn-secondary px-2 py-2" aria-haspopup="dialog"
            aria-expanded="false" aria-controls="main-sidebar" data-hs-overlay="#main-sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="shrink-0 size-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
            </svg>
          </button>
        @endauth
        <!-- Logo/Home -->
        <a href="{{ route('home') }}" class="flex items-center gap-4">
          <div class="relative size-8">
            <img src="{{ asset('images/bnn-logo.png') }}"
              class="object-cover w-full h-full rounded-full ring-[1.5px] ring-blue-400"
              alt="Barangay Nagkaisang Nayon Logo">
          </div>
          <h5>BNNMS</h5>
        </a>
      </div>

      @auth
        {{-- User Dropdown Button --}}
        <div class="hs-dropdown relative inline-flex">
          <button id="user-dropdown" class="btn btn-secondary flex items-center hs-dropdown-toggle" aria-haspopup="menu"
            aria-expanded="false" aria-label="Dropdown">
            {{ auth()->user()->username }}
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="shrink-0 size-4 hs-dropdown-open:rotate-180 transition duration-300 ease-in-out">
              <path fill-rule="evenodd"
                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                clip-rule="evenodd" />
            </svg>
          </button>
          <x-modals.user-dropdown />
        </div>

      @endauth

      @guest
        <button type="button" class="lg:hidden flex shrink-0 btn btn-secondary px-2 py-2" aria-haspopup="dialog"
          aria-expanded="false" aria-controls="main-sidebar" data-hs-overlay="#main-sidebar">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
          </svg>
        </button>

        <ul class="items-center gap-2 lg:flex hidden">
          <li>
            <a href="{{ route('home') }}#about-us"
              class="default-nav-link btn btn-ghost text-gray-700 text-base hover:text-blue-600">
              About Us
            </a>
          </li>
          <li>
            <a href="{{ route('home') }}#services"
              class="default-nav-link btn btn-ghost text-gray-700 text-base hover:text-blue-600">
              Services
            </a>
          </li>
          <li>
            <a href="{{ route('home') }}#announcements"
              class="default-nav-link btn btn-ghost text-gray-700 text-base hover:text-blue-600">
              Announcements
            </a>
          </li>
          <li>
            <a href="{{ route('home') }}#officials"
              class="default-nav-link btn btn-ghost text-gray-700 text-base hover:text-blue-600">
              Officials
            </a>
          </li>
          <li>
            <a href="{{ route('home') }}#contact-us"
              class="default-nav-link btn btn-ghost text-gray-700 text-base hover:text-blue-600">
              Contact Us
            </a>
          </li>
        </ul>

        <div class="items-center gap-4 lg:flex hidden">
          <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
          <a href="{{ route('register') }}" class="btn btn-primary">Register
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
              <path fill-rule="evenodd"
                d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </div>


      @endguest
    </nav>
  </header>

  @auth
    {{-- Main Sidebar --}}
    <div id="main-sidebar"
      class="hs-overlay hs-overlay-open:translate-x-0 hs-overlay-backdrop-open:bg-blue-950/30 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-64 w-full p-5 space-y-7 z-50 bg-white border-e"
      role="dialog" tabindex="-1" aria-labelledby="main-sidebar-label">
      {{-- Sidebar Content --}}
      <x-resident.logged-in-sidebar />
    </div>
  @endauth

  @guest
    {{-- Main Sidebar --}}
    <div id="main-sidebar"
      class="hs-overlay hs-overlay-open:translate-x-0 hs-overlay-backdrop-open:bg-blue-950/30 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-64 w-full p-5 space-y-7 z-50 bg-white border-e"
      role="dialog" tabindex="-1" aria-labelledby="main-sidebar-label">
      {{-- Sidebar Content --}}
      <x-resident.logged-out-sidebar />
    </div>
  @endguest

  @guest
    <x-modals.register-confirmation />
  @endguest

  @auth
    {{-- FOR LOGGED IN USERS: Logout Modal --}}
    <x-modals.logout-modal />

    {{-- A Service Modal / Barangay Clearance --}}
    <x-modals.A-modal />
    <x-modals.A-modal-1 /> {{-- Business Information Sheet Modal --}}

    {{-- B Service Modal / Barangay Certificate --}}
    <x-modals.B-modal />
    <x-modals.B-modal-1 /> {{-- Certificate-Residency Modal --}}
    <x-modals.B-modal-2 /> {{-- Certificate-Loans Modal --}}

    {{-- C Service Modal / Certificate of Indigency --}}
    <x-modals.C-modal />
    <x-modals.C-modal-1 /> {{-- Medical Financial Assistance Modal --}}
    <x-modals.C-modal-2 /> {{-- Good Moral Modal --}}

    {{-- D Service Modal / Barangay Identification --}}
    <x-modals.D-modal />
    <x-modals.D-modal-1 />
    <x-modals.D-modal-2 /> {{-- Request for new ID Modal --}}

    <x-modals.registration-success />

    {{-- View Requests Modals --}}
    <x-modals.view-rqst-brgy-clearance /> {{-- Barangay Clerance --}}
    <x-modals.view-rqst-brgy-certificate /> {{-- Barangay Certificate --}}
    <x-modals.view-rqst-certificate-of-indigency /> {{-- Certificate Of Indigency --}}
    <x-modals.view-rqst-brgy-identification /> {{-- Barangay Identification --}}

  @endauth

  <!-- Main Content -->
  <main class="mx-auto max-w-s-lg">
    {{ $slot }}
  </main>

  <!-- Footer -->
  <footer
    class="bg-blue-50/50 p-6 md:px-36 md:py-16 gap-6 flex lg:flex-row flex-col lg:justify-between justify-start lg:items-end items-start">
    <!-- Logo, Title and description -->
    <div class="space-y-4">
      <a href="{{ route('home') }}" class="inline-flex flex-col gap-3">
        <div class="relative size-20">
          <img src="{{ asset('images/bnn-logo.png') }}"
            class="object-cover w-full h-full rounded-full ring-2 ring-blue-400" alt="Barangay Nagkaisang Nayon Logo">
        </div>
        <h3>Barangay Nagkaisang Nayon</h3>
      </a>
      <p class="w-full max-w-lg text-sm">Nestled in District V, Area IX of Quezon City, lies Barangay Nagkaisang Nayon,
        a vibrant community. The name itself, "Nagkaisang Nayon," translates to "United Villages," hinting at the strong
        sense of community spirit that thrives here.</p>
      <div class="space-y-1">
        <!-- Location -->
        <span class="flex text-sm items-start gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="size-4 text-blue-600">
            <path fill-rule="evenodd"
              d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
              clip-rule="evenodd" />
          </svg>
          673 Quirino Highway, San Bartolome, Novaliches, Quezon City
        </span>
        <!-- Phone.Contact Number -->
        <span class="flex text-sm items-start gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="size-4 text-blue-600">
            <path fill-rule="evenodd"
              d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
              clip-rule="evenodd" />
          </svg>
          (02) 8806-3049
        </span>
      </div>
    </div>
    <!-- Links if any -->
    <div class="flex gap-3">
      <a href="#" class="link text-xs">Terms and condition</a>
      <a href="#" class="link text-xs">Privacy Policy</a>
    </div>
  </footer>

</body>

</html>
