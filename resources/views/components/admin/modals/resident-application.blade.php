<!-- Modal Structure -->
<div id="view-resident-application" class="bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto custom-scrollbar transition-all duration-300 ease-in-out" role="dialog" tabindex="-1" aria-labelledby="view-resident-application-label">
  <div id="modal-body" class="mt-0 opacity-0 transition-all duration-300 ease-in-out sm:max-w-3xl w-full sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="view-resident-application-label" class="text-lg font-semibold">Personal Information</h3>
        <button id="close-btn" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close">
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
          <!-- Complete Name -->
          <div class="grid md:grid-cols-4 grid-cols-2 gap-y-4">
            <h5 class="col-span-full font-medium">Complete Name</h5>
            <div>
              <p class="text-gray-500/80 text-sm">First name</p>
              <p>Juan</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Middle name</p>
              <p>Santos</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Last name</p>
              <p>Dela Cruz</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Suffix</p>
              <p>Jr.</p>
            </div>
          </div>
          <!-- Address -->
          <div class="grid md:grid-cols-4 grid-cols-2 gap-y-4">
            <h5 class="border-t col-span-full pt-2 mt-4 font-medium">Address</h5>
            <div>
              <p class="text-gray-500/80 text-sm">Street</p>
              <p>Pedro Street</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Sitio</p>
              <p>Capri</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Village</p>
              <p>Rodriquez Compound</p>
            </div>
          </div>
          <!-- Contact Details -->
          <div class="grid md:grid-cols-4 grid-cols-2 gap-y-4">
            <h5 class="border-t col-span-full pt-2 mt-4 font-medium">Contact Details</h5>
            <div>
              <p class="text-gray-500/80 text-sm">Contact number</p>
              <p>09123456789</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Emergency contact's name</p>
              <p>Antonio Dela Cruz</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Emergency contact's number</p>
              <p>09123456789</p>
            </div>
          </div>
          <!-- Other Relevant Information -->
          <div class="grid md:grid-cols-4 grid-cols-2 gap-y-4">
            <h5 class="border-t col-span-full pt-2 mt-4 font-medium">Other Relevant Information</h5>
            <div>
              <p class="text-gray-500/80 text-sm">Birthdate</p>
              <p>02/02/2003</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Birth place</p>
              <p>Quezon City</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Civil Status</p>
              <p>Single</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Gender</p>
              <p>Male</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Religion</p>
              <p>Catholic</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Ocupation</p>
              <p>Factory Worker</p>
            </div>
          </div>
          <!-- Verification Details -->
          <div class="grid md:grid-cols-4 grid-cols-2 gap-y-4">
            <h5 class="border-t col-span-full pt-2 mt-4 font-medium">Verification Details</h5>
            <div>
              <p class="text-gray-500/80 text-sm">Classification Status</p>
              <p>4ps</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Residency Status</p>
              <p>Homeowner</p>
            </div>
            <div>
              <p class="text-gray-500/80 text-sm">Valid ID</p>
              <p>Barangay ID</p>
            </div>
            <div class="col-span-full grid md:grid-cols-2 grid-cols-1 gap-5">
              <!-- Picture of Barangay ID -->
              <div class="w-full space-y-1.5">
                <p class="text-gray-500/80 text-sm">Picture of Barangay ID</p>
                <div class="h-48 w-full relative">
                  <img src="https://placehold.co/50x50" alt="Sample Image" class="object-cover absolute w-full h-full rounded-md">
                </div>
              </div>
              <!-- Picture of Barangay ID while holding -->
              <div class="w-full space-y-1.5">
                <p class="text-gray-500/80 text-sm">Picture of Barangay ID while holding</p>
                <div class="h-48 w-full relative">
                  <img src="https://placehold.co/50x50" alt="Sample Image" class="object-cover absolute w-full h-full rounded-md">
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-end gap-3 pt-6">
            <button class="btn btn-danger" aria-haspopup="dialog" aria-expanded="false" aria-controls="decline-confirm"
              data-hs-overlay="#decline-confirm">Decline</button>
            <button class="btn btn-success" aria-haspopup="dialog" aria-expanded="false" aria-controls="approve-confirm"
              data-hs-overlay="#approve-confirm">Approve</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Custom made modal trigger, di kinaya ni prelineUI ahahahaha may prob
  // Open modal function
  function openModal() {
    const modalOverlay = document.getElementById("view-resident-application");
    const modalBody = document.getElementById("modal-body");

    modalOverlay.classList.remove("hidden");
    modalOverlay.classList.add("flex", "pointer-events-auto");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-100");
      modalBody.classList.add("opacity-100", "mt-7");
      modalBody.classList.remove("mt-0", "opacity-0");
    }, 100);
  }

  // Close modal function
  function closeModal() {
    const modalOverlay = document.getElementById("view-resident-application");
    const modalBody = document.getElementById("modal-body");

    modalBody.classList.add("opacity-0", "mt-0");
    modalBody.classList.remove("mt-7", "opacity-100");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-0", "hidden");
      modalOverlay.classList.remove("flex", "opacity-100", "pointer-events-auto");
    }, 300); // Similar to duration-300 class
  }

  document.getElementById("close-btn").addEventListener("click", closeModal);
</script>