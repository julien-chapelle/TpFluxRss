<?php
if (isset($_POST['choice'])) {
    if (!isset($_COOKIE)) {
        setcookie('selectTheme', $_POST['selectTheme'], time() + (86400));
        setcookie('selectNbFlux', $_POST['selectNbFlux'], time() + (86400));
        header('refresh: 0');
    } elseif (isset($_COOKIE)) {
        setcookie('selectTheme', '', time() - (3600));
        setcookie('selectNbFlux', '', time() - (3600));
        setcookie('selectTheme', $_POST['selectTheme'], time() + (86400));
        setcookie('selectNbFlux', $_POST['selectNbFlux'], time() + (86400));
        header('refresh: 0');
    };
};
if (isset($_COOKIE['selectNbFlux'])) {
    $nbFlux = intval($_COOKIE['selectNbFlux']);
} else {
    $nbFlux = 3;
};
if (isset($_COOKIE) && isset($_POST['raz'])) {
    setcookie('selectTheme', '', time() - (3600));
    setcookie('selectNbFlux', '', time() - (3600));
    header('refresh: 0');
};
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Projet Php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
</head>

<body id="colorBody">
    <div class="container-fluid">
        <div id="colorHeader">
            <h1 class="display-4">SUPER CSS READER</h1>
            <p class="lead">By Julien, Romain, Sofiane, Noémie</p>
        </div>
        <!--NavBar début -->
        <nav class="navbar navStyle navbar-expand-lg sticky-top" name="nav" id="colorNav">
            <a class="navbar-brand" href="index.php"><img src="/assets/rss.webp" alt="rss" style="width: 70px;" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="far fa-caret-square-down"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/software.php">Sécurité</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/security.php">Software</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/subject.php">Jeux</a>
                    </li>
                </ul>
                <form action="index.php" method="POST">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item my-auto m-2">
                            <select class="form-control" id="fluxChoice" name="selectTheme">
                                <option selected>Choisir un thème...</option>
                                <option value="blackButton" id="blackButton" class="black">Thème black</option>
                                <option value="blueButton" id="blueButton" class="blue">Thème blue</option>
                                <option value="redButton" id="redButton" class="red">Thème red</option>
                            </select>
                        </li>
                        <li class="nav-item my-auto m-2">
                            <select class="form-control" id="fluxChoice" name="selectNbFlux">
                                <option selected>Affichage des flux...</option>
                                <option value="3">Afficher 3 flux RSS</option>
                                <option value="5">Afficher 5 flux RSS</option>
                                <option value="8">Afficher 8 flux RSS</option>
                            </select>
                        </li>
                        <li class="nav-item">
                            <button type="submit" name="choice" class="btn btn-sm ml-3">Valider</button>
                        </li>
                        <li class="nav-item">
                            <button type="submit" name="raz" class="btn btn-sm ml-3">Par défaut</button>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>
        <div class="row d-flex text-left justify-content-around mt-4">
            <!-- CARD SUJET 1 DEBUT -->
            <div class="card cardColor mb-3 mx-3" style="max-width: 25rem;">
                <div class="card-header">Applis-logiciels</div>
                <div class="card-body">
                    <h5 class="card-title">Derniers articles</h5>
                    <?php
                    $url = 'https://www.01net.com/rss/actualites/applis-logiciels/'; /* insérer ici l'adresse du flux RSS de votre choix */
                    $rss = simplexml_load_file($url);
                    $indexModal = 1;
                    $itemIndex = 1;
                    foreach ($rss->channel->item as $item) {
                        $datetime = date_create($item->pubDate);
                        $date = date_format($datetime, 'd M Y, H\hi');
                        $description = $item->description;
                        $descriptionText = explode('<br/>', $description); ?>
                        <?= '<div class="row border-top border-light news">
                                    <div class="col-2 p-0">
                                        <p class="squareTopic1 rounded m-2"></p>
                                    </div>
                                    <div class="col-10 p-0">
                                        <p>' . $item->title . '</p>
                                    </div>
                                </div>
                                <div class="row border-bottom border-light justify-content-around">
                                    <div class="col p-0 text-center">
                                        <button class="btn btn-sm p-1" data-toggle="modal" data-target="#modalS1' .  $indexModal . '">Loupe</button>
                                    </div>
                                    <div class="col p-0 text-center">
                                        <a role="button" target="_blank" class="btn btn-sm p-1" href="' . $item->link . '">Lien vers l\'article</a>
                                    </div>
                                </div>
                                <br /> 
                                <!-- Modal Sujet 1 -->
                                <div class="modal fade" id="modalS1' . $indexModal . '" tabindex="-1" role="dialog" aria-labelledby="modalSujet1T1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p>' . $date . '</p>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <div class="row m-0 justify-content-center">
                                                    <h5 class="modal-title" id="exampleModalLabel">' . $item->title . '</h5>
                                                </div>
                                                <div class="row img-fluid m-0 justify-content-center">
                                                    <img src="' . $item->enclosure['url'] . '" width="400" />
                                                </div>
                                                <div class="row m-0 justify-content-center mt-2">
                                                    <P>' . $descriptionText[0] . '</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fermer</button>
                                                <a class="btn btn-danger btn-sm" href="' . $item->link . '" target="_blank">LIEN VERS ARTICLE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Sujet 1 -->' ?>
                    <?php $itemIndex++;
                        $indexModal++;
                        if ($itemIndex > $nbFlux) {
                            break;
                        };
                    }; ?>
                </div>
            </div>
            <!-- CARD SUJET 1 FIN -->
            <!-- CARD SUJET 2 DEBUT -->
            <div class="card cardColor mb-3 mx-3" style="max-width: 25rem;">
                <div class="card-header">Sécurité</div>
                <div class="card-body">
                    <h5 class="card-title">Derniers articles</h5>
                    <?php
                    $url = 'https://www.01net.com/rss/actualites/securite/'; /* insérer ici l'adresse du flux RSS de votre choix */
                    $rss = simplexml_load_file($url);
                    $indexModal = 1;
                    $itemIndex = 1;
                    foreach ($rss->channel->item as $item) {
                        $datetime = date_create($item->pubDate);
                        $date = date_format($datetime, 'd M Y, H\hi');
                        $description = $item->description;
                        $descriptionText = explode('<br/>', $description); ?>
                        <?= '<div class="row border-top border-light news">
                                    <div class="col-2 p-0">
                                        <p class="squareTopic2 rounded m-2"></p>
                                    </div>
                                    <div class="col-10 p-0">
                                        <p>' . $item->title . '</p>
                                    </div>
                                </div>
                                <div class="row border-bottom border-light justify-content-around">
                                    <div class="col p-0 text-center">
                                        <button class="btn  btn-sm p-1" data-toggle="modal" data-target="#modalS2' .  $indexModal . '">Loupe</button>
                                    </div>
                                    <div class="col p-0 text-center">
                                        <a role="button" target="_blank" class="btn btn-sm p-1" href="' . $item->link . '">Lien vers l\'article</a>
                                    </div>
                                </div>
                                <br /> 
                                <!-- Modal Sujet 1 -->
                                <div class="modal fade" id="modalS2' . $indexModal . '" tabindex="-1" role="dialog" aria-labelledby="modalSujet1T1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p>' . $date . '</p>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <div class="row m-0 justify-content-center">
                                                    <h5 class="modal-title" id="exampleModalLabel">' . $item->title . '</h5>
                                                </div>
                                                <div class="row img-fluid m-0 justify-content-center">
                                                    <img src="' . $item->enclosure['url'] . '" width="400" />
                                                </div>
                                                <div class="row m-0 justify-content-center mt-2">
                                                    <P>' . $descriptionText[0] . '</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm" data-dismiss="modal">Fermer</button>
                                                <a class="btn btn-sm" href="' . $item->link . '" target="_blank">LIEN VERS ARTICLE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Sujet 1 -->' ?>
                    <?php $itemIndex++;
                        $indexModal++;
                        if ($itemIndex > $nbFlux) {
                            break;
                        };
                    }; ?>
                </div>
            </div>
            <!-- CARD SUJET 2 FIN -->
            <!-- CARD SUJET 3 DEBUT -->
            <div class="card cardColor mb-3 mx-3" style="max-width: 25rem;">
                <div class="card-header">Jeux</div>
                <div class="card-body">
                    <h5 class="card-title">Derniers articles</h5>
                    <?php
                    $url = 'https://www.01net.com/rss/actualites/jeux/'; /* insérer ici l'adresse du flux RSS de votre choix */
                    $rss = simplexml_load_file($url);
                    $indexModal = 1;
                    $itemIndex = 1;
                    foreach ($rss->channel->item as $item) {
                        $datetime = date_create($item->pubDate);
                        $date = date_format($datetime, 'd M Y, H\hi');
                        $description = $item->description;
                        $descriptionText = explode('<br/>', $description); ?>
                        <?= '<div class="row border-top border-light news">
                                    <div class="col-2 p-0">
                                        <p class="squareTopic3 rounded m-2"></p>
                                    </div>
                                    <div class="col-10 p-0">
                                        <p>' . $item->title . '</p>
                                    </div>
                                </div>
                                <div class="row border-bottom border-light justify-content-around">
                                    <div class="col p-0 text-center">
                                        <button class="btn btn-sm p-1" data-toggle="modal" data-target="#modalS3' .  $indexModal . '">Loupe</button>
                                    </div>
                                    <div class="col p-0 text-center">
                                        <a role="button" target="_blank" class="btn btn-sm p-1" href="' . $item->link . '">Lien vers l\'article</a>
                                    </div>
                                </div>
                                <br /> 
                                <!-- Modal Sujet 1 -->
                                <div class="modal fade" id="modalS3' . $indexModal . '" tabindex="-1" role="dialog" aria-labelledby="modalSujet1T1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p>' . $date . '</p>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <div class="row m-0 justify-content-center">
                                                    <h5 class="modal-title" id="exampleModalLabel">' . $item->title . '</h5>
                                                </div>
                                                <div class="row img-fluid m-0 justify-content-center">
                                                    <img src="' . $item->enclosure['url'] . '" width="400" />
                                                </div>
                                                <div class="row m-0 justify-content-center mt-2">
                                                    <P>' . $descriptionText[0] . '</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm" data-dismiss="modal">Fermer</button>
                                                <a class="btn btn-sm" href="' . $item->link . '" target="_blank">LIEN VERS ARTICLE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Sujet 1 -->' ?>
                    <?php $itemIndex++;
                        $indexModal++;
                        if ($itemIndex > $nbFlux) {
                            break;
                        };
                    }; ?>
                </div>
            </div>
            <!-- CARD SUJET 3 FIN -->
        </div>
        <!-- Scrollup début -->
        <div id="scrollUp">
            <a href="#top" class="scrollUpColor"><i class="far fa-caret-square-up"></i></a>
        </div>
        <!-- Scrollup fin -->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">
    </script>
    <script type="text/javascript" src="assets/script.js"></script>
    <script src="assets/to-top.js"></script>

</body>

</html>