<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body class="bg-slate-100 text-slate-900">
  <!-- Desktop Sidebar -->
  <aside class="lg:block hidden w-64 fixed h-screen p-5 space-y-7 overflow-y-auto invisible-scrollbar">
    @include('components.admin.sidebar')
  </aside>
  <!-- // Desktop Sidebar -->
  <!-- Mobile Sidebar -->
  <div id="hs-offcanvas-custom-backdrop-color" class="hs-overlay hs-overlay-open:translate-x-0 hs-overlay-backdrop-open:bg-gray-900/80 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-64 w-full p-5 space-y-7 z-[80] bg-gray-50 border-e dark:bg-gray-800 dark:border-gray-700 dark:hs-overlay-backdrop-open:bg-gray-900/80" role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-custom-backdrop-color-label">
    @include('components.admin.sidebar')
  </div>
  <!-- // Mobile Sidebar -->
  <!-- Main Layout -->
  <div class="lg:py-4 b-4 lg:pr-4 lg:p-0 p-4 lg:ml-64 h-screen">
    <div class="relative dark:bg-gray-800 bg-white border dark:border-gray-700/50 border-gray-200 rounded-xl h-full custom-scrollbar overflow-auto">
      <!-- Content Header -->
      <header class="dark:bg-gray-800/70 backdrop-blur-md bg-white/70 sticky top-0 md:py-4 py-3 md:px-8 px-4 flex justify-between items-center dark:border-gray-700/60 border-gray-200 border-b w-full z-20">
        @include('components.admin.header')
      </header>
      <!-- // Content Header -->
      <!-- Tab Content -->
      <div class="md:p-8 p-4 z-10">
        <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
          @include('admin.dashboard')
        </div>
        <div id="tabs-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
          @include('admin.test1')
        </div>
        <div id="tabs-with-underline-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-3">
          @include('admin.test2')
        </div>
      </div>
      <!-- // Tab Content -->
    </div>
  </div>
  <!-- // Main Layout -->
</body>

</html>