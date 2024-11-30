<section>
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div
          class="border border-blue-600/10 bg-white shadow-md shadow-blue-500/5 rounded-lg divide-y divide-blue-100/70">
          <div class="py-3 px-4 flex gap-3 items-center">
            <div class="relative max-w-xs">
              <label class="sr-only">Search</label>
              <input type="text" id="search" class="pl-9 block w-full default-input" placeholder="Search for names">
              <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-3">
                <svg class="w-4 h-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8"></circle>
                  <path d="M21 21l-4.3-4.3"></path>
                </svg>
              </div>
            </div>
            <div class="hs-dropdown relative inline-flex" data-hs-dropdown-auto-close="inside">
              <button id="hs-dropdown-item-checkbox" type="button"
                class="hs-dropdown-toggle btn btn-secondary py-2 px-4" aria-haspopup="menu" aria-expanded="false"
                aria-label="Dropdown">
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
                  </label>
                </div>
                <div class="flex gap-x-2 py-2 px-3 rounded-lg hover:bg-blue-100/40 transition duration-300">
                  <input id="approved" name="application-status" type="radio" value="Approved"
                    class="mt-0.5 shrink-0 radio-input ">
                  <label for="approved">
                    <span class="block text-sm font-semibold text-gray-800">Approved</span>
                  </label>
                </div>
                <div class="flex gap-x-2 py-2 px-3 rounded-lg hover:bg-blue-100/40 transition duration-300">
                  <input id="pending" name="application-status" type="radio" value="Pending"
                    class="mt-0.5 shrink-0 radio-input">
                  <label for="pending">
                    <span class="block text-sm font-semibold text-gray-800">Pending</span>
                  </label>
                </div>
                <div class="flex gap-x-2 py-2 px-3 rounded-lg hover:bg-blue-100/40 transition duration-300">
                  <input id="declined" name="application-status" type="radio" value="Declined"
                    class="mt-0.5 shrink-0 radio-input">
                  <label for="declined">
                    <span class="block text-sm font-semibold text-gray-800">Declined</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-4">
            <label for="home-owner"
              class="btn has -[:checked]:bg-blue-50/90 hover:bg-blue-50/50 has-[:checked]:text-blue-600 has-[:checked]:border-blue-200 cursor-pointer">
              <div class="flex items-center gap-3">
                <input id="home-owner" type="radio" name="residency-status" value="Homeowner"
                  class="radio-input hidden" checked />
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

          <div class="overflow-hidden">
            <table id="resident-table" class="min-w-full divide-y divide-blue-100/70">
              <thead class="bg-blue-50/50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">User ID
                  </th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name
                  </th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                    Residency Status</th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Created
                    At</th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                    Application Status</th>
                  <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action
                  </th>
                </tr>
              </thead>
              <tbody id="table-body" class="divide-y divide-blue-100/70">
                <!-- Data inserted dynamically -->
              </tbody>
            </table>
          </div>

          <div class="py-3 px-4 flex justify-between items-center">
            <span id="showing-text" class="text-sm text-gray-600">Showing 0 of 0</span>
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
  async function fetchData() {
    try {
      const response = await fetch(
        `http://${window.location.hostname}:${window.location.port === '8000' ? '8000' : '8001'}/api/residents`);
      if (!response.ok) {
        throw new Error('Network response was not ok: ' + response.statusText);
      }
      const data = await response.json();
      console.log('Fetched data:', data); // Debugging line
      return data.data; // Return the resident data
    } catch (error) {
      console.error('Error fetching data:', error);
      return []; // Return an empty array in case of error
    }
  }

  let currentPage = 1;
  const rowsPerPage = 10;
  let selectedResidencyStatus = 'Homeowner'; // Default to show homeowners
  let selectedApplicationStatus = 'All'; // Default to show all application statuses

  async function updateTable(page) {
    const residents = await fetchData(); // Fetch the resident data
    const filteredResidents = residents.filter(item => {
      const residencyMatch = selectedResidencyStatus === 'All' ||
        (selectedResidencyStatus === 'Homeowner' && item.user.user_type === 'HOMEOWNER') ||
        (selectedResidencyStatus === 'Renter/Tenant' && item.user.user_type === 'RENTER/TENANT');

      const applicationMatch = selectedApplicationStatus === 'All' ||
        (item.application_status || 'Pending') === selectedApplicationStatus; // Default to 'Pending' if undefined

      return residencyMatch && applicationMatch;
    });

    const startIndex = (page - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;
    const pageData = filteredResidents.slice(startIndex, endIndex);

    const tableBody = document.getElementById('table-body');
    tableBody.innerHTML = '';
    pageData.forEach(item => {
      const fullName = `${item.first_name} ${item.middle_name || ''} ${item.last_name}`;
      const applicationStatus = item.application_status || 'Pending'; // Default to 'Pending' if undefined
      const row = `
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${item.user_id}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${fullName.trim()}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${item.user.user_type === 'home-owner' ? 'Homeowner' : 'Renter/Tenant'}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${new Date(item.created_at).toLocaleString()}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${applicationStatus}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-end">
                    <button class="inline-flex items-center gap-x-2 px-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-700 hover:bg-blue-50/50 transition duration-300 ease-in-out" onclick="openResidentApplicationModal()">
                        View
                    </button>
                </td>
            </tr>
        `;
      tableBody.insertAdjacentHTML('beforeend', row);
    });

    document.getElementById('showing-text').textContent =
      `Showing ${startIndex + 1} to ${Math.min(endIndex, filteredResidents.length)} of ${filteredResidents.length}`;
    document.getElementById('prev-btn').disabled = page === 1;
    document.getElementById('next-btn').disabled = endIndex >= filteredResidents.length;
  }

  document.getElementById('prev-btn').addEventListener('click', () => {
    if (currentPage > 1) {
      currentPage--;
      updateTable(currentPage);
    }
  });

  document.getElementById('next-btn').addEventListener('click', () => {
    currentPage++;
    updateTable(currentPage);
  });

  // Event listeners for filtering by residency status
  document.querySelectorAll('input[name="residency-status"]').forEach(input => {
    input.addEventListener('change', async () => {
      selectedResidencyStatus = input.value; // Update the selected residency status
      currentPage = 1; // Reset to the first page
      await updateTable(currentPage);
    });
  });

  // Event listeners for filtering by application status
  document.querySelectorAll('input[name="application-status"]').forEach(input => {
    input.addEventListener('change', async () => {
      selectedApplicationStatus = input.value; // Update the selected application status
      currentPage = 1; // Reset to the first page
      await updateTable(currentPage);
    });
  });

  // Search functionality
  document.getElementById('search').addEventListener('input', async function() {
    const query = this.value.toLowerCase();
    const residents = await fetchData();
    const filteredResidents = residents.filter(item => {
      const fullName = `${item .first_name} ${item.middle_name || ''} ${item.last_name}`.toLowerCase();
      return fullName.includes(query);
    });
    const startIndex = (currentPage - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;
    const pageData = filteredResidents.slice(startIndex, endIndex);

    const tableBody = document.getElementById('table-body');
    tableBody.innerHTML = '';
    pageData.forEach(item => {
      const fullName = `${item.first_name} ${item.middle_name || ''} ${item.last_name}`;
      const row = `
        <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${item.user_id}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${fullName.trim()}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${item.user.user_type === 'home-owner' ? 'Homeowner' : 'Renter/Tenant'}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${new Date(item.created_at).toLocaleString()}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${item.application_status}</td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-end">
            <button class="inline-flex items-center gap-x-2 px-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-700 hover:bg-blue-50/50 transition duration-300 ease-in-out" onclick="openResidentApplicationModal()">
              View
            </button>
          </td>
        </tr>
      `;
      tableBody.insertAdjacentHTML('beforeend', row);
    });

    document.getElementById('showing-text').textContent =
      `Showing ${startIndex + 1} to ${Math.min(endIndex, filteredResidents.length)} of ${filteredResidents.length}`;
    document.getElementById('prev-btn').disabled = currentPage === 1;
    document.getElementById('next-btn').disabled = endIndex >= filteredResidents.length;
  });

  // Initial render
  updateTable(currentPage);
</script>
