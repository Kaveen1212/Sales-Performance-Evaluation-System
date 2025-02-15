<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    if ($_SESSION['Positions'] === 'Manager') {
        header("Location: ./dashbord/Manager.php");
        exit();
    } elseif ($_SESSION['Positions'] === 'Supervisor') {
        header("Location: ./dashbord/Supervisor.php");
        exit();
    } elseif ($_SESSION['Positions'] === 'TeamLeader') {
        header("Location: ./dashbord/Team Leader.php");
        exit();
    } elseif ($_SESSION['Positions'] === 'SalesAgent') {
        header("Location: ./dashbord/Sales Agent.php");
        exit();
    } elseif ($_SESSION['Positions'] === 'Cashier') {
        header("Location: ./dashbord/cashier.php");
        exit();
    } else {
        header("Location: ./dashbord/index.php");
        exit();
    }
}

// If user is not a manager or supervisor, redirect to a default page or show an error message
header("Location: ./default_page.php");
exit();
?>