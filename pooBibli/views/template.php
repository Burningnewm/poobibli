<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=URL?>public/css/bootstrap.min.css">
    <title><?= $titre ?></title>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=URL.'accueil'?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=URL.'livres'?>">Livres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=URL.'livres/ajouter'?>">Ajouter un Livre</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-info">Title</h1>
        </div>
    </header>
    <div class="container">
    <?= $content ?>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>