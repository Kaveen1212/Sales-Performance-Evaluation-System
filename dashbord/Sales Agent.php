<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Sales Agent</title>
    <link rel="stylesheet" href="dashboard.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">

            <span class="logo_name">Life Backup</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>

            <li class="log_out">
                <a href="../index.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Sign out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Sales Agent</span>
            </div>


        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Cashier</div>
                        <div class="box-topic-container">
                            <div class="number">5</div>
                            <div class="number">16</div>
                        </div>
                        <span class="prasentage">(65%)</span>

                    </div>
                    <div class="indicator ">
                        <i class='cart one material-symbols-outlined'>deployed_code_account</i>
                    </div>
                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">No Of New Policies</div>
                        <div class="box-topic-container">
                            <div class="number">56</div>
                            <div class="number">40</div>
                        </div>
                        <div class="prasentage">(71%)</div>

                    </div>
                    <div class="indicator ">
                        <i class='cart four material-symbols-outlined'>deployed_code_account</i>
                    </div>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Premium Collecton</div>
                        <div class="box-topic-container">
                            <div class="number">13 Min</div>
                            <div class="number">9.3 Min</div>
                        </div>
                        <div class="prasentage">(65%)</div>

                    </div>
                    <div class="indicator ">
                        <i class="cart  one material-symbols-outlined">
                            timer
                        </i>
                    </div>

                </div>

            </div>
        </div>

        <div class="chart">


            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
            <script>
            var xValues = ["Casiear", "No Of New Policies",
                "Total Premium Collecton"
            ];
            var yValues = [65, 71, 65, ];
            var barColors = [

                "#FF5E3C",
                "#e8c3b9",
                "#1e7145"
            ];

            new Chart("myChart", {
                type: "doughnut",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "Seles Agent performance "

                    }
                }
            });
            </script>

        </div>
    </section>




    </section>



</body>

</html>