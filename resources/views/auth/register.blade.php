<x-layout>
  {{-- instead na ilagay pa lahat, alisin nalang kasi sa components/layout pwede na kunin --}}

  <body class="md:h-screen h-auto">
    <main class="flex justify-center items-center h-full md:p-6 p-4">
      <!-- Main Container -->
      <form class="md:p-12 lg:p-16 p-6 shadow-lg shadow-neutral-100/60 bg-white rounded-3xl space-y-6 w-full max-w-3xl">
        <h2>Home Owner Registration</h2>
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
          <!-- Username -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="username" class="input-label">Username</label>
            <input type="text" id="username" class="default-input" placeholder="E.g. JohnDoe123">
          </div>
          <!-- Email -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="email" class="input-label">Email Address</label>
            <input type="email" id="email" class="default-input" placeholder="E.g. john.doe@email.com">
          </div>
          <div class="md:col-span-2 col-span-1 gap-x-5 grid md:grid-cols-2 grid-cols-1">
            <!-- Password -->
            <div class="md:space-y-2.5 space-y-1.5 md:pb-0 pb-5">
              <label for="password" class="input-label">Password</label>
              <input type="password" id="password" class="default-input" placeholder="Your Password">
            </div>
            <!-- Confirm Password -->
            <div class="md:space-y-2.5 space-y-1.5">
              <label for="confirm-password" class="input-label">Confirm Password</label>
              <input type="password" id="confirm-password" class="default-input" placeholder="Your Password">
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
            <button type="button" class="btn btn-primary">
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
