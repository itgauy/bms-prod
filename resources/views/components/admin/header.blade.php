<div>
  <!-- Sidebar Toggle Button for Mobile -->
  <button type="button" class="lg:hidden flex shrink-0 btn btn-secondary px-2 py-2" aria-haspopup="dialog" aria-expanded="false" aria-controls="admin-sidebar" data-hs-overlay="#admin-sidebar">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
    </svg>
  </button>
</div>
<div class="flex items-center gap-3">
  <!-- Profile Dropdown -->
  <div class="hs-dropdown relative inline-flex">
    <button id="hs-dropdown-with-title" type="button" class="inline-flex items-center justify-center size-8 text-[10px] font-semibold rounded-full leading-none border border-gray-300 bg-blue-500 text-white focus:ring-2 focus:ring-blue-300 transition duration-300 ease-in-out" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
      AD
    </button>
    <div
      class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-xl shadow-blue-500/5 border border-blue-600/10 rounded-xl p-2 space-y-0.5 mt-2"
      role="menu" aria-orientation="vertical" aria-labelledby="user-dropdown">
      <div class="py-5 flex flex-col justify-center items-center gap-3">
        <span
          class="inline-flex items-center justify-center size-12 text-sm font-semibold rounded-full leading-none border bg-blue-500 ring-2 ring-blue-300 text-white">
          AD
        </span>
        <div class="text-center">
          <h4 class="text-md">Admin</h4>
          <p class="text-xs">admin@email.com</p>
        </div>
      </div>
      <div class="mt-2 py-2 first:pt-0 last:pb-0">
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 btn-ghost hover:text-blue-600 focus:outline-none transition duration-300"
          href="#">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
            class="shrink-0 size-4">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
          </svg>
          View Profile
        </a>
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 btn-ghost hover:text-blue-600 focus:outline-none transition duration-300"
          href="#">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
            class="shrink-0 size-4">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
          </svg>
          Notifications
        </a>
        <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="logout-modal"
          data-hs-overlay="#logout-modal"
          class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 btn-ghost hover:text-blue-600 focus:outline-none transition duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
            class="shrink-0 size-4">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
          </svg>
          Logout
        </button>
      </div>
    </div>

  </div>
  <!-- End of Profile Dropdown -->
</div>