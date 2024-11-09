<x-layout>
  @auth
  <section class="relative md:pt-36 py-24">
    <img src="https://images.unsplash.com/photo-1728582195927-c789cd39abad?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="absolute inset-0 w-full h-full object-cover z-0">
    <div class="relative flex flex-col gap-7 justify-center items-center pt-10 z-10">
      <div class="space-y-1">
        <h1 class="text-5xl text-center text-white">Welcome to Barangay Nagkaisang Nayon!</h1>
        <h3 class="text-center text-white">Wachu gana du wedi bip bap bo?</h3>
      </div>
      <p class="w-full max-w-lg text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis recusandae voluptatum enim nam, ad, odio quae magnam excepturi, deleniti conse.</p>
    </div>
  </section>
  <!-- Services -->
  <section class="p-6 md:px-24 lg:px-36 md:py-24 py-16">
    <div class="space-y-1">
      <h1>Welcome back, {{ auth()->user()->username }}!</h1>
      <h4>What do you want to request?</h4>
    </div>
    <div class="grid md:grid-cols-4 grid-cols-2 gap-4 mt-12">
      <!-- A -->
      <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="A-modal"
        data-hs-overlay="#A-modal"
        class="btn btn-ghost border border-blue-200/50 bg-blue-100/10 w-full p-12 flex flex-col justify-center items-center rounded-2xl">
        <h2>A</h2>
        <p class="text-center text-blue-500 font-medium md:text-xl text-lg">Barangay Clearance</p>
      </button>
      <!-- B -->
      <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="B-modal"
        data-hs-overlay="#B-modal"
        class="btn btn-ghost border border-blue-200/50 bg-blue-100/10 w-full p-12 flex flex-col justify-center items-center rounded-2xl">
        <h2>B</h2>
        <p class="text-center text-blue-500 font-medium md:text-xl text-lg">Barangay Certificate</p>
      </button>
      <!-- C -->
      <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="C-modal"
        data-hs-overlay="#C-modal"
        class="btn btn-ghost border border-blue-200/50 bg-blue-100/10 w-full p-12 flex flex-col justify-center items-center rounded-2xl">
        <h2>C</h2>
        <p class="text-center text-blue-500 font-medium md:text-xl text-lg">Certificate of Indigency</p>
      </button>
      <!-- D -->
      <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="D-modal"
        data-hs-overlay="#D-modal"
        class="btn btn-ghost border border-blue-200/50 bg-blue-100/10 w-full p-12 flex flex-col justify-center items-center rounded-2xl">
        <h2>D</h2>
        <p class="text-center text-blue-500 font-medium md:text-xl text-lg">Barangay Identification</p>
      </button>
    </div>
  </section>
  @endauth
  <!-- Hero -->

</x-layout>