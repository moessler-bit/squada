<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0076FB;">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="logos/squada_logo_full_blank2-removebg.png" width="30" height="30" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Zur Auktion</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown ml-auto">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><?=$_SESSION['name'] ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item disabled" href="logout.php"><i class="fas fa-cog"></i> User Settings</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="settings.php"><i class="fas fa-user-cog"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Font Awsome -->
<script src="https://kit.fontawesome.com/f072a47e74.js" crossorigin="anonymous"></script>


