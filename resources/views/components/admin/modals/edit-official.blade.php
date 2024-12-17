<!-- Modal Structure -->
<div id="edit-official" class="bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto custom-scrollbar transition-all duration-300 ease-in-out" role="dialog" tabindex="-1" aria-labelledby="edit-official-label">
  <div id="edit-official-modal-body" class="mt-0 opacity-0 transition-all duration-300 ease-in-out sm:max-w-2xl w-full sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="edit-official-label">Edit official</h3>
      </div>
      <!-- Modal Content -->
      {{-- FORM --}}
      <form id="newOfficial" action="" method="post">
        @csrf
        <div class="p-7">
          <div class="grid md:grid-cols-2 grid-cols-1 gap-x-5 md:gap-y-6 gap-y-5">
            <!-- Name -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="official_name" class="input-label">Name <span
                  class="text-red-500">*</span></label>
              <input type="text" name="official_name" id="official_name" required
                class="default-input @error('official_name') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="E.g. Juan Dela Cruz" value="Matilda Mendoza">
              @error('official_name')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Department -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="staff_department" class="input-label">Department <span class="text-red-500">*</span></label>
              <select id="staff_department" name="staff_department"
                class="select-input @error('staff_department') !border-red-500 !bg-red-500/5 @enderror">
                <option selected="" disabled>Select Department</option>
                <option value="kagawad" {{ old('staff_department') == 'kagawad' ? 'selected' : '' }}>Kagawad</option>
                <option value="secretary" {{ old('staff_department') == 'secretary' ? 'selected' : '' }}>Secretary</option>
                <option value="treasurer" {{ old('staff_department') == 'treasurer' ? 'selected' : '' }}>Treasurer</option>
                <option value="brgy-admin" {{ old('staff_department') == 'brgy-admin' ? 'selected' : '' }}>Barangay Administrator</option>
                <option value="focal-person" {{ old('staff_department') == 'focal-person' ? 'selected' : '' }} selected>Focal Person</option>
                <option value="lupong-tagapamayapa" {{ old('staff_department') == 'lupong-tagapamayapa' ? 'selected' : '' }}>Lupong Tagapamayapa</option>
                <option value="brgy-pso" {{ old('staff_department') == 'brgy-pso' ? 'selected' : '' }}>Barangay Public Safety Officer</option>
                <option value="gender-development" {{ old('staff_department') == 'gender-development' ? 'selected' : '' }}>Gender and Development</option>
                <option value="brgy-cpc" {{ old('staff_department') == 'brgy-cpc' ? 'selected' : '' }}>Barangay Council for the Protection of Children</option>
                <option value="brgy-drdm" {{ old('staff_department') == 'brgy-drdm' ? 'selected' : '' }}>Barangay Disaster Risk Reduction Managements</option>
                <option value="brgy-hert" {{ old('staff_department') == 'brgy-hert' ? 'selected' : '' }}>Barangay Health Emergency Response Team</option>
                <option value="brgy-hw" {{ old('staff_department') == 'brgy-hw' ? 'selected' : '' }}>Barangay Health Workers</option>
                <option value="env-and-co" {{ old('staff_department') == 'env-and-co' ? 'selected' : '' }}>Environment and Community Officer</option>
                <option value="pwd" {{ old('staff_department') == 'pwd' ? 'selected' : '' }}>Person with Disability</option>
                <option value="nntc" {{ old('staff_department') == 'nntc' ? 'selected' : '' }}>Nagkaisang Nayon Training Center</option>
                <option value="clean-green" {{ old('staff_department') == 'clean-green' ? 'selected' : '' }}>Clean and Green</option>
              </select>
              @error('staff_department')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Added by -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="official_addedBy" class="input-label">Added by <span
                  class="text-red-500">*</span></label>
              <input type="text" name="official_addedBy" id="official_addedBy" required
                class="default-input @error('official_addedBy') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="E.g. Josephin Dela Santos" value="Monique Dela Cruz">
              @error('official_addedBy')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Starting term date -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="term_date" class="input-label">Starting term date <span class="text-red-500">*</span></label>
              <input type="date" name="term_date" id="term_date"
                class="default-input @error('term_date') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="E.g. 09123456789" value="12/12/2024">
              @error('term_date')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Official Photo -->
            <div class="md:space-y-2.5 space-y-1.5">
              <p class="input-label">Official Photo <span class="text-red-500">*</span></p>
              <label for="official_photo" class="sr-only">Choose file</label>
              <input type="file" name="official_photo" id="official_photo"
                class="file-input file:text-blue-600 file:bg-white file:border-0 file:me-4 file:py-2.5 file:px-4 @error('official_photo') !border-red-500 !bg-red-500/5 @enderror"
                value="official-photo.jpg">
              @error('official_photo')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Action Buttons -->
            <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
              <button type="button" id="close-btn-4" class="btn btn-secondary cursor-pointer">Cancel</button>
              <button class="btn btn-primary next-button" id="submitNewOfficial">
                Submit
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<script>
  // Custom made modal trigger, di kinaya ni prelineUI ahahahaha may prob
  // Open modal function
  function openEditOfficialModal() {
    const modalOverlay = document.getElementById("edit-official");
    const modalBody = document.getElementById("edit-official-modal-body");

    modalOverlay.classList.remove("hidden");
    modalOverlay.classList.add("flex", "pointer-events-auto");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-100");
      modalBody.classList.add("opacity-100", "mt-7");
      modalBody.classList.remove("mt-0", "opacity-0");
    }, 100);
  }

  // Close modal function
  function closeEditOfficialModal() {
    const modalOverlay = document.getElementById("edit-official");
    const modalBody = document.getElementById("edit-official-modal-body");

    modalBody.classList.add("opacity-0", "mt-0");
    modalBody.classList.remove("mt-7", "opacity-100");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-0", "hidden");
      modalOverlay.classList.remove("flex", "opacity-100", "pointer-events-auto");
    }, 300); // Similar to duration-300 class
  }

  document.getElementById("close-btn-4").addEventListener("click", closeEditOfficialModal);
</script>