<section>
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div
          class="border border-blue-600/10 bg-white shadow-md shadow-blue-500/5 rounded-lg divide-y divide-blue-100/70">
          <div class="py-3 px-4 flex gap-3 items-center">
            <div class="relative max-w-xs">
              <label class="sr-only">Search</label>
              <input type="text" id="search-4" class="pl-9 block w-full default-input" placeholder="Search for names">
              <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-3">
                <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8"></circle>
                  <path d="M21 21l-4.3-4.3"></path>
                </svg>
              </div>
            </div>
            <!-- Application Status Filter -->
            <div class="hs-dropdown relative inline-flex" data-hs-dropdown-auto-close="inside">
              <button id="hs-dropdown-item-checkbox" type="button"
                class="hs-dropdown-toggle btn btn-secondary py-2 px-4" aria-haspopup="menu" aria-expanded="false"
                aria-label="Dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                </svg>
                Request Status
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
                  <input id="status-all" name="req-status" type="radio" value="All"
                    class="mt-0.5 shrink-0 radio-input" checked>
                  <label for="status-all">
                    <span class="block text-sm font-semibold text-gray-800">All</span>
                  </label>
                </div>
                <div class="flex gap-x-2 py-2 px-3 rounded-lg hover:bg-blue-100/40 transition duration-300">
                  <input id="pending" name="req-status" type="radio" value="Pending"
                    class="mt-0.5 shrink-0 radio-input">
                  <label for="pending">
                    <span class="block text-sm font-semibold text-gray-800">Pending</span>
                  </label>
                </div>
                <div class="flex gap-x-2 py-2 px-3 rounded-lg hover:bg-blue-100/40 transition duration-300">
                  <input id="approved" name="req-status" type="radio" value="Approved"
                    class="mt-0.5 shrink-0 radio-input">
                  <label for="approved">
                    <span class="block text-sm font-semibold text-gray-800">Approved</span>
                  </label>
                </div>
                <div class="flex gap-x-2 py-2 px-3 rounded-lg hover:bg-blue-100/40 transition duration-300">
                  <input id="declined" name="req-status" type="radio" value="Declined"
                    class="mt-0.5 shrink-0 radio-input">
                  <label for="declined">
                    <span class="block text-sm font-semibold text-gray-800">Declined</span>
                  </label>
                </div>
                <div class="flex gap-x-2 py-2 px-3 rounded-lg hover:bg-blue-100/40 transition duration-300">
                  <input id="claimed" name="req-status" type="radio" value="Claimed"
                    class="mt-0.5 shrink-0 radio-input">
                  <label for="claimed">
                    <span class="block text-sm font-semibold text-gray-800">Claimed</span>
                  </label>
                </div>
                <div class="flex gap-x-2 py-2 px-3 rounded-lg hover:bg-blue-100/40 transition duration-300">
                  <input id="unclaimed" name="req-status" type="radio" value="Unclaimed"
                    class="mt-0.5 shrink-0 radio-input">
                  <label for="unclaimed">
                    <span class="block text-sm font-semibold text-gray-800">Unclaimed</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Document Services Filter -->
          <div class="p-4">
            <label for="brgy-clearance"
              class="btn has-[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
              <div class="flex items-center gap-3">
                <input id="brgy-clearance" type="radio" name="docs-services" value="Barangay Clearance"
                  class="radio-input hidden" checked />
                <span class="font-medium">Barangay Clearance</span>
              </div>
            </label>
            <label for="brgy-certificate"
              class="btn has-[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
              <div class="flex items-center gap-3">
                <input id="brgy-certificate" type="radio" name="docs-services" value="Barangay Certificate"
                  class="radio-input hidden" />
                <span class="font-medium">Barangay Certificate</span>
              </div>
            </label>
            <label for="cert-indigency"
              class="btn has-[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
              <div class="flex items-center gap-3">
                <input id="cert-indigency" type="radio" name="docs-services" value="Certificate of Indigency"
                  class="radio-input hidden" />
                <span class="font-medium">Certificate of Indigency</span>
              </div>
            </label>
            <label for="brgy-identification"
              class="btn has-[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
              <div class="flex items-center gap-3">
                <input id="brgy-identification" type="radio" name="docs-services" value="Barangay Identification"
                  class="radio-input hidden" />
                <span class="font-medium">Barangay Identification</span>
              </div>
            </label>
          </div>

          <!-- Table -->
          <div class="overflow-hidden">
            <table id="resident-table" class="min-w-full divide-y divide-blue-100/70">
              <thead class="bg-blue-50/50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                    Permit Number
                  </th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                    Applicant Name
                  </th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                    Service
                  </th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                    Cost
                  </th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                    Date of claim
                  </th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                    Status
                  </th>
                  <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                </tr>
              </thead>
              <tbody id="table-body-4" class="divide-y divide-blue-100/70">
                <!-- Data inserted dynamically -->
              </tbody>
            </table>
          </div>

          <!-- Pagination -->
          <div class="py-3 px-4 flex justify-between items-center">
            <span id="showing-text-4" class="text-sm text-gray-600">Showing 10 of 20</span>
            <nav class="flex items-center space-x-1" aria-label="Pagination">
              <button id="prev-btn-4" type="button" class="btn btn-secondary" aria-label="Previous" disabled>
                <span aria-hidden="true">Previous</span>
              </button>
              <button id="next-btn-4" type="button" class="btn btn-secondary" aria-label="Next">
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
      permitNum: 1,
      applicantName: "Romie Castillo",
      serviceReq: "Barangay Clearance",
      cost: "₱50.00",
      claimDate: "12-17-2024",
      reqStatus: "Approved",
    },
    {
      permitNum: 2,
      applicantName: "Beth Salazar",
      serviceReq: "Barangay Clearance",
      cost: "₱50.00",
      claimDate: "12-17-2024",
      reqStatus: "Declined",
    },
    {
      permitNum: 3,
      applicantName: "Mirasol Soriano",
      serviceReq: "Barangay Clearance",
      cost: "₱50.00",
      claimDate: "12-17-2024",
      reqStatus: "Pending",
    },
    {
      permitNum: 1,
      applicantName: "Marry Manton",
      serviceReq: "Barangay Certificate",
      cost: "₱50.00",
      claimDate: "12-17-2024",
      reqStatus: "Approved",
    },
    {
      permitNum: 2,
      applicantName: "Alfredo Abalos",
      serviceReq: "Barangay Certificate",
      cost: "₱50.00",
      claimDate: "12-17-2024",
      reqStatus: "Declined",
    },
    {
      permitNum: 3,
      applicantName: "Gia Dela Cruz",
      serviceReq: "Barangay Certificate",
      cost: "₱50.00",
      claimDate: "12-17-2024",
      reqStatus: "Pending",
    },
    {
      permitNum: 1,
      applicantName: "Jennifer Villanueva",
      serviceReq: "Certificate of Indigency",
      cost: "₱50.00",
      claimDate: "12-17-2024",
      reqStatus: "Pending",
    },
    {
      permitNum: 2,
      applicantName: "Dianne Hernandez",
      serviceReq: "Certificate of Indigency",
      cost: "₱50.00",
      claimDate: "12-17-2024",
      reqStatus: "Unclaimed",
    },
    {
      permitNum: 1,
      applicantName: "Jennylyn Cortez",
      serviceReq: "Barangay Identification",
      cost: "₱50.00",
      claimDate: "12-17-2024",
      reqStatus: "Claimed",
    },
  ];

  let filteredData4 = Data.filter(item => item.serviceReq === "Barangay Clearance"); // Brgy Clearance default
  let currentPage4 = 1;
  const rowsPerPage4 = 10;

  function updateTable4(page) {
    const startIndex4 = (page - 1) * rowsPerPage4;
    const endIndex4 = startIndex4 + rowsPerPage4;
    const pageData4 = filteredData4.slice(startIndex4, endIndex4);

    const tableBody4 = document.getElementById('table-body-4');
    tableBody4.innerHTML = '';
    pageData4.forEach(item => {
      const row = `
      <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">${item.permitNum}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.applicantName}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.serviceReq}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.cost}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.claimDate}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.reqStatus}</td>
        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
          <button class="inline-flex items-center gap-x-2 px-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-700 hover:bg-blue-50/50 transition duration-300 ease-in-out" onclick="openResidentApplicationModal()">
            View
          </button>
        </td>
      </tr>
    `;
      tableBody4.innerHTML += row;
    });

    const showingText4 = document.getElementById('showing-text-4');
    showingText4.textContent = `Showing ${Math.min(endIndex4, filteredData4.length)} of ${filteredData4.length}`;

    updatePagination4();
  }

  function updatePagination4() {
    const totalPages4 = Math.ceil(filteredData4.length / rowsPerPage4);
    document.getElementById('prev-btn-4').disabled = currentPage4 === 1;
    document.getElementById('next-btn-4').disabled = currentPage4 === totalPages4;
  }

  // Services filter logic
  document.querySelectorAll('input[name="docs-services"]').forEach(input => {
    input.addEventListener('change', function() {
      const selectedStatus = this.value;

      // Update the residency status filter
      filteredData4 = Data.filter(item => item.serviceReq === selectedStatus);

      currentPage4 = 1;
      applyFilters4();
    });
  });


  // Status filter logic
  document.querySelectorAll('input[name="req-status"]').forEach(input => {
    input.addEventListener('change', function() {
      currentPage4 = 1;
      applyFilters4();
    });
  });

  // Search filter logic
  document.getElementById('search-4').addEventListener('input', function(e) {
    currentPage4 = 1;
    applyFilters4();
  });


  document.getElementById('prev-btn-4').addEventListener('click', function() {
    if (currentPage4 > 1) {
      currentPage4--;
      updateTable4(currentPage4);
    }
  });

  document.getElementById('next-btn-4').addEventListener('click', function() {
    const totalPages4 = Math.ceil(filteredData4.length / rowsPerPage4);
    if (currentPage4 < totalPages4) {
      currentPage4++;
      updateTable4(currentPage4);
    }
  });

  // Centralized filtering function
  function applyFilters4() {
    const selectedService = document.querySelector('input[name="docs-services"]:checked').value;
    const selectedReqStatus = document.querySelector('input[name="req-status"]:checked')?.value;
    const query = document.getElementById('search-4').value.toLowerCase();

    filteredData4 = Data.filter(item => item.serviceReq === selectedService);

    if (selectedReqStatus && selectedReqStatus !== "All") {
      filteredData4 = filteredData4.filter(item => item.reqStatus === selectedReqStatus);
    }

    if (query) {
      filteredData4 = filteredData4.filter(item => item.applicantName.toLowerCase().includes(query));
    }

    updateTable4(currentPage4);
  }

  updateTable4(currentPage4); // Initial render
</script>