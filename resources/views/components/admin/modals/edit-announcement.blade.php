<div id="edit-announcement-modal"
  class="hs-overlay [--overlay-backdrop:static] hs-overlay-backdrop-open:bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto pointer-events-none custom-scrollbar"
  role="dialog" tabindex="-1" aria-labelledby="edit-announcement-modal-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-300 mt-0 opacity-0 ease-out transition-all sm:max-w-xl sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="edit-announcement-modal-label">
          Edit Announcement
        </h3>
        <button type="button" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close" data-hs-overlay="#edit-announcement-modal">
          <span class="sr-only">Close</span>
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
      <!-- Modal Content -->
      <div class="p-7">
        <form action="" class="md:space-y-6 space-y-5">
          <!-- Announcement Title -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="announcement_title" class="input-label">Announcement title <span class="text-red-500">*</span></label>
            <input type="text" name="announcement_title" id="announcement_title"
              class="default-input @error('announcement_title') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Juan Dela Cruz" value="{{ old('announcement_title') }}">
            @error('announcement_title')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Announcement Description -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="announcement_description" class="input-label">Announcement description <span class="text-red-500">*</span></label>
            <textarea name="announcement_description" id="announcement_description"
              class="default-input @error('announcement_description') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Juan Dela Cruz" value="{{ old('announcement_description') }}"></textarea>
            @error('announcement_description')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Image Overview -->
          <div class="md:space-y-2.5 space-y-1.5">
            <p class="input-label">Image overview <span class="text-red-500">*</span></p>
            <label for="announcement_img" class="sr-only">Choose file</label>
            <input type="file" name="announcement_img" id="announcement_img"
              class="file-input file:text-blue-600 file:bg-white file:border-0 file:me-4 file:py-2.5 file:px-4 @error('announcement_img') !border-red-500 !bg-red-500/5 @enderror"
              value="{{ old('announcement_img') }}">
            @error('announcement_img')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
            <button type="button" class="btn btn-secondary" aria-label="Close" data-hs-overlay="#edit-announcement-modal">Cancel</button>
            <button class="btn btn-primary next-button">
              Edit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>