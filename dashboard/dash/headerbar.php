 
<header class="c-navbar">

           <!-- Navigation items that will be collapes and toggle in small viewports -->
            <nav class="c-nav collapse" id="main-nav">
                <ul class="c-nav__list">
                    <li class="c-nav__item">
                        <a class="c-nav__link" href="events.php">Events</a>
                    </li>

                    <li class="c-nav__item">
                        <a class="c-nav__link" href="account-settings.php">Your Profile</a>
                    </li>
                    <li class="c-nav__item">
                        <div class="c-field c-field--inline has-icon-right u-hidden-up@tablet">
                            <span class="c-field__icon">
                                <i class="fa fa-search"></i>
                            </span>

                            <label class="u-hidden-visually" for="navbar-search-small">Seach</label>
                            <input class="c-input" id="navbar-search-small" type="text" placeholder="Search">
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- // Navigation items  -->

            <div class="c-field has-icon-right c-navbar__search u-hidden-down@tablet u-ml-auto u-mr-small">
                <span class="c-field__icon">
                    <i class="fa fa-search"></i>
                </span>

                <label class="u-hidden-visually" for="navbar-search">Search</label>
                <input class="c-input" id="navbar-search" type="text" placeholder="Search">
            </div>


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

            <button class="c-nav-toggle" type="button" data-toggle="collapse" data-target="#main-nav">
                <span class="c-nav-toggle__bar"></span>
                <span class="c-nav-toggle__bar"></span>
                <span class="c-nav-toggle__bar"></span>
            </button><!-- // .c-nav-toggle -->
        </header>
		
		