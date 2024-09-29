<div class="flex flex-col justify-between h-full">
  <div class="space-y-12">
    <!-- Logo/Home -->
    <div class="flex flex-col items-center gap-4 border">
      <span class="block rounded-full size-20 bg-neutral-300 ring-2 ring-neutral-400"></span>
    </div>

    <!-- Links -->
    <nav class="flex flex-col items-start gap-1" aria-label="Tabs" role="tablist">
      <button type="button" class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-stone-700 hover:bg-slate-100 focus:outline-none transition duration-300 hs-tab-active:bg-blue-100/50 hs-tab-active:text-blue-600 active" id="dashboard-item" data-tab-id="dashboard" aria-selected="true" data-hs-tab="#dashboard" aria-controls="dashboard" role="tab">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
        </svg>

        Dashboard
      </button>
      <button type="button" class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-stone-700 hover:bg-slate-100 focus:outline-none transition duration-300 hs-tab-active:bg-blue-100/50 hs-tab-active:text-blue-600" id="user-applications-item" data-tab-id="user-applications" aria-selected="false" data-hs-tab="#user-applications" aria-controls="user-applications" role="tab">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
        </svg>
        User Applications
      </button>
      <button type="button" class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-stone-700 hover:bg-slate-100 focus:outline-none transition duration-300 hs-tab-active:bg-blue-100/50 hs-tab-active:text-blue-600" id="staff-officials-item" data-tab-id="staff-officials" aria-selected="false" data-hs-tab="#staff-officials" aria-controls="staff-officials" role="tab">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
        </svg>
        Staff and Officials
      </button>
      </a>
    </nav>
  </div>

  <!-- Logout and User Info -->
  <div class="flex flex-col items-center gap-2.5">
    <div class="flex items-start gap-3 w-full border rounded-md p-2">
      <span class="inline-flex items-center justify-center size-9 text-xs font-semibold rounded-full leading-none border border-stone-300 bg-stone-600 text-white flex-shrink-0">
        JC
      </span>
      <div>
        <h4 class="text-stone-700 text-sm">Juan Dela Cruz</h4>
        <p class="text-stone-600 text-xs">juan.delacruz@email.com</p>
      </div>
    </div>
  </div>
</div>