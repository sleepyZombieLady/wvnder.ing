<!-- USER -->
<div class="dropdown-user" style="display: none; ">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>User Menu</h5>
                <ul class="nav flex-column">
                    <?php
                        // check if the user has a moderator role
                        if (in_array('875519314093031484', $_SESSION['user']['roles'])) {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin">Admin</a>
                                </li>
                            <?php
                        }
                    ?>
                    <li class="nav-item">
                        <a href="/settings" class="nav-link">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">Log Out</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card card-body">
                    <h5>For your privacy concerns, this is the data I pull from Discord about you!</h5>
                    <small class="text-warning">None of this is stored on this site!</small>
                    <pre class="text-muted"><?php print_r($_SESSION); ?></pre>
                </div>
            </div>
        </div>
    </div>
</div>