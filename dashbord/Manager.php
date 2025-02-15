<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Manager</title>
    <link rel="stylesheet" href="dashboard.css">
    
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
                <span class="dashboard">Manager</span>
            </div>


        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Supervisor</div>
                        <div class="box-topic-container">
                            <div class="number">20</div>
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
                        <div class="box-topic">Sales Agents</div>
                        <div class="box-topic-container">
                            <div class="number">20</div>
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
                        <div class="box-topic">Team Leaders</div>
                        <div class="box-topic-container">
                            <div class="number">13</div>
                            <div class="number">10</div>
                        </div>
                        <div class="prasentage">(77%)</div>


                    </div>
                    <div class="indicator ">
                        <i class='cart two material-symbols-outlined'>deployed_code_account</i>
                    </div>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Advisor</div>
                        <div class="box-topic-container">
                            <div class="number">8</div>
                            <div class="number">2</div>
                        </div>
                        <div class="prasentage">(25%)</div>

                    </div>
                    <div class="indicator ">
                        <i class='cart three material-symbols-outlined'>deployed_code_account</i>
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
            var xValues = ["Supervisor", "Sales Agents", "Team Leaders", "Advisor", "No Of New Policies",
                "Total Premium Collecton"
            ];
            var yValues = [65, 65, 77, 25, 15, 65];
            var barColors = [
                "#FFC300",
                "#b91d47",
                "#00aba9",
                "#2b5797",
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
                        text: "Manager performance "

                    }
                }
            });
            </script>

        </div>
    </section>




    </section>



</body>

</html>