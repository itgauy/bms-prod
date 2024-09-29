document.addEventListener("DOMContentLoaded", function () {
  const tabButtons = document.querySelectorAll('[role="tab"]');
  const tabs = document.querySelectorAll('[role="tabpanel"]');

  // Function to show the selected tab
  function showTab(tabId) {
    tabs.forEach((tab) => {
      tab.classList.add('hidden');
      if (tab.id === tabId) {
        tab.classList.remove('hidden');
      }
    });

    tabButtons.forEach((button) => {
      const isActive = button.getAttribute('data-tab-id') === tabId;
      button.setAttribute('aria-selected', isActive ? 'true' : 'false');

      // Manage the active styles
      if (isActive) {
        button.classList.add('active');
      } else {
        button.classList.remove('active');
      }
    });
  }

  // Load the last active tab from localStorage
  const lastActiveTab = localStorage.getItem('activeTab');
  if (lastActiveTab) {
    showTab(lastActiveTab);
  } else {
    // Show the default tab if no active tab is stored
    showTab('dashboard');
  }

  // Save the active tab to localStorage on click
  tabButtons.forEach((button) => {
    button.addEventListener('click', function () {
      const tabId = this.getAttribute('data-tab-id');
      showTab(tabId);
      localStorage.setItem('activeTab', tabId);
    });
  });
});