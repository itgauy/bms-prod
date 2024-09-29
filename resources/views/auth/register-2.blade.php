<x-layout>
  {{-- instead na ilagay pa lahat, alisin nalang kasi sa components/layout pwede na kunin --}}

  <body class="md:h-screen h-auto">
    <main class="flex justify-center items-center h-full md:p-6 p-4 md:pt-36 md:py-24 py-24">
      <!-- Main Container -->
      <form action="{{ route('register-1') }}" method="post"
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
              <div class="ms-2 w-full h-px flex-1 bg-blue-500 group-last:hidden"></div>
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
          <!-- Step 3 / Submit -->
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
                Submit
              </p>
            </div>
          </li>
        </ul>
        <!-- End Stepper -->

        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-5 md:gap-y-6 gap-y-5 pt-4">
          <h5 class="md:col-span-2 col-span-1 border-t pt-3 font-medium">Complete Name</h5>
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

          <!-- Buttons -->
          <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
            <a href="{{ route('login') }}" class="btn btn-secondary">Back</a>
            <button class="btn btn-primary">
              Next
            </button>
          </div>
        </div>
      </form>
      </div>
      <!-- End of Main Container -->
    </main>
  </body>

</x-layout>