<x-layout>


  <body class="md:h-screen h-auto">
    <main class="flex justify-center items-center h-full md:p-6 p-4 md:pt-36 md:py-24 py-24">
      <!-- Main Container -->
      <form action="{{ route('register') }}" method="post"
        class="md:px-12 lg:px-8 px-6 md:pb-12 lg:pb-8 pb-6 pt-1 border border-blue-600/5 bg-white shadow-xl shadow-blue-500/5 rounded-3xl space-y-7 w-full max-w-3xl">
        @csrf
        <div class="space-y-1">
          <h2>Account Registration</h2>
          <p>Fill out the form to proceed. Fields marked with * are required.</p>
        </div>

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
                    {{ old('user_type') == 'home-owner' ? 'checked' : '' }} />
                  <span class="font-medium">Home Owner</span>
                </div>
              </label>
              <label for="renter-tenant-input"
                class="grouped-radio {{ $errors->has('user_type') ? '!border-red-500 !bg-red-500/5' : '' }}">
                <div class="flex items-center gap-3">
                  <input id="renter-tenant-input" type="radio" name="user_type" value="renter-tenant"
                    class="radio-input" {{ old('user_type') == 'renter-tenant' ? 'checked' : '' }} />
                  <span class="font-medium">Renter/Tenant</span>
                </div>
              </label>
              @error('user_type')
                <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ 'Choose at least one category.' }}</p>
              @enderror
            </div>
          </div>

          <!-- First name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="first_name" class="input-label">First name <span class="text-red-500">*</span></label>
            <input type="text" name="first_name" id="first_name"
              class="default-input @error('first_name') !border-red-500 !bg-red-500/5 @enderror" placeholder="E.g. JUAN"
              value="{{ old('first_name') }}">
            @error('first_name')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Middle name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="middle_name" class="input-label">Middle name <span
                class="text-neutral-400 text-xs">(Optional)</span></label>
            <input type="text" name="middle_name" id="middle_name" class="default-input" placeholder="E.g. SANTOS"
              value="{{ old('middle_name') }}">
          </div>
          <!-- Last name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="last_name" class="input-label">Last name <span class="text-red-500">*</span></label>
            <input type="text" name="last_name" id="last_name"
              class="default-input @error('last_name') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. DELA CRUZ" value="{{ old('last_name') }}">
            @error('last_name')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Suffix name -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="suffix" class="input-label">Suffix <span
                class="text-neutral-400 text-xs">(Optional)</span></label>
            <input type="text" name="suffix" id="suffix" class="default-input" placeholder="E.g. JR"
              value="{{ old('suffix') }}">
          </div>
          <!-- Username -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="username" class="input-label">Username <span class="text-red-500">*</span></label>
            <input type="text" name="username" id="username"
              class="default-input exempt-uppercase @error('username') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. JuanDelaCruz123 (No special characters)" value="{{ old('username') }}">
            @error('username')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Email -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="email" class="input-label">Email Address <span class="text-red-500">*</span></label>
            <input type="text" name="email" id="email"
              class="default-input exempt-uppercase @error('email') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. juan.delacruz@email.com" value="{{ old('email') }}">
            @error('email')
              <p style="color:red;font-size:0.8rem;margin-top:0.1px;">{{ $message }}</p>
            @enderror
          </div>
          <div class="md:col-span-2 col-span-1 gap-x-5 grid md:grid-cols-2 grid-cols-1">
            <!-- Password -->
            <div class="md:space-y-2.5 space-y-1.5 md:pb-0 pb-5">
              <label for="password" class="input-label">Password <span class="text-red-500">*</span></label>
              <input type="password" name="password" id="password"
                class="default-input exempt-uppercase @error('password') !border-red-500 !bg-red-500/5 @enderror"
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
                class="default-input exempt-uppercase @error('password') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="Your Confirmed Password">
            </div>
          </div>
          <!-- Buttons -->
          <div class="md:col-span-2 col-span-1 flex justify-end gap-4 mt-6">
            <a href="{{ route('login') }}" class="btn btn-secondary">Back</a>
            <button class="btn btn-primary next-button">
              Register
            </button>
          </div>
        </div>
      </form>
      </div>
      <!-- End of Main Container -->
    </main>
  </body>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const letterFields = document.querySelectorAll('input[type="text"]:not(.exempt-uppercase)');

      letterFields.forEach(field => {
        field.addEventListener('input', function() {
          this.value = this.value.replace(/[^a-zA-Z\s]/g, '').toUpperCase();
        });
      });
    });

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
    // window.addEventListener('beforeunload', function() {
    //   fetch('/clear-session', {
    //     method: 'POST',
    //     headers: {
    //       'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
    //     }
    //   });
    // });
  </script>

</x-layout>
