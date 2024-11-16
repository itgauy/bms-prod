<section>
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="border border-blue-600/10 bg-white shadow-md shadow-blue-500/5 rounded-lg divide-y divide-blue-100/70">
          <div class="py-3 px-4 flex gap-3 items-center">
            <div class="relative max-w-xs">
              <label class="sr-only">Search</label>
              <input type="text" id="search" class="pl-9 block w-full default-input" placeholder="Search for names">
              <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-3">
                <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8"></circle>
                  <path d="M21 21l-4.3-4.3"></path>
                </svg>
              </div>
            </div>
            <!-- Application Status Filter -->
            <div class="hs-dropdown relative inline-flex" data-hs-dropdown-auto-close="inside">
              <button id="hs-dropdown-item-checkbox" type="button" class="hs-dropdown-toggle btn btn-secondary py-2 px-4"
                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                </svg>
                Application Status
                <svg class="hs-dropdown-open:rotate-180 transition duration-300 ease-in-out size-4"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m6 9 6 6 6-6" />
                </svg>
              </button>
              <div
                class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-lg shadow-blue-500/5 border border-blue-600/10 rounded-lg p-2 space-y-0.5 mt-2"
                role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-item-checkbox">
                <div class="flex gap-x-2 py-2 px-3 rounded-lg hover:bg-blue-100/40 transition duration-300">
                  <input id="status-all" name="application-status" type="radio" value="All"
                    class="mt-0.5 shrink-0 radio-input" checked>
                  <label for="status-all">
                    <span class="block text-sm font-semibold text-gray-800">All</span>
                    <span class="block text-sm text-gray-600">Both approved and declined</span>
                  </label>
                </div>
                <div class="flex gap-x-2 py-2 px-3 rounded-lg hover:bg-blue-100/40 transition duration-300">
                  <input id="approved" name="application-status" type="radio" value="Approved"
                    class="mt-0.5 shrink-0 radio-input">
                  <label for="approved">
                    <span class="block text-sm font-semibold text-gray-800">Approved</span>
                    <span class="block text-sm text-gray-600">All approved applications</span>
                  </label>
                </div>
                <div class="flex gap-x-2 py-2 px-3 rounded-lg hover:bg-blue-100/40 transition duration-300">
                  <input id="declined" name="application-status" type="radio" value="Declined"
                    class="mt-0.5 shrink-0 radio-input">
                  <label for="declined">
                    <span class="block text-sm font-semibold text-gray-800">Declined</span>
                    <span class="block text-sm text-gray-600">All declined applications</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Residency Status Filter -->
          <div class="p-4">
            <label for="home-owner"
              class="btn has-[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
              <div class="flex items-center gap-3">
                <input id="home-owner" type="radio" name="residency-status" value="Homeowner" class="radio-input hidden" checked />
                <span class="font-medium">Home Owner</span>
              </div>
            </label>
            <label for="renter-tenant"
              class="btn has-[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
              <div class="flex items-center gap-3">
                <input id="renter-tenant" type="radio" name="residency-status" value="Renter/Tenant"
                  class="radio-input hidden" />
                <span class="font-medium">Renter/Tenant</span>
              </div>
            </label>
          </div>

          <!-- Table -->
          <div class="overflow-hidden">
            <table id="resident-table" class="min-w-full divide-y divide-blue-100/70">
              <thead class="bg-blue-50/50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">User ID</th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Residency Status</th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Created At</th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Application Status</th>
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
</section>

<script>
  const Data = [{
      userId: 1,
      name: "John Brown",
      resStatus: "Homeowner",
      createdAt: "ssss",
      appStatus: "Approved"
    },
    {
      userId: 2,
      name: "marga",
      resStatus: "Homeowner",
      createdAt: "ssss",
      appStatus: "Declined"
    },
    {
      userId: 3,
      name: "John Brown",
      resStatus: "Homeowner",
      createdAt: "ssss",
      appStatus: "Approved"
    },
    {
      userId: 1,
      name: "John Brown",
      resStatus: "Homeowner",
      createdAt: "ssss",
      appStatus: "Approved"
    },
    {
      userId: 2,
      name: "marga",
      resStatus: "Homeowner",
      createdAt: "ssss",
      appStatus: "Declined"
    },
    {
      userId: 3,
      name: "John Brown",
      resStatus: "Renter/Tenant",
      createdAt: "ssss",
      appStatus: "Approved"
    },
    {
      userId: 1,
      name: "John Brown",
      resStatus: "Homeowner",
      createdAt: "ssss",
      appStatus: "Approved"
    },
    {
      userId: 2,
      name: "marga",
      resStatus: "Homeowner",
      createdAt: "ssss",
      appStatus: "Declined"
    },
    {
      userId: 3,
      name: "John Brown",
      resStatus: "Renter/Tenant",
      createdAt: "ssss",
      appStatus: "Approved"
    },
    {
      userId: 1,
      name: "John Brown",
      resStatus: "Renter/Tenant",
      createdAt: "ssss",
      appStatus: "Approved"
    },
    {
      userId: 2,
      name: "marga",
      resStatus: "Renter/Tenant",
      createdAt: "ssss",
      appStatus: "Declined"
    },
    {
      userId: 3,
      name: "John Brown",
      resStatus: "Homeowner",
      createdAt: "ssss",
      appStatus: "Approved"
    },
    {
      userId: 1,
      name: "John Brown",
      resStatus: "Homeowner",
      createdAt: "ssss",
      appStatus: "Approved"
    },
    {
      userId: 2,
      name: "marga",
      resStatus: "Renter/Tenant",
      createdAt: "ssss",
      appStatus: "Declined"
    },
    {
      userId: 3,
      name: "John Brown",
      resStatus: "Homeowner",
      createdAt: "ssss",
      appStatus: "Declined"
    },
  ];

  let filteredData = Data.filter(item => item.resStatus === "Homeowner"); // Homeowner default
  let currentPage = 1;
  const rowsPerPage = 10;

  function updateTable(page) {
    const startIndex = (page - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;
    const pageData = filteredData.slice(startIndex, endIndex);

    const tableBody = document.getElementById('table-body');
    tableBody.innerHTML = '';
    pageData.forEach(item => {
      const row = `
        <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">${item.userId}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.name}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.resStatus}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.createdAt}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.appStatus}</td>
          <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
            <button class="inline-flex items-center gap-x-2 px-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-700 hover:bg-blue-50/50 transition duration-300 ease-in-out" onclick="openResidentApplicationModal()">
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

  // Residency status filter logic
  document.querySelectorAll('input[name="residency-status"]').forEach(input => {
    input.addEventListener('change', function() {
      const selectedStatus = this.value;

      // Update the residency status filter
      filteredData = Data.filter(item => item.resStatus === selectedStatus);

      currentPage = 1;
      applyFilters();
    });
  });


  // Application status filter logic
  document.querySelectorAll('input[name="application-status"]').forEach(input => {
    input.addEventListener('change', function() {
      currentPage = 1;
      applyFilters();
    });
  });

  // Search filter logic
  document.getElementById('search').addEventListener('input', function(e) {
    currentPage = 1;
    applyFilters();
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
    const selectedResidency = document.querySelector('input[name="residency-status"]:checked').value;
    const selectedAppStatus = document.querySelector('input[name="application-status"]:checked')?.value;
    const query = document.getElementById('search').value.toLowerCase();

    filteredData = Data.filter(item => item.resStatus === selectedResidency);

    if (selectedAppStatus && selectedAppStatus !== "All") {
      filteredData = filteredData.filter(item => item.appStatus === selectedAppStatus);
    }

    if (query) {
      filteredData = filteredData.filter(item => item.name.toLowerCase().includes(query));
    }

    updateTable(currentPage);
  }

  updateTable(currentPage); // Initial render
</script>