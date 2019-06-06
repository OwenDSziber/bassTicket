	<div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="defaultLogin.php">bassTicket</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: #d4af37;">Help</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Documentation</a><a class="dropdown-item" role="presentation" href="#">Github</a><a class="dropdown-item" role="presentation" href="#">Questions</a></div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php" style="color: #d4af37;">Hello, <?php echo $_SESSION['fName']; ?>!</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php" style="color: #d4af37;">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>