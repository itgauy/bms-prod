<!-- Modal Structure -->
<div id="edit-staff" class="bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto custom-scrollbar transition-all duration-300 ease-in-out" role="dialog" tabindex="-1" aria-labelledby="edit-staff-label">
  <div id="edit-staff-modal-body" class="mt-0 opacity-0 transition-all duration-300 ease-in-out sm:max-w-2xl w-full sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="edit-staff-label">Edit staff</h3>
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
                <option value="kagawad" {{ old('staff_department') == 'kagawad' ? 'selected' : '' }} selected>Kagawad</option>
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
                placeholder="E.g. JuanDC12" value="criseldamambayaw">
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
                placeholder="E.g. juan.dela.cruz@email.com" value="mambayaw.criselda@email.com">
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
                placeholder="Your password" value="123123123">
              @error('staff_pass')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Action Buttons -->
            <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
              <button type="button" id="close-btn-3" class="btn btn-secondary cursor-pointer">Cancel</button>
              <button class="btn btn-primary next-button" id="submitNewStaff">
                Edit
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
  function openEditStaffModal() {
    const modalOverlay = document.getElementById("edit-staff");
    const modalBody = document.getElementById("edit-staff-modal-body");

    modalOverlay.classList.remove("hidden");
    modalOverlay.classList.add("flex", "pointer-events-auto");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-100");
      modalBody.classList.add("opacity-100", "mt-7");
      modalBody.classList.remove("mt-0", "opacity-0");
    }, 100);
  }

  // Close modal function
  function closeEditStaffModal() {
    const modalOverlay = document.getElementById("edit-staff");
    const modalBody = document.getElementById("edit-staff-modal-body");

    modalBody.classList.add("opacity-0", "mt-0");
    modalBody.classList.remove("mt-7", "opacity-100");

    setTimeout(() => {
      modalOverlay.classList.add("opacity-0", "hidden");
      modalOverlay.classList.remove("flex", "opacity-100", "pointer-events-auto");
    }, 300); // Similar to duration-300 class
  }

  document.getElementById("close-btn-3").addEventListener("click", closeEditStaffModal);
</script>