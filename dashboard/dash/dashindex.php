<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>WE Club | Dashboard</title>
        <meta name="description" content="WE Club Dashboard">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/main.min.css">
    </head>
    <body>
    <?php
require('db.php');
include("auth.php"); //include auth.php file on all secure pages
include("headerbar.php");
 ?>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="u-mv-large u-text-center">
                        <h2 class="u-mb-xsmall">Hi WE Club Member! Welcome back to the Dashboard.</h2>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="c-card u-p-medium u-text-center u-mb-medium" data-mh="landing-cards">

                        <img class="u-mb-small" src="img/icon-intro1.svg" alt="iPhone icon">

                        <h4 class="u-h6 u-text-bold u-mb-small">
                          Get all the updates from WE Club App. Install now from Playstore.
                        </h4>
                        <a class="c-btn c-btn--info" href="#">WE Club App</a>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="c-card u-p-medium u-text-center u-mb-medium" data-mh="landing-cards">

                        <img class="u-mb-small" src="img/icon-intro2.svg" alt="iPhone icon">

                        <h4 class="u-h6 u-text-bold u-mb-small">
                            Go the Dashboard and check the latest Developments!
                        </h4>
                        <a class="c-btn c-btn--info" href="events.php">Start using Dashboard</a>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="c-card u-p-medium u-text-center u-mb-medium" data-mh="landing-cards">

                        <img class="u-mb-small" src="img/icon-intro3.svg" alt="iPhone icon">

                        <h4 class="u-h6 u-text-bold u-mb-small">
                             Edit your Profile </br> Now.
                        </h4>
                        <a class="c-btn c-btn--info" href="account-settings.php">Edit Profile </a>
                    </div>
                </div>
            </div>


        </div>

        <!-- Main javascsript -->
        <script src="js/main.min.js"></script>
    </body>
</html>
