document.addEventListener('DOMContentLoaded', function () {
  const defaultNavLinks = document.querySelectorAll('.default-nav-link');
  const sideNavLinks = document.querySelectorAll('.side-nav-link');

  // Function to set the active class based on the current hash
  function setActiveLink() {
    const currentHash = window.location.hash;

    // Remove active class from all default nav links
    defaultNavLinks.forEach(link => {
      link.classList.remove('text-red-500');
    });

    // Remove active class from all side nav links
    sideNavLinks.forEach(link => {
      link.classList.remove('text-red-500', 'bg-red-500/5', 'hover:bg-red-500/5');
    });

    // Add active class to the matching link in default nav
    if (currentHash) {
      const activeDefaultLink = document.querySelector(`.default-nav-link[href$="${currentHash}"]`);
      if (activeDefaultLink) {
        activeDefaultLink.classList.add('text-red-500');
      }

      // Add active class to the matching link in side nav
      const activeSideLink = document.querySelector(`.side-nav-link[href$="${currentHash}"]`);
      if (activeSideLink) {
        activeSideLink.classList.add('text-red-500', 'bg-red-500/5', 'hover:bg-red-500/5');
      }
    }
  }

  // Run the function when the page loads
  setActiveLink();

  // Run the function again whenever the hash changes (user clicks another link)
  window.addEventListener('hashchange', setActiveLink);
});
