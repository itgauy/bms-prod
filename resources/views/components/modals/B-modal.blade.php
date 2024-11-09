<div id="B-modal"
  class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none"
  role="dialog" tabindex="-1" aria-labelledby="B-modal-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-300 mt-0 opacity-0 ease-out transition-all sm:max-w-xl sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="B-modal-label">
          Certificate Categories
        </h3>
        <button type="button" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close" data-hs-overlay="#B-modal">
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
      <div class="p-7 flex flex-wrap jsutify-center items-center gap-7">
        <button aria-haspopup="dialog" aria-expanded="false" aria-controls="B-modal-1" data-hs-overlay="#B-modal-1" data-hs-overlay-options='{
          "isClosePrev": false
        }'
          class="btn btn-ghost border border-blue-200/50 bg-blue-100/10 w-full p-14 flex-1 flex-col justify-center items-center">
          Illustration diney
          <p class="text-center text-blue-500 font-medium md:text-2xl text-xl">Residency</p>
        </button>
        <button aria-haspopup="dialog" aria-expanded="false" aria-controls="B-modal-1" data-hs-overlay="#B-modal-2" data-hs-overlay-options='{
          "isClosePrev": false
        }'
          class="btn btn-ghost border border-blue-200/50 bg-blue-100/10 w-full p-14 flex-1 flex-col justify-center items-center">
          Illustration diney
          <p class="text-center text-blue-500 font-medium md:text-2xl text-xl">Loans</p>
        </button>
      </div>
    </div>
  </div>
</div>