<div id="new-staff-modal"
  class="hs-overlay [--overlay-backdrop:static] hs-overlay-backdrop-open:bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto pointer-events-none custom-scrollbar"
  role="dialog" tabindex="-1" aria-labelledby="new-staff-modal-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-300 mt-0 opacity-0 ease-out transition-all sm:max-w-2xl sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="new-staff-modal-label">
          Add new staff
        </h3>
        <button type="button" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close"
          data-hs-overlay="#new-staff-modal">
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
      <form id="newStaff" action="" method="post">
        @csrf
        <div class="p-7">
          <div class="grid md:grid-cols-2 grid-cols-1 gap-x-5 md:gap-y-6 gap-y-5">
            <!-- Department -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="staff_department" class="input-label">Department <span class="text-red-500">*</span></label>
              <select id="staff_department" name="staff_department"
                class="select-input @error('staff_department') !border-red-500 !bg-red-500/5 @enderror">
                <option selected="" disabled>Select Department</option>
                <option value="secretary" {{ old('staff_department') == 'secretary' ? 'selected' : '' }}>Secretary</option>
                <option value="treasurer" {{ old('staff_department') == 'treasurer' ? 'selected' : '' }}>Treasurer</option>
                <option value="it-department" {{ old('staff_department') == 'it-department' ? 'selected' : '' }}>IT Department</option>
                <option value="sk-chairman" {{ old('staff_department') == 'sk-chairman' ? 'selected' : '' }}>SK Chairman</option>
                <option value="kagawad" {{ old('staff_department') == 'kagawad' ? 'selected' : '' }}>Kagawad</option>
              </select>
              @error('staff_department')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Username -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="staff_username" class="input-label">Username <span
                  class="text-red-500">*</span></label>
              <input type="text" name="staff_username" id="staff_username" required
                class="default-input @error('staff_username') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="E.g. JuanDC12" value="{{ old('staff_username') }}">
              @error('staff_username')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Email Address -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="staff_email" class="input-label">Email address <span
                  class="text-red-500">*</span></label>
              <input type="text" name="staff_email" id="staff_email" required
                class="default-input @error('staff_email') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="E.g. juan.dela.cruz@email.com" value="{{ old('staff_email') }}">
              @error('staff_email')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Password -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="staff_pass" class="input-label">Password <span
                  class="text-red-500">*</span></label>
              <input type="password" name="staff_pass" id="staff_pass" required
                class="default-input @error('staff_pass') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="Your password" value="{{ old('staff_pass') }}">
              @error('staff_pass')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Action Buttons -->
            <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
              <a aria-label="Close" data-hs-overlay="#new-staff-modal" class="btn btn-secondary cursor-pointer">Cancel</a>
              <button class="btn btn-primary next-button" id="submitNewStaff">
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
    function checkAddNewStaffFormFields() {
      let allFilled = true;

      $('#newStaff input[required]').each(function() {
        if ($(this).val() === '') {
          allFilled = false;
          return false;
        }
      });

      $('#submitNewStaff').prop('disabled', !allFilled);
    }

    $('#newStaff input[required]').on('keyup change', checkAddNewStaffFormFields);

    // Initial check in case fields are pre-filled (e.g. from browser auto-fill)
    checkAddNewStaffFormFields();
  });
</script>