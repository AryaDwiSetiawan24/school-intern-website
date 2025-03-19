<div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white dark:bg-gray-800 shadow-xs rounded-xl">
    <header class="px-5 py-4 border-b border-gray-100 dark:border-gray-700/60"><h2 class="font-semibold text-gray-800 dark:text-gray-100">Perbandingan Siswa</h2></header>
    <div class="grow flex flex-col justify-center">
        <div>
            <canvas id="dashboard-card-06" width="389" height="260"></canvas>
        </div>
        <div id="dashboard-card-06-legend" class="px-5 pt-2 pb-6">
            <ul class="flex flex-wrap justify-center -m-1"></ul>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Data jenis kelamin siswa (contoh data, ganti dengan data dinamis dari backend)
    const data = {
        labels: ['Laki-laki', 'Perempuan'], // Label untuk jenis kelamin
        datasets: [{
            label: 'Jumlah Siswa',
            data: [{{ $lakiLaki }}, {{ $perempuan }}], // Data jumlah siswa (laki-laki dan perempuan)
            backgroundColor: ['#4F46E5', '#EC4899'], // Warna untuk setiap jenis kelamin
            hoverBackgroundColor: ['#4338CA', '#DB2777'], // Warna saat hover
        }]
    };

    // Konfigurasi chart
    const config = {
        type: 'doughnut', // Jenis chart (doughnut)
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top', // Posisi legenda
                },
                tooltip: {
                    enabled: true, // Aktifkan tooltip
                }
            }
        }
    };

    // Render chart ke canvas
    const ctx = document.getElementById('dashboard-card-06').getContext('2d');
    new Chart(ctx, config);
</script>