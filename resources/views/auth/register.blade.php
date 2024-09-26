<x-layout>
  {{-- instead na ilagay pa lahat, alisin nalang kasi sa components/layout pwede na kunin --}}

  <body class="md:h-screen h-auto">
    <main class="flex justify-center items-center h-full md:p-6 p-4 md:pt-36 md:py-24 py-24">
      <!-- Main Container -->
      <form action="{{ route('register') }}" method="post"
        class="md:p-12 lg:p-8 p-6 shadow-lg shadow-neutral-100/60 bg-white rounded-3xl space-y-6 w-full max-w-3xl">
        @csrf

        <h2>Registration Form</h2>
        <div class="flex items-start gap-4">
          <span class="flex items-center justify-center w-8 h-8 border border-neutral-300 rounded-full shrink-0">
            1
          </span>
          <div>
            <h3 class="font-medium">Account Information</h3>
            <p>Wachu gana du we du bip.</p>
          </div>
        </div>
        </div>
        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-5 md:gap-y-6 gap-y-5 pt-4">
          <!-- User Type -->
          <div class="md:col-span-2 col-span-1 md:space-y-2.5 space-y-1.5">
            <label for="home-owner" class="input-label">Are you registering as?</label>
            <div class="grid grid-cols-2 gap-x-5">
              <label for="home-owner" class="grouped-radio @error('user_type') !border-red-500 !bg-red-500/5 @enderror">
                <div class="flex items-center gap-3">
                  <input id="home-owner" type="radio" name="user_type" value="home-owner" class="radio-input"
                    {{ old('user_type') == 'home-owner' ? 'checked' : '' }} />
                  <span class="font-medium">Home Owner</span>
                </div>
              </label>
              <label for="renter-tenant"
                class="grouped-radio @error('user_type') !border-red-500 !bg-red-500/5 @enderror">
                <div class="flex items-center gap-3">
                  <input id="renter-tenant" type="radio" name="user_type" value="renter-tenant" class="radio-input"
                    {{ old('user_type') == 'renter-tenant' ? 'checked' : '' }} />
                  <span class="font-medium">Renter/Tenant</span>
                </div>
              </label>
              @error('user_type')
                <p style="color:red;font-size:0.8rem;margin-top:-0.1rem;">{{ 'Choose at least one category.' }}</p>
              @enderror
            </div>
          </div>


          <!-- Username -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="username" class="input-label">Username</label>
            <input type="text" name="username" id="username"
              class="default-input @error('username') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. JohnDoe123" value="{{ old('username') }}">
            @error('username')
              <p style="color:red;font-size:0.8rem;margin-top:-0.1rem;">{{ $message }}</p>
            @enderror
          </div>
          <!-- Email -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="email" class="input-label">Email Address</label>
            <input type="text" name="email" id="email"
              class="default-input @error('email') !border-red-500 !bg-red-500/5 @enderror"
              placeholder="E.g. john.doe@email.com" value="{{ old('email') }}">
            @error('email')
              <p style="color:red;font-size:0.8rem;margin-top:-0.1rem;">{{ $message }}</p>
            @enderror
          </div>
          <div class="md:col-span-2 col-span-1 gap-x-5 grid md:grid-cols-2 grid-cols-1">
            <!-- Password -->
            <div class="md:space-y-2.5 space-y-1.5 md:pb-0 pb-5">
              <label for="password" class="input-label">Password</label>
              <input type="password" name="password" id="password"
                class="default-input @error('password') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="Your Password">
              @error('password')
                <p style="color:red;font-size:0.8rem;margin-top:-0.1rem;">{{ $message }}</p>
              @enderror
            </div>
            <!-- Confirm Password -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="password_confirmation" class="input-label">Confirm Password</label>
              <input type="password" name="password_confirmation" id="password_confirmation"
                class="default-input  @error('password') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="Your Password">
            </div>
            <!-- Checkbox -->
            <div class="flex items-center pt-2.5">
              <input type="checkbox" class="checkbox-input" id="remember-me">
              <label for="remember-me" class="text-sm ms-3">Show password</label>
            </div>
          </div>
          <!-- Buttons -->
          <div class="md:col-span-2 col-span-1 flex justify-end gap-4">
            <a href="{{ route('login') }}" class="btn btn-secondary">Back</a>
            <button class="btn btn-primary">
              Register
            </button>
          </div>
        </div>
      </form>
      </div>
      <!-- End of Main Container -->
    </main>
  </body>

</x-layout>
