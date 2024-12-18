<!-- Modal Structure -->
<div id="view-rqst-brgy-certificate" class="bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto custom-scrollbar transition-all duration-300 ease-in-out" role="dialog" tabindex="-1" aria-labelledby="view-rqst-brgy-certificate-label">
  <div id="view-rqst-brgy-certificate-modal" class="mt-0 opacity-0 transition-all duration-300 ease-in-out sm:max-w-2xl w-full sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="view-rqst-brgy-certificate-label" class="text-lg font-semibold">Barangay Certificate Request</h3>
        <button id="view-rqst-brgy-certificate-modal-close" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close">
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
            <h5 class="col-span-full font-medium leading-none pb-2">Certificate Category: <span id="certificate-category" class=" text-blue-600">Loans</span></h5>
            <div id="type-container">
              <!-- Cert or loans content will be inserted here -->
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Cost</p>
              <p>₱50.00</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Applicant name</p>
              <p>Juan Dela Cruz</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Address</p>
              <p>Pedro 117 Block 23</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Date of Claim</p>
              <p>11/14/24</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Specific Request</p>
              <p>Multi-pages Print</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const certificateCategory = document.getElementById("certificate-category").textContent.trim();
    const typeContainer = document.getElementById("type-container");

    // Define the content for Residency and Loans
    const residencyContent = `
      <div>
        <p class="text-gray-500/80 text-sm">Type of certificate</p>
        <p>Residency</p>
      </div>
    `;

    // Example lang toooo
    const loansContent = `
      <div>
        <p class="text-gray-500/80 text-sm">Type of loans</p>
        <p>Housing Loans</p>
      </div>
    `;

    if (certificateCategory === "Residency") {
      typeContainer.innerHTML = residencyContent;
    } else if (certificateCategory === "Loans") {
      typeContainer.innerHTML = loansContent;
    }
  });

  // Custom made modal trigger, di kinaya ni prelineUI ahahahaha may prob
  // Open modal function
  function openRqstBrgyCertificateModal() {
    const modalOverlay = document.getElementById("view-rqst-brgy-certificate");
    const modalBody = document.getElementById("view-rqst-brgy-certificate-modal");

    modalOverlay.classList.remove("hidden");
    modalOverlay.classList.add("flex", "pointer-events-auto");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-100");
      modalBody.classList.add("opacity-100", "mt-7");
      modalBody.classList.remove("mt-0", "opacity-0");
    }, 100);
  }

  // Close modal function
  function closeRqstBrgyCertificateModal() {
    const modalOverlay = document.getElementById("view-rqst-brgy-certificate");
    const modalBody = document.getElementById("view-rqst-brgy-certificate-modal");

    modalBody.classList.add("opacity-0", "mt-0");
    modalBody.classList.remove("mt-7", "opacity-100");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-0", "hidden");
      modalOverlay.classList.remove("flex", "opacity-100", "pointer-events-auto");
    }, 300); // Similar to duration-300 class
  }

  document.getElementById("view-rqst-brgy-certificate-modal-close").addEventListener("click", closeRqstBrgyCertificateModal);
</script>