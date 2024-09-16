<div id="signup-modal"
  class="hs-overlay hs-overlay-backdrop-open:bg-neutral-600/50 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
  role="dialog" tabindex="-1" aria-labelledby="signup-modal-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b">
        <h3 id="signup-modal-label">
          Are you registrating as?
        </h3>
        <button type="button" class="btn btn-secondary px-2.5" aria-label="Close" data-hs-overlay="#signup-modal">
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
      <div class="overflow-y-aut p-7 flex gap-7">
        <a href="{{ route('register') }}"
          class="btn btn-secondary w-full p-14 flex flex-col justify-center items-center">
          Illustration diney
          <p class="text-center">Home Owner</p>
        </a>
        <a href="{{ route('login') }}" type="button"
          class="btn btn-secondary w-full p-14 flex flex-col justify-center items-center">
          Illustration diney
          <p class="text-center">Renter</p>
        </a>
      </div>
    </div>
  </div>
</div>
