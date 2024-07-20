<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>EY ASSET MANAGEMENT SYSTEM</h1>

    </header>
    <?php
    if (isset($_SESSION["account_type"])) {
        if ($_SESSION['account_type'] == 'admin') { ?>
                <nav>
                        <a href='dashboard.php'> Home </a>
                        <a href='addasset.php'> add assets </a>
                        <a href='addlocationpage.php'> add Location </a>
                        <a href='asset_details.php'> View All assets </a>
                        <a href='asset_manage.php'> Manage Assets</a>
                        <a href='location_manage.php'>Manage Locations </a>
                        <a class='log' href='login.php?logout=1'>Log-out </a>
                    </nav>
        <?php } else if ($_SESSION["account_type"] == "Location Admin") { ?>
                    <nav>
                        <a href='dashboard.php'> Home </a>
                        <a href='addlocationpage.php'> add Location </a>
                        <a href='asset_details.php'> View All assets </a>
                        <a href='profileview.php?type=<?= $_SESSION["account_profile"] ?>'>profile </a>
                        <a href='location_manage.php'>Manage Locations </a>
                        <a class='log' href='login.php?logout=1'>Log-out </a>
                    </nav>

        <?php } else if ($_SESSION["account_type"] == "Asset Admin") { ?>
                    <nav>
                        <a href='dashboard.php'> Home </a>
                        <a href='addasset.php'> add assets </a>
                        <a href='asset_details.php'> View All assets </a>

                        <a href='asset_manage.php'> Manage Assets</a>
                        <a href='profileview.php?type=<?= $_SESSION["account_profile"] ?>'>profile </a>
                        <a class='log' href='login.php?logout=1'>Log-out </a>
                    </nav>

        <?php } else { ?>

                    <nav>
                        <a href='dashboard.php'> Home </a>
                        <a href='asset_details.php'> View All assets </a>
                        <a href='profileview.php?type=<?= $_SESSION["account_profile"] ?>'>profile </a>
                        <a class='log' href='login.php?logout=1'>Log-out </a>
                    </nav>

        <?php }

    }
    ?>
</body>

</html>
<article>