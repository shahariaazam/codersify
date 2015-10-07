<div id="menu">
    <ul>
        <li><i class="entypo-home"></i><a href="/">Home</a></li>
        <li><i class="entypo-user"></i><a href="http://www.shahariaazam.com"><?php echo get_the_author_meta('display_name', 1); ?></a></li>
    </ul>
</div>

<div class="sidebar col-md-5 col-sm-12 ">

                <span class="menu-trigger side-writer-icon animated fadeInDown">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </span>

    <!-- if the user has javascript disabled they can still use the menu -->
    <noscript>
        <div class="no-js-menu">
            <ul>
                <li><i class="entypo-home"></i><a href="/">Home</a></li>
                <li><i class="entypo-user"></i><a href="<?php echo get_the_author_meta('user_url',
                        1); ?>"><?php echo get_the_author_meta('display_name', 1); ?></a></li>
            </ul>
        </div>
    </noscript>
    <!-- end no script -->

    <div class="site-info">
        <div class="primary-info">
            <h1 style="color: #000000;"><?php echo get_the_author_meta('display_name', 1); ?></h1>

            <p style="color: #000000;"><?php echo get_the_author_meta('description', 1); ?></p>
        </div>
        <div class="secondary-info">
        </div>
    </div>

</div>