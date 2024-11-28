<section class="space-y-4">
  <div class="grid md:grid-cols-4 grid-cols-2 gap-4">
    <!-- Total Population -->
    <div class="border p-4 rounded-xl border-blue-600/10 bg-white shadow-lg shadow-blue-400/5 space-y-3">
      <div class="space-y-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-700">
          <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
        </svg>
        <p class="text-sm">Total Population</p>
      </div>
      <h3 class="text-blue-500">53,781</h3>
    </div>
    <!-- Pending Applications -->
    <div class="border p-4 rounded-xl border-blue-600/10 bg-white shadow-lg shadow-blue-400/5 space-y-3">
      <div class="space-y-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-700">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859M12 3v8.25m0 0-3-3m3 3 3-3" />
        </svg>
        <p class="text-sm">Pending Applications</p>
      </div>
      <h3 class="text-blue-500">12</h3>
    </div>
    <!-- Registered Users -->
    <div class="border p-4 rounded-xl border-blue-600/10 bg-white shadow-lg shadow-blue-400/5 space-y-3">
      <div class="space-y-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-700">
          <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
        </svg>
        <p class="text-sm">Registered Residents</p>
      </div>
      <h3 class="text-blue-500">24</h3>
    </div>
    <!-- Registerd Staff -->
    <div class="border p-4 rounded-xl border-blue-600/10 bg-white shadow-lg shadow-blue-400/5 space-y-3">
      <div class="space-y-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-700">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
        </svg>
        <p class="text-sm">Registered Staff</p>
      </div>
      <h3 class="text-blue-500">12</h3>
    </div>
  </div>
  <!--  -->
  <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
    <div class="border p-4 rounded-xl border-blue-600/10 bg-white shadow-lg shadow-blue-400/5">
      <h5>Sitio Distribution</h5>
      <div class="flex justify-center items-center">
        <canvas id="sitio_distribution_chart" class="w-[23rem] h-auto"></canvas>
      </div>
    </div>
    <div class="border p-4 rounded-xl border-blue-600/10 bg-white shadow-lg shadow-blue-400/5 grid grid-cols-2 gap-4">
      <div class="flex flex-col w-full justify-between items-start rounded-lg border border-[#fecf9e]/80 bg-[#fecf9e]/10 p-4">
        <h5>Gitna</h5>
        <h1 class="text-[#ffb362] text-end w-full">1</h1>
      </div>
      <div class="flex flex-col w-full justify-between items-start rounded-lg border border-[#ffe7ab]/80 bg-[#ffe7ab]/10 p-4">
        <h5>Capri</h5>
        <h1 class="text-[#ffd365] text-end w-full">1</h1>
      </div>
      <div class="flex flex-col w-full justify-between items-start rounded-lg border border-[#a4dfde]/80 bg-[#a4dfde]/10 p-4">
        <h5>Damong Maliit</h5>
        <h1 class="text-[#50c3c1] text-end w-full">2</h1>
      </div>
      <div class="flex flex-col w-full justify-between items-start rounded-lg border border-[#9ad1f4]/80 bg-[#9ad1f4]/10 p-4">
        <h5>Pasacola</h5>
        <h1 class="text-[#63c3ff] text-end w-full">1</h1>
      </div>
    </div>
  </div>
</section>
<script>
  // Chart configurations
  const DATA_COUNT = 4;
  const NUMBER_CFG = {
    count: DATA_COUNT,
    min: 0,
    max: 100
  };

  const Utils = {
    CHART_COLORS: {
      Orange: 'rgba(255, 159, 64, 0.5)',
      Yellow: 'rgba(255, 205, 86, 0.5)',
      Green: 'rgba(75, 192, 192, 0.5)',
      Blue: 'rgba(54, 162, 235, 0.5)',
    },
  };

  const data = {
    labels: [
      'Gitna',
      'Capri',
      'Damong Maliit',
      'Pasacola'
    ],
    datasets: [{
      label: 'Sitio',
      data: [1, 1, 2, 1], // Based on the prev system 
      backgroundColor: Object.values(Utils.CHART_COLORS),
    }],
  };

  const config = {
    type: 'pie',
    data: data,
    options: {
      responsive: false,
      plugins: {
        legend: {
          position: 'bottom',
          labels: {
            usePointStyle: true,
            pointStyle: 'circle',
          },
        },
        title: {
          display: false
        },
      },
    },
  };

  document.addEventListener('DOMContentLoaded', () => {
    try {
      const ctx = document.getElementById('sitio_distribution_chart').getContext('2d');
      new Chart(ctx, config);
    } catch (error) {
      console.error('Chart.js initialization failed:', error);
    }
  });
</script>