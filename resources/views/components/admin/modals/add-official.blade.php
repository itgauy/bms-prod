<div id="new-official-modal"
  class="hs-overlay [--overlay-backdrop:static] hs-overlay-backdrop-open:bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto pointer-events-none custom-scrollbar"
  role="dialog" tabindex="-1" aria-labelledby="new-official-modal-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-300 mt-0 opacity-0 ease-out transition-all sm:max-w-2xl sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="new-official-modal-label">
          Add new official
        </h3>
        <button type="button" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close"
          data-hs-overlay="#new-official-modal">
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
                placeholder="E.g. Juan Dela Cruz" value="{{ old('official_name') }}">
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
                <option value="focal-person" {{ old('staff_department') == 'focal-person' ? 'selected' : '' }}>Focal Person</option>
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
                placeholder="E.g. Josephin Dela Santos" value="{{ old('official_addedBy') }}">
              @error('official_addedBy')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Starting term date -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="term_date" class="input-label">Starting term date <span class="text-red-500">*</span></label>
              <input type="date" name="term_date" id="term_date"
                class="default-input @error('term_date') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="E.g. 09123456789" value="{{ old('term_date') }}">
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
                value="{{ old('official_photo') }}">
              @error('official_photo')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Action Buttons -->
            <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
              <a aria-label="Close" data-hs-overlay="#new-official-modal" class="btn btn-secondary cursor-pointer">Cancel</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    function checkAddNewOfficialFormFields() {
      let allFilled = true;

      $('#newOfficial input[required]').each(function() {
        if ($(this).val() === '') {
          allFilled = false;
          return false;
        }
      });

      $('#submitNewOfficial').prop('disabled', !allFilled);
    }

    $('#newOfficial input[required]').on('keyup change', checkAddNewOfficialFormFields);

    // Initial check in case fields are pre-filled (e.g. from browser auto-fill)
    checkAddNewOfficialFormFields();
  });
</script>
</script>