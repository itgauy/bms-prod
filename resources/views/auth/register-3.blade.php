<x-layout>
  {{-- instead na ilagay pa lahat, alisin nalang kasi sa components/layout pwede na kunin --}}

  <body class="md:h-screen h-auto">
    <main class="flex justify-center items-center h-full md:p-6 p-4 md:pt-36 md:py-24 py-24">
      <!-- Main Container -->
      <form action="{{ route('register-3') }}" method="post"
        class="md:px-12 lg:px-8 px-6 md:pb-12 lg:pb-8 pb-6 pt-1 shadow-lg shadow-neutral-100/60 bg-white rounded-3xl space-y-7 w-full max-w-3xl"
        enctype="multipart/form-data">
        @csrf
        <div class="space-y-1">
          <h2>Registration Form</h2>
          <p>asdfasdfasdf</p>
        </div>

        <!-- Stepper -->
        <ul class="relative flex flex-row gap-x-2">
          <!-- Step 1 / Account Information -->
          <li class="shrink basis-0 flex-1 group">
            <div class="min-w-10 min-h-10 w-full inline-flex items-center text-xs align-middle">
              <span
                class="size-10 flex justify-center items-center shrink-0 bg-green-500 font-bold text-white rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                  stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                </svg>
              </span>
              <div class="ms-2 w-full h-px flex-1 bg-green-300 group-last:hidden"></div>
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
              <span
                class="size-10 flex justify-center items-center shrink-0 bg-green-500 font-bold text-white rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                  stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                </svg>
              </span>
              <div class="ms-2 w-full h-px flex-1 bg-green-300 group-last:hidden"></div>
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
          <!-- Step 3 / Check & Submit -->
          <li class="shrink basis-0 flex-1 group">
            <div class="min-w-10 min-h-10 w-full inline-flex items-center text-xs align-middle">
              <span
                class="size-10 flex justify-center items-center shrink-0 bg-green-500 font-bold text-white rounded-full">
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

        <div class="pt-4">
          <!-- Name, Email and Username -->
          <div class="grid md:grid-cols-2 grid-cols-1 gap-4 border-t pt-2">
            <div>
              <p class="text-neutral-500/80">Complete Name</p>
              <p>{{ $registerData['first_name'] ?? '' }} {{ $registerData['middle_name'] ?? '' }}
                {{ $registerData['last_name'] ?? '' }} {{ $registerData['suffix'] ?? '' }}</p>
            </div>
            <div>
              <p class="text-neutral-500/80">Email Address</p>
              <p>{{ $registerData['email'] ?? '' }}</p>
            </div>
            <div>
              <p class="text-neutral-500/80">Username</p>
              <p>{{ $registerData['username'] ?? '' }}</p>
            </div>
          </div>

          <!-- Address -->
          <p class="border-t pt-2 mt-4 font-medium  text-neutral-500">Address</p>
          <p>{{ $registerData['street'] ?? '' }} {{ $registerData['sitio'] ?? '' }} {{ $registerData['village'] ?? '' }}
          </p>

          <!-- Contact, Emergency Contact Number, Emergency Contact Name -->
          <div class="grid md:grid-cols-2 grid-cols-1 gap-4 border-t pt-2 mt-4">
            <div>
              <p class="text-neutral-500/80">Contact number</p>
              <p>{{ $registerData['contact_num'] ?? '' }}</p>
            </div>
            <div>
              <p class="text-neutral-500/80">Emergency contact's name</p>
              <p>{{ $registerData['em_contact_name'] ?? '' }}</p>
            </div>
            <div>
              <p class="text-neutral-500/80">Emergency contact's no.</p>
              <p>{{ $registerData['em_contact_num'] ?? '' }}</p>
            </div>
          </div>

          <!-- Ohter relevant Information -->
          <div class="grid grid-cols-2 gap-4 border-t pt-2 mt-4">
            <div>
              <p class="text-neutral-500/80">Birthdate</p>
              <p>{{ $registerData['birthdate'] ?? '' }}</p>
            </div>
            <div>
              <p class="text-neutral-500/80">Birth place</p>
              <p>{{ $registerData['birthplace'] ?? '' }}</p>
            </div>
            <div>
              <p class="text-neutral-500/80">Civil Status</p>
              <p>{{ $registerData['civil_status'] ?? '' }}</p>
            </div>
            <div>
              <p class="text-neutral-500/80">Gender</p>
              <p>{{ $registerData['gender'] ?? '' }}</p>
            </div>
            <div>
              <p class="text-neutral-500/80">Religion</p>
              <p>{{ $registerData['religion'] ?? '' }}</p>
            </div>
            <div>
              <p class="text-neutral-500/80">Occupation</p>
              <p>{{ $registerData['occupation'] ?? '' }}</p>
            </div>
          </div>

          <!-- Verification Details -->
          <div class="grid md:grid-cols-2 grid-cols-1 gap-4 border-t pt-2 mt-4">
            <div>
              <p class="text-neutral-500/80">Classiciation Status</p>
              <p>{{ $registerData['classification_status'] ?? '' }}</p>
              <!-- 4PS WHEN ULIT -->
            </div>
            <div>
              <p class="text-neutral-500/80">Residency Status</p>
              <p>{{ $registerData['user_type'] ?? '' }}</p>
            </div>
            <div>
              <p class="text-neutral-500/80">Valid ID</p>
              <p>{{ $registerData['valid_id'] ?? '' }}</p>
            </div>
            <div>
              <p class="text-neutral-500/80">ID Number</p>
              <p>{{ $registerData['id_num'] ?? '' }}</p>
            </div>
            {{-- <div class="opacity-0"></div> <!-- Block lang iteyyyy for alignment ng imeyds --> Di na need!!!!! --}}
            <div>
              <p class="text-neutral-500/80">Picture of Barangay ID</p>
              <img src="https://placeholder.co/300x200" alt="Sample ID" class="mt-2 w-full h-auto rounded-md">
            </div>
            <div>
              <p class="text-neutral-500/80">Picture of Barangay ID while holding</p>
              <img src="https://placeholder.co/300x200" alt="Sample ID" class="mt-2 w-full h-auto rounded-md">
            </div>
          </div>
          <!-- Buttons -->
          <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
            <a href="{{ route('register-2') }}" class="btn btn-secondary">Back</a>
            <button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false"
              aria-controls="register-modal" data-hs-overlay="#register-modal">
              Submit
            </button>
          </div>
        </div>
      </form>
      </div>
      <!-- End of Main Container -->
    </main>
  </body>

</x-layout>
