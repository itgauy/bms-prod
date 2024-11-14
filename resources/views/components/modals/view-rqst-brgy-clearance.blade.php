<!-- Modal Structure -->
<div id="view-rqst-brgy-clearance" class="bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto custom-scrollbar transition-all duration-300 ease-in-out" role="dialog" tabindex="-1" aria-labelledby="view-rqst-brgy-clearance-label">
  <div id="view-rqst-brgy-clerance-modal" class="mt-0 opacity-0 transition-all duration-300 ease-in-out sm:max-w-2xl w-full sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="view-rqst-brgy-clearance-label" class="text-lg font-semibold">Barangay Clerance Request</h3>
        <button id="view-rqst-brgy-clearance-modal-close" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
      <!-- Modal Content -->
      <div class="p-7">
        <!-- Modal Content -->
        <div class="space-y-4">
          <div class="grid md:grid-cols-3 grid-cols-2 gap-y-4">
            <h5 class="col-span-full font-medium leading-none pb-2">Clerance Category: <span class="text-blue-600">Business Permit</span></h5>
            <div>
              <p class="text-gray-500/80 text-sm">Permit Categories</p>
              <p>Group A (₱1,000)</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Applicant name</p>
              <p>Juan Dela Cruz</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Position/Designation</p>
              <p>Business Owner</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Kind of business</p>
              <p>Laundry Shop</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Business name</p>
              <p>Ana's Laundry Shop</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Business address</p>
              <p>Pedro 117 Block 23</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Date of Claim</p>
              <p>11/14/24</p>
            </div>
          </div>
          <!-- Contact Information -->
          <div class="grid md:grid-cols-3 grid-cols-2 gap-y-4">
            <h5 class="border-t col-span-full pt-2 mt-4 font-medium">Contact Information</h5>
            <div>
              <p class="text-gray-500/80 text-sm">Contact Person</p>
              <p>Maya Dela Cruz</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Position/Designation</p>
              <p>Business Co-Founder</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Contact number</p>
              <p>09123456789</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Custom made modal trigger, di kinaya ni prelineUI ahahahaha may prob
  // Open modal function
  function openRqstBrgyClearanceModal() {
    const modalOverlay = document.getElementById("view-rqst-brgy-clearance");
    const modalBody = document.getElementById("view-rqst-brgy-clerance-modal");

    modalOverlay.classList.remove("hidden");
    modalOverlay.classList.add("flex", "pointer-events-auto");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-100");
      modalBody.classList.add("opacity-100", "mt-7");
      modalBody.classList.remove("mt-0", "opacity-0");
    }, 100);
  }

  // Close modal function
  function closeRqstBrgyClearanceModal() {
    const modalOverlay = document.getElementById("view-rqst-brgy-clearance");
    const modalBody = document.getElementById("view-rqst-brgy-clerance-modal");

    modalBody.classList.add("opacity-0", "mt-0");
    modalBody.classList.remove("mt-7", "opacity-100");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-0", "hidden");
      modalOverlay.classList.remove("flex", "opacity-100", "pointer-events-auto");
    }, 300); // Similar to duration-300 class
  }

  document.getElementById("view-rqst-brgy-clearance-modal-close").addEventListener("click", closeRqstBrgyClearanceModal);
</script>