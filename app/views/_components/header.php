<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?=(!empty($_SESSION['authenticated'])) ? '/home' : '/'?>"><img src="/public/img/logo.png" alt="" style="height: 32px; "></a>
            <?php
                if (
                    (!empty($_SESSION['authenticated'])) &&
                    ($_SESSION['authenticated'])
                ) {
                    ?>

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item<?=$viewOpts['page']['section'] == 'home' ? ' active' : ''?>">
                                <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item<?=$viewOpts['page']['section'] == 'about' ? ' active' : ''?>">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item<?=$viewOpts['page']['section'] == 'games' ? ' active' : ''?>">
                                <a href="#" class="nav-link snack-dropdown-toggle" data-toggle="dropdown-games">
                                    Games&nbsp;
                                    <i class="fa-solid fa-caret-down"></i>
                                </a>
                            </li>
                            <li class="nav-item<?=$viewOpts['page']['section'] == 'events' ? ' active' : ''?>">
                                <a class="nav-link" href="/events">Events</a>
                            </li>
                            <li class="nav-item<?=$viewOpts['page']['section'] == 'onewordstory' ? ' active' : ''?>">
                                <a class="nav-link" href="/onewordstory">One Word Story</a>
                            </li>
                            <li class="nav-item<?=$viewOpts['page']['section'] == 'movienight' ? ' active' : ''?>">
                                <a class="nav-link" href="/movienight">Movie Night</a>
                            </li>
                        </ul>

                        <span class="navbar-text">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item<?=$viewOpts['page']['section'] == 'user' ? ' active' : ''?>">
                                    <a href="#" class="nav-link snack-dropdown-toggle" data-toggle="dropdown-user">
                                        <img src="https://cdn.discordapp.com/avatars/<?=$_SESSION['user']['discord_id']?>/<?=$_SESSION['user']['avatar']?>.jpg" alt="" class="discordAvatar"> <?=$_SESSION['user']['name']?>
                                        &nbsp;
                                        <i class="fa-solid fa-caret-down"></i>
                                    </a>
                                </li>
                            </ul>
                        </span>
                    <?php
                } else {
                    ?>
                        <a href="/login" class="btn btn-sm btn-primary">
                            <i class="fa-brands fa-sm fa-discord"></i>
                            Login with Discord
                        </a>
                    <?php
                }
            ?>
        </div>
    </nav>

    <div class="container-fluid dropdown-content bg-secondary" style="display: none; position: absolute; z-index: 1; padding: 1.5rem; ">
        <?php
        /**
         * drop down menus
         */
            if (!empty($_SESSION['authenticated'])) {
                ?>
                <?php
                foreach (glob(ROOT . "/app/views/_menus/public/*.php") as $filename) {
                    include $filename;
                }
            }
        ?>
    </div>
</header>