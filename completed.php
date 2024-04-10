<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modular Housing produce and assemble modular houses that are very high quality and they can be used as temporary as well as permanent residence.">
    <meta name="keywords" content="house, compact, cheap, low, price, summerhouse, household">
    <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Modular Housing</title>
</head>

<body>
    <div class="wrapper">
        <div class="page">
            <?php
            $file_path = "parts/header.php";

            if (!include($file_path)) {
                echo "Failed to include $file_path";
            }
            ?>
            <main>
                <div class="flex-center bg-img h-100 white">
                    <h1>thanks you for the answers in form.</h1>
                </div>
            </main>
            <?php
            $file_path = "parts/footer.php";

            if (!include($file_path)) {
                echo "Failed to include $file_path";
            }
            ?>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>