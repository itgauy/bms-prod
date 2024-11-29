<!-- Modal Structure -->
<div id="delete-official" class="bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto custom-scrollbar transition-all duration-300 ease-in-out" role="dialog" tabindex="-1" aria-labelledby="delete-official-label">
  <div id="delete-official-modal-body" class="mt-0 opacity-0 transition-all duration-300 ease-in-out sm:max-w-sm w-full sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex flex-col gap-4 items-center justify-center text-center p-7">
        <h4 id="archive-confirm-label">
          Confirmation
        </h4>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-500 size-24">
          <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
        </svg>
        <p class="text-center">Are you sure you want to delete the official?</p>
      </div>
      <!-- Modal Content -->
      <div class="overflow-y-auto pb-7 flex justify-center gap-7">
        <div class="items-center gap-4 flex">
          <button class="btn btn-ghost" id="delete-official-modal-close">Cancel</button>
          <button class="btn btn-danger">Yes, I'm sure</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Custom made modal trigger, di kinaya ni prelineUI ahahahaha may prob
  // Open modal function
  function openDeleteOfficialModal() {
    const modalOverlay = document.getElementById("delete-official");
    const modalBody = document.getElementById("delete-official-modal-body");

    modalOverlay.classList.remove("hidden");
    modalOverlay.classList.add("flex", "pointer-events-auto");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-100");
      modalBody.classList.add("opacity-100", "mt-7");
      modalBody.classList.remove("mt-0", "opacity-0");
    }, 100);
  }

  // Close modal function
  function closeDeleteOfficialModal() {
    const modalOverlay = document.getElementById("delete-official");
    const modalBody = document.getElementById("delete-official-modal-body");

    modalBody.classList.add("opacity-0", "mt-0");
    modalBody.classList.remove("mt-7", "opacity-100");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-0", "hidden");
      modalOverlay.classList.remove("flex", "opacity-100", "pointer-events-auto");
    }, 300); // Similar to duration-300 class
  }

  document.getElementById("delete-official-modal-close").addEventListener("click", closeDeleteOfficialModal);
</script>