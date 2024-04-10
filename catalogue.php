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
                <div class="cont-block bg-img flex-center flex-column">
                    <h3>Order catalogue</h3>
                    <p>
                        office at home. The new hybrid model of working may have impacted your home life and the desire
                        to have a
                        dedicated
                        space, away from home-life distractions, is no
                    </p>
                </div>
                <div class="text">
                    <p>Please fill out this form with the required information</p>
                </div>
                <!-- include form -->
                <form action="completed.html">
                    <fieldset>
                        <label for="answer1">How large is your house to be?
                            <textarea id="answer1" name="answer1" rows="3" cols="30" placeholder="Select answer:"></textarea>
                        </label>
                        <label>Do you have your own plot of land?</label>
                        <div></div>
                        <label><input type="radio" value="yes" name="answer" class="inline" />yes</label>
                        <label><input type="radio" value="no" name="answer" class="inline" />no</label>
                    </fieldset>
                    <fieldset>
                        <label for="answer2">When do you expect the build to take place?
                            <textarea id="answer2" name="answer2" rows="3" cols="30" placeholder="Select answer:"></textarea>
                        </label>
                        <label for="answer3">How much do you expect to invest in the build?
                            <textarea id="answer3" name="answer3" rows="3" cols="30" placeholder="Select answer:"></textarea>
                        </label>
                        <label for="answer4">How did you find out about us?
                            <textarea id="answer4" name="answer4" rows="3" cols="30" placeholder="Select answer:"></textarea>
                        </label>
                    </fieldset>
                    <fieldset>
                        <label>Do you have architect's drawings?</label>
                        <div></div>
                        <label><input type="radio" value="yes" name="answer1" class="inline" />yes</label>
                        <label><input type="radio" value="no" name="answer1" class="inline" />no</label>
                    </fieldset>
                    <fieldset>
                        <label>Do you have planning permission?</label>
                        <div></div>
                        <label><input type="radio" value="yes" name="answer2" class="inline" />yes</label>
                        <label><input type="radio" value="no" name="answer2" class="inline" />no</label>
                    </fieldset>
                    <fieldset>
                        <label for="first-name">Enter Your First Name: <input id="first-name" name="first-name" type="text" placeholder="John" required />
                        </label>
                        <label for="last-name">Enter Your Last Name: <input id="last-name" name="last-name" type="text" placeholder="Smith" required />
                        </label>
                        <label for="email">Enter Your Email: <input id="email" name="email" type="email" placeholder="send@gmail.com" required /></label>
                        <label for="phone">Enter Your phone: <input type="tel" id="phone" name="phone" placeholder="0-950-000-000" pattern="[0-9]{1}-[0-9]{3}-[0-9]{3}-[0-9]{3}" required />
                        </label>
                    </fieldset>
                    <fieldset>
                        <label for="terms-and-conditions">
                            <input id="terms-and-conditions" type="checkbox" required name="terms-and-conditions" class="inline" /> I
                            accept
                            the <a href="https://www.termsfeed.com/blog/sample-privacy-policy-template/">terms and
                                conditions</a>
                        </label>
                    </fieldset>
                    <input type="submit" value="Submit" />
                </form>
            </main>
            <?php
            $file_path = "parts/footer.php";

            if (!include($file_path)) {
                echo "Failed to include $file_path";
            }
            ?>
        </div>
    </div>
    <script src="js/validation.js"></script>
    <script src="js/main.js"></script>
</body>

</html>