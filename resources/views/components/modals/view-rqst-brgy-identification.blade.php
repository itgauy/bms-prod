<!-- Modal Structure -->
<div id="view-rqst-brgy-identification" class="bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto custom-scrollbar transition-all duration-300 ease-in-out" role="dialog" tabindex="-1" aria-labelledby="view-rqst-brgy-identification-label">
  <div id="view-rqst-brgy-identification-modal" class="mt-0 opacity-0 transition-all duration-300 ease-in-out sm:max-w-2xl w-full sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="view-rqst-brgy-identification-label" class="text-lg font-semibold">Barangay Identification Request</h3>
        <button id="view-rqst-brgy-identification-modal-close" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
      <!-- Modal Content -->
      <div class="p-7">
        <div class="space-y-4">
          <div class="grid md:grid-cols-3 grid-cols-2 gap-y-4">
            <h5 class="col-span-full font-medium leading-none pb-2">Barangay ID Category: <span id="id-category" class=" text-blue-600">Request for New ID</span></h5>
            <div>
              <p class="text-gray-500/80 text-sm">Full name</p>
              <p>Juan Mendoza Dela Cruz</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Birthdate</p>
              <p>02/02/2003</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Contact number</p>
              <p>09123456789</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Address</p>
              <p>Pedro 117 Block 23</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Date of Claim</p>
              <p>11/14/24</p>
            </div>
            <div id="container">
              <!-- Old or New ID content will be inserted here -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const certificateCategory = document.getElementById("id-category").textContent.trim();
    const typeContainer = document.getElementById("container");

    // Define the content for Residency and Loans
    const oldIDContent = `
      <div class="space-y-1">
        <p class="text-gray-500/80 text-sm">Expired ID</p>
        <div class="relative w-full h-auto">
          <img src="https://placehold.co/50x30" alt="Expired ID" class="object-cover w-full rounded-md">
        </div>
      </div>
    `;

    // Example lang toooo
    const newIDContent = `
      <div>
        <p class="text-gray-500/80 text-sm">Precint number</p>
        <p>0090A</p>
      </div>
    `;

    if (certificateCategory === "Renewal of Old ID") {
      typeContainer.innerHTML = oldIDContent;
    } else if (certificateCategory === "Request for New ID") {
      typeContainer.innerHTML = newIDContent;
    }
  });
  // Custom made modal trigger, di kinaya ni prelineUI ahahahaha may prob
  // Open modal function
  function openRqstBrgyIdentificationModal() {
    const modalOverlay = document.getElementById("view-rqst-brgy-identification");
    const modalBody = document.getElementById("view-rqst-brgy-identification-modal");

    modalOverlay.classList.remove("hidden");
    modalOverlay.classList.add("flex", "pointer-events-auto");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-100");
      modalBody.classList.add("opacity-100", "mt-7");
      modalBody.classList.remove("mt-0", "opacity-0");
    }, 100);
  }

  // Close modal function
  function closeRqstBrgyIdentificationModal() {
    const modalOverlay = document.getElementById("view-rqst-brgy-identification");
    const modalBody = document.getElementById("view-rqst-brgy-identification-modal");

    modalBody.classList.add("opacity-0", "mt-0");
    modalBody.classList.remove("mt-7", "opacity-100");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-0", "hidden");
      modalOverlay.classList.remove("flex", "opacity-100", "pointer-events-auto");
    }, 300); // Similar to duration-300 class
  }

  document.getElementById("view-rqst-brgy-identification-modal-close").addEventListener("click", closeRqstBrgyIdentificationModal);
</script>