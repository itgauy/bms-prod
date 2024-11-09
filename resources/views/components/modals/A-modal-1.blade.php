<div id="A-modal-1"
  class="hs-overlay [--overlay-backdrop:static] hs-overlay-backdrop-open:bg-blue-950/30 hidden size-full fixed top-0 start-0 z-[70] overflow-x-hidden overflow-y-auto pointer-events-none custom-scrollbar"
  role="dialog" tabindex="-1" aria-labelledby="A-modal-1-label">
  <div
    class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-300 mt-0 opacity-0 ease-out transition-all sm:max-w-3xl sm:w-full m-3 sm:mx-auto">
    <!-- Modal Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
      <!-- Modal Header -->
      <div class="flex justify-between items-center py-5 px-7 border-b border-blue-500/10">
        <h3 id="A-modal-1-label">
          Business Information Sheet
        </h3>
        <button type="button" class="btn btn-ghost text-gray-700 px-2.5" aria-label="Close" data-hs-overlay="#A-modal-1">
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
        <label class="input-label mb-2">Permit Categories <span
            class="text-red-500">*</span></label>
        <!-- Permit Categories -->
        <div class="grid md:grid-cols-2 grid-cols-1 gap-4" id="permit-categories">
          <!-- Group A -->
          <label for="group-a"
            class="grouped-radio {{ $errors->has('permit_categories') ? '!border-red-500 !bg-red-500/5' : '' }}">
            <div class="flex items-start gap-3">
              <input id="group-a" type="radio" name="permit_categories" value="group-a" class="radio-input"
                {{ old('permit_categories')}} />
              <div class="flex flex-col gap-1.5">
                <span class="font-medium leading-none">Group A <span class="text-sm">(₱1,000)</span></span>
                <p class="text-sm">Generally regarded as mirco-sized/individual businesses, e.g., pushcart, street/market vendors, hawkers, sari sari store, etc.</p>
              </div>
            </div>
          </label>
          <!-- Group B -->
          <label for="group-b"
            class="grouped-radio {{ $errors->has('permit_categories') ? '!border-red-500 !bg-red-500/5' : '' }}">
            <div class="flex items-start gap-3">
              <input id="group-b" type="radio" name="permit_categories" value="group-b" class="radio-input"
                {{ old('permit_categories')}} />
              <div class="flex flex-col gap-1.5">
                <span class="font-medium leading-none">Group B <span class="text-sm">(₱2,000)</span></span>
                <p class="text-sm">Generally regarded as neighborhood businesses, e.g., bakery/pandesal, water refilling, laundry, carinderia, etc.</p>
              </div>
            </div>
          </label>
          <!-- Group C -->
          <label for="group-c"
            class="grouped-radio {{ $errors->has('permit_categories') ? '!border-red-500 !bg-red-500/5' : '' }}">
            <div class="flex items-start gap-3">
              <input id="group-c" type="radio" name="permit_categories" value="group-c" class="radio-input"
                {{ old('permit_categories')}} />
              <div class="flex flex-col gap-1.5">
                <span class="font-medium leading-none">Group C <span class="text-sm">(₱3,000)</span></span>
                <p class="text-sm">Generally regarded as small to medium-sized businesses, e.g., professional firms, internet cafe, auto repair, health clinic, etc.</p>
              </div>
            </div>
          </label>
          <!-- Group D -->
          <label for="group-d"
            class="grouped-radio {{ $errors->has('permit_categories') ? '!border-red-500 !bg-red-500/5' : '' }}">
            <div class="flex items-start gap-3">
              <input id="group-d" type="radio" name="permit_categories" value="group-d" class="radio-input"
                {{ old('permit_categories')}} />
              <div class="flex flex-col gap-1.5">
                <span class="font-medium leading-none">Group D <span class="text-sm">(₱4,000)</span></span>
                <p class="text-sm">Generally regarded as medium-sized businesses, e.g., pawnshop, restaurant, pharmacy, school, etc.</p>
              </div>
            </div>
          </label>
          <!-- Group E -->
          <label for="group-e"
            class="grouped-radio {{ $errors->has('permit_categories') ? '!border-red-500 !bg-red-500/5' : '' }}">
            <div class="flex items-start gap-3">
              <input id="group-e" type="radio" name="permit_categories" value="group-e" class="radio-input"
                {{ old('permit_categories')}} />
              <div class="flex flex-col gap-1.5">
                <span class="font-medium leading-none">Group E <span class="text-sm">(₱5,000)</span></span>
                <p class="text-sm">Generally regarded as large businesses, e.g., shopping mall, supermarket, bank, hospital, etc.</p>
              </div>
            </div>
          </label>
          <!-- Others -->
          <label for="others"
            class="grouped-radio {{ $errors->has('permit_categories') ? '!border-red-500 !bg-red-500/5' : '' }}">
            <div class="flex items-start gap-3">
              <input id="others" type="radio" name="permit_categories" value="others" class="radio-input"
                {{ old('permit_categories')}} />
              <div class="flex flex-col gap-1.5">
                <span class="font-medium leading-none">Others <span class="text-sm">(₱500)</span></span>
                <p class="text-sm">Business not otherwise recognized.</p>
              </div>
            </div>
          </label>
          @error('permit_categories')
          <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ 'Choose at least one category.' }}</p>
          @enderror
        </div>
        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-5 md:gap-y-6 gap-y-5 pt-6">
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
          <!-- Position/Designation -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="position_designation" class="input-label">Position/Designation <span class="text-red-500">*</span></label>
            <input type="text" name="position_designation" id="position_designation"
              class="default-input @error('position_designation') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Business Owner" value="{{ old('position_designation') }}">
            @error('position_designation')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Kind of Business -->
          <div class="md:space-y-2.5 space-y-1.5">
            <div class="flex justify-between items-end">
              <label for="kind_of_business" class="input-label">Kind of business <span class="text-red-500">*</span></label>
              <div class="hs-tooltip inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="hs-tooltip-toggle shrink-0 size-4 text-blue-500">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
                <span
                  class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-3 bg-white text-xs text-center font-medium text-neutral-800 rounded shadow-sm"
                  role="tooltip">
                  Please select a permit category first to display <br> the corresponding business.
                </span>
              </div>
            </div>
            <select id="kind_of_business" name="kind_of_business"
              class="custom-scrollbar select-input @error('kind_of_business') !border-red-500 !bg-red-500/5 @enderror">
              <option selected="" disabled>Select kind of business</option>
            </select>
            @error('kind_of_business')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Business name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="business_name" class="input-label">Business name <span class="text-red-500">*</span></label>
            <input type="text" name="business_name" id="business_name"
              class="default-input @error('business_name') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Tech-Commr" value="{{ old('business_name') }}">
            @error('business_name')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Business address -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="business_address" class="input-label">Business address <span class="text-red-500">*</span></label>
            <input type="text" name="business_address" id="business_address"
              class="default-input @error('business_address') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Pedro 117 Block 23 Street Banawe" value="{{ old('business_address') }}">
            @error('business_address')
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
          <div class="md:col-span-2 col-span-1 flex items-center gap-2">
            <div class="flex-grow h-[1px] bg-blue-500/10"></div>
            <p>Contact Information</p>
            <div class="flex-grow h-[1px] bg-blue-500/10"></div>
          </div>
          <!-- Contact Person -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="contact_person" class="input-label">Contact Person <span class="text-red-500">*</span></label>
            <input type="text" name="contact_person" id="contact_person"
              class="default-input @error('contact_person') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Maya Dela Cruz" value="{{ old('contact_person') }}">
            @error('contact_person')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Position/Designation -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="contact_position_designation" class="input-label">Position/Designation <span class="text-red-500">*</span></label>
            <input type="text" name="contact_position_designation" id="contact_position_designation"
              class="default-input @error('contact_position_designation') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Business Owner" value="{{ old('contact_position_designation') }}">
            @error('contact_position_designation')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Contact Number -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="contact_num" class="input-label">Contact number <span class="text-red-500">*</span></label>
            <input type="text" name="contact_num" id="contact_num"
              class="default-input @error('contact_num') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. 09123456789" value="{{ old('contact_num') }}">
            @error('contact_num')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Action Buttons -->
          <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
            <button aria-label="Close" data-hs-overlay="#A-modal-1" class="btn btn-secondary">Cancel</button>
            <button class="btn btn-primary next-button">
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const kindOfBusinessSelect = document.getElementById('kind_of_business');
    const permitCategories = document.querySelectorAll('input[name="permit_categories"]');

    const optionsData = {
      'group-a': [
        'Hawker',
        'Junk Shops / Retailer Scrap Materials',
        'Key Duplicate',
        'Pushcart Vendor / Street & Market Vendors / Ambulant Vendors / Peddlers',
        'E-Loading Station / Cellphone Repair',
        'Sari-Sari Store',
        'Shoe/Bag Repair',
        'Vulcanizing Shops'
      ],
      'group-b': [
        'Bakeries / Bake Shops',
        'Car Wash',
        'Carinderia / Mini-Restaurant',
        'Computershop / Internet Cafe',
        'Entertainment / Event Organizer / Supplier',
        'Food / Beverages or Hospitality Services, Restaurant',
        'Garments',
        'General Store / Hardware Store',
        'Janitorial / Cleaning Services',
        'Jewelry Making Repair',
        'Laundry Shop',
        'Labor Services / Subcontractor',
        'Liquor Dealer',
        'Grocery / Convenience Store',
        'Online Freelancer',
        'Personal Services (Salon, Nail Services, Barber Shop)',
        'Pest Control',
        'Photocopying / Printing Shop',
        'Public Utility Terminal(Tricycle)',
        'Sash and Wood Works',
        'Septic Tank Siphoning',
        'Softdrinks / Liquor Dealer',
        'Tailoring',
        'Upholstery',
        'Watch Repair',
        'Water Refilling'
      ],
      // di pa final katamad mag type ahahahahah
      'group-c': [
        'Internet Cafe',
        'Auto Repair',
        'Health Clinic'
      ],
      // di pa final katamad mag type ahahahahah
      'group-d': [
        'Pawnshop',
        'Restaurant',
        'Pharmacy'
      ],
      // di pa final katamad mag type ahahahahah
      'group-e': [
        'Supermarket',
        'Bank',
        'Hospital'
      ],
      'others': [
        'Business not otherwise categorized',
        '5 Units below',
        '6 to 20 Units',
        '20 Units and more'
      ]
    };

    // Function to populate the select options
    function updateOptions(category) {
      kindOfBusinessSelect.innerHTML = '<option selected disabled>Select kind of business</option>';
      optionsData[category].forEach(option => {
        const opt = document.createElement('option');
        opt.value = option;
        opt.textContent = option;
        kindOfBusinessSelect.appendChild(opt);
      });
    }

    // Event listener for each radio button
    permitCategories.forEach(radio => {
      radio.addEventListener('change', function() {
        if (this.checked) {
          updateOptions(this.value);
        }
      });
    });
  });
</script>