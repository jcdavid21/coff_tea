<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../styles/adminIndex.css">
    <title>Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php include "sidebar.php"; ?>
    <main>
        <div class="flex items-center justify-center pt-12">
            <div class="container">
                <div class="mb-20">
                    <h2 class="text-4xl pb-2 border-b border-b-slate-700">Admin</h2>
                    <div class="grid grid-cols-3 gap-10 justify-between mt-5">
                        <div class="card text-center">
                            <div class="text-xl pt-3 pb-3 bg-slate-200">Total Sales</div>
                            <div class="text-4xl pt-6 text-red-500">₱300</div>
                        </div>

                        <div class="card text-center">
                            <div class="text-xl pt-3 pb-3 bg-slate-200">Pending Orders</div>
                            <div class="text-4xl pt-6 text-red-500">0</div>
                        </div>

                        <div class="card text-center">
                            <div class="text-xl pt-3 pb-3 bg-slate-200">Claimed Orders</div>
                            <div class="text-4xl pt-6 text-red-500">3</div>
                        </div>
                    </div>
                </div>

                <!-- Chart Section -->
                <div class="bg-white p-4 rounded-lg shadow-md mb-10">
                    <h3 class="text-2xl font-bold mb-4">Monthly Sales</h3>
                    <canvas id="myChart" width="400" height="120"></canvas>
                </div>
            </div>
        </div>
    </main>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'
                    , 'August', 'September', 'October', 'November', 'December'
                ], 
                datasets: [{
                    label: 'Monthly Sales',
                    data: [100, 120, 160, 170, 140, 200, 100, 300, 350, 220, 320, 200],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
