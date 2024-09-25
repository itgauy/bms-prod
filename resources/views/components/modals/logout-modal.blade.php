<div id="logout-modal"
  class="hs-overlay hs-overlay-backdrop-open:bg-neutral-600/50 hidden size-full fixed top-0 start-0 z-50 overflow-x-hidden overflow-y-auto pointer-events-none"
  role="dialog" tabindex="-1" aria-labelledby="logout-modal-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-300 mt-0 opacity-0 ease-out transition-all sm:max-w-sm sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex items-center py-5 px-7 border-b">
        <h4 id="logout-modal-label">
          Are you sure you want to logout?
        </h4>
      </div>
      <!-- Modal Content -->
      <div class="overflow-y-auto p-7 flex justify-end gap-7">
        <div class="items-center gap-4 lg:flex hidden">
          <button class="btn btn-secondary aria-haspopup=" dialog" aria-expanded="false" aria-controls="logout-modal"
            data-hs-overlay="#logout-modal">Cancel</button>
          <!-- TO BE CHANGED by our Head Master Lead Backend Developer with Cybersecurity Defense -->
          <button type="button" class="btn btn-danger">Logout</button>
        </div>
      </div>
    </div>
  </div>
</div>