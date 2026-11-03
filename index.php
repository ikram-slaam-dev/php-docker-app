<?php
$appName = "DevOps Deployed PHP Project Dashboard";
$appVersion = "1.0.0";
$phpVersion = phpversion();
$serverSoftware = $_SERVER['SERVER_SOFTWARE'];
$currentTime = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $appName; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1><?php echo $appName; ?></h1>

        <p class="subtitle">
            Successfully deployed using Docker on AWS EC2
        </p>

        <div class="status">
            Application Status: Running
        </div>

        <div class="details">

            <p>
                <strong>Application:</strong>
                <?php echo $appName; ?>
            </p>

            <p>
                <strong>Version:</strong>
                <?php echo $appVersion; ?>
            </p>

            <p>
                <strong>PHP Version:</strong>
                <?php echo $phpVersion; ?>
            </p>

            <p>
                <strong>Web Server:</strong>
                <?php echo htmlspecialchars($serverSoftware); ?>
            </p>

            <p>
                <strong>Server Time:</strong>
                <?php echo $currentTime; ?>
            </p>

        </div>

        <footer>
            DevOps Practice Project | Docker + PHP + AWS
        </footer>

    </div>

</body>
</html>