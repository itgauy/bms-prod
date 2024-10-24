<x-layout>
  {{-- instead na ilagay pa lahat, alisin nalang kasi sa components/layout pwede na kunin --}}

  <body class="md:h-screen h-auto">
    <main class="flex justify-center items-center h-full md:p-6 p-4 md:pt-36 md:py-24 py-24">
      <!-- Main Container -->
      <form action="{{ route('register-1') }}" method="post"
        class="md:px-12 lg:px-8 px-6 md:pb-12 lg:pb-8 pb-6 pt-1 shadow-xl shadow-blue-50/30 bg-white rounded-3xl space-y-7 w-full max-w-3xl">
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
              <span
                class="size-10 flex justify-center items-center shrink-0 bg-blue-500 font-bold text-white rounded-full">
                1
              </span>
              <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
            </div>
            <div class="mt-3">
              <span class="block font-medium">
                Step 1
              </span>
              <p class="text-gray-500 text-sm">
                Account Info.
              </p>
            </div>
          </li>
          <!-- Step 2 / Personal Information -->
          <li class="shrink basis-0 flex-1 group">
            <div class="min-w-10 min-h-10 w-full inline-flex items-center text-xs align-middle">
              <span
                class="size-10 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full">
                2
              </span>
              <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden"></div>
            </div>
            <div class="mt-3">
              <span class="block font-medium">
                Step 2
              </span>
              <p class="text-gray-500 text-sm">
                Personal Info.
              </p>
            </div>
          </li>
          <!-- Step 3 / Check & Submit -->
          <li class="shrink basis-0 flex-1 group">
            <div class="min-w-10 min-h-10 w-full inline-flex items-center text-xs align-middle">
              <span
                class="size-10 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full">
                3
              </span>
            </div>
            <div class="mt-3">
              <span class="block font-medium">
                Step 3
              </span>
              <p class="text-gray-500 text-sm">
                Check & Submit
              </p>
            </div>
          </li>
        </ul>
        <!-- End Stepper -->

        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-5 md:gap-y-6 gap-y-5 pt-4">
          <!-- User Type -->
          <div class="md:col-span-2 col-span-1 md:space-y-2.5 space-y-1.5">
            <label for="home-owner" class="input-label">Are you registering as? <span
                class="text-red-500">*</span></label>
            <div class="grid grid-cols-2 gap-x-5">
              <label for="home-owner"
                class="grouped-radio {{ $errors->has('user_type') ? '!border-red-500 !bg-red-500/5' : '' }}">
                <div class="flex items-center gap-3">
                  <input id="home-owner" type="radio" name="user_type" value="home-owner" class="radio-input"
                    {{ old('user_type', session('register_data.user_type')) == 'home-owner' ? 'checked' : '' }} />
                  <span class="font-medium">Home Owner</span>
                </div>
              </label>
              <label for="renter-tenant-input"
                class="grouped-radio {{ $errors->has('user_type') ? '!border-red-500 !bg-red-500/5' : '' }}">
                <div class="flex items-center gap-3">
                  <input id="renter-tenant-input" type="radio" name="user_type" value="renter-tenant"
                    class="radio-input"
                    {{ old('user_type', session('register_data.user_type')) == 'renter-tenant' ? 'checked' : '' }} />
                  <span class="font-medium">Renter/Tenant</span>
                </div>
              </label>
              @error('user_type')
                <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ 'Choose at least one category.' }}</p>
              @enderror
            </div>
          </div>



          <!-- Username -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="username" class="input-label">Username <span class="text-red-500">*</span></label>
            <input type="text" name="username" id="username"
              class="default-input @error('username') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. JuanDelaCruz123" value="{{ old('username', session('register_data.username')) }}">
            @error('username')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Email -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="email" class="input-label">Email Address <span class="text-red-500">*</span></label>
            <input type="text" name="email" id="email"
              class="default-input @error('email') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. juan.delacruz@email.com" value="{{ old('email', session('register_data.email')) }}">
            @error('email')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <div class="md:col-span-2 col-span-1 gap-x-5 grid md:grid-cols-2 grid-cols-1">
            <!-- Password -->
            <div class="md:space-y-2.5 space-y-1.5 md:pb-0 pb-5">
              <label for="password" class="input-label">Password <span class="text-red-500">*</span></label>
              <input type="password" name="password" id="password"
                class="default-input @error('password') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="Your Password">
              @error('password')
                <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Confirm Password -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="password_confirmation" class="input-label">Confirm Password <span
                  class="text-red-500">*</span></label>
              <input type="password" name="password_confirmation" id="password_confirmation"
                class="default-input  @error('password') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="Your Password">
            </div>
          </div>
          <!-- Buttons -->
          <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
            <a href="{{ route('login') }}" class="btn btn-secondary">Back</a>
            <button class="btn btn-primary next-button">
              Next
            </button>
          </div>
        </div>
      </form>
      </div>
      <!-- End of Main Container -->
    </main>
  </body>

  <script>
    var isNextClicked = false;

    window.addEventListener('beforeunload', function(e) {
      if (!isNextClicked) {
        var confirmationMessage = 'Are you sure you want to leave this page? Your data will be lost.';
        (e || window.event).returnValue = confirmationMessage; // Gecko + IE
        return confirmationMessage; // Webkit, Safari, Chrome
      }
    });

    document.querySelector('.next-button').addEventListener('click', function() {
      isNextClicked = true;
    });

    // Clear session data on leave
    window.addEventListener('beforeunload', function() {
      fetch('/clear-session', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
      });
    });
  </script>

</x-layout>
