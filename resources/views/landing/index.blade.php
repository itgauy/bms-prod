<x-layout>
  <main class="md:pt-36 p-6 md:px-24 lg:px-36 md:py-24 py-16">
    <div class="py-12" id="home">
      <section>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
          <h1
            class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl dark:text-sky-950">
            WELCOME TO BARANGAY NAGKAISANG NAYON MANAGEMENT SYSTEM</h1>
          <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-sky-950">This is where
            community meets convenience. Our platform is designed to streamline services, enhance transparency, and
            empower our residents with accessible, efficient solutions for their legal needs.</p>
          <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#"
              class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-sky-950 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
              Get started
              <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </a>
            <a href="#about-us"
              class="py-3 px-5 sm:ms-4 text-sm font-medium text-white focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
              Learn more
            </a>
          </div>
        </div>
      </section>
      <div id="announcements" class="border border-red-500 md:h-16 h-12 opacity-0"></div>
    </div>
    <div class="py-12">
      <h1 class="text-3xl pl-10 pb-6 font-bold ">Announcements</h1>
      <p class="px-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam doloribus itaque delectus illum
        fuga culpa dolore ab dignissimos! Inventore iusto excepturi veniam voluptates quam ipsa, reiciendis earum
        temporibus. Vero, vel?</p>
      <div class="relative w-full max-w-4xl mx-auto overflow-hidden rounded-lg shadow-lg mt-24 z-10">
        <!-- Images -->
        <div id="carousel" class="flex transition-transform duration-500 max-w-full translate-x-0">
          <img src="https://placehold.co/600x500" alt="Slide 1" class="w-full">
          <img src="https://placehold.co/600x500" alt="Slide 2" class="w-full">
          <img src="https://placehold.co/600x500" alt="Slide 3" class="w-full">
        </div>
        <!-- Navigation Buttons -->
        <button id="prev"
          class="absolute top-1/2 left-0 transform -translate-y-1/2 p-2 bg-gray-700 bg-opacity-50 text-white rounded-full">
          &lt;
        </button>
        <button id="next"
          class="absolute top-1/2 right-0 transform -translate-y-1/2 p-2 bg-gray-700 bg-opacity-50 text-white rounded-full">
          &gt;
        </button>
      </div>
      <div id="services" class="border border-red-500 md:h-16 h-12 opacity-0"></div>
    </div>
    <div class="py-12" id="services">
      <h1 class="text-2xl sm:text-3xl pb-6 font-bold">Services</h1>
      <p class="pb-5 text-sm sm:text-base">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam doloribus itaque delectus illum fuga culpa
        dolore ab dignissimos! Inventore iusto excepturi veniam voluptates quam ipsa, reiciendis earum temporibus. Vero,
        vel?
      </p>

      <!-- SERVICE CARDS -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 pt-4">
        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-sky-950 dark:border-gray-700">
          <h5 class="mb-2 text-xl sm:text-2xl font-bold tracking-tight text-white">SERVICE 1</h5>
          <p class="font-normal text-white">Here are the biggest enterprise technology acquisitions of 2021 so far, in
            reverse chronological order.</p>
        </div>
        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-sky-950 dark:border-gray-700">
          <h5 class="mb-2 text-xl sm:text-2xl font-bold tracking-tight text-white">SERVICE 2</h5>
          <p class="font-normal text-white">Here are the biggest enterprise technology acquisitions of 2021 so far, in
            reverse chronological order.</p>
        </div>
        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-sky-950 dark:border-gray-700">
          <h5 class="mb-2 text-xl sm:text-2xl font-bold tracking-tight text-white">SERVICE 3</h5>
          <p class="font-normal text-white">Here are the biggest enterprise technology acquisitions of 2021 so far, in
            reverse chronological order.</p>
        </div>
        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-sky-950 dark:border-gray-700">
          <h5 class="mb-2 text-xl sm:text-2xl font-bold tracking-tight text-white">SERVICE 4</h5>
          <p class="font-normal text-white">Here are the biggest enterprise technology acquisitions of 2021 so far, in
            reverse chronological order.</p>
        </div>
      </div>
      <div id="officials" class="border border-red-500 md:h-16 h-12 opacity-0"></div>
    </div>
    <div class="py-12" id="services">
      <section id="officials" class="py-12">
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
              <img src="https://placehold.co/40x40" alt="treasurer" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Bong Marcossi</p>
              <p class="text-gray-600">Barangay Treasurer</p>
            </div>
            <!-- SECRETARY -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="secretary" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Enriles Railway</p>
              <p class="text-gray-600">Barangay Secretary</p>
            </div>
          </div>
          <!-- Kagawads -->
          <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8 mb-12">
            <h3 class="text-xl font-semibold text-center text-sky-950 mb-8 col-span-full">The Kagawads</h3>
            <!-- Kagawad 1 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 1" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Vic Knows</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 2 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 2" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Mang Boy</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 3 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 3" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Meow Meow</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 4 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 4" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Yasmin Padilla</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 5 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 5" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Ako Si Rizal</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 6 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 6" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Alice Baddie</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
            <!-- Kagawad 7 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Kagawad 7" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Bronny Jose</p>
              <p class="text-gray-600">Barangay Kagawad</p>
            </div>
          </div>

          <!-- Barangay Staff -->
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <h3 class="text-xl font-semibold text-center text-sky-950 mb-8 col-span-full">Barangay Staff</h3>
            <!-- Staff 1 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Staff 1" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Mark Cruz</p>
              <p class="text-gray-600">Barangay Staff</p>
            </div>
            <!-- Staff 2 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Staff 2" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Rosa Lopez</p>
              <p class="text-gray-600">Barangay Staff</p>
            </div>
            <!-- Staff 3 -->
            <div class="flex flex-col items-center">
              <img src="https://placehold.co/40x40" alt="Staff 3" class="w-32 h-32 rounded-full border-4 border-sky-950 mb-4">
              <p class="font-semibold text-sky-950">Luis Enriquez</p>
              <p class="text-gray-600">Barangay Staff</p>
            </div>
          </div>
        </div>
      </section>
      <div id="about-us" class="border border-red-500 md:h-16 h-12 opacity-0"></div>
    </div>
    <div class="py-12" id="services">
      <div class="sm:flex items-center ">
        <div class="sm:w-1/2 p-10">
          <div class="image object-center text-center">
            <img class="rounded-xl" src="https://placehold.co/620x300" alt="barangay pic">
          </div>
        </div>
        <div class="sm:w-1/2 p-5">
          <div class="text">
            <span class="text-gray-500 border-b-2 border-sky-950 uppercase">About us</span>
            <h2 class="my-4 font-bold text-3xl  sm:text-4xl ">About <span class="text-sky-950">Our Barangay</span>
            </h2>
            <p class="text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, commodi
              doloremque, fugiat illum magni minus nisi nulla numquam obcaecati placeat quia, repellat tempore
              voluptatum.
            </p>
          </div>
        </div>
      </div>
      <div id="contact-us" class="border border-red-500 md:h-16 h-12 opacity-0"></div>
    </div>
    <div class="py-12" id="services">
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
              <p class="text-sm text-red-500 hidden" id="subject-error">Subject should be between 5 and 100 characters.
              </p>
            </div>

            <!-- Message -->
            <div>
              <label for="message" class="block text-sm font-medium text-sky-950">Message</label>
              <textarea id="message" name="message" rows="4" required minlength="10" maxlength="500"
                class="mt-2 block w-full px-4 py-2 border rounded-lg focus:border-blue-500 focus:ring-blue-500"
                placeholder="Type your message..."></textarea>
              <p class="text-sm text-red-500 hidden" id="message-error">Message should be between 10 and 500 characters.
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