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
                <!-- include table and google map -->
                <div class="flex-center flex-around p-y">
                    <div>
                        <table class="work-time">
                            <thead>
                                <tr>
                                    <th colspan="4">opening hours</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Monday</td>
                                    <td>07:00</td>
                                    <td>-</td>
                                    <td>19:00</td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>07:00</td>
                                    <td>-</td>
                                    <td>19:00</td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>07:00</td>
                                    <td>-</td>
                                    <td>19:00</td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>07:00</td>
                                    <td>-</td>
                                    <td>19:00</td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>07:00</td>
                                    <td>-</td>
                                    <td>19:00</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>07:00</td>
                                    <td>-</td>
                                    <td>18:00</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>07:00</td>
                                    <td>-</td>
                                    <td>18:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2478.6689438726216!2d18.095689164993665!3d48.30747274920869!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b3eef37141859%3A0xa7a44f1af2f72d09!2zxaB0dWRlbnRza8O9IGRvbW92IEFrYWRlbWlja8Oh!5e0!3m2!1ssk!2ssk!4v1702997011989!5m2!1ssk!2ssk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
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