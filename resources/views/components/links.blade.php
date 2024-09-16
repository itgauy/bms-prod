<!-- Links -->
<ul class="flex items-center gap-10 {{ $extraClasses ?? '' }}">
  <li><a href="#">Announcements</a></li>
  <li><a href="#">Services</a></li>
  <li><a href="#">Officials</a></li>
  <li><a href="#">About us</a></li>
  <li><a href="#">Contact us</a></li>
</ul>
<!-- Login and Register Buttons -->
<div class="flex items-center gap-4 {{ $extraClasses ?? '' }}">
  <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
  <a href="{{ route('register') }}" class="btn btn-primary">Register
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
      <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
    </svg>
  </a>
</div>