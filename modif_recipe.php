<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <!-- Ceci est ma barre de navigation. -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">Site de Recettes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="new_recipe.php">Proposer une recette</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="log_in.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="new_member.php">Inscription</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <h1>Site de Recettes !</h1>

        <!-- Mes recettes -->
        <div class="container">
            <div class="col-6 mx-auto"> 
                <div class="card">
                    <div class="card-header">
                        
                        Modifier une recette
                        
                    </div>
                    <div class="card-body mx-auto">
                        <form action="submit_user.php" method="POST">
                            <div class="input-group mb-3">
                            <label>Nom de la recette</label>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                            <label>Détail de la recette</label>
                            <input type="textarea" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="mx-auto">
                                <button>Valider</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        

    <footer class="bg-light text-center text-lg-start mt-auto">
        <div class="text-center p-3">
            © 2021 Copyright:
            <a class="text-dark" href="https://openclassrooms.com/">OpenClassrooms</a>
        </div>
    </footer>
</body>
</html>