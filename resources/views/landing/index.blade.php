<x-layout>
  <main class="md:pt-36 p-6 md:px-24 lg:px-36 md:py-24 py-16">

    <!-- Hero Section -->
    <div class="md:py-12 py-8" id="home">
      <div class="grid md:grid-cols-2 grid-cols-1 gap-12">
        <div class="space-y-2.5">
          <span
            class="inline-flex items-center gap-1.5 rounded-full border border-blue-200 bg-blue-50 px-2.5 py-1 text-sm text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-3.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
            </svg>
            Official website
          </span>
          <h1 class="text-5xl leading-[1.2] font-bold">A Community That Cares: Nagkaisang Nayon</h1>
          <p>Discover the warmth of a close-knit community. Barangay Nagkaisang Nayon is more than just a place; it's a
            home where neighbors become family. Experience the genuine care and support that define our vibrant
            neighborhood.</p>
          <div class="flex items-center gap-3 pt-8">
            <button class="btn btn-primary">
              Get Started
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
              </svg>
            </button>
            <button class="btn btn-secondary">About us</button>
          </div>
        </div>
        <div class="md:h-96 h-64">
          <img src="{{ asset('images/hero-illustration.png') }}" alt="Hero Illustration"
            class="w-full h-full object-cover rounded-2xl">
        </div>
      </div>
      <div id="about-us" class="border border-red-500 md:h-16 h-12 opacity-0"></div>
    </div>

    <!-- About Us -->
    <div class="md:py-12 py-8" id="about-us">
      <div class="grid md:grid-cols-2 grid-cols-1 gap-8">
        <div class="w-full h-94">
          <img src="https://placehold.co/50x40" alt="" class="w-full object-cover h-full rounded-2xl">
        </div>
        <div class="space-y-7">
          <div class="space-y-4">
            <h2>Our Story</h2>
            <p class="text-sm">Quezon City Ordinance #4942 created Barrio Nagkaisang Nayon in Novaliches, Quezon City
              and approved on January 28, 1962 by Quezon City Vice Mayor Vicente O. Novales. Then on September 24, 1974
              under Presidential Decree #557 converted all existing barrios into barangays and recognized as basic
              political unit of Area IX, District II of Quezon City.</p>
            <a href="#" class="btn btn-secondary">Read more...</a>
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div class="flex flex-col gap-[3px] border px-6 py-5 rounded-2xl bg-blue-300/5 border-blue-400/30">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 text-gray-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
              </svg>
              <h5 class="text-medium text-gray-600">Population</h5>
              <h1 class="text-blue-500 mt-3">53,781</h1>
            </div>
            <div class="flex flex-col gap-[3px] border px-6 py-5 rounded-2xl bg-green-300/5 border-green-400/30">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 text-gray-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
              </svg>
              <h5 class="text-medium text-gray-600">Area</h5>
              <h1 class="text-green-500 mt-3">2.718 km²</h1>
            </div>
            <div class="flex flex-col gap-[3px] border px-6 py-5 rounded-2xl bg-amber-300/5 border-amber-400/30">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 text-gray-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
              </svg>
              <h5 class="text-medium text-gray-600">Population Density</h5>
              <h1 class="text-amber-500 mt-3">19,788/km²</h1>
            </div>
            <div class="flex flex-col gap-[3px] border px-6 py-5 rounded-2xl bg-rose-300/5 border-rose-400/30">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6 text-gray-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
              </svg>
              <h5 class="text-medium text-gray-600">Annual Population Change</h5>
              <h1 class="text-rose-500 mt-3">2.0%</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="grid md:grid-cols-2 grid-cols-1 mt-20 gap-5">
        <div class="flex flex-col items-center justify-center text-center space-y-3">
          <h2 class="text-blue-500">Vision</h2>
          <p class="text-sm w-full max-w-md">Barangay Nagkaisang Nayon envisions a united, prosperous, and progressive
            community guided by transparent, accountable leadership, fostering a safe, inclusive, and child-friendly
            environment under the grace of Almighty God.
          </p>
        </div>
        <div class="flex flex-col items-center justify-center text-center space-y-3">
          <h2 class="text-blue-500">Mission</h2>
          <p class="text-sm w-full max-w-md">To promote good governance and solidarity by empowering citizens, ensuring
            gender responsiveness, and prioritizing safety, development, and prosperity for all.
          </p>
        </div>
      </div>
      <div id="services" class="border border-red-500 md:h-16 h-12 opacity-0"></div>
    </div>

    <!-- Our Services -->
    <div class="md:py-12 py-8" id="services">
      <div class="flex gap-4 items-center flex-col justify-center">
        <h1 class="text-center">Our Services</h1>
        <p class="text-sm text-center w-full max-w-xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat
          dolore cum ipsum, assumenda consequatur qui eveniet quibusdam rem! Quam voluptatem aperiam inventore in nihil
          possimus molestiae dolores sed fugiat facere?</p>
      </div>
      <div class="grid md:grid-cols-4 grid-cols-2 gap-4 mt-12">
        <!-- A -->
        <button type="button" aria-haspopup="dialog"
          class="btn border-b-4 border-b-transparent hover:bg-blue-100/5 hover:border-b-4 hover:border-b-blue-500 border border-blue-600/5 bg-white shadow-lg shadow-blue-500/5 w-full p-4 flex flex-col justify-between items-center rounded-2xl">
          <div class="w-full h-3/4 flex items-center justify-center rounded-xl p-4">
            <img src="{{ asset('images/illustration-1.png') }}" alt="" class="w-24 h-auto">
          </div>
          <p class="text-center text-blue-500 font-medium md:text-xl text-lg py-3">Barangay Clearance</p>
        </button>
        <!-- B -->
        <button type="button"
          class="btn border-b-4 border-b-transparent hover:bg-blue-100/5 hover:border-b-4 hover:border-b-blue-500 border border-blue-600/5 bg-white shadow-lg shadow-blue-500/5 w-full p-4 flex flex-col justify-between items-center rounded-2xl">
          <div class="w-full h-3/4 flex items-center justify-center rounded-xl p-4">
            <img src="{{ asset('images/illustration-3.png') }}" alt="" class="w-24 h-auto">
          </div>
          <p class="text-center text-blue-500 font-medium md:text-xl text-lg py-3">Barangay Certificate</p>
        </button>
        <!-- C -->
        <button type="button"
          class="btn border-b-4 border-b-transparent hover:bg-blue-100/5 hover:border-b-4 hover:border-b-blue-500 border border-blue-600/5 bg-white shadow-lg shadow-blue-500/5 w-full p-4 flex flex-col justify-between items-center rounded-2xl">
          <div class="w-full h-3/4 flex items-center justify-center rounded-xl p-4">
            <img src="{{ asset('images/illustration-2.png') }}" alt="" class="w-24 h-auto">
          </div>
          <p class="text-center text-blue-500 font-medium md:text-xl text-lg py-3">Certificate of Indigency</p>
        </button>
        <!-- D -->
        <button type="button"
          class="btn border-b-4 border-b-transparent hover:bg-blue-100/5 hover:border-b-4 hover:border-b-blue-500 border border-blue-600/5 bg-white shadow-lg shadow-blue-500/5 w-full p-4 flex flex-col justify-between items-center rounded-2xl">
          <div class="w-full h-3/4 flex items-center justify-center rounded-xl p-4">
            <img src="{{ asset('images/illustration-4.png') }}" alt="" class="w-14 h-auto">
          </div>
          <p class="text-center text-blue-500 font-medium md:text-xl text-lg py-3">Barangay Identification</p>
        </button>
      </div>
      <div id="announcements" class="border border-red-500 md:h-16 h-12 opacity-0"></div>
    </div>

    <!-- Announcements -->
    <div class="md:py-12 py-8">
      <!-- Slider -->
      <div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "isAutoPlay": true,
    "isDraggable": true
  }'
        class="relative">
        <div class="hs-carousel relative overflow-hidden w-full md:min-h-[31rem] min-h-[25rem] bg-white rounded-2xl">
          <div
            class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
            <!-- Carousel Content -->
            <div class="hs-carousel-slide">
              <div class="relative w-full md:h-[31rem] h-[25rem]">
                <img src="{{ asset('images/announcement-fade.png') }}" alt=""
                  class="z-10 absolute w-full h-full object-cover">
                <img src="{{ asset('images/sample-announcement-img.png') }}" alt=""
                  class="z-0 absolute w-full h-full object-cover">
                <div class="z-50 absolute px-20 py-12 space-y-4">
                  <h1 class=" text-white">Sample Title</h1>
                  <p class="w-full max-w-md text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab,
                    laboriosam inventore? Quos laboriosam est, iste obcaecati laudantium nulla eius. Quas eum velit,
                    iure rerum at quam expedita veniam consequatur numquam?</p>
                  <div class="flex gap-8 mt-4">
                    <p class="text-sm italic text-white">2024-11-15</p>
                    <p class="text-sm italic text-white">1:47 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="hs-carousel-slide">
              <div class="relative w-full md:h-[31rem] h-[25rem]">
                <img src="{{ asset('images/announcement-fade.png') }}" alt=""
                  class="z-10 absolute w-full h-full object-cover">
                <img src="{{ asset('images/sample-announcement-img.png') }}" alt=""
                  class="z-0 absolute w-full h-full object-cover">
                <div class="z-50 absolute px-20 py-12 space-y-4">
                  <h1 class=" text-white">Sample Title</h1>
                  <p class="w-full max-w-md text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab,
                    laboriosam inventore? Quos laboriosam est, iste obcaecati laudantium nulla eius. Quas eum velit,
                    iure rerum at quam expedita veniam consequatur numquam?</p>
                  <div class="flex gap-8 mt-4">
                    <p class="text-sm italic text-white">2024-11-15</p>
                    <p class="text-sm italic text-white">1:47 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="hs-carousel-slide">
              <div class="relative w-full md:h-[31rem] h-[25rem]">
                <img src="{{ asset('images/announcement-fade.png') }}" alt=""
                  class="z-10 absolute w-full h-full object-cover">
                <img src="{{ asset('images/sample-announcement-img.png') }}" alt=""
                  class="z-0 absolute w-full h-full object-cover">
                <div class="z-50 absolute px-20 py-12 space-y-4">
                  <h1 class=" text-white">Sample Title</h1>
                  <p class="w-full max-w-md text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab,
                    laboriosam inventore? Quos laboriosam est, iste obcaecati laudantium nulla eius. Quas eum velit,
                    iure rerum at quam expedita veniam consequatur numquam?</p>
                  <div class="flex gap-8 mt-4">
                    <p class="text-sm italic text-white">2024-11-15</p>
                    <p class="text-sm italic text-white">1:47 PM</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Carousel Buttons -->
        <button type="button"
          class="hs-carousel-prev hs-carousel-disabled:opacity-50 btn bg-blue-50/30 text-white hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-3 transform -translate-y-1/2 top-1/2 inline-flex justify-center items-center rounded-full size-[46px]">
          <span class="text-2xl" aria-hidden="true">
            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="m15 18-6-6 6-6"></path>
            </svg>
          </span>
          <span class="sr-only">Previous</span>
        </button>
        <button type="button"
          class="hs-carousel-next hs-carousel-disabled:opacity-50 btn bg-blue-50/30 text-white hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-3 transform -translate-y-1/2 top-1/2 inline-flex justify-center items-center rounded-full size-[46px]">
          <span class="sr-only">Next</span>
          <span class="text-2xl" aria-hidden="true">
            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </span>
        </button>
      </div>
      <div id="officials" class="border border-red-500 md:h-16 h-12 opacity-0"></div>
    </div>

    <!-- Officials -->
    <div class="md:py-12 py-8" id="officials">
      <section id="officials" class="py-14">
        <div class="max-w-6xl mx-auto px-6">
          <h1 class="text-3xl font-bold text-center text-sky-950 mb-8">Barangay Officials & Staff</h1>
          <!-- Barangay Captain -->
          <div class="text-center mb-12">
            <h3 class="text-xl font-semibold text-sky-950 mb-4">Barangay Captain</h3>
            <div class="flex justify-center items-center">
              <div class="flex flex-col items-center">
                <img src="https://placehold.co/40x40" alt="Barangay Captain"
                  class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
                <p class="font-semibold text-sky-950">Lebron Jose</p>
                <p class="text-gray-600">Barangay Captain</p>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8 mb-12">
            <!-- TREASURER -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="treasurer"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Bong Marcossi</p>
              <p class="text-gray-600">Barangay Treasurer</p>
            </div>
            <!-- SECRETARY -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="secretary"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Enriles Railway</p>
              <p class="text-gray-600">Barangay Secretary</p>
            </div>
          </div>
          <!-- Kagawads -->
          <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8 mb-12">
            <h3 class="text-xl font-semibold text-center text-sky-950 mb-8 col-span-full">The Kagawads</h3>
            <!-- Kagawad 1 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 1"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Vic Knows</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 2 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 2"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Mang Boy</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 3 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 3"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Meow Meow</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 4 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 4"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Yasmin Padilla</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 5 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 5"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Ako Si Rizal</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 6 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 6"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Alice Baddie</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 7 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 7"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Bronny Jose</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
          </div>

          <!-- Barangay Staff -->
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <h3 class="text-xl font-semibold text-center text-sky-950 mb-8 col-span-full">Barangay Staff</h3>
            <!-- Staff 1 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Staff 1"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Mark Cruz</p>
              <p class="text-gray-600">Barangay Staff</p>
            </div>
            <!-- Staff 2 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Staff 2"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Rosa Lopez</p>
              <p class="text-gray-600">Barangay Staff</p>
            </div>
            <!-- Staff 3 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Staff 3"
                class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Luis Enriquez</p>
              <p class="text-gray-600">Barangay Staff</p>
            </div>
          </div>
        </div>
      </section>
      <div id="contact-us" class="border border-red-500 md:h-16 h-12 opacity-0"></div>
    </div>

    <!-- Contact Us -->
    <div class="md:py-12 py-8" id="contact-us">
      <section>
        <div class="max-w-3xl mx-auto px-6">
          <h2 class="text-3xl font-bold text-center text-sky-950 mb-8">Contact Us</h2>
          <p class="text-center text-sky-950 mb-12">
            Have questions? We'd love to hear from you. Fill out the form below and we’ll get back to you as soon as
            possible.
          </p>

          <form id="contact-form" action="#" method="post" class="space-y-6" novalidate>
            <!-- Name -->
            <div>
              <label for="name" class="block text-sky-950">Name</label>
              <input type="text" id="name" name="name" required minlength="2" maxlength="50"
                class="mt-2 block w-full px-4 py-2 border rounded-lg focus:border-sky-950 focus:ring-sky-950"
                placeholder="Ex. Juan Dela Cruz" aria-required="true">
              <p class="text-sm text-red-500 hidden" id="name-error">Please enter a valid name (2-50 characters).</p>
            </div>

            <!-- Email -->
            <div>
              <label for="email" class="block text-sm font-medium text-sky-950">Email</label>
              <input type="email" id="email" name="email" required
                class="mt-2 block w-full px-4 py-2 border rounded-lg focus:border-blue-500 focus:ring-blue-500"
                placeholder="Ex. juandelacruz@gmail.com">
              <p class="text-sm text-red-500 hidden" id="email-error">Please enter a valid email address.</p>
            </div>

            <!-- Subject -->
            <div>
              <label for="subject" class="block text-sm font-medium text-sky-950">Subject</label>
              <input type="text" id="subject" name="subject" required minlength="5" maxlength="100"
                class="mt-2 block w-full px-4 py-2 border rounded-lg focus:border-blue-500 focus:ring-blue-500"
                placeholder="Title of Message">
              <p class="text-sm text-red-500 hidden" id="subject-error">Subject should be between 5 and 100
                characters.
              </p>
            </div>

            <!-- Message -->
            <div>
              <label for="message" class="block text-sm font-medium text-sky-950">Message</label>
              <textarea id="message" name="message" rows="4" required minlength="10" maxlength="500"
                class="mt-2 block w-full px-4 py-2 border rounded-lg focus:border-blue-500 focus:ring-blue-500"
                placeholder="Type your message..."></textarea>
              <p class="text-sm text-red-500 hidden" id="message-error">Message should be between 10 and 500
                characters.
              </p>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
              <button type="submit"
                class="px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-sky-950 dark:hover:bg-blue-600">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </main>
</x-layout>
