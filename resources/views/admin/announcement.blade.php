<section>
  <div class="tabs">
    <button class="btn bg-blue-50/90 text-blue-600 border-blue-200 ring-transparent" id="tab-active" onclick="showTab('active')">Active Announcements</button>
    <button class="btn hover:bg-blue-50/50 ring-transparent" id="tab-archive" onclick="showTab('archive')">Archive Announcements</button>
  </div>

  <!-- Active Announcements -->
  <div class="tab-content" id="content-active">
    <div class="space-y-4 mt-8">
      <button class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="new-announcement-modal"
        data-hs-overlay="#new-announcement-modal">New
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
      </button>
      <div class="grid grid-cols-2 gap-4">
        <!-- Announcement Container -->
        <div class="border p-6 rounded-2xl space-y-4 border-blue-600/10 bg-white shadow-lg shadow-blue-500/5">
          <div>
            <h5>Sample Title</h5>
            <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident dignissimos explicabo tenetur exercitationem placeat maiores, minima tempore.</p>
          </div>
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm">Added by:</p>
              <span class="text-blue-600">Admin</span>
            </div>
            <div>
              <p class="text-sm">Added on:</p>
              <span class="text-blue-600">2024-11-15</span>
            </div>
          </div>
          <div class="w-full h-64">
            <img src="https://placehold.co/50x50" alt="" class="object-cover rounded-lg h-full w-full">
          </div>
          <div class="flex justify-end items-center gap-3">
            <button class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="edit-announcement-modal"
              data-hs-overlay="#edit-announcement-modal">Edit</button>
            <button class="btn btn-danger" aria-haspopup="dialog" aria-expanded="false" aria-controls="archive-confirm"
              data-hs-overlay="#archive-confirm">Archive</button>
          </div>
        </div>
        <!--  -->
        <div class="border border-blue-600/10 p-6 rounded-2xl space-y-4 bg-white shadow-lg shadow-blue-500/5">
          <div>
            <h5>Sample Title</h5>
            <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident dignissimos explicabo tenetur exercitationem placeat maiores, minima tempore.</p>
          </div>
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm">Added by:</p>
              <span class="text-blue-600">Admin</span>
            </div>
            <div>
              <p class="text-sm">Added on:</p>
              <span class="text-blue-600">2024-11-15</span>
            </div>
          </div>
          <div class="w-full h-64">
            <img src="https://placehold.co/50x50" alt="" class="object-cover rounded-lg h-full w-full">
          </div>
          <div class="flex justify-end items-center gap-3">
            <button class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="edit-announcement-modal"
              data-hs-overlay="#edit-announcement-modal">Edit</button>
            <button class="btn btn-danger" aria-haspopup="dialog" aria-expanded="false" aria-controls="archive-confirm"
              data-hs-overlay="#archive-confirm">Archive</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Archive Announcements -->
  <div class="tab-content hidden" id="content-archive">
    <div class="flex flex-col mt-8">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="border border-blue-600/10 bg-white shadow-md shadow-blue-500/5 rounded-lg divide-y divide-blue-100/70">
            <!-- Table -->
            <div class="overflow-hidden">
              <table class="min-w-full divide-y divide-blue-100/70">
                <thead class="bg-blue-50/50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Title</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Added By</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Date Added</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Date Expired</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                  </tr>
                </thead>
                <tbody id="table-body-1" class="divide-y divide-blue-100/70">
                  <!-- Data inserted dynamically -->
                </tbody>
              </table>
            </div>

            <!-- Pagination -->
            <div class="py-3 px-4 flex justify-between items-center">
              <span id="showing-text-1" class="text-sm text-gray-600">Showing 10 of 20</span>
              <nav class="flex items-center space-x-1" aria-label="Pagination">
                <button id="prev-btn-1" type="button" class="btn btn-secondary" aria-label="Previous" disabled>
                  <span aria-hidden="true">Previous</span>
                </button>
                <button id="next-btn-1" type="button" class="btn btn-secondary" aria-label="Next">
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
  // Tab component functionality
  function showTab(tab) {
    // Update button styles
    document.getElementById('tab-active').className = tab === 'active' ? 'btn bg-blue-50/90 text-blue-600 border-blue-200 ring-transparent' : 'btn hover:bg-blue-50/50 ring-transparent';
    document.getElementById('tab-archive').className = tab === 'archive' ? 'btn bg-blue-50/90 text-blue-600 border-blue-200 ring-transparent' : 'btn hover:bg-blue-50/50 ring-transparent';

    // Update content visibility
    document.getElementById('content-active').className = tab === 'active' ? 'tab-content active' : 'tab-content hidden';
    document.getElementById('content-archive').className = tab === 'archive' ? 'tab-content active' : 'tab-content hidden';
  }

  const archiveAnnouncement = [{
      title: "Sample Title",
      addedBy: "Admin",
      dateAdded: "2024-05-18",
      dateExpired: "2024-05-18",
    },
    {
      title: "Sample Title",
      addedBy: "Admin",
      dateAdded: "2024-05-18",
      dateExpired: "2024-05-18",
    },
    {
      title: "Sample Title",
      addedBy: "Admin",
      dateAdded: "2024-05-18",
      dateExpired: "2024-05-18",
    }
  ];

  let currentPage1 = 1;
  const rowsPerPage1 = 10;

  function updateTable1(page) {
    const startIndex1 = (page - 1) * rowsPerPage1;
    const endIndex1 = startIndex1 + rowsPerPage1;
    const pageData1 = archiveAnnouncement.slice(startIndex1, endIndex1);
    const tableBody1 = document.getElementById('table-body-1');
    tableBody1.innerHTML = '';
    pageData1.forEach(item => {
      const row = `
      <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">${item.title}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.addedBy}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.dateAdded}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">${item.dateExpired}</td>
        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex justify-end gap-2.5">
         <button class="inline-flex items-center gap-x-2 px-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-700 hover:bg-blue-50/50 transition duration-300 ease-in-out" onclick="openUnarchiveAnnouncementModal()">
            Unarchive
          </button>
          <button class="inline-flex items-center gap-x-2 px-1 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-700 hover:bg-red-50/50 transition duration-300 ease-in-out" onclick="openDeleteAnnouncementModal()">
            Delete
          </button>
        </td>
      </tr>
    `;
      tableBody1.innerHTML += row;
    });

    const showingText1 = document.getElementById('showing-text-1');
    showingText1.textContent = `Showing ${startIndex1 + 1} of ${archiveAnnouncement.length}`;

    updatePagination1(); // Ensure pagination is updated after the table is rendered
  }

  function updatePagination1() {
    const totalPages = Math.ceil(archiveAnnouncement.length / rowsPerPage1);
    const prevBtn = document.getElementById('prev-btn-1');
    const nextBtn = document.getElementById('next-btn-1');

    prevBtn.disabled = currentPage1 === 1;
    nextBtn.disabled = currentPage1 === totalPages;
  }

  document.getElementById('prev-btn-1').addEventListener('click', function() {
    if (currentPage1 > 1) {
      currentPage1--;
      updateTable1(currentPage1);
    }
  });

  document.getElementById('next-btn-1').addEventListener('click', function() {
    const totalPages = Math.ceil(archiveAnnouncement.length / rowsPerPage1);
    if (currentPage1 < totalPages) {
      currentPage1++;
      updateTable1(currentPage1);
    }
  });

  updateTable1(currentPage1); // Initial render
</script>
</script>