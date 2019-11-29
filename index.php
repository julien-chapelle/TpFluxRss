<?php
$url = "https://www.01net.com/rss/actualites/applis-logiciels/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);
echo '<ul>';
// var_dump($rss);
$itemIndex = 1;
foreach ($rss->channel->item as $item) {
    // var_dump($item);
    $datetime = date_create($item->pubDate);
    $date = date_format($datetime, 'd M Y, H\hi');
    echo '<li><a href="' . $item->link . '">' . ($item->title) . ($item->description) . '</a> (' . $date . ')</li>';
    $itemIndex++;
    if ($itemIndex > 3) {
        break;
    };
};
echo '</ul>';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Projet Php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Flux RSS -->
    <link rel="alternate" type="application/rss+xml" href="https://www.01net.com/rss/actualites/applis-logiciels/" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />


</head>

<body>
    <div class="container-fluide m-0">
        <!-- Header début -->
        <div class="container-fluide">
            <header class="head row justify-content-end bg-dark m-0">

            </header>
        </div>
        <!-- Header Fin -->
        <!--NavBar début -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="index.php">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="far fa-caret-square-down"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/software.php">Sujet 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/security.php">Sujet 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/subject.php">Sujet 3</a>
                    </li>
                </ul>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link sizeFontUser" href="#" data-toggle="modal" data-target="#signIn"><i class="fas fa-cogs"></i> Paramètre</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--NavBar fin-->
        <!-- Body début-->
        <div class="container-fluid m-0">
            <div class="row d-flex text-left justify-content-around mt-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 25rem;">
                    <div class="card-header">Sujet 1</div>
                    <div class="card-body">
                        <h5 class="card-title">Articles récents</h5>
                        <div class="row border border-light">
                            <?php
                            $url = "https://www.01net.com/rss/actualites/applis-logiciels/"; /* insérer ici l'adresse du flux RSS de votre choix */
                            $rss = simplexml_load_file($url);
                            echo '<ul>';

                            foreach ($rss->channel->item as $item) {
                                $stop = 0;
                                $nbFlux = 3;
                                while ($stop < $nbFlux) {
                                    $datetime = date_create($item->pubDate);
                                    $date = date_format($datetime, 'd M Y, H\hi');
                                    echo '<li><a href="' . $item->link . '">' . utf8_decode($item->title) . '</a> (' . $date . ')</li>';
                                    $stop++;
                                };
                                break;
                            }
                            echo '</ul>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="card text-white bg-primary mb-3" style="max-width: 25rem;">
                    <div class="card-header">Sujet 2</div>
                    <div class="card-body">
                        <h5 class="card-title">Articles récents</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-primary mb-3" style="max-width: 25rem;">
                    <div class="card-header">Sujet 3</div>
                    <div class="card-body">
                        <h5 class="card-title">Articles récents</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Sujet 1 - Titre 1 -->
        <div class="modal fade" id="modalSujet1T1" tabindex="-1" role="dialog" aria-labelledby="modalSujet1T1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p>Thu, 28 Nov 2019 </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="row">
                            <h5 class="modal-title" id="exampleModalLabel">Twitter s’apprête à changer complètement le mode d’affichage des conversations</h5>
                        </div>
                        <div><img src="https://img.bfmtv.com/c/150/100/865/422853b4d0916a93d2ff196c37220.jpeg" /></div>
                        <P>Après plusieurs mois de test, le réseau social va modifier en profondeur la manière dont il affiche les réponses sous les tweets. Cette nouveauté sera déployée pour tous en 2020.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fermer</button>
                        <a class="btn btn-danger btn-sm" href="https://www.01net.com/actualites/twitter-s-apprete-a-changer-completement-le-mode-d-affichage-des-conversations-1814657.html" target="_blank">LIEN VERS ARTICLE</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Sujet 1 - Titre 1 -->

        <!-- Scrollup début -->
        <div id="scrollUp">
            <a href="#top" class="scrollUpColor"><i class="far fa-caret-square-up"></i></a>
        </div>
        <!-- Scrollup fin -->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">
    </script>
    <script type="text/javascript" src="assets/script.js"></script>
    <script src="assets/to-top.js"></script>
</body>

</html>