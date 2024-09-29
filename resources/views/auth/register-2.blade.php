<x-layout>
  {{-- instead na ilagay pa lahat, alisin nalang kasi sa components/layout pwede na kunin --}}

  <body class="md:h-screen h-auto">
    <main class="flex justify-center items-center h-full md:p-6 p-4 md:pt-36 md:py-24 py-24">
      <!-- Main Container -->
      <form action="{{ route('register-2') }}" method="post"
        class="md:px-12 lg:px-8 px-6 md:pb-12 lg:pb-8 pb-6 pt-1 shadow-lg shadow-neutral-100/60 bg-white rounded-3xl space-y-7 w-full max-w-3xl">
        @csrf
        <div class="space-y-1">
          <h2>Registration Form</h2>
          <p>Fill out the form to proceed. Fields marked with * are required.</p>
        </div>

        <!-- Stepper -->
        <ul class="relative flex flex-row gap-x-2">
          <!-- Step 1 / Account Information -->
          <li class="shrink basis-0 flex-1 group">
            <div class="min-w-10 min-h-10 w-full inline-flex items-center text-xs align-middle">
              <span class="size-10 flex justify-center items-center shrink-0 bg-green-500 font-bold text-white rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                </svg>
              </span>
              <div class="ms-2 w-full h-px flex-1 bg-blue-300 group-last:hidden"></div>
            </div>
            <div class="mt-3">
              <span class="block font-medium">
                Step 1
              </span>
              <p class="text-neutral-500 text-sm">
                Account Info.
              </p>
            </div>
          </li>
          <!-- Step 2 / Personal Information -->
          <li class="shrink basis-0 flex-1 group">
            <div class="min-w-10 min-h-10 w-full inline-flex items-center text-xs align-middle">
              <span class="size-10 flex justify-center items-center shrink-0 bg-blue-500 font-bold text-white rounded-full">
                2
              </span>
              <div class="ms-2 w-full h-px flex-1 bg-neutral-200 group-last:hidden"></div>
            </div>
            <div class="mt-3">
              <span class="block font-medium">
                Step 2
              </span>
              <p class="text-neutral-500 text-sm">
                Personal Info.
              </p>
            </div>
          </li>
          <!-- Step 3 /Check & Submit -->
          <li class="shrink basis-0 flex-1 group">
            <div class="min-w-10 min-h-10 w-full inline-flex items-center text-xs align-middle">
              <span class="size-10 flex justify-center items-center shrink-0 bg-neutral-100 font-medium text-neutral-800 rounded-full">
                3
              </span>
            </div>
            <div class="mt-3">
              <span class="block font-medium">
                Step 3
              </span>
              <p class="text-neutral-500 text-sm">
                Check & Submit
              </p>
            </div>
          </li>
        </ul>
        <!-- End Stepper -->

        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-5 md:gap-y-6 gap-y-5 pt-4">
          <!-- Complete Name -->
          <h5 class="md:col-span-2 col-span-1 border-t pt-2 font-medium">Complete Name</h5>
          <!-- First Name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="first-name" class="input-label">First name <span class="text-red-500">*</span></label>
            <input type="text" name="first-name" id="first-name"
              class="default-input @error('first-name') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Juan" value="{{ old('first-name') }}">
            @error('first-name')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Last name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="last-name" class="input-label">Last name <span class="text-red-500">*</span></label>
            <input type="text" name="last-name" id="last-name"
              class="default-input @error('last-name') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Dela Cruz" value="{{ old('last-name') }}">
            @error('last-name')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Middle name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="middle-name" class="input-label">Middle name <span class="text-neutral-400 text-xs">(Optional)</span></label>
            <input type="text" name="middle-name" id="middle-name"
              class="default-input"
              placeholder="E.g. Santos" value="{{ old('middle-name') }}">
          </div>
          <!-- Suffix name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="suffix" class="input-label">Suffix <span class="text-neutral-400 text-xs">(Optional)</span></label>
            <input type="text" name="suffix" id="suffix"
              class="default-input"
              placeholder="E.g. Jr." value="{{ old('suffix') }}">
          </div>
          <!-- End of Complete Name -->

          <!-- Address -->
          <h5 class="md:col-span-2 col-span-1 border-t pt-2 mt-4 font-medium">Address</h5>
          <!-- First Name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="street" class="input-label">Street <span class="text-red-500">*</span></label>
            <input type="text" name="street" id="street"
              class="default-input @error('street') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Pedro" value="{{ old('street') }}">
            @error('street')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Sitio -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="sitio" class="input-label">Sitio <span class="text-red-500">*</span></label>
            <select id="sitio" name="sitio"
              class="select-input @error('sitio') !border-red-500 !bg-red-500/5 @enderror" value="{{ old('sitio') }}">
              <option selected="" disabled>Select Sitio</option>
              <option value="Damong Maliit">Damong Maliit</option>
              <option value="Capri">Capri</option>
              <option value="Pasacola">Pasacola</option>
              <option value="Gitna">Gitna</option>
            </select>
            @error('sitio')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Village -->
          <div class="md:space-y-2.5 space-y-1.5">
            <div class="flex justify-between items-end">
              <label for="village" class="input-label">Village <span class="text-red-500">*</span></label>
              <div class="hs-tooltip inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hs-tooltip-toggle shrink-0 size-4 text-blue-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-2 px-3 bg-white text-xs text-center font-medium text-neutral-800 rounded shadow-sm" role="tooltip">
                  Please select a Sitio to display <br> the corresponding Villages.
                </span>
              </div>
            </div>
            <select id="village" name="village"
              class="select-input custom-scrollbar @error('village') !border-red-500 !bg-red-500/5 @enderror" value="{{ old('village') }}">
              <option selected="" disabled>Select Village</option>
              <!-- The options will be dynamically generated -->
            </select>
            @error('village')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- End of Address -->

          <!-- Contact Details -->
          <h5 class="md:col-span-2 col-span-1 border-t pt-2 mt-4 font-medium">Contact Details</h5>
          <!-- Contact Number -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="contact-num" class="input-label">Contact number <span class="text-red-500">*</span></label>
            <input type="text" name="contact-num" id="contact-num"
              class="default-input @error('contact-num') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. 09123456789" value="{{ old('contact-num') }}">
            @error('contact-num')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Emergency Contact's Name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="em-contact-name" class="input-label">Emergency contact's name <span class="text-red-500">*</span></label>
            <input type="text" name="em-contact-name" id="em-contact-name"
              class="default-input @error('em-contact-name') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Antonio Dela Cruz" value="{{ old('em-contact-name') }}">
            @error('em-contact-name')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Emergency Contact's Number -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="em-contact-num" class="input-label">Emergency contact's number <span class="text-red-500">*</span></label>
            <input type="text" name="em-contact-num" id="em-contact-num"
              class="default-input @error('em-contact-num') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. 09987654321" value="{{ old('em-contact-num') }}">
            @error('em-contact-num')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- End of Contact Details -->

          <!-- Other Relevant Information -->
          <h5 class="md:col-span-2 col-span-1 border-t pt-2 mt-4 font-medium">Other Relevant Information</h5>
          <!-- Birthdate -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="birthdate" class="input-label">Birthdate <span class="text-red-500">*</span></label>
            <input type="date" name="birthdate" id="birthdate"
              class="default-input @error('birthdate') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. 09123456789" value="{{ old('birthdate') }}">
            @error('birthdate')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Birth Place -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="birth-place" class="input-label">Birth place <span class="text-red-500">*</span></label>
            <input type="text" name="birth-place" id="birth-place"
              class="default-input @error('birth-place') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. Quezon City" value="{{ old('birth-place') }}">
            @error('birth-place')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Civil Status -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="civil-status" class="input-label">Civil Status <span class="text-red-500">*</span></label>
            <select id="civil-status" name="civil-status"
              class="select-input @error('civil-status') !border-red-500 !bg-red-500/5 @enderror" value="{{ old('civil-status') }}">
              <option selected="" disabled>Select Civil Status</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Divorced">Divorced</option>
              <option value="Widowed">Widowed</option>
            </select>
            @error('civil-status')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Gender -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="gender" class="input-label">Gender <span class="text-red-500">*</span></label>
            <select id="gender" name="gender"
              class="select-input @error('gender') !border-red-500 !bg-red-500/5 @enderror" value="{{ old('gender') }}">
              <option selected="" disabled>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="LGBTQs">LGBTQ+</option>
              <option value="Prefer not to say">Prefer not to say</option>
            </select>
            @error('gender')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Religion -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="religion" class="input-label">Religion <span class="text-red-500">*</span></label>
            <select id="religion" name="religion"
              class="select-input @error('religion') !border-red-500 !bg-red-500/5 @enderror" value="{{ old('religion') }}">
              <option selected="" disabled>Select Religion</option>
              <option value="Christian">Christian</option>
              <option value="Catholic">Catholic</option>
              <option value="Protestant">Protestant</option>
              <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
              <option value="Islam">Islam</option>
              <option value="Buddhism">Buddhism</option>
              <option value="Other Chirstian Denominations">Other Chirstian Denominations</option>
              <option value="Other Indigenous Religions">Other Indigenous Religions</option>
              <option value="No Religion/Atheis">No Religion/Atheist</option>
              <option value="Other">Other</option>
            </select>
            @error('religion')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Occupation -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="occupation" class="input-label">Occupation</label>
            <input type="text" name="occupation" id="occupation"
              class="default-input"
              placeholder="E.g. Factory Worker" value="{{ old('occupation') }}">
          </div>
          <!-- End of Other Relevant Information -->

          <!-- Verification Details -->
          <h5 class="md:col-span-2 col-span-1 border-t pt-2 mt-4 font-medium">Verification Details</h5>
          <!-- Classification Status -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="classification-status" class="input-label">Classification Status <span class="text-red-500">*</span></label>
            <select id="classification-status" name="classification-status"
              class="select-input @error('classification-status') !border-red-500 !bg-red-500/5 @enderror" value="{{ old('classification-status') }}">
              <option selected="" disabled>Select Classification Status</option>
              <option value="Resident">Resident</option>
              <option value="4PS">4PS</option>
              <option value="PWD">PWD</option>
              <option value="Solo Parent">Solo Parent</option>
              <option value="Senior Citizen">Senior Citizen</option>
            </select>
            @error('classification-status')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Residency Status -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="recidency-status" class="input-label">Recidency Status</label>
            <input type="text" name="recidency-status" id="recidency-status"
              class="default-input" value="{{ old('recidency-status') }}" disabled>
          </div>
          <!-- Valid ID -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="valid-id" class="input-label">Valid ID <span class="text-red-500">*</span></label>
            <select id="valid-id" name="valid-id"
              class="select-input @error('valid-id') !border-red-500 !bg-red-500/5 @enderror" value="{{ old('valid-id') }}">
              <option selected="" disabled>Select Valid ID</option>
              <option value="Barangay ID">Barangay ID</option>
            </select>
            @error('valid-id')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Picture of Barangay ID -->
          <div class="md:space-y-2.5 space-y-1.5">
            <p class="input-label">Picture of Barangay ID <span class="text-red-500">*</span></p>
            <label for="picture-id" class="sr-only">Choose file</label>
            <input type="file" name="picture-id" id="picture-id" class="file-input file:bg-white file:border-0 file:me-4 file:py-2.5 file:px-4 @error('picture-id') !border-red-500 !bg-red-500/5 @enderror" value="{{ old('picture-id') }}">
            @error('picture-id')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Picture of Barangay ID while holding -->
          <div class="md:space-y-2.5 space-y-1.5">
            <p class="input-label">Picture of Barangay ID while holding <span class="text-red-500">*</span></p>
            <label for="picture-holding-id" class="sr-only">Choose file</label>
            <input type="file" name="picture-holding-id" id="picture-holding-id" class="file-input file:bg-white file:border-0 file:me-4 file:py-2.5 file:px-4 @error('picture-holding-id') !border-red-500 !bg-red-500/5 @enderror" value="{{ old('picture-holding-id') }}">
            @error('picture-holding-id')
            <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- End of Verification Details -->

          <!-- Buttons -->
          <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
            <a href="{{ route('register-1') }}" class="btn btn-secondary">Back</a>
            <button class="btn btn-primary">
              Next
            </button>
          </div>
        </div>
      </form>
      </div>
      <!-- End of Main Container -->
    </main>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const sitioSelect = document.getElementById('sitio');
        const villageSelect = document.getElementById('village');

        // Mapping
        const sitioToVillage = {
          // Damong Maliit Villages
          'Damong Maliit': ['Villa Nova Subdivision', 'Bartolome Compound', 'Josefina Subdivision', 'Pulong Gubat', 'Dantes 1 Subd.', 'St. Andrew Subdivision', 'Roxas Compound', 'Dantes 2 Subdivision', 'Gerryville Subdivision', 'Lazaro Compound', 'Bistek Ville #22', 'Bistek Ville #28', 'Marcela Compound', 'F.B. De Jesus Subdivision', 'Jonaville/Urbien Subdivision', 'Molave 1 & 2', 'Unang Lingap', 'San Antonio Subdivision', 'Ina ng Buhay Road', 'St. Vincent', 'Jordan Heights Subdivision', 'Gonzales Compound', 'Queensland 1 Subdivision', 'Queensland 2 Subdivision', 'Queensland 3 Subdivision'],
          // Capri Villages
          'Capri': ['Amparo Subdivision', 'Pascual Road', 'Rodriguez Compound', 'San Andres Compound', 'Walters Road', 'Rebisco Road', 'Imelda Street', 'Ugoy-Ugoy Compound', 'Rockville Subdivision', 'Samonte 1', 'Samonte 2', 'Basa Compound', 'Sierra Vista Ph 1', 'Sierra Vista Ph 2', 'Sierra Vista Ph 3', 'Robina Road', 'Reliance Road', 'Mendoza I', 'Mendoza II', 'Torres Village'],
          // Pasacola Villages
          'Pasacola': [' Don Enrique/Florenceville Subd', 'San Paulo Subdivision', 'Pasacola Proper', 'Pasacola Area A', 'Pasacola Area B', 'Pasacola Area C', 'Pasacola Dulo', 'Coral Ville', 'Bistek Ville #12', 'Bistek Ville #16', 'Northwind Subdivision', 'Goldmine Interior', 'St. John Goldmine', 'St. James Subdivision', 'St. James Riverside', 'Sta. Clara Villas', 'Dormitory Ph 1', 'Dormitory Ph 2', 'Dormitory Ph 3', 'Kingdom'],
          // Gitna Villages
          'Gitna': ['P. Dela Cruz Street', 'Fivestar Compound', 'Villa Angelica', 'Enriquez/Rivera', 'Riverside Alley']
        };


        sitioSelect.addEventListener('change', function() {
          const selectedSitio = sitioSelect.value;

          villageSelect.innerHTML = '<option selected="" disabled>Select Village</option>';

          const villages = sitioToVillage[selectedSitio] || [];

          villages.forEach(function(village) {
            const option = document.createElement('option');
            option.value = village;
            option.textContent = village;
            villageSelect.appendChild(option);
          });
        });
      });
    </script>
  </body>

</x-layout>