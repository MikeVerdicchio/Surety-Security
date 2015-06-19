<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Surety Security</a>
        </div>
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php //$topics=a rray( "Passwords", "XSS", "SQL Injection"); $topics=a rray( "Passwords", "User", "Developer", "About"); $url="$_SERVER[REQUEST_URI]" ; $page=e xplode( "/", $url)[1]; ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Passwords <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/passwords">Overview</a>
                        </li>
                        <li><a href="/twofactor">Two Factor Auth</a>
                        </li>
                        <li><a href="/hashing">Hashing</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">XSS <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/xss">Overview</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Videos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/user">General User</a>
                        </li>
                        <li><a href="/developer">Developer</a>
                        </li>
                    </ul>
                </li>
                <li><a href="/about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>