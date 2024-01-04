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