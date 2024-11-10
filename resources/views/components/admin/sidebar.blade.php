<div class="flex flex-col justify-between h-full">
  <div class="space-y-10">
    <!-- Logo/Home -->
    <div class="flex flex-col items-center gap-4 pt-4">
      <span class="block rounded-full size-20 bg-blue-300 ring-2 ring-blue-400"></span>
    </div>

    <!-- Links -->
    <nav class="flex flex-col items-start gap-1" aria-label="Tabs" role="tablist">
      <button type="button" class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-stone-700 hover:bg-blue-50/90 focus:outline-none transition duration-300 hs-tab-active:bg-blue-100/50 hs-tab-active:text-blue-600" id="dashboard-item" data-tab-id="dashboard" aria-selected="true" data-hs-tab="#dashboard" aria-controls="dashboard" role="tab">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
        </svg>
        Dashboard
      </button>
      <button type="button" class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-stone-700 hover:bg-blue-50/90 focus:outline-none transition duration-300 hs-tab-active:bg-blue-100/50 hs-tab-active:text-blue-600" id="resident-application-item" data-tab-id="resident-application" aria-selected="false" data-hs-tab="#resident-application" aria-controls="resident-application" role="tab">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
        </svg>
        Resident Application
      </button>
      <button type="button" class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-stone-700 hover:bg-blue-50/90 focus:outline-none transition duration-300 hs-tab-active:bg-blue-100/50 hs-tab-active:text-blue-600" id="staff-management-item" data-tab-id="staff-management" aria-selected="false" data-hs-tab="#staff-management" aria-controls="staff-management" role="tab">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
        </svg>
        Staff Management
      </button>
      <button type="button" class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-stone-700 hover:bg-blue-50/90 focus:outline-none transition duration-300 hs-tab-active:bg-blue-100/50 hs-tab-active:text-blue-600" id="announcement-item" data-tab-id="announcement" aria-selected="false" data-hs-tab="#announcement" aria-controls="announcement" role="tab">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
        </svg>
        Announcement
      </button>
      <button type="button" class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-stone-700 hover:bg-blue-50/90 focus:outline-none transition duration-300 hs-tab-active:bg-blue-100/50 hs-tab-active:text-blue-600" id="activity-log-item" data-tab-id="activity-log" aria-selected="false" data-hs-tab="#activity-log" aria-controls="activity-log" role="tab">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="shrink-0 size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
        </svg>
        Activity Log
      </button>
    </nav>
  </div>

  <!-- Logout and User Info -->
  <div class="flex flex-col items-center gap-2.5">
    <div class="flex items-start gap-3 w-full border border-blue-200/70 bg-blue-300/10 rounded-md p-2">
      <span class="inline-flex items-center justify-center size-9 text-xs font-semibold rounded-full leading-none border border-blue-300 bg-blue-500 text-white flex-shrink-0">
        AD
      </span>
      <div>
        <h4 class="text-stone-700 text-sm">Admin</h4>
        <p class="text-stone-600 text-xs">admin@email.com</p>
      </div>
    </div>
  </div>
</div>