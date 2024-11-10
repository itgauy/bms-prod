@if (session()->has('success'))
  <div id="reg-success" class="bg-blue-950/30 size-full fixed top-0 start-0 z-50 overflow-x-hidden overflow-y-auto"
    role="dialog" tabindex="-1" aria-labelledby="reg-success-label">
    <div class="mt-7 ease-out transition-all sm:max-w-sm sm:w-full m-3 sm:mx-auto">
      <!-- Modal Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl">
        <!-- Modal Header -->
        <div class="flex flex-col gap-4 items-center justify-center text-center p-7">
          <h4 id="reg-success-label">
            Registration Success
          </h4>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="text-green-500 size-24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          <p class="text-center">You have successfully registered and logged in!</p>
        </div>
        <!-- Modal Content -->
        <div class="overflow-y-auto pb-7 flex justify-center gap-7">
          <div class="items-center gap-4 flex">
            <button class="btn btn-success" id="close-btn">Okay</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const modal = document.querySelector('#reg-success');
    const closeBtn = document.querySelector('#close-btn');

    closeBtn.addEventListener('click', () => {
      modal.style.display = 'none';
    });
  </script>
@endif
