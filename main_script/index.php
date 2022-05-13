<?php
include "setup.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site_title; ?></title>
    <meta name='keywords' content='<?php echo $site_keywords; ?>'>
    <meta name='description' content='<?php echo $site_des; ?>'>
    <meta name='language' content='ES'>
    <meta name='robots' content='index,follow'>

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="res/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="res/bulma/bulma.css" />
    <script src="js/jquery.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="hero is-info is-fullheight">
        <div class="hero-head">

        </div>

        <div id="loder">
            <div id="load">
                <img src="img/load.gif" width="200px">
            </div>
        </div>

        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">

                    <!-- body h1 heading  -->
                    <h1 class="title">
                        <?php echo $b_title; ?>
                    </h1>
                    <h2 class="subtitle">
                        <?php echo $b_subtit; ?>

                    </h2>
                    <div class="box">
                                <p id="error"></p>
                        <div class="field is-grouped">
                            <p class="control is-expanded">
                                <!-- input fileds  -->
                                <input class="input" type="text" name="url" id="url" placeholder="Enter YouTube Video Url..">
                            </p>
                            <p class="control">
                                <button class="button is-success" name="btn" id="btn">
                                    Download
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="datashow"></div>
    <script src="js/main.js"></script>
</body>

</html>