<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>WE Club |Account Settings</title>
        <meta name="description" content="WE Club">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/main.min.css">
    </head>
    <body class="o-page">
	<?php 
	require("db.php");
	include("auth.php");
	?>
        <div class="o-page__sidebar js-page-sidebar">
            <div class="c-sidebar">
                <a class="c-sidebar__brand" href="dashindex.php">
                    <img class="c-sidebar__brand-img" src="img/logo.png" alt="Logo">
                </a>

                <h4 class="c-sidebar__title">My Dashboard</h4>
                <ul class="c-sidebar__list">

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="dashindex.php">
                            <i class="fa fa-home u-mr-xsmall"></i>Home
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="events.php">
                            <i class="fa fa-clock-o u-mr-xsmall"></i>Events <span class="c-badge c-badge--success c-badge--xsmall u-ml-xsmall">New</span>
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="logout.php">
                            <i class="fa fa-cog u-mr-xsmall"></i>Logout
                        </a>
                    </li>


                </ul>

            </div><!-- // .c-sidebar -->
        </div><!-- // .o-page__sidebar -->

        <main class="o-page__content">
            <header class="c-navbar u-mb-medium">

                <h2 class="c-navbar__title u-mr-auto">Account Settings</h2>





                <div class="c-dropdown dropdown">
                    <a  class="c-avatar c-avatar--xsmall has-dropdown dropdown-toggle" href="#" id="dropdwonMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="c-avatar__img" src="img/avatar-72.png" alt="User's Profile Picture">
                    </a>

                    <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
                        <a class="c-dropdown__item dropdown-item" href="events.php">Events</a>
                        <a class="c-dropdown__item dropdown-item" href="account-settings.php">Edit Profile</a>
                        <a class="c-dropdown__item dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </header>


            <div class="container">
                <div class="row u-mb-large">
                    <div class="col-12">
                        <div class="c-tabs">

                            <ul class="c-tabs__list c-tabs__list--splitted nav nav-tabs" id="myTab" role="tablist">
                                <li class="c-tabs__item"><a class="c-tabs__link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">PROFILE</a></li>


                            </ul>

                            <div class="c-tabs__content tab-content" id="nav-tabContent">
                                <div class="c-tabs__pane active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <div class="col-lg-2 u-text-center">
                                            <div class="c-avatar c-avatar--xlarge u-inline-block">
                                                <img class="c-avatar__img" src="img/avatar-200.jpg" alt="Avatar">
                                            </div>

                                            <a class="u-block u-color-primary" href="#">UPLOAD PHOTO</a>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="c-field u-mb-small">
                                                <label class="c-field__label" for="firstName">First Name</label>
                                                <input class="c-input" type="text" id="firstName" placeholder="name">
                                            </div>

                                            <div class="c-field u-mb-small">
                                                <label class="c-field__label" for="lastName">Last Name</label>
                                                <input class="c-input" type="text" id="lastName" placeholder="last name">
                                            </div>

                                            <div class="c-field u-mb-small">
                                                <label class="c-field__label" for="bio">Bio</label>
                                                <textarea class="c-input" id="bio"></textarea>
                                            </div>

                                            <div class="c-field u-mb-small">
                                                <label class="c-field__label" for="email">E-mail Address</label>
                                                <input class="c-input" id="email" type="email" placeholder="your email">
                                            </div>
                                        </div>

                                        <div class="col-lg-5">
                                            <div class="c-field u-mb-small">
                                                <label class="c-field__label" for="companyName">University Name</label>
                                                <input class="c-input" id="companyName" type="text" placeholder="University">
                                            </div>



                                            <label class="c-field__label" for="socialProfile">Social Profiles</label>

                                            <div class="c-field has-addon-left u-mb-small">
                                                <span class="c-field__addon u-bg-twitter">
                                                    <i class="fa fa-twitter u-color-white"></i>
                                                </span>
                                                <input class="c-input" id="socialProfile" type="text" placeholder="socail handle">
                                            </div>

                                            <div class="c-field has-addon-left">
                                                <span class="c-field__addon u-bg-facebook">
                                                    <i class="fa fa-facebook u-color-white"></i>
                                                </span>
                                                <input class="c-input" type="text" placeholder="social handle">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- // .col-12 -->
                </div>

                <div class="row">
                </div>
            </div><!-- // .container -->
        </main>

        <script src="js/main.min.js"></script>
    </body>
</html>
