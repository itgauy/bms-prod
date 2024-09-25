document.addEventListener('DOMContentLoaded', function () {
  const defaultNavLinks = document.querySelectorAll('.default-nav-link');
  const sideNavLinks = document.querySelectorAll('.side-nav-link');


  function setActiveLink() {
    const currentUrl = window.location.href;
    const currentHash = window.location.hash;


    defaultNavLinks.forEach(link => {
      link.classList.remove('text-red-500');
    });


    sideNavLinks.forEach(link => {
      link.classList.remove('text-red-500', 'bg-red-500/5', 'hover:bg-red-500/5');
    });


    if (currentHash) {
      const activeDefaultLink = document.querySelector(`.default-nav-link[href$="${currentHash}"]`);
      if (activeDefaultLink) {
        activeDefaultLink.classList.add('text-red-500');
      }

      const activeSideLink = document.querySelector(`.side-nav-link[href$="${currentHash}"]`);
      if (activeSideLink) {
        activeSideLink.classList.add('text-red-500', 'bg-red-500/5', 'hover:bg-red-500/5');
      }
    }


    defaultNavLinks.forEach(link => {
      if (link.href === currentUrl) {
        link.classList.add('text-red-500');
      }
    });

    sideNavLinks.forEach(link => {
      if (link.href === currentUrl) {
        link.classList.add('text-red-500', 'bg-red-500/5', 'hover:bg-red-500/5');
      }
    });
  }


  setActiveLink();
  // Run the function again whenever the hash changes (user clicks another link)
  window.addEventListener('hashchange', setActiveLink);
  // Run the function again whenever the page's URL changes (for non-hash links)
  window.addEventListener('popstate', setActiveLink);
});
