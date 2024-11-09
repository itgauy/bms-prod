<div id="B-modal-2"
  class="hs-overlay [--overlay-backdrop:static] hs-overlay-backdrop-open:bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto pointer-events-none custom-scrollbar"
  role="dialog" tabindex="-1" aria-labelledby="B-modal-2-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-300 mt-0 opacity-0 ease-out transition-all sm:max-w-2xl sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="B-modal-2-label">
          Certificates -> Loans
        </h3>
        <button type="button" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close" data-hs-overlay="#B-modal-2">
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
          <!-- Type of Loan -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="type_of_loan" class="input-label">Type of Loan <span class="text-red-500">*</span></label>
            <select id="type_of_loan" name="type_of_loan"
              class="select-input @error('type_of_loan') !border-red-500 !bg-red-500/5 @enderror">
              <option selected="" disabled>Select Loan Type</option>
              <option value="motor-loans" {{ old('type_of_loan') == 'motor-loans' ? 'selected' : '' }}>Motor loans</option>
              <option value="housing-loans" {{ old('type_of_loan') == 'housing-loans' ? 'selected' : '' }}>Housing loans</option>
              <option value="car-loans" {{ old('type_of_loan') == 'car-loans' ? 'selected' : '' }}>Car loans</option>
            </select>
            @error('type_of_loan')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Cost -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="cost" class="input-label">Cost <span class="text-red-500">*</span></label>
            <input type="text" name="cost" id="cost" disabled
              class="default-input @error('cost') !border-red-500 !bg-red-500/5 @enderror" value="₱50.00">
            @error('cost')
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
          <!-- Specific Request -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="specific_req" class="input-label">Specific Request <span class="text-red-500">*</span></label>
            <input type="text" name="specific_req" id="specific_req"
              class="default-input @error('specific_req') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Multi-pages print" value="{{ old('specific_req') }}">
            @error('specific_req')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Action Buttons -->
          <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
            <button aria-label="Close" data-hs-overlay="#B-modal-2" class="btn btn-secondary">Cancel</button>
            <button class="btn btn-primary next-button">
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>