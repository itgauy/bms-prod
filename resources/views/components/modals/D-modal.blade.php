<div id="D-modal"
  class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none"
  role="dialog" tabindex="-1" aria-labelledby="D-modal-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-300 mt-0 opacity-0 ease-out transition-all sm:max-w-xl sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="D-modal-label">
          Barangay ID Categories
        </h3>
        <button type="button" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close" data-hs-overlay="#D-modal">
          <span class="sr-only">Close</span>
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
      <!-- Modal Content -->
      <div class="p-7 grid md:grid-cols-2 grid-cols-1 gap-7">
        <button aria-haspopup="dialog" aria-expanded="false" aria-controls="D-modal-1" data-hs-overlay="#D-modal-1" data-hs-overlay-options='{
          "isClosePrev": false
        }'
          class="btn border-b-4 border-b-transparent hover:bg-blue-100/10 hover:border-b-4 hover:border-b-blue-500 border border-blue-600/5 bg-white shadow-lg shadow-blue-500/5 w-full p-10 flex flex-col justify-center items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
            <path d="M16 10h2" />
            <path d="M16 14h2" />
            <path d="M6.17 15a3 3 0 0 1 5.66 0" />
            <circle cx="9" cy="11" r="2" />
            <rect x="2" y="5" width="20" height="14" rx="2" />
          </svg>
          <p class="text-center text-blue-500 font-medium md:text-2xl text-xl">Renewal of Old ID</p>
        </button>
        <button aria-haspopup="dialog" aria-expanded="false" aria-controls="D-modal-1" data-hs-overlay="#D-modal-2" data-hs-overlay-options='{
          "isClosePrev": false
        }'
          class="btn border-b-4 border-b-transparent hover:bg-blue-100/10 hover:border-b-4 hover:border-b-blue-500 border border-blue-600/5 bg-white shadow-lg shadow-blue-500/5 w-full p-10 flex flex-col justify-center items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
            <path d="M16 10h2" />
            <path d="M16 14h2" />
            <path d="M6.17 15a3 3 0 0 1 5.66 0" />
            <circle cx="9" cy="11" r="2" />
            <rect x="2" y="5" width="20" height="14" rx="2" />
          </svg>
          <p class="text-center text-blue-500 font-medium md:text-2xl text-xl">Request for New ID</p>
        </button>
      </div>
    </div>
  </div>
</div>