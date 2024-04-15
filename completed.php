<?php
$file_path = "parts/header.php";

if (!include($file_path)) {
    echo "Failed to include $file_path";
}
?>

<body>
    <div class="wrapper">
        <div class="page">
            <?php
            $file_path = "parts/nav.php";

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