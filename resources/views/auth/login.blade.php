<x-layout>
  {{-- instead na ilagay pa lahat, alisin nalang kasi sa components/layout pwede na kunin --}}

  <body class="md:h-screen h-auto">
    <main class="flex justify-center items-center h-full md:p-6 p-0 md:pt-36 md:py-24 py-24">
      <!-- Main Container -->
      <div class="bg-blue-50/50 grid md:grid-cols-2 grid-cols-1 rounded-[1.9rem] w-full max-w-[70rem] md:p-2 p-4 gap-2">
        <!-- Left Child Container -->
        <div class="md:order-1 order-2 flex flex-col">
          <div class="flex-grow flex min-h-48 justify-center items-center">
            <p class="max-w-md mx-auto">Illustration diney</p>
          </div>
          <div class="border border-blue-300/40 bg-blue-200/10 py-4 px-5 rounded-[1.6rem] space-y-1.5">
            <h4>Womp Womp</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus obcaecati nemo nulla vero perspiciatis.
              Et,
              officia, voluptas nesciunt amet eos eaque dolorum sol.</p>
          </div>
        </div>
        <!-- Form -->
        <form action="{{ route('login') }}" method="post"
          class="md:order-2 order-1 md:p-12 lg:p-16 p-6 py-12 bg-white rounded-3xl space-y-6">
          @csrf
          <div class="space-y-2">
            <h2 class="text-center">Sample lang naman - Ma'am Manandeg</h2>
            <h4 class="text-center">Login to continue</h4>
          </div>
          <!-- Email -->
          <div class="md:space-y-2.5 space-y-1.5">
            <label for="email" class="input-label">Email</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}"
              class="default-input @error('email') !border-red-500 !bg-red-500/5 @enderror" placeholder="Your email">
            @error('email')
              <p style="color:red;font-size:0.8rem;margin-top:-0.1rem;">{{ $message }}</p>
            @enderror
          </div>
          <div class="md:space-y-2.5 space-y-1.5">
            <!-- Password -->
            <label for="password" class="input-label">Password</label>
            <div class="relative w-full">
              <input type="password" name="password" id="password"
                class="default-input @error('password') !border-red-500 !bg-red-500/5 @enderror"
                placeholder="Your password">
              @error('password')
                <p style="color:red;font-size:0.8rem;margin-top:-0.1rem;">{{ $message }}</p>
              @enderror
              <!-- Toggle Password Button -->
              <button type="button" onclick="togglePasswordVisibility()"
                class="absolute inset-y-0 end-0 flex items-center pe-3">
                <svg id="password-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="size-4 text-gray-500">
                  <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                  <path fill-rule="evenodd"
                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                    clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <div class="flex justify-between items-center">
              <!-- Checkbox -->
              <div class="flex items-center">
                <input type="checkbox" class="checkbox-input" name="remember" id="remember">
                <label for="remember" class="text-sm ms-3">Remember me?</label>
              </div>
              <!-- Forgot Password -->
              <a href="#" class="link">Forgot Password?</a>
            </div>
          </div>
          @error('failed')
            <p style="color:red;font-size:0.8rem;">{{ $message }}</p>
          @enderror
          <!-- Submit -->
          <button class="btn btn-primary w-full">
            Login
          </button>
          <!-- Additionals -->
          <p class="text-sm text-center">Don't have an account yet? <br><a href="{{ route('register') }}"
              class="link">Sign up here</a></p>
        </form>
        <!-- End of Form -->
      </div>
      <!-- End of Main Container -->

    </main>
    <!-- Toggle Password Script -->
    <script>
      let passwordVisible = false;

      function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const passwordIcon = document.getElementById('password-icon');

        if (passwordVisible) {
          passwordInput.type = 'password';
          passwordIcon.innerHTML = `
      <!-- Invisible Password Icon -->
      <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
      <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
    `;
        } else {
          passwordInput.type = 'text';
          passwordIcon.innerHTML = `
      <!-- Visible Password Icon -->
      <path d="M3.53 2.47a.75.75 0 0 0-1.06 1.06l18 18a.75.75 0 1 0 1.06-1.06l-18-18ZM22.676 12.553a11.249 11.249 0 0 1-2.631 4.31l-3.099-3.099a5.25 5.25 0 0 0-6.71-6.71L7.759 4.577a11.217 11.217 0 0 1 4.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113Z" />
      <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0 1 15.75 12ZM12.53 15.713l-4.243-4.244a3.75 3.75 0 0 0 4.244 4.243Z" />
      <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 0 0-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 0 1 6.75 12Z" />
    `;
        }
        passwordVisible = !passwordVisible;
      }
    </script>
  </body>

</x-layout>
