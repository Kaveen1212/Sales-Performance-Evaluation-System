<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="q.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">

            <span class="logo_name">Life Backup</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="index.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Invoice</span>
                </a>
            </li>
            < <li class="log_out">
                <a href="../index.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
                </li>
        </ul>
    </div>

    <form action="#">
        <h1>Cashier Invoice</h1>

        <hr>
        <div class="container">
            <select class="form-select" aria-label="Default select example">
                <option selected>Branch Code</option>
                <option value="1">KB-01 (Kesbewa First Banch)</option>
                <option value="2">KB-02 (Kesbewa Second Banch)</option>
                <option value="3">KB-03 (Kesbewa Three Banch)</option>
            </select>

            <select class="form-select" aria-label="Default select example">
                <option selected>Team Leader Code</option>
                <option value="1">27435</option>
                <option value="2">27436</option>
                <option value="3">27437</option>
            </select>


            <label for="date"><b>Invoice Date</b></label>
            <input type="date" class="date" placeholder="Invoice Date" name="Invoice-Date" required>




            <input type="text" placeholder="Enter Premium Amount" name="Premium-Amount" required>

            <select class="form-select" aria-label="Default select example">
                <option selected>Agent Signature</option>
                <option value="1">Yes</option>
                <option value="2">No</option>

            </select>

            <select class="form-select" aria-label="Default select example">
                <option selected>Superviser Code</option>
                <option value="1">12379</option>
                <option value="2">12380</option>
                <option value="3">12381</option>
            </select>

            <select class="form-select" aria-label="Default select example">
                <option selected>Sales-Agent-Code</option>
                <option value="1">40360</option>
                <option value="2">40361</option>
                <option value="3">40362</option>
            </select>


            <input type="text" placeholder="Policy Number" name="Policy-Number" required>


            <select class="form-select" aria-label="Default select example">
                <option selected>Payment-Frequent</option>
                <option value="1">Monthly</option>
                <option value="2"> Quarter</option>
                <option value="3"> By Annual</option>
                <option value="3"> Annual</option>
            </select>

            <label for="date"><b>Cash Handed Over Date</b></label>
            <input type="date" class="date" placeholder="Invoice Date" name="Invoice-Date" required><br><br>





            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>


            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Sign Up</button>
                <button type="button" class="cancelbtn">Cancel</button>

            </div>
        </div>
    </form>

</body>

</html>