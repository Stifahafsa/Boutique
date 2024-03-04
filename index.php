<?php
$produits = [
    "1" => [
        "Id" => 1,
        "Nom" => '',
        "Prix" => 139,
        "Description" => " Explorez l'éclat intemporel et la résistance moderne avec notre collection de bijoux inoxydables, alliant style sophistiqué et durabilité remarquable"
    ],
    "2" => [
        "Id" => 2,
        "Nom" => '',
        "Prix" => 139,
        "Description" => " Explorez l'éclat intemporel et la résistance moderne avec notre collection de bijoux inoxydables, alliant style sophistiqué et durabilité remarquable"
    ],
    "3" => [
        "Id" => 3,
        "Nom" => '',
        "Prix" => 199,
        "Description" => " Explorez l'éclat intemporel et la résistance moderne avec notre collection de bijoux inoxydables, alliant style sophistiqué et durabilité remarquable"
    ],
    "4" => [
        "Id" => 4,
        "Nom" => '',
        "Prix" => 99,
        "Description" => " Explorez l'éclat intemporel et la résistance moderne avec notre collection de bijoux inoxydables, alliant style sophistiqué et durabilité remarquable"
    ],
    "5" => [
        "Id" => 5,
        "Nom" => '',
        "Prix" => 149,
        "Description" => " Explorez l'éclat intemporel et la résistance moderne avec notre collection de bijoux inoxydables, alliant style sophistiqué et durabilité remarquable"
    ],
    "6" => [
        "Id" => 6,
        "Nom" => '',
        "Prix" => 129,
        "Description" => " Explorez l'éclat intemporel et la résistance moderne avec notre collection de bijoux inoxydables, alliant style sophistiqué et durabilité remarquable"
    ],

    "7" => [
        "Id" => 4,
        "Nom" => '',
        "Prix" => 99,
        "Description" => " Explorez l'éclat intemporel et la résistance moderne avec notre collection de bijoux inoxydables, alliant style sophistiqué et durabilité remarquable"
    ],
    "8" => [
        "Id" => 5,
        "Nom" => '',
        "Prix" => 149,
        "Description" => " Explorez l'éclat intemporel et la résistance moderne avec notre collection de bijoux inoxydables, alliant style sophistiqué et durabilité remarquable"
    ],
    "9" => [
        "Id" => 6,
        "Nom" => '',
        "Prix" => 129,
        "Description" => " Explorez l'éclat intemporel et la résistance moderne avec notre collection de bijoux inoxydables, alliant style sophistiqué et durabilité remarquable"
    ],

];
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Shop</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container ">
            <a class="navbar-brand" href="#">H&H Accessories</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contactez nous</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-tertiary"><i class="fa-solid fa-cart-shopping"></i></button>
                    <button class="btn btn-dark" type="submit">0</button>
                    
                </form>
            </div>
        </div>
    </nav>
    <h1></h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header w-100">
                        Mes produits
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Home</li>
                        <li class="list-group-item">Articles</li>
                        <li class="list-group-item">Les Bracelets inoxydable</li>
                        <li class="list-group-item">Les Colliers dorés</li>
                        <li class="list-group-item">Les Bagues</li>
                    </ul>
                    <ul>
                        <label for="customRange3" class="form-label">Prix</label>
                        <input type="range" class="form-range" min="49" max="1449" step="1" id="customRange3">
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-header w-100">Liste des articles</h3>
                    <div class="card-body ">
                        <div class="row">
                            <?php
                            foreach ($produits as $k => $v) {
                                ?>

                                <div class="col-md-4 mb-5">
                                    <h5 class="card-header count">
            
                                        <?php echo $v['Nom']; ?>
                                    </h5>
                                    <span>-30%</span>
                                    <img src="image/1.jpg" class="card-img-top card-img" alt="...">
                                     <br>
                                    <p class="card-text">Des bijoux de haute qualité avec de l'acier inoxydable </p>

                                    <div class="card-footer">
                                        <button class="btn btn-success">Prix :
                                            <?php echo $v['Prix']; ?> Dh
                                        </button>
                                        <button class="btn btn-secondary">Ajouter</button>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>






































        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>

</html>