<x-layout>
  @auth
    <section class="md:pt-36 py-24 bg-neutral-200">
      <div class="flex flex-col gap-7 justify-center items-center pt-10">
        <div class="space-y-1">
          <h1 class="text-5xl text-center">Welcome to Barangay Nagkaisang Nayon!</h1>
          <h3 class="text-center">Wachu gana du wedi bip bap bo?</h3>
        </div>
        <p class="w-full max-w-lg text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis
          recusandae voluptatum enim nam, ad, odio quae magnam excepturi, deleniti conse.</p>
      </div>
    </section>
    <!-- Services -->
    <section class="p-6 md:px-24 lg:px-36 md:py-24 py-16">
      <div class="space-y-1">
        <h1>Welcome back, Juan!</h1>
        <h4>What do you want to request?</h4>
      </div>
      <div class="grid md:grid-cols-4 grid-cols-2 gap-4 mt-12">
        <!-- A -->
        <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="A-modal"
          data-hs-overlay="#A-modal"
          class="btn btn-secondary w-full p-14 flex flex-col justify-center items-center rounded-2xl">
          <h2>A</h2>
          <p class="text-center">Barangay Chuchu</p>
        </button>
        <!-- B -->
        <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="A-modal"
          data-hs-overlay="#A-modal"
          class="btn btn-secondary w-full p-14 flex flex-col justify-center items-center rounded-2xl">
          <h2>B</h2>
          <p class="text-center">Barangay Chuchu</p>
        </button>
        <!-- C -->
        <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="A-modal"
          data-hs-overlay="#A-modal"
          class="btn btn-secondary w-full p-14 flex flex-col justify-center items-center rounded-2xl">
          <h2>C</h2>
          <p class="text-center">Barangay Chuchu</p>
        </button>
        <!-- D -->
        <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="A-modal"
          data-hs-overlay="#A-modal"
          class="btn btn-secondary w-full p-14 flex flex-col justify-center items-center rounded-2xl">
          <h2>D</h2>
          <p class="text-center">Barangay Chuchu</p>
        </button>
      </div>
    </section>
  @endauth
  <!-- Hero -->

</x-layout>
