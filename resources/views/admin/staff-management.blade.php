<section>
  <div class="tabs-2">
    <button class="btn bg-blue-50/90 text-blue-600 border-blue-200 ring-transparent" id="tab-staffs" onclick="showTab2('staffs')">Staffs Management</button>
    <button class="btn hover:bg-blue-50/50 ring-transparent" id="tab-officials" onclick="showTab2('officials')">Officials Management</button>
  </div>

  <!-- Staffs -->
  <div class="tab-content-2" id="content-staffs">
    <div class="mt-8 space-y-4">
      <button class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="new-staff-modal"
        data-hs-overlay="#new-staff-modal">Add Staff
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
      </button>
      <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border border-blue-600/10 bg-white shadow-md shadow-blue-500/5 rounded-lg divide-y divide-blue-100/70">
              <!-- Table -->
              <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-blue-100/70">
                  <thead class="bg-blue-50/50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Staff ID</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Username</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Email</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Department</th>
                      <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                    </tr>
                  </thead>
                  <tbody id="table-body-2" class="divide-y divide-blue-100/70">
                    <!-- Data inserted dynamically -->
                  </tbody>
                </table>
              </div>
              <!-- Pagination -->
              <div class="py-3 px-4 flex justify-between items-center">
                <span id="showing-text-2" class="text-sm text-gray-600">Showing 10 of 20</span>
                <nav class="flex items-center space-x-1" aria-label="Pagination">
                  <button id="prev-btn-2" type="button" class="btn btn-secondary" aria-label="Previous" disabled>
                    <span aria-hidden="true">Previous</span>
                  </button>
                  <button id="next-btn-2" type="button" class="btn btn-secondary" aria-label="Next">
                    <span aria-hidden="true">Next</span>
                  </button>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Officials -->
  <div class="tab-content-2 hidden" id="content-officials">
    <div class="mt-8 space-y-4">
      <button class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="new-official-modal"
        data-hs-overlay="#new-official-modal">Add official
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
      </button>
      <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border border-blue-600/10 bg-white shadow-md shadow-blue-500/5 rounded-lg divide-y divide-blue-100/70">
              <!-- Table -->
              <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-blue-100/70">
                  <thead class="bg-blue-50/50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Department</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Date Added</th>
                      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Added By</th>
                      <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                    </tr>
                  </thead>
                  <tbody id="table-body-3" class="divide-y divide-blue-100/70">
                    <!-- Data inserted dynamically -->
                  </tbody>
                </table>
              </div>

              <!-- Pagination -->
              <div class="py-3 px-4 flex justify-between items-center">
                <span id="showing-text-3" class="text-sm text-gray-600">Showing 10 of 20</span>
                <nav class="flex items-center space-x-1" aria-label="Pagination">
                  <button id="prev-btn-3" type="button" class="btn btn-secondary" aria-label="Previous" disabled>
                    <span aria-hidden="true">Previous</span>
                  </button>
                  <button id="next-btn-3" type="button" class="btn btn-secondary" aria-label="Next">
                    <span aria-hidden="true">Next</span>
                  </button>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  // Tab component functionality
  function showTab2(tab) {
    // Update button styles
    document.getElementById('tab-staffs').className = tab === 'staffs' ? 'btn bg-blue-50/90 text-blue-600 border-blue-200 ring-transparent' : 'btn hover:bg-blue-50/50 ring-transparent';
    document.getElementById('tab-officials').className = tab === 'officials' ? 'btn bg-blue-50/90 text-blue-600 border-blue-200 ring-transparent' : 'btn hover:bg-blue-50/50 ring-transparent';

    // Update content visibility
    document.getElementById('content-staffs').className = tab === 'staffs' ? 'tab-content-2 active' : 'tab-content-2 hidden';
    document.getElementById('content-officials').className = tab === 'officials' ? 'tab-content-2 active' : 'tab-content-2 hidden';
  }

  // ------------------ Staffs Table ------------------

  const staffsData = [{
      staffID: 1,
      username: "criseldamambayaw",
      email: "mambayaw.criselda@email.com",
      department: "Kagawad",
    },
    {
      staffID: 2,
      username: "jersonamuto",
      email: "amuto.jerson@email.com",
      department: "Treasurer",
    },
    {
      staffID: 3,
      username: "JohnDalisay",
      email: "dalisay.john@email.com",
      department: "Secretary",
    },
  ];

  let currentPage2 = 1;
  const rowsPerPage2 = 10;

  function updateTable2(page) {
    const startIndex2 = (page - 1) * rowsPerPage2;
    const endIndex2 = startIndex2 + rowsPerPage2;
    const pageData2 = staffsData.slice(startIndex2, endIndex2);
    const tableBody2 = document.getElementById('table-body-2');
    tableBody2.innerHTML = '';
    pageData2.forEach(item => {
      const row = `
      <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">${item.staffID}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.username}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.email}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.department}</td>
        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex justify-end gap-2.5">
         <button class="inline-flex items-center gap-x-2 px-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-700 hover:bg-blue-50/50 transition duration-300 ease-in-out" onclick="openEditStaffModal()">
            Edit
          </button>
          <button class="inline-flex items-center gap-x-2 px-1 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-700 hover:bg-red-50/50 transition duration-300 ease-in-out" onclick="openDeleteStaffModal()">
            Delete
          </button>
        </td>
      </tr>
    `;
      tableBody2.innerHTML += row;
    });

    const showingText2 = document.getElementById('showing-text-2');
    showingText2.textContent = `Showing ${startIndex2 + 1} to ${Math.min(endIndex2, staffsData.length)} of ${staffsData.length}`;

    updatePagination2(); // Ensure pagination is updated after the table is rendered
  }

  function updatePagination2() {
    const totalPages = Math.ceil(staffsData.length / rowsPerPage2);
    const prevBtn = document.getElementById('prev-btn-2');
    const nextBtn = document.getElementById('next-btn-2');

    prevBtn.disabled = currentPage2 === 1;
    nextBtn.disabled = currentPage2 === totalPages;
  }

  document.getElementById('prev-btn-2').addEventListener('click', function() {
    if (currentPage2 > 1) {
      currentPage2--;
      updateTable2(currentPage2);
    }
  });

  document.getElementById('next-btn-2').addEventListener('click', function() {
    const totalPages = Math.ceil(staffsData.length / rowsPerPage2);
    if (currentPage2 < totalPages) {
      currentPage2++;
      updateTable2(currentPage2);
    }
  });

  updateTable2(currentPage2); // Initial render

  // ------------------ Officials Table ------------------

  const officialsData = [{
      name: 1,
      department: "Treasurer Department",
      dateAdded: "02-29-24",
      addedBy: "Juan Dela Cruz",
    },
    {
      name: 1,
      department: "Treasurer Department",
      dateAdded: "02-29-24",
      addedBy: "Juan Dela Cruz",
    },
    {
      name: 1,
      department: "Treasurer Department",
      dateAdded: "02-29-24",
      addedBy: "Juan Dela Cruz",
    },
    {
      name: 1,
      department: "Treasurer Department",
      dateAdded: "02-29-24",
      addedBy: "Juan Dela Cruz",
    },
  ];

  let currentPage3 = 1;
  const rowsPerPage3 = 10;

  function updateTable3(page) {
    const startIndex3 = (page - 1) * rowsPerPage3;
    const endIndex3 = startIndex3 + rowsPerPage3;
    const pageData3 = officialsData.slice(startIndex3, endIndex3);
    const tableBody3 = document.getElementById('table-body-3');
    tableBody3.innerHTML = '';
    pageData3.forEach(item => {
      const row = `
      <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">${item.name}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.department}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.dateAdded}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.addedBy}</td>
        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex justify-end gap-2.5">
         <button class="inline-flex items-center gap-x-2 px-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-700 hover:bg-blue-50/50 transition duration-300 ease-in-out" onclick="openEditOfficialModal()">
            Edit
          </button>
          <button class="inline-flex items-center gap-x-2 px-1 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-700 hover:bg-red-50/50 transition duration-300 ease-in-out" onclick="openDeleteOfficialModal()">
            Delete
          </button>
        </td>
      </tr>
    `;
      tableBody3.innerHTML += row;
    });

    const showingText3 = document.getElementById('showing-text-3');
    showingText3.textContent = `Showing ${startIndex3 + 1} to ${Math.min(endIndex3, officialsData.length)} of ${officialsData.length}`;

    updatePagination3(); // Ensure pagination is updated after the table is rendered
  }

  function updatePagination3() {
    const totalPages = Math.ceil(officialsData.length / rowsPerPage3);
    const prevBtn = document.getElementById('prev-btn-3');
    const nextBtn = document.getElementById('next-btn-3');

    prevBtn.disabled = currentPage3 === 1;
    nextBtn.disabled = currentPage3 === totalPages;
  }

  document.getElementById('prev-btn-3').addEventListener('click', function() {
    if (currentPage3 > 1) {
      currentPage3--;
      updateTable3(currentPage3);
    }
  });

  document.getElementById('next-btn-3').addEventListener('click', function() {
    const totalPages = Math.ceil(officialsData.length / rowsPerPage3);
    if (currentPage3 < totalPages) {
      currentPage3++;
      updateTable3(currentPage3);
    }
  });

  updateTable3(currentPage3); // Initial render
</script>