<div id="B-modal-1"
  class="hs-overlay [--overlay-backdrop:static] hs-overlay-backdrop-open:bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto pointer-events-none custom-scrollbar"
  role="dialog" tabindex="-1" aria-labelledby="B-modal-1-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-300 mt-0 opacity-0 ease-out transition-all sm:max-w-2xl sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="B-modal-1-label">
          Certificates -> Residency
        </h3>
        <button type="button" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close"
          data-hs-overlay="#B-modal-1">
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
      <form id="brgyCert" action="{{ route('brgy-certificate') }}" method="post">
        @csrf
        <div class="p-7">
          <div class="grid md:grid-cols-2 grid-cols-1 gap-x-5 md:gap-y-6 gap-y-5">
            <!-- Type of certificate -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="cert_type" class="input-label">Type of certificate <span class="text-red-500">*</span></label>
              <input type="text" name="cert_type" id="cert_type" readonly required
                class="default-input @error('cert_type') !border-red-500 !bg-red-500/5 @enderror" value="Residency">
              @error('cert_type')
                <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Cost -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="cost" class="input-label">Cost <span class="text-red-500">*</span></label>
              {{-- <input type="number" name="cost" id="cost" value=50 hidden> --}}
              <input type="number" name="cost" value="50" hidden>
              <input type="text" readonly required
                class="default-input @error('cost') !border-red-500 !bg-red-500/5 @enderror" value="₱50.00">
              @error('cost')
                <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Applicant name -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="name" class="input-label">Applicant name <span class="text-red-500">*</span></label>
              <input type="text" name="name" id="name" required
                class="default-input @error('name') !border-red-500 !bg-red-500/5 @enderror pointer-events-none"
                placeholder="E.g. Juan Dela Cruz"
                value="{{ trim(session('first_name') . ' ' . session('middle_name') . ' ' . session('last_name') . ' ' . session('suffix')) }}">
              @error('name')
                <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Address -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="address" class="input-label">Address <span class="text-red-500">*</span></label>
              <input type="text" name="address" id="address" required
                class="default-input @error('address') !border-red-500 !bg-red-500/5 @enderror pointer-event-none"
                placeholder="E.g. Pedro 117 Block 23 Street Banawe, Sitio Example, City Example"
                value="{{ Auth::user()->resident->street }} {{ Auth::user()->resident->village }}, {{ Auth::user()->resident->sitio }}, Quezon City">
              @error('address')
                <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Date of Claim -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="date_claimed" class="input-label">Date of claim <span class="text-red-500">*</span></label>
              <input type="date" name="date_claimed" id="date_claimed" required
                class="default-input @error('date_claimed') !border-red-500 !bg-red-500/5 @enderror"
                value="{{ old('date_claimed') }}">
              @error('date_claimed')
                <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Specific Request -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="specific_request" class="input-label">Specific Request <span
                  class="text-red-500">*</span></label>
              <input type="text" name="specific_request" id="specific_request" required
                class="default-input @error('specific_request') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="E.g. Multi-pages print" value="{{ old('specific_request') }}">
              @error('specific_request')
                <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Action Buttons -->
            <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
              <a aria-label="Close" data-hs-overlay="#B-modal-1" class="btn btn-secondary cursor-pointer">Cancel</a>
              <button class="btn btn-primary next-button" id="submitBrgyCert">
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
    function checkBrgyCertFormFields() {
      let allFilled = true;

      $('#brgyCert input[required]').each(function() {
        if ($(this).val() === '') {
          allFilled = false;
          return false;
        }
      });

      $('#submitBrgyCert').prop('disabled', !allFilled);
    }

    $('#brgyCert input[required]').on('keyup change', checkBrgyCertFormFields);

    // Initial check in case fields are pre-filled (e.g. from browser auto-fill)
    checkBrgyCertFormFields();
  });
</script>
