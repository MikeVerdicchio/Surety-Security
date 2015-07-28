<?php include 'js/dependencies.php';?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
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
                        <li><a href="/twofactor">Two Factor Authentication</a>
                        </li>
                        <li><a href="/hashing">Password Hashing</a>
                        </li>
                        <li><a href="/passwordsgraphic">Passwords Graphic</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cross Site Scripting<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/xssoverview">Overview</a>
                        </li>
                        <li><a href="/xssprevention">Prevention</a>
                        </li>
                        <li><a href="/newscache">News Example</a>
                        </li>
                        <li><a href="/shoppingworld">Shopping Example</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SSL<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/ssl">SSL</a>
                        </li>
                        <li><a href="/handshake">SSL Handhsake</a>
                        </li>
                        <li><a href="/maninmiddle">Man in the Middle</a>
                        </li>
                    </ul>
                </li>
                <!--
				<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Videos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/user">End User</a>
                        </li>
                        <li><a href="/developer">Developer</a>
                        </li>
                    </ul>
                </li>
				-->
                <li><a href="/videos">Videos</a>
                </li>
                <li><a href="/about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>