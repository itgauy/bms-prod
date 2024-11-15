<section>
  <div class="space-y-4">
    <h3 class="font-normal mb-3">Active Announcements</h3>
    <button class="btn btn-secondary" aria-haspopup="dialog" aria-expanded="false" aria-controls="new-announcement-modal"
      data-hs-overlay="#new-announcement-modal">New announcement
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
      </svg>
    </button>
    <!-- Active Announements -->
    <div class="grid grid-cols-2 gap-4">
      <!-- Announcement Container -->
      <div class="border p-4 rounded-2xl space-y-4 bg-blue-50/30 border-blue-500/20">
        <div>
          <h5>Sample Title</h5>
          <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident dignissimos explicabo tenetur exercitationem placeat maiores, minima tempore.</p>
        </div>
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm">Added by:</p>
            <span>Admin</span>
          </div>
          <div>
            <p class="text-sm">Added on:</p>
            <span>2024-11-15</span>
          </div>
        </div>
        <div class="w-full h-64">
          <img src="https://placehold.co/50x50" alt="" class="object-cover rounded-lg h-full w-full">
        </div>
        <div class="flex justify-end items-center gap-3">
          <button class="btn btn-primary">Edit</button>
          <button class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
</section>