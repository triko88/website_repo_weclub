<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>WE Club | Dashboard</title>
        <meta name="description" content="Dashboard UI Kit">
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
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
       <?php include("headerbar.php")?>


        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <aside class="c-menu u-ml-medium u-hidden-down@wide">
                        <h4 class="c-menu__title">Menu</h4>
                        <ul class="u-mb-medium">
                            <li class="c-menu__item">
                                <a class="c-menu__link is-active" href="#">
                                    <i class="fa fa-trophy u-mr-xsmall"></i>Featured Events
                                </a>
                            </li>

                        </ul>
                    </aside>
                </div>

                <div class="col-sm-12 col-xl-9">
                    <main>
                        <div class="row">
                            <div class="col-8 col-xl-10">
                                <h1 class="u-h3">Upcoming Events</h1>
                            </div>
                            <div class="col-4 col-xl-2">
                                <div class="c-field u-mb-small">
                                    <label class="c-field__label u-hidden-visually" for="select-recently">Recently Opened</label>

                                    <!-- Select2 jquery plugin is used -->
                                    <select class="c-select" name="recently-opened" id="select-recently">
                                        <option value="value1">All Types</option>
                                        <option value="value2">This day</option>
                                        <option value="value3">Last Week</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- // .row -->
                        <div class="row">
                            <div class="col-md-6">
                                <article class="c-event">
                                    <div class="c-event__img">
                                        <img src="img/event1.jpg" alt="San Francisco's Buildings">
                                        <span class="c-event__status">Featured</span>
                                    </div>
                                    <div class="c-event__meta">
                                        <h3 class="c-event__title">WE WORKSHOP
                                            <span class="c-event__place">SRM University</span>
                                        </h3>

                                        <a href="#" class="c-btn c-btn--success c-event__btn">BOOK SEATS</a>
                                    </div>
                                </article><!-- // .c-event -->
                            </div>

                            <div class="col-md-6">
                                <article class="c-event">
                                    <div class="c-event__img">
                                        <img src="img/event2.jpg" alt="San Francisco's Buildings">

                                        <span class="c-event__status">Featured</span>
                                    </div>
                                    <div class="c-event__meta">

                                        <h3 class="c-event__title">WE TALK 3.0
                                            <span class="c-event__place">SRM University</span>
                                        </h3>

                                        <a href="#" class="c-btn c-btn--success c-event__btn">BOOK SEATS</a>
                                    </div>
                                </article><!-- // .c-event -->
                            </div>
                        </div><!-- // .row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="c-table-responsive@tablet">
                                    <table class="c-table u-mb-large">
                                        <caption class="c-table__title">
                                            All Events <small></small>
                                        </caption>
                                        <thead class="c-table__head c-table__head--slim">
                                            <tr>
                                                <th class="c-table__cell c-table__cell--head">EVENTS</th>
                                                <th class="c-table__cell c-table__cell--head">Date</th>
                                                <th class="c-table__cell c-table__cell--head">Price</th>
                                                <th class="c-table__cell c-table__cell--head">
                                                    <span class="u-hidden-visually">Actions</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="c-table__row">
                                                <td class="c-table__cell">WE TALKS 2.0
                                                    <span class="u-block u-text-mute u-text-xsmall">
                                                        SRM University
                                                    </span>
                                                </td>

                                                <td class="c-table__cell"> August 2018</td>
                                                <td class="c-table__cell">
                                                    <span class="u-block u-text-xsmall u-text-mute">

                                                    </span>
                                                </td>
                                                <td class="c-table__cell u-text-right">
                                                    <a class="c-btn is-disabled" href="#">Buy Tickets</a>
                                                </td>
                                            </tr>

                                            <tr class="c-table__row">
                                                <td class="c-table__cell">WE WORKSHOP
                                                    <span class="u-block u-text-mute u-text-xsmall">
                                                        SRM University
                                                    </span>
                                                </td>
                                                <td class="c-table__cell">2018</td>
                                                <td class="c-table__cell">
                                                    <span class="u-block u-text-xsmall u-text-mute">

                                                    </span>
                                                </td>
                                                <td class="c-table__cell u-text-right">
                                                    <a class="c-btn is-disabled" href="#">Buy Tickets</a>
                                                </td>
                                            </tr>

                                            <tr class="c-table__row">
                                                <td class="c-table__cell">WE TALKS 1.0
                                                    <span class="u-block u-text-mute u-text-xsmall">
                                                        SRM University
                                                    </span>
                                                </td>
                                                <td class="c-table__cell">2018</td>
                                                <td class="c-table__cell">
                                                    <span class="u-block u-text-xsmall u-text-mute">

                                                    </span>
                                                </td>
                                                <td class="c-table__cell u-text-right">
                                                    <a class="c-btn is-disabled" href="#">Buy Tickets</a>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        <script src="js/main.min.js"></script>
    </body>
</html>
