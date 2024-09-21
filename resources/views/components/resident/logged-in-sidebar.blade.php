<div class="flex flex-col border">
  <h3>Logged in</h3>
  Links
  <ul class="flex flex-col items-start gap-6">
    <li><a href="{{ route('home') }}#announcements" data-hs-overlay="#mobile-sidebar">Announcements</a></li>
    <li><a href="#" data-hs-overlay="#mobile-sidebar">Services</a></li>
    <li><a href="#" data-hs-overlay="#mobile-sidebar">Officials</a></li>
    <li><a href="#" data-hs-overlay="#mobile-sidebar">About us</a></li>
    <li><a href="#" data-hs-overlay="#mobile-sidebar">Contact us</a></li>
  </ul>
  Login and Register Buttons
  <div class="flex flex-col items-center gap-4">
    <a href="{{ route('login') }}" class="btn btn-secondary" data-hs-overlay="#mobile-sidebar">Login</a>
    <button class="btn btn-primary" data-hs-overlay="#mobile-sidebar">Register
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
        <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>
</div>