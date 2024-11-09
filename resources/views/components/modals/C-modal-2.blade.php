<div id="C-modal-2"
  class="hs-overlay [--overlay-backdrop:static] hs-overlay-backdrop-open:bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto pointer-events-none custom-scrollbar"
  role="dialog" tabindex="-1" aria-labelledby="C-modal-2-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-300 mt-0 opacity-0 ease-out transition-all sm:max-w-2xl sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="C-modal-2-label">
          Medical Fianancial Assistance
        </h3>
        <button type="button" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close" data-hs-overlay="#C-modal-2">
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
        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-5 md:gap-y-6 gap-y-5">
          <!-- Type of Assistance -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="type_of_assistance" class="input-label">Type of Assistance <span class="text-red-500">*</span></label>
            <select id="type_of_assistance" name="type_of_assistance"
              class="select-input @error('type_of_assistance') !border-red-500 !bg-red-500/5 @enderror">
              <option selected="" disabled>Select Type of Assistance</option>
              <option value="education-purpose" {{ old('type_of_assistance') == 'education-purpose' ? 'selected' : '' }}>Education Purpose</option>
              <option value="lalamove" {{ old('type_of_assistance') == 'lalamove' ? 'selected' : '' }}>Lalamove</option>
            </select>
            @error('type_of_assistance')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Applicant name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="applicant_name" class="input-label">Applicant name <span class="text-red-500">*</span></label>
            <input type="text" name="applicant_name" id="applicant_name"
              class="default-input @error('applicant_name') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Juan Dela Cruz" value="{{ old('applicant_name') }}">
            @error('applicant_name')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Address -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="address" class="input-label">Address <span class="text-red-500">*</span></label>
            <input type="text" name="address" id="address"
              class="default-input @error('address') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Pedro 117 Block 23 Street Banawe" value="{{ old('address') }}">
            @error('address')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Date of Claim -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="date_of_claim" class="input-label">Date of claim <span class="text-red-500">*</span></label>
            <input type="date" name="date_of_claim" id="date_of_claim"
              class="default-input @error('date_of_claim') !border-red-500 !bg-red-500/5 @enderror" value="{{ old('date_of_claim') }}">
            @error('date_of_claim')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Action Buttons -->
          <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
            <button aria-label="Close" data-hs-overlay="#C-modal-2" class="btn btn-secondary">Cancel</button>
            <button class="btn btn-primary next-button">
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>