<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Asset/Css/style.css">
    <title>Header</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="../template/notremetier.php">Notre Métier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Nous Trouver</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Lien utile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Espace Pro</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administrateur
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <footer class="pied-de-page position-relative vh-100 text-center  text-white">
        <div class="container position-absolute w-100">
            <div class="row mb-5">
                <div class="col-md-3">
                    <a href="#" class="footer-site-logo">Colorlib</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit officiis corporis optio natus. </p>
                </div>
                <div class="col-md-2 ms-auto">
                    <h3>Lien utile</h3>
                    <ul class="list-unstyled links">
                        <li><a href="#">Sell online</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Examples</a></li>
                        <li><a href="#">Website editors</a></li>
                        <li><a href="#">Online retail</a></li>
                    </ul>
                </div>
            </div>
          
            <div class="row">
                <div class="col-md-7">
                    <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, fuga. Ex at maxime eum odio quibusdam pariatur expedita explicabo harum! Consectetur ducimus delectus nemo, totam odit!</small></p>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>