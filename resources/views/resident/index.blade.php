<x-layout>
  @auth
  <section class="relative md:pt-36 py-24">
    <img
      src="https://images.unsplash.com/photo-1728582195927-c789cd39abad?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
      alt="" class="absolute inset-0 w-full h-full object-cover z-0">
    <div class="relative flex flex-col gap-7 justify-center items-center pt-10 z-10">
      <div class="space-y-1">
        <h3 class="text-center text-white">Welcome to</h3>
        <h1 class="text-5xl text-center text-white">Barangay Nagkaisang Nayon!</h1>
      </div>
      <p class="w-full max-w-lg text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
        quis recusandae voluptatum enim nam, ad, odio quae magnam excepturi, deleniti conse.</p>
    </div>
  </section>
  <!-- Services -->
  <section class="p-6 md:px-24 lg:px-36 md:py-24 py-16">
    <div class="space-y-1">
      <h1>Welcome back, {{ auth()->user()->username }}!</h1>
      <h5>What do you want to request?</h5>
    </div>
    <div class="grid md:grid-cols-4 grid-cols-2 gap-4 mt-12">
      <!-- A -->
      <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="A-modal"
        data-hs-overlay="#A-modal"
        class="btn btn-ghost border border-blue-200/50 bg-blue-100/10 w-full p-12 flex flex-col justify-center items-center rounded-2xl">
        <h2>A</h2>
        <p class="text-center text-blue-500 font-medium md:text-xl text-lg">Barangay Clearance</p>
      </button>
      <!-- B -->
      <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="B-modal"
        data-hs-overlay="#B-modal"
        class="btn btn-ghost border border-blue-200/50 bg-blue-100/10 w-full p-12 flex flex-col justify-center items-center rounded-2xl">
        <h2>B</h2>
        <p class="text-center text-blue-500 font-medium md:text-xl text-lg">Barangay Certificate</p>
      </button>
      <!-- C -->
      <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="C-modal"
        data-hs-overlay="#C-modal"
        class="btn btn-ghost border border-blue-200/50 bg-blue-100/10 w-full p-12 flex flex-col justify-center items-center rounded-2xl">
        <h2>C</h2>
        <p class="text-center text-blue-500 font-medium md:text-xl text-lg">Certificate of Indigency</p>
      </button>
      <!-- D -->
      <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="D-modal"
        data-hs-overlay="#D-modal"
        class="btn btn-ghost border border-blue-200/50 bg-blue-100/10 w-full p-12 flex flex-col justify-center items-center rounded-2xl">
        <h2>D</h2>
        <p class="text-center text-blue-500 font-medium md:text-xl text-lg">Barangay Identification</p>
      </button>
    </div>
    <!-- Requested Services -->
    <div class="mt-20 space-y-3">
      <h3>Your requested services</h3>
      <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border border-blue-100/70 rounded-lg divide-y divide-blue-100/70">


              <!-- Requested Services Filter -->
              <div class="p-4">
                <label for="requested-all"
                  class="btn has-[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
                  <div class="flex items-center gap-3">
                    <input id="requested-all" type="radio" name="requested-service" value="All"
                      class="radio-input hidden" checked />
                    <span class="font-medium">All</span>
                  </div>
                </label>
                <label for="brgy-clearance"
                  class="btn has-[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
                  <div class="flex items-center gap-3">
                    <input id="brgy-clearance" type="radio" name="requested-service" value="Barangay Clearance"
                      class="radio-input hidden" />
                    <span class="font-medium">Barangay Clearance</span>
                  </div>
                </label>
                <label for="brgy-certificate"
                  class="btn has-[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
                  <div class="flex items-center gap-3">
                    <input id="brgy-certificate" type="radio" name="requested-service" value="Barangay Certificate" class="radio-input hidden" />
                    <span class="font-medium">Barangay Certificate</span>
                  </div>
                </label>
                <label for="certificate-indigency"
                  class="btn has-[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
                  <div class="flex items-center gap-3">
                    <input id="certificate-indigency" type="radio" name="requested-service" value="Certificate of Indigency" class="radio-input hidden" />
                    <span class="font-medium">Certificate Of Indigency</span>
                  </div>
                </label>
                <label for="brgy-id"
                  class="btn has-[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
                  <div class="flex items-center gap-3">
                    <input id="brgy-id" type="radio" name="requested-service" value="Barangay Identification" class="radio-input hidden" />
                    <span class="font-medium">Barangay Identification</span>
                  </div>
                </label>
              </div>

              <!-- Table -->
              <div class="overflow-hidden">
                <table id="resident-table" class="min-w-full divide-y divide-blue-100/70">
                  <thead class="bg-blue-50/50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Request ID</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Service</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Cost</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Date of Claim</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Status</th>
                      <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                    </tr>
                  </thead>
                  <tbody id="table-body" class="divide-y divide-blue-100/70">
                    <!-- Data inserted dynamically -->
                  </tbody>
                </table>
              </div>

              <!-- Pagination -->
              <div class="py-3 px-4 flex justify-between items-center">
                <span id="showing-text" class="text-sm text-gray-600">Showing 10 of 20</span>
                <nav class="flex items-center space-x-1" aria-label="Pagination">
                  <button id="prev-btn" type="button" class="btn btn-secondary" aria-label="Previous" disabled>
                    <span aria-hidden="true">Previous</span>
                  </button>
                  <button id="next-btn" type="button" class="btn btn-secondary" aria-label="Next">
                    <span aria-hidden="true">Next</span>
                  </button>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    const Data = [{
        requestId: 1,
        service: "Barangay Clearance",
        cost: "50.00",
        dateOfClaim: "2024-05-18",
        status: "Pending"
      },
      {
        requestId: 1,
        service: "Barangay Clearance",
        cost: "50.00",
        dateOfClaim: "2024-05-18",
        status: "Pending"
      },
      {
        requestId: 2,
        service: "Barangay Certificate",
        cost: "50.00",
        dateOfClaim: "2024-05-18",
        status: "Pending"
      },
      {
        requestId: 2,
        service: "Barangay Certificate",
        cost: "50.00",
        dateOfClaim: "2024-05-18",
        status: "Pending"
      },
      {
        requestId: 3,
        service: "Certificate of Indigency",
        cost: "50.00",
        dateOfClaim: "2024-05-18",
        status: "Pending"
      },
      {
        requestId: 3,
        service: "Certificate of Indigency",
        cost: "50.00",
        dateOfClaim: "2024-05-18",
        status: "Pending"
      },
      {
        requestId: 4,
        service: "Barangay Identification",
        cost: "50.00",
        dateOfClaim: "2024-05-18",
        status: "Pending"
      },
      {
        requestId: 4,
        service: "Barangay Identification",
        cost: "50.00",
        dateOfClaim: "2024-05-18",
        status: "Pending"
      },
    ];

    let filteredData = [...Data];
    let currentPage = 1;
    const rowsPerPage = 5;

    function updateTable(page) {
      const startIndex = (page - 1) * rowsPerPage;
      const endIndex = startIndex + rowsPerPage;
      const pageData = filteredData.slice(startIndex, endIndex);

      const tableBody = document.getElementById('table-body');
      tableBody.innerHTML = '';
      pageData.forEach(item => {
        const row = `
        <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">${item.requestId}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.service}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.cost}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.dateOfClaim}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.status}</td>
          <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
            <button class="inline-flex items-center gap-x-2 px-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-700 hover:bg-blue-50/50 transition duration-300 ease-in-out">
              View
            </button>
          </td>
        </tr>
      `;
        tableBody.innerHTML += row;
      });

      const showingText = document.getElementById('showing-text');
      showingText.textContent = `Showing ${Math.min(endIndex, filteredData.length)} of ${filteredData.length}`;

      updatePagination();
    }

    function updatePagination() {
      const totalPages = Math.ceil(filteredData.length / rowsPerPage);
      document.getElementById('prev-btn').disabled = currentPage === 1;
      document.getElementById('next-btn').disabled = currentPage === totalPages;
    }

    // Application status filter logic
    document.querySelectorAll('input[name="requested-service"]').forEach(input => {
      input.addEventListener('change', function() {
        currentPage = 1;
        applyFilters();
      });
    });

    document.getElementById('prev-btn').addEventListener('click', function() {
      if (currentPage > 1) {
        currentPage--;
        updateTable(currentPage);
      }
    });

    document.getElementById('next-btn').addEventListener('click', function() {
      const totalPages = Math.ceil(filteredData.length / rowsPerPage);
      if (currentPage < totalPages) {
        currentPage++;
        updateTable(currentPage);
      }
    });

    // Centralized filtering function
    function applyFilters() {
      const selectedAppStatus = document.querySelector('input[name="requested-service"]:checked')?.value;

      // Start with the original data for each filter application
      filteredData = [...Data];

      if (selectedAppStatus && selectedAppStatus !== "All") {
        filteredData = filteredData.filter(item => item.service === selectedAppStatus);
      }

      updateTable(currentPage);
    }

    updateTable(currentPage); // Initial render
  </script>
  @endauth
  <!-- Hero -->

</x-layout>