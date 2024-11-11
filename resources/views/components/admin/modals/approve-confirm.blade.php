<div id="approve-confirm"
  class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[90] overflow-x-hidden overflow-y-auto pointer-events-none"
  role="dialog" tabindex="-1" aria-labelledby="approve-confirm-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-300 mt-0 opacity-0 ease-out transition-all sm:max-w-sm sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex flex-col gap-4 items-center justify-center text-center p-7">
        <h4 id="approve-confirm-label">
          Confirmation
        </h4>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-500 size-24">
          <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
        </svg>
        <p class="text-center">Are you sure you want to approve the application?</p>
      </div>
      <!-- Modal Content -->
      <div class="overflow-y-auto pb-7 flex justify-center gap-7">
        <div class="items-center gap-4 flex">
          <button class="btn btn-ghost" aria-haspopup="dialog" aria-expanded="false" aria-controls="approve-confirm"
            data-hs-overlay="#approve-confirm">Cancel</button>
          <button class="btn btn-success">Yes, I'm sure</button>
        </div>
      </div>
    </div>
  </div>
</div>