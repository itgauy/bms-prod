<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  @vite('resources/js/sidebarNav.js')
</head>

<body class="bg-blue-50/30">
  <!-- Desktop Sidebar -->
  <aside class="lg:block hidden w-64 fixed h-screen p-5 space-y-7 overflow-y-auto invisible-scrollbar">
    <x-admin.sidebar />
  </aside>
  <!-- // Desktop Sidebar -->
  <!-- Mobile Sidebar -->
  <aside id="admin-sidebar" class="hs-overlay hs-overlay-open:translate-x-0 hs-overlay-backdrop-open:bg-neutral-600/50 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-64 w-full p-5 space-y-7 z-[80] bg-white border-e" role="dialog" tabindex="-1" aria-labelledby="admin-sidebar">
    <x-admin.sidebar />
  </aside>
  <!-- // Mobile Sidebar -->
  <!-- Main Layout -->
  <div class="lg:py-4 b-4 lg:pr-4 lg:p-0 p-4 lg:ml-64 h-screen">
    <div class="relative bg-white border border-slate-200 md:rounded-2xl rounded-xl h-full custom-scrollbar overflow-auto">
      <!-- Content Header -->
      <header class="backdrop-blur-md bg-white/70 sticky top-0 md:py-4 py-3 md:px-5 px-3  flex justify-between items-center border-slate-200 border-b w-full z-20">
        <x-admin.header />
      </header>
      <!-- // Content Header -->
      <!-- Tab Content -->
      <div class="md:p-8 p-4 z-10">
        <div id="dashboard" role="tabpanel" aria-labelledby="dashboard-item">
          @include('admin.dashboard')
        </div>
        <div id="user-applications" class="hidden" role="tabpanel" aria-labelledby="user-applications-item">
          @include('admin.user-applications')
        </div>
        <div id="staff-officials" class="hidden" role="tabpanel" aria-labelledby="staff-officials-item">
          @include('admin.staff-officials')
        </div>
      </div>
      <!-- // Tab Content -->
    </div>
  </div>
  <!-- // Main Layout -->
</body>

</html>