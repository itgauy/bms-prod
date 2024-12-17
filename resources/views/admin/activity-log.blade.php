<section>
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="border border-blue-600/10 bg-white shadow-md shadow-blue-500/5 rounded-lg divide-y divide-blue-100/70">
          <!-- Table -->
          <div class="overflow-hidden">
            <table class="min-w-full divide-y divide-blue-100/70">
              <thead class="bg-blue-50/50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Log ID</th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Actor</th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Privilege</th>
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Action</th>
                  <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Target</th>
                  <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Timestamp</th>
                </tr>
              </thead>
              <tbody id="table-body-5" class="divide-y divide-blue-100/70">
                <!-- Data inserted dynamically -->
              </tbody>
            </table>
          </div>

          <!-- Pagination -->
          <div class="py-3 px-4 flex justify-between items-center">
            <span id="showing-text-5" class="text-sm text-gray-600">Showing 10 of 20</span>
            <nav class="flex items-center space-x-1" aria-label="Pagination">
              <button id="prev-btn-5" type="button" class="btn btn-secondary" aria-label="Previous" disabled>
                <span aria-hidden="true">Previous</span>
              </button>
              <button id="next-btn-5" type="button" class="btn btn-secondary" aria-label="Next">
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
  const activityLogsData = [{
      logID: "202041",
      actor: "Juan Dela Cruz",
      privilege: "Admin",
      action: "Archived",
      target: "Resident Records",
      timestamp: "2024-05-01 09:15:32",
    },
    {
      logID: "202042",
      actor: "Maria Santos",
      privilege: "Staff",
      action: "Updated",
      target: "Barangay Clearance",
      timestamp: "2024-05-02 14:25:18",
    },
    {
      logID: "202043",
      actor: "Pedro Ramos",
      privilege: "Admin",
      action: "Deleted",
      target: "Community Event Entry",
      timestamp: "2024-05-03 10:45:00",
    },
    {
      logID: "202044",
      actor: "Ana Reyes",
      privilege: "Staff",
      action: "Added",
      target: "Resident Profile",
      timestamp: "2024-05-04 11:30:50",
    },
    {
      logID: "202045",
      actor: "Luis Gomez",
      privilege: "Admin",
      action: "Printed",
      target: "Barangay Permit",
      timestamp: "2024-05-05 08:20:15",
    },
    {
      logID: "202046",
      actor: "Sofia Cruz",
      privilege: "Staff",
      action: "Approved",
      target: "Business Permit Application",
      timestamp: "2024-05-06 13:40:25",
    },
    {
      logID: "202047",
      actor: "Mark Villanueva",
      privilege: "Admin",
      action: "Updated",
      target: "Incident Report",
      timestamp: "2024-05-07 16:10:42",
    },
    {
      logID: "202048",
      actor: "Lina Mendoza",
      privilege: "Staff",
      action: "Rejected",
      target: "Barangay Certificate Request",
      timestamp: "2024-05-08 10:05:33",
    },
  ];

  let currentPage5 = 1;
  const rowsPerPage5 = 10;

  function updateTable5(page) {
    const startIndex5 = (page - 1) * rowsPerPage5;
    const endIndex5 = startIndex5 + rowsPerPage5;
    const pageData5 = activityLogsData.slice(startIndex5, endIndex5);
    const tableBody5 = document.getElementById('table-body-5');
    tableBody5.innerHTML = '';
    pageData5.forEach(item => {
      const row = `
      <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">${item.logID}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.actor}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.privilege}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.action}</td>
        <td class="px-6 py-4 whitespace-nowrap text-end text-sm text-gray-800">${item.target}</td>
        <td class="px-6 py-4 whitespace-nowrap text-end text-sm text-gray-800">${item.timestamp}</td>
      </tr>
    `;
      tableBody5.innerHTML += row;
    });

    const showingText5 = document.getElementById('showing-text-5');
    showingText5.textContent = `Showing ${startIndex5 + 1} to ${Math.min(endIndex5, activityLogsData.length)} of ${activityLogsData.length}`;

    updatePagination5(); // Ensure pagination is updated after the table is rendered
  }

  function updatePagination5() {
    const totalPages = Math.ceil(activityLogsData.length / rowsPerPage5);
    const prevBtn = document.getElementById('prev-btn-5');
    const nextBtn = document.getElementById('next-btn-5');

    prevBtn.disabled = currentPage5 === 1;
    nextBtn.disabled = currentPage5 === totalPages;
  }

  document.getElementById('prev-btn-5').addEventListener('click', function() {
    if (currentPage5 > 1) {
      currentPage5--;
      updateTable5(currentPage5);
    }
  });

  document.getElementById('next-btn-5').addEventListener('click', function() {
    const totalPages = Math.ceil(activityLogsData.length / rowsPerPage5);
    if (currentPage5 < totalPages) {
      currentPage5++;
      updateTable5(currentPage5);
    }
  });

  updateTable5(currentPage5); // Initial render
</script>